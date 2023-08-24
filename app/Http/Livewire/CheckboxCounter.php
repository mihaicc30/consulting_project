<?php

namespace App\Http\Livewire;

use App\Models\EzepostTracking;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class CheckboxCounter extends Component
{
    public $selectedCheckboxes = [];
    public $searchTerm = '';
    public $currentSegment = '';

    // Live wire component that fires when the the page is loaded
    public function mount()
    {
        $this->getCurrentSegment();
    }

    public function getCurrentSegment()
    {
        // Get the current URL and extract the last segment

        $url = request()->url();
        $segments = explode('/', $url);
        $this->currentSegment = end($segments);
        return end($segments);
    }

    public function render()
    {

        // Determine the current route name
        $route =  $this->currentSegment;
        $routeParts = explode('/', $route);
        $routeName = end($routeParts);

        // Convert the route name to the corresponding method name
        $methodName = str_replace('-', '', ucwords($routeName, '-'));
        $methodName = 'get' . $methodName;

        $getData = EzepostTracking::where('receiver_ezepost_addr', auth()->user()->ezepost_addr)->first();
        $getAllReceived = $getData ? $getData->$methodName(auth()->user()->ezepost_addr) : null;


        if ($this->searchTerm) {
            $getAllReceived = $getAllReceived->filter(function ($item) {
                return str_contains(strtolower($item['file_name']), strtolower($this->searchTerm));
            });
        }

        $selectedCount = count($this->selectedCheckboxes);

        return view('livewire.checkbox-counter', [
            'getAllReceived' => $getAllReceived,
            'checkedCount' => count($this->selectedCheckboxes),
            'selectedCount' => $selectedCount,
        ]);
    }

    public function toggleCheckbox($itemId)
    {

        if (in_array($itemId, $this->selectedCheckboxes)) {
            $this->selectedCheckboxes = array_diff($this->selectedCheckboxes, [$itemId]);
        } else {
            $this->selectedCheckboxes[] = $itemId;
        }
        // Store the selected checkboxes in the session.
        session(['selectedCheckboxes' => $this->selectedCheckboxes]);
    }

    protected function updatePreservedSelections()
    {
        // Fetch the received items data again using the same logic as in the render method.
        $getData = EzepostTracking::where('receiver_ezepost_addr', auth()->user()->ezepost_addr)->first();
        $getAllReceived = $getData ? $getData->getAllReceived(auth()->user()->ezepost_addr) : collect();

        // If the search term is not empty, filter the received items.
        if ($this->searchTerm) {
            $filteredItems = $getAllReceived->filter(function ($item) {
                return str_contains(strtolower($item['file_name']), strtolower($this->searchTerm));
            });

            // Update selectedCheckboxes to include the IDs of preserved selections from filtered items.
            $this->selectedCheckboxes = array_intersect($this->selectedCheckboxes, $filteredItems->pluck('id')->toArray());
        }
    }


    public function updatedSelectedCheckboxes()
    {

        // Fetch the received items data again using the same logic as in the render method.
        $getData = EzepostTracking::where('receiver_ezepost_addr', auth()->user()->ezepost_addr)->first();
        $getAllReceived = $getData ? $getData->getAllReceived(auth()->user()->ezepost_addr) : collect();

        // If the user unchecks a checkbox, remove it from the preserved selections.
        $this->selectedCheckboxes = array_intersect($this->selectedCheckboxes, $getAllReceived->pluck('id')->toArray());

        // If the search term is not empty, filter the received items.
        if ($this->searchTerm) {
            $filteredItems = $getAllReceived->filter(function ($item) {
                return str_contains(strtolower($item['file_name']), strtolower($this->searchTerm));
            });

            // Update selectedCheckboxes to include the IDs of preserved selections from filtered items.
            $this->selectedCheckboxes = array_intersect($this->selectedCheckboxes, $filteredItems->pluck('id')->toArray());
        }
    }

    public function hasExceededLimit()
    {
        return count($this->selectedCheckboxes) > 5;
    }
}

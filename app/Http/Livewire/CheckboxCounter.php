<?php

namespace App\Http\Livewire;

use App\Models\EzepostTracking;
use Livewire\Component;

class CheckboxCounter extends Component
{
    public $selectedCheckboxes = [];
    public $searchTerm = '';

    public function render()
    {
        $getData = EzepostTracking::where('receiver_ezepost_addr', auth()->user()->ezepost_addr)->first();
        $getAllReceived = $getData ? $getData->getHistoryReceived(auth()->user()->ezepost_addr) : null;

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
        // This method is called when the selected checkboxes change.
        // You can perform any necessary actions here to handle checkbox preservation.

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

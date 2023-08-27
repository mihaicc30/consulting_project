<div>
  @livewireStyles
  <div class="mb-4">
    <input type="text" wire:model.debounce.300ms="searchTerm" class="w-full p-2 mt-2 border rounded" placeholder="Search..." />
  </div>
  <div class="flex justify-center text-red-500 ">
    @if ($selectedCount === 5)
    You have reached the maximum number of receipts you can download at once.
    @endif
  </div>
  {{$this->hasExceededLimit()}}
  <div class="flex flex-col mt-4" id="receivedItems">
    @if (!$getAllReceived)
    <div> You did not receive any files yet.</div>
    @else

    @if($selectedCount > 1)
    <form action="{{ route('pdf.template') }}" method="POST" target="_blank" class="self-center mb-2">
      @csrf
      @foreach ($getAllReceived as $item)
      @if (in_array($item['id'], $selectedCheckboxes))
      <input type="hidden" name="items[]" value="{{ json_encode($item) }}">
      @endif
      @endforeach
      <button type="submit" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
        </svg>
        <span>Generate receipt for selected files</span>
      </button>
    </form>
    @endif
    @foreach ($getAllReceived as $item)
    <div class="flex items-center justify-between border p-2 mb-2" wire:key="{{ $item['id'] }}">
      <div class="w-10 text-center">
        <input type="checkbox" class="form-checkbox @if ($selectedCount >= 5 && !in_array($item['id'], $selectedCheckboxes)) opacity-50 cursor-not-allowed @endif" wire:click="toggleCheckbox('{{ $item['id'] }}')" @if (in_array($item['id'], $selectedCheckboxes)) checked @endif @if ($selectedCount>= 5 && !in_array($item['id'], $selectedCheckboxes)) disabled @endif
        />
      </div>
      <!-- File Info -->
      <div class="flex-grow border-l">
        <div class="flex items-center justify-between ml-2 received-item">
          <p class="font-semibold">
            {{ $item['file_name'] }}
          </p>
          <p class="text-sm"><strong>
              {{ $item['time_send_start'] }}</strong></p>
        </div>
        <div class="flex items-center mt-1 ml-2">
          <p class="text-xs text-gray-500">From: <strong>
              {{ $item['sender_displayname'] }}</strong></p>
          <p class="text-xs text-gray-500 ml-2">(
            {{ $item['sender_ezepost_addr'] }})
          </p>
          <p class="text-xs text-gray-500 ml-[50%]">File size: <strong>
              {{ $item['file_size_original'] }}</strong></p>

          <div class="flex md:flex md:flex-grow flex-row justify-end space-x-1">
            <div class="flex space-x-2">
              <!-- Print Icon SVG -->

              <a href="{{ route('pdf.view', ['item' => json_encode($item)]) }}" class="w-[30px] h-[30px]" target="_blank">
              @include('components.file-pdf')
              </a>
              <!-- Generate Icon SVG -->
              <form action="{{ route('pdf.generate', ['item' => json_encode($item)]) }}" method="POST" class="self-center mb-2 ">
                @csrf
                <button type="submit" class="w-[30px] h-[30px]">
                @include('components.dlsvg')
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    @endif
  </div>
  @livewireScripts
</div>
</div>
<div>
@livewireStyles
    <div class="mb-4">
        <input type="text" wire:model.debounce.300ms="searchTerm" class="w-full p-2 border rounded" placeholder="Search..." />
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
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                    <span>Generate receipt for selected files</span>
                </button>
            </form>
    @endif
        @foreach ($getAllReceived as $item)
            <div class="flex items-center justify-between border p-2 mb-2" wire:key="{{ $item['id'] }}">
                <div class="w-10 text-center">
       <input type="checkbox" class="form-checkbox @if ($selectedCount >= 5 && !in_array($item['id'], $selectedCheckboxes)) opacity-50 cursor-not-allowed @endif"
                   wire:click="toggleCheckbox('{{ $item['id'] }}')"
                   @if (in_array($item['id'], $selectedCheckboxes)) checked @endif
                   @if ($selectedCount >= 5 && !in_array($item['id'], $selectedCheckboxes)) disabled @endif
            />
                </div>
                <!-- File Info -->
                <div class="flex-grow border-l">
                    <div class="flex items-center justify-between ml-2 received-item">
                        <p class="font-semibold">{{ $item['file_name'] }}</p>
                        <p class="text-sm"><strong>{{ $item['time_send_start'] }}</strong></p>
                    </div>
                    <div class="flex items-center mt-1 ml-2">
                        <p class="text-xs text-gray-500">From: <strong>{{ $item['sender_displayname'] }}</strong></p>
                        <p class="text-xs text-gray-500 ml-2">({{ $item['sender_ezepost_addr'] }})</p>
                        <p class="text-xs text-gray-500 ml-[50%]">File size: <strong>{{ $item['file_size_original'] }}</strong></p>

                        <div class="flex md:flex md:flex-grow flex-row justify-end space-x-1">
                        <div class="flex space-x-2">
                            <!-- Print Icon SVG -->
                            {{-- @php
                            dd($item);
                            @endphp --}}
                             <a href="{{ route('pdf.view', ['item' => json_encode($item)]) }}" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                                </svg>
                            </a>
                            <!-- Generate Icon SVG -->
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                </svg>
                            </a>
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

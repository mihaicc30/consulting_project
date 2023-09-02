@extends ('layout')

@section('content')
<style>
  span[aria-current="page"]>span {
    background: #ffa50085;
  }

  .buttomOverlayRemove:hover::after {
    background: #ff000052;
    content: "X";
    position: absolute;
    height: 100%;
    width: 100%;
    inset: 0;
    z-index: 10;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
  }
</style>
<div class="flex flex-nowrap col-span-2 grow w-[100%]">
  @include('isAdmin.nav')
  <div class="grid grid-cols-1 grow" x-data="{ isModal: false }">

    <!-- Hero START -->
    <div class="relative flex flex-col h-100 overflow-hidden">
      <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
      <div class="overlay relative flex flex-col">
        <!-- Heading - START -->
        <div class="my-8 text-center">
          <h1 class="font-bold text-3xl">Admin Transfers</h1>
        </div>
        <!-- Heading - END -->
      </div>
    </div>
    <!-- Hero END -->


    <!-- Files - START -->
    <div class="flex flex-col py-6 border-2 border-[#e6e6e6] rounded-lg">

      <div class="widget col-span-2 flex flex-col ">


        <div class="tabContainer" x-data="{ page: 1  }">
          <!-- Receipts Tab Content - START -->
          <div class="accordion-content transition">
            <div class="relative flex flex-col flex-nowrap p-2">

              <!-- File Search - START -->
              <div class="relative flex flex-col justify-between navButton font-[600] mb-2">
                <p>Search {{$totalFiles}} File</p>
                <form method="GET" action="/admin/transfers?page=' + page" class="flex flex-col w-[100%]">
                  <div class="flex flex-nowrap w-[100%]">
                    <input type="text" name="query" class="rounded-l p-2 w-[100%] text-black border-[1px] border-black/30" placeholder="File" value="{{ request('query') }}">
                    <button type="submit" class="px-4 py-2 border-[1px] rounded-r border-black/30">Search</button>
                  </div>
                  <div class="grid grid-cols-6 w-[100%]">
                    <div className="relative col-span-1">
                      <span className="absolute -top-2 left-10 bg-white rounded-lg px-4">Date Sort</span>
                      <select type="text" name="filterDate" onchange="this.parentElement.parentElement.parentElement.submit()" class="rounded-l p-2 w-[90%] text-black border-[1px] border-black/30" placeholder="File" value="{{ request('query') }}">
                        <option value="asc" {{$filterDate === 'asc' ? "selected": ""}}> 🔼</option>
                        <option value="desc" {{$filterDate === 'desc' ? "selected": ""}}> 🔽</option>
                      </select>
                    </div>
                    <div className="relative w-[100%] flex  col-span-2">
                      <span className="absolute -top-2 left-10 bg-white rounded-lg px-4">Search by username</span>
                      <input
                        name="userFilter"
                        list="subcats"
                        type="text"
                        placeholder="Username"
                        value="{{ request('userFilter') }}"
                        className="p-2 text-lg border-y-2 border-y-black/30 font-bold shadow-lg rounded-xl w-[100%]"
                      />
                      <datalist id="subcats">
                        @foreach ($ezeusers as $usr)
                        <option value="{{$usr}}">{{$usr}}</option>
                        @endforeach
                     
                      </datalist>
                    </div>
                  </div>
                </form>
              </div>
              <!-- File Search - END -->

              <!-- Receipts - START -->
              <div class="flex flex-wrap transition-all gap-4 justify-center">
                @if ($transfers->isEmpty())
                <p>No transfers found.</p>
                @else
                @foreach ($transfers as $receipt)
                <!-- Receipt - START -->
                <div class="{{ $receipt->deleted_at !== null ? 'grayscale' : '' }} basis-[23%] p-2 flex flex-col max-w-[23%] shadow-xl rounded transition-all duration-500 hover:scale-[.98]">
                  <div class="grid grid-cols-1">
                    <div>

                      <p class="font-[600] truncate line-clamp-1" title="{{ $receipt['file_name'] }}">
                        📁
                        {{ $receipt['file_name'] }}
                      </p>
                      <span class="text-xs" title="{{ $receipt['file_size_original'] }}">
                        ☁
                        {{ $receipt['file_size_original'] }}</span>
                      <p class="text-xs">From:</p>
                      <p class="text-xs line-clamp-1 font-bold" title="{{ $receipt['sender_ezepost_addr'] }}">
                        {{ $receipt['sender_ezepost_addr'] }}
                      </p>
                      <p class="text-xs line-clamp-1" title="{{ $receipt['sender_displayname'] }}">
                        
                        <span>{{ $receipt['sender_displayname'] }} </span>
                        <span>({{ $receipt['sender_username'] }}) </span>
                      </p>
                      <p class="text-xs">To:</p>
                      <p class="text-xs line-clamp-1 font-bold" title="{{ $receipt['receiver_ezepost_addr'] }}">
                        {{ $receipt['receiver_ezepost_addr'] }}
                      </p>
                      <p class="text-xs line-clamp-1" title="{{ $receipt['receiver_displayname'] }}">
                        <span>{{ $receipt['receiver_displayname'] }} </span>
                        <span>({{ $receipt['receiver_username'] }})</span>
                      </p>
                      <p class="text-xs line-clamp-1" title="{{ $receipt['receiver_displayname'] }}">
                        📅
                        {{ $receipt['created_at'] }}
                      </p>
                    </div>

                  </div class="flex flex-nowrap">
                  <div class="flex flex-nowrap justify-end ">

                    <form method="POST" action="/admin/transfers/toggle" class="flex flex-nowrap items-center justify-center gap-4">
                      @csrf
                      <input type="hidden" name="transferid" value="{{$receipt['id']}}">
                      <button title="Block/Unblock Receipt">
                        <svg class="h-[50px] w-[50px]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" fill="#000000">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                            <style type="text/css">
                              .duotone_twee {
                                fill: #555D5E;
                              }

                              .duotone_een {
                                fill: #ff6600;
                              }
                            </style>
                            <g>
                              <path class="duotone_twee" d="M15,17v10.5c0,0.276,0.224,0.5,0.5,0.5h1c0.276,0,0.5-0.224,0.5-0.5V17H15z"></path>
                              <polygon class="duotone_een" points="18.485,4 22,7.515 22,12.485 18.485,16 13.515,16 10,12.485 10,7.515 13.515,4 "></polygon>
                            </g>
                          </g>
                        </svg>
                      </button>
                    </form>

                    <a title="Generate Receipt" class="w-[40px] h-[50px]" href="{{ route('pdf.view', ['item' => json_encode((int)$receipt['mpID'])]) }}" target="_blank">
                      @include('components.file-pdf')
                    </a>
                    <button title="Generate QR CODE" class="w-[40px] h-[50px]" @click="isModal = true" onclick="generate(`item={{ $receipt['mpID'] }}`)">@include('components.file-qr')</button>

                

                  </div>
                  @if ($receipt->deleted_at !== null)
                  <p class="text-xs text-center">-deleted by admin-</p>
                  @endif
                </div>
                <!-- Receipt - END -->
                @endforeach
                @endif
              </div>
              <!-- Pagination links -->
              <div class="mt-4 flex flex-col">
                {{ $transfers->appends(request()->query())->links() }}
              </div>
            </div>
            <!-- Receipts - END -->


          </div>
        </div>

        @include('components.admin-receipts-qrcode-modal')

      
        <script defer>
          const qrImage = document.querySelector("#qrimg");
          const downloadBtn = document.querySelector("#qrdownload");

          const getQrCodeUrl = (data) => `https://api.qrserver.com/v1/create-qr-code/?size=600x600&data=${encodeURIComponent(data)}`;

          const generate = (receiptID) => {
            console.log("receiptDATA:", `${window.location.host}/admin/pdf/view?${receiptID}`)
            const qrCodeUrl = getQrCodeUrl(`${window.location.host}/admin/pdf/view?${receiptID}`);
            qrImage.src = qrCodeUrl;
          }

          const download = async () => {
            try {
              const response = await fetch(qrImage.src);
              const blob = await response.blob();
              const dlLink = document.createElement("a");
              dlLink.href = URL.createObjectURL(blob);
              dlLink.download = "qrCode.jpg";
              dlLink.click();
            } catch (error) {
              console.error("Error occurred while downloading the QR code:", error);
              alert("Error occurred while downloading the QR code:", error)
            }
          };
          </script>
        <!-- Receipts Tab Content - END -->
      </div>


    </div>
    <!-- Files - END -->

  </div>
</div>
@endsection
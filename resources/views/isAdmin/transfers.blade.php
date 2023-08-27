@extends ('layout')

@section('content')

<span :class="{ 'hidden': !isActive }"></span>

<div :class="{ 'col-span-2': !isActive }" x-data="{ isModal: false }">

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
              <p>Search File</p>
              <form method="GET" action="/admin/transfers?page=' + page">
                <input type="text" name="query" class="rounded-l p-2 w-[90%] text-black border-[1px] border-black/30" placeholder="File" value="{{ request('query') }}">
                <button type="submit" class="px-4 py-2 border-[1px] rounded-r border-black/30">Search</button>
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
              <div class="basis-[23%] p-2 flex flex-col max-w-[23%] shadow-xl rounded transition-all duration-500 hover:scale-[.98]">
                <div class="grid grid-cols-1">
                  <div>
                    <p>From:</p>
                    <p class="text-xs line-clamp-1 font-bold" title="{{ $receipt['sender_ezepost_addr'] }}">
                      {{ $receipt['sender_ezepost_addr'] }}
                    </p>
                    <p class="text-xs line-clamp-1" title="{{ $receipt['sender_displayname'] }}">
                      {{ $receipt['sender_displayname'] }}
                    </p>
                    <p>To:</p>
                    <p class="text-xs line-clamp-1 font-bold" title="{{ $receipt['receiver_ezepost_addr'] }}">
                      {{ $receipt['receiver_ezepost_addr'] }}
                    </p>
                    <p class="text-xs line-clamp-1" title="{{ $receipt['receiver_displayname'] }}">
                      {{ $receipt['receiver_displayname'] }}
                    </p>
                  </div>
                  <span class="text-xs" title="{{ $receipt['file_size_original'] }}">
                    ☁
                    {{ $receipt['file_size_original'] }}</span>

                  <p class="text-xs truncate line-clamp-1" title="{{ $receipt['file_name'] }}">
                    📁
                    {{ $receipt['file_name'] }}
                  </p>


                </div class="flex flex-nowrap">
                <div class="flex flex-nowrap justify-end ">

                  <a  class="w-[40px] h-[50px]" href="{{ route('pdf.view', ['item' => json_encode($receipt)]) }}" target="_blank">
                    @include('components.file-pdf')
                  </a>
                  <button title="Generate QR CODE" class="w-[40px] h-[50px]" @click="isModal = !isModal" onclick="generate(`{{ route('pdf.view', ['item' => json_encode($receipt)]) }}`)">@include('components.file-qr')</button>
                </div>
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
          console.log("receiptDATA:", receiptID)
          const qrCodeUrl = getQrCodeUrl(`http://127.0.0.1:8000/admin/pdf/view?${receiptID}`);
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
@endsection
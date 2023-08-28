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
<span :class="{ 'hidden': !isActive }"></span>
<div class="grow" x-data="{ isModal: false }">

  <!-- Hero START -->
  <div class="relative flex flex-col h-100 overflow-hidden">
    <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
    <div class="overlay relative flex flex-col">
      <!-- Heading - START -->
      <div class="my-8 text-center">
        <h1 class="font-bold text-3xl">Sent files</h1>
      </div>
      <!-- Heading - END -->

    </div>
  </div>
  <!-- Hero END -->
  <div class="widget col-span-2 flex flex-col ">


    <div class="tabContainer" x-data="{ page: 1  }">
      <!-- Receipts Tab Content - START -->
      <div class="accordion-content transition">
        <div class="relative flex flex-col flex-nowrap p-2">

          <!-- File Search - START -->
          <div class="relative flex flex-col justify-between navButton font-[600] mb-2">
          <p>Search {{ $totalFiles }} Files</p>
          <form method="GET" action="/portal/sent?page=' + page" class="flex flex-col w-[100%]">
              <div class="flex flex-nowrap w-[100%]">
                <input type="text" name="query" class="rounded-l p-2 w-[100%] text-black border-[1px] border-black/30" placeholder="File" value="{{ request('query') }}">
                <button type="submit" class="px-4 py-2 border-[1px] rounded-r border-black/30">Search</button>
              </div>
              <div class="grid grid-cols-4">
                <select type="text" name="filterDate" onchange="this.parentElement.parentElement.submit()" class="rounded-l p-2 w-[90%] text-black border-[1px] border-black/30" placeholder="File" value="{{ request('query') }}">
                  <option value="asc" {{$filterDate === 'asc' ? "selected": ""}}>Date 🔼</option>
                  <option value="desc" {{$filterDate === 'desc' ? "selected": ""}}>Date 🔽</option>
                </select>
              </div>
            </form>
          </div>
          <!-- File Search - END -->

          <!-- Receipts - START -->
          <div class="flex flex-wrap transition-all gap-4 justify-center">
            @if ($files->isEmpty())
            <p>No transfers found.</p>
            @else
            @foreach ($files as $receipt)
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
                    {{ $receipt['sender_displayname'] }}
                  </p>
                  <p class="text-xs">To:</p>
                  <p class="text-xs line-clamp-1 font-bold" title="{{ $receipt['receiver_ezepost_addr'] }}">
                    {{ $receipt['receiver_ezepost_addr'] }}
                  </p>
                  <p class="text-xs line-clamp-1" title="{{ $receipt['receiver_displayname'] }}">
                    {{ $receipt['receiver_displayname'] }}
                  </p>
                  <p class="text-xs line-clamp-1" title="{{ $receipt['receiver_displayname'] }}">
                    📅
                    {{ $receipt['created_at'] }}
                  </p>


                </div>




              </div class="flex flex-nowrap">
              <div class="flex flex-nowrap justify-end ">
                <a title="Generate Receipt" class="w-[40px] h-[50px]" href="{{ route('pdff.view', ['item' => json_encode($receipt['id'])]) }}" target="_blank">
                  @include('components.file-pdf')
                </a>
                <button title="Generate QR CODE" class="w-[40px] h-[50px]" @click="isModal = !isModal" onclick="generate('item={{ $receipt['id'] }}')">@include('components.file-qr')</button>

                <button title="Add to Receipt Group Generator" class="w-[40px] h-[50px] flex relative" onclick="addItemTolocalStorage('{{ $receipt['id'] }}')">
                  <span class="absolute top-0 right-0 bg-white">➕</span>
                  @include('components.file-pdf')
                </button>

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
            {{ $files->appends(request()->query())->links() }}
          </div>
        </div>
        <!-- Receipts - END -->


      </div>
    </div>

    @include('components.admin-receipts-qrcode-modal')

    <!-- PDF GROUP GENERATOR Modal - START -->
    <form target="_blank" method="GET" action="{{ route('pdff.view') }}" class="receiptGeneratorContainer fixed text-center bottom-0 h-[40svh] bg-white z-50 transition  flex-col gap-4 items-center p-2 border-2 border-black" style="width:150px;" :style="'right:' + rightValue" x-data="{ rightValue: '-190px' }">
      <button type="button" class="absolute p-2 left-[-29px] top-[20px] bg-orange-300 rounded-l" @click="rightValue = (rightValue === '0px') ? '-190px' : '0px'">📎</button>
      <p class="text-center border-b-2 my-4 border-orange-300">Group Receipt Generator</p>
      <div id="receiptGenerator"></div>
      <button type="submit" id="receiptGeneratorBtn" title="Generate Receipt" class="px-4 py-2 rounded-lg bg-orange-300">
        Generate
      </button>

      <p class="max-w-[150px] text-center mx-auto text-xs">Max. 5 receipts can be generated at a time.</p>
    </form>
    <!-- PDF GROUP GENERATOR Modal - END -->
    <script defer>
      const qrImage = document.querySelector("#qrimg");
      const downloadBtn = document.querySelector("#qrdownload");

      const getQrCodeUrl = (data) => `https://api.qrserver.com/v1/create-qr-code/?size=600x600&data=${encodeURIComponent(data)}`;

      const generate = (receiptID) => {
        console.log("receiptDATA:", `${window.location.host}/portal/pdf/view?${receiptID}`)
        const qrCodeUrl = getQrCodeUrl(`${window.location.host}/portal/pdf/view?${receiptID}`);
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

      function displayItem() {
        // Retrieve the localStorage data
        var receiptGeneratorBtn = document.getElementById('receiptGeneratorBtn')
        var receiptGeneratorContainer = document.querySelector('.receiptGeneratorContainer')
        var pdfData = localStorage.getItem('pdf');
        var pdfItems = pdfData ? JSON.parse(pdfData) : [];
        if (pdfItems.length < 1) {
          receiptGeneratorContainer.style.right = "-190px"
          receiptGeneratorBtn.disabled = "true"
          document.getElementById('receiptGenerator').innerHTML = `<p class="my-4">Nothing to generate from.</p>`
        }
        if (pdfItems.length < 1) receiptGeneratorContainer.style.right = "0px";
        pdfItems.forEach((it, index) => {

          receiptGeneratorBtn.removeAttribute("disabled")
          if (index < 1) {
            document.getElementById('receiptGenerator').innerHTML =
              `
        <input type="hidden" name="item${it}" value="${it}"/>
        <button class="relative buttomOverlayRemove" onclick="removeItemFromlocalStorage('${it}');" >
        <svg style="height: 30px; width:30px;" version="1.1" id="_x35_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.2 -51.2 614.40 614.40" xml:space="preserve" width="64px" height="64px" fill="#000000">
      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
      <g id="SVGRepo_iconCarrier">
        <g>
          <polygon style="fill:#B12A27;" points="475.435,117.825 475.435,512 47.791,512 47.791,0.002 357.613,0.002 412.491,54.881 "></polygon>
          <rect x="36.565" y="34.295" style="fill:#F2F2F2;" width="205.097" height="91.768"></rect>
          <g>
            <g>
              <path style="fill:#B12A27;" d="M110.132,64.379c-0.905-2.186-2.111-4.146-3.769-5.804c-1.658-1.658-3.694-3.015-6.031-3.92 c-2.412-0.98-5.126-1.432-8.141-1.432H69.651v58.195h11.383V89.481h11.157c3.015,0,5.729-0.452,8.141-1.432 c2.337-0.905,4.372-2.261,6.031-3.92c1.659-1.658,2.865-3.543,3.769-5.804c0.829-2.186,1.282-4.523,1.282-6.935 C111.413,68.902,110.961,66.565,110.132,64.379z M97.844,77.118c-1.508,1.432-3.618,2.186-6.181,2.186H81.034V63.323h10.629 c2.563,0,4.674,0.754,6.181,2.261c1.432,1.432,2.186,3.392,2.186,5.804C100.031,73.726,99.277,75.686,97.844,77.118z"></path>
              <path style="fill:#B12A27;" d="M164.558,75.761c-0.075-2.035-0.151-3.844-0.377-5.503c-0.226-1.659-0.603-3.166-1.131-4.598 c-0.528-1.357-1.206-2.714-2.111-3.92c-2.035-2.94-4.523-5.126-7.312-6.483c-2.865-1.357-6.257-2.035-10.252-2.035h-20.956 v58.195h20.956c3.995,0,7.387-0.678,10.252-2.035c2.789-1.357,5.277-3.543,7.312-6.483c0.905-1.206,1.583-2.563,2.111-3.92 c0.528-1.432,0.905-2.94,1.131-4.598c0.226-1.658,0.301-3.468,0.377-5.503c0.075-1.96,0.075-4.146,0.075-6.558 C164.633,79.908,164.633,77.721,164.558,75.761z M153.175,88.2c0,1.734-0.151,3.091-0.302,4.297 c-0.151,1.131-0.377,2.186-0.678,2.94c-0.301,0.829-0.754,1.583-1.281,2.261c-1.885,2.412-4.749,3.543-8.518,3.543h-8.669V63.323 h8.669c3.769,0,6.634,1.206,8.518,3.618c0.528,0.678,0.98,1.357,1.281,2.186s0.528,1.809,0.678,3.015 c0.151,1.131,0.302,2.563,0.302,4.221c0.075,1.659,0.075,3.694,0.075,5.955C153.251,84.581,153.251,86.541,153.175,88.2z"></path>
              <path style="fill:#B12A27;" d="M213.18,63.323V53.222h-38.37v58.195h11.383V87.823h22.992V77.646h-22.992V63.323H213.18z"></path>
            </g>
            <g>
              <path style="fill:#B12A27;" d="M110.132,64.379c-0.905-2.186-2.111-4.146-3.769-5.804c-1.658-1.658-3.694-3.015-6.031-3.92 c-2.412-0.98-5.126-1.432-8.141-1.432H69.651v58.195h11.383V89.481h11.157c3.015,0,5.729-0.452,8.141-1.432 c2.337-0.905,4.372-2.261,6.031-3.92c1.659-1.658,2.865-3.543,3.769-5.804c0.829-2.186,1.282-4.523,1.282-6.935 C111.413,68.902,110.961,66.565,110.132,64.379z M97.844,77.118c-1.508,1.432-3.618,2.186-6.181,2.186H81.034V63.323h10.629 c2.563,0,4.674,0.754,6.181,2.261c1.432,1.432,2.186,3.392,2.186,5.804C100.031,73.726,99.277,75.686,97.844,77.118z"></path>
            </g>
          </g>
          <polygon style="opacity:0.08;fill:#040000;" points="475.435,117.825 475.435,512 47.791,512 47.791,419.581 247.705,219.667 259.54,207.832 266.098,201.273 277.029,190.343 289.995,177.377 412.491,54.881 "></polygon>
          <polygon style="fill:#771B1B;" points="475.435,117.836 357.599,117.836 357.599,0 "></polygon>
          <g>
            <path style="fill:#F2F2F2;" d="M414.376,370.658c-2.488-4.372-5.88-8.518-10.101-12.287c-3.467-3.166-7.538-6.106-12.137-8.82 c-18.544-10.93-45.003-16.207-80.961-16.207h-3.618c-1.96-1.809-3.995-3.618-6.106-5.503 c-13.644-12.287-24.499-25.63-32.942-40.48c16.584-36.561,24.499-69.126,23.519-96.867c-0.151-4.674-0.829-9.046-2.035-13.117 c-1.809-6.558-4.824-12.363-9.046-17.112c-0.075-0.075-0.075-0.075-0.151-0.151c-6.709-7.538-16.056-11.835-25.555-11.835 c-9.574,0-18.393,4.146-24.801,11.76c-6.332,7.538-9.724,17.866-9.875,30.002c-0.226,18.544,1.281,36.108,4.448,52.315 c0.301,1.282,0.528,2.563,0.829,3.844c3.166,14.7,7.84,28.645,13.87,41.611c-7.086,14.398-14.247,26.836-19.223,35.279 c-3.769,6.408-7.915,13.117-12.212,19.826c-19.373,3.468-35.807,7.689-50.129,12.966c-19.373,7.011-34.902,16.056-46.059,26.836 c-7.237,6.935-12.137,14.323-14.549,22.012c-2.563,7.915-2.412,15.83,0.452,22.916c2.638,6.558,7.387,12.061,13.72,15.83 c1.508,0.905,3.091,1.658,4.749,2.337c4.825,1.96,10.101,3.015,15.604,3.015c12.74,0,25.856-5.503,36.937-15.378 c20.655-18.469,41.988-48.169,54.577-66.94c10.327-1.583,21.559-2.94,34.224-4.297c14.926-1.508,28.118-2.412,40.104-2.865 c3.694,3.317,7.237,6.483,10.629,9.498c18.846,16.81,33.168,28.947,46.134,37.465c0,0.075,0.075,0.075,0.151,0.075 c5.126,3.392,10.026,6.181,14.926,8.443c5.503,2.563,11.081,3.92,16.81,3.92c7.237,0,14.021-2.186,19.675-6.181 c5.729-4.146,9.875-10.101,11.76-16.81C420.18,387.694,418.899,378.724,414.376,370.658z M247.705,219.667 c-1.055-9.348-1.508-19.072-1.357-29.324c0.151-9.724,3.694-16.283,8.895-16.283c3.92,0,8.066,3.543,9.95,10.327 c0.528,2.035,0.905,4.372,0.98,7.01c0.151,3.166,0.075,6.483-0.075,9.875c-0.452,9.574-2.111,19.75-4.975,30.681 c-1.734,7.011-3.995,14.323-6.784,21.936C251.173,243.186,248.911,231.803,247.705,219.667z M121.967,418.073 c-1.282-3.166,0.151-9.272,7.991-16.81c11.986-11.458,30.756-20.504,56.914-27.364c-4.975,6.784-9.875,12.966-14.624,18.619 c-7.237,8.744-14.172,16.132-20.429,21.71c-5.352,4.824-11.232,7.84-16.81,8.594c-0.98,0.151-1.96,0.226-2.94,0.226 C127.168,423.049,123.173,421.089,121.967,418.073z M242.428,337.942l0.528-0.829l-0.829,0.151 c0.151-0.377,0.377-0.754,0.603-1.055c3.166-5.352,7.161-12.212,11.458-20.127l0.377,0.829l0.98-2.035 c3.166,4.523,6.634,8.971,10.252,13.267c1.734,2.035,3.543,3.995,5.352,5.955l-1.206,0.075l1.055,0.98 c-3.091,0.226-6.332,0.528-9.574,0.829c-2.035,0.226-4.146,0.377-6.257,0.603C250.796,337.037,246.499,337.49,242.428,337.942z M369.297,384.98c-8.971-5.729-18.996-13.795-31.359-24.575c17.564,1.809,31.359,5.654,41.159,11.383 c4.297,2.488,7.538,5.051,9.724,7.538c3.618,3.844,4.9,7.312,4.221,9.649c-0.603,2.337-3.241,3.92-6.483,3.92 c-1.885,0-3.844-0.452-5.88-1.432c-3.468-1.658-7.086-3.694-10.93-6.181C369.598,385.282,369.448,385.131,369.297,384.98z"></path>
          </g>
        </g>
      </g>
    </svg>
    ${it}</button>
        `

          } else {
            document.getElementById('receiptGenerator').innerHTML +=
              `
        <input type="hidden" name="item${it}" value="${it}"/>
        <button class="relative buttomOverlayRemove" onclick="removeItemFromlocalStorage('${it}');" >
        <svg style="height: 30px; width:30px;" version="1.1" id="_x35_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.2 -51.2 614.40 614.40" xml:space="preserve" width="64px" height="64px" fill="#000000">
      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
      <g id="SVGRepo_iconCarrier">
        <g>
          <polygon style="fill:#B12A27;" points="475.435,117.825 475.435,512 47.791,512 47.791,0.002 357.613,0.002 412.491,54.881 "></polygon>
          <rect x="36.565" y="34.295" style="fill:#F2F2F2;" width="205.097" height="91.768"></rect>
          <g>
            <g>
              <path style="fill:#B12A27;" d="M110.132,64.379c-0.905-2.186-2.111-4.146-3.769-5.804c-1.658-1.658-3.694-3.015-6.031-3.92 c-2.412-0.98-5.126-1.432-8.141-1.432H69.651v58.195h11.383V89.481h11.157c3.015,0,5.729-0.452,8.141-1.432 c2.337-0.905,4.372-2.261,6.031-3.92c1.659-1.658,2.865-3.543,3.769-5.804c0.829-2.186,1.282-4.523,1.282-6.935 C111.413,68.902,110.961,66.565,110.132,64.379z M97.844,77.118c-1.508,1.432-3.618,2.186-6.181,2.186H81.034V63.323h10.629 c2.563,0,4.674,0.754,6.181,2.261c1.432,1.432,2.186,3.392,2.186,5.804C100.031,73.726,99.277,75.686,97.844,77.118z"></path>
              <path style="fill:#B12A27;" d="M164.558,75.761c-0.075-2.035-0.151-3.844-0.377-5.503c-0.226-1.659-0.603-3.166-1.131-4.598 c-0.528-1.357-1.206-2.714-2.111-3.92c-2.035-2.94-4.523-5.126-7.312-6.483c-2.865-1.357-6.257-2.035-10.252-2.035h-20.956 v58.195h20.956c3.995,0,7.387-0.678,10.252-2.035c2.789-1.357,5.277-3.543,7.312-6.483c0.905-1.206,1.583-2.563,2.111-3.92 c0.528-1.432,0.905-2.94,1.131-4.598c0.226-1.658,0.301-3.468,0.377-5.503c0.075-1.96,0.075-4.146,0.075-6.558 C164.633,79.908,164.633,77.721,164.558,75.761z M153.175,88.2c0,1.734-0.151,3.091-0.302,4.297 c-0.151,1.131-0.377,2.186-0.678,2.94c-0.301,0.829-0.754,1.583-1.281,2.261c-1.885,2.412-4.749,3.543-8.518,3.543h-8.669V63.323 h8.669c3.769,0,6.634,1.206,8.518,3.618c0.528,0.678,0.98,1.357,1.281,2.186s0.528,1.809,0.678,3.015 c0.151,1.131,0.302,2.563,0.302,4.221c0.075,1.659,0.075,3.694,0.075,5.955C153.251,84.581,153.251,86.541,153.175,88.2z"></path>
              <path style="fill:#B12A27;" d="M213.18,63.323V53.222h-38.37v58.195h11.383V87.823h22.992V77.646h-22.992V63.323H213.18z"></path>
            </g>
            <g>
              <path style="fill:#B12A27;" d="M110.132,64.379c-0.905-2.186-2.111-4.146-3.769-5.804c-1.658-1.658-3.694-3.015-6.031-3.92 c-2.412-0.98-5.126-1.432-8.141-1.432H69.651v58.195h11.383V89.481h11.157c3.015,0,5.729-0.452,8.141-1.432 c2.337-0.905,4.372-2.261,6.031-3.92c1.659-1.658,2.865-3.543,3.769-5.804c0.829-2.186,1.282-4.523,1.282-6.935 C111.413,68.902,110.961,66.565,110.132,64.379z M97.844,77.118c-1.508,1.432-3.618,2.186-6.181,2.186H81.034V63.323h10.629 c2.563,0,4.674,0.754,6.181,2.261c1.432,1.432,2.186,3.392,2.186,5.804C100.031,73.726,99.277,75.686,97.844,77.118z"></path>
            </g>
          </g>
          <polygon style="opacity:0.08;fill:#040000;" points="475.435,117.825 475.435,512 47.791,512 47.791,419.581 247.705,219.667 259.54,207.832 266.098,201.273 277.029,190.343 289.995,177.377 412.491,54.881 "></polygon>
          <polygon style="fill:#771B1B;" points="475.435,117.836 357.599,117.836 357.599,0 "></polygon>
          <g>
            <path style="fill:#F2F2F2;" d="M414.376,370.658c-2.488-4.372-5.88-8.518-10.101-12.287c-3.467-3.166-7.538-6.106-12.137-8.82 c-18.544-10.93-45.003-16.207-80.961-16.207h-3.618c-1.96-1.809-3.995-3.618-6.106-5.503 c-13.644-12.287-24.499-25.63-32.942-40.48c16.584-36.561,24.499-69.126,23.519-96.867c-0.151-4.674-0.829-9.046-2.035-13.117 c-1.809-6.558-4.824-12.363-9.046-17.112c-0.075-0.075-0.075-0.075-0.151-0.151c-6.709-7.538-16.056-11.835-25.555-11.835 c-9.574,0-18.393,4.146-24.801,11.76c-6.332,7.538-9.724,17.866-9.875,30.002c-0.226,18.544,1.281,36.108,4.448,52.315 c0.301,1.282,0.528,2.563,0.829,3.844c3.166,14.7,7.84,28.645,13.87,41.611c-7.086,14.398-14.247,26.836-19.223,35.279 c-3.769,6.408-7.915,13.117-12.212,19.826c-19.373,3.468-35.807,7.689-50.129,12.966c-19.373,7.011-34.902,16.056-46.059,26.836 c-7.237,6.935-12.137,14.323-14.549,22.012c-2.563,7.915-2.412,15.83,0.452,22.916c2.638,6.558,7.387,12.061,13.72,15.83 c1.508,0.905,3.091,1.658,4.749,2.337c4.825,1.96,10.101,3.015,15.604,3.015c12.74,0,25.856-5.503,36.937-15.378 c20.655-18.469,41.988-48.169,54.577-66.94c10.327-1.583,21.559-2.94,34.224-4.297c14.926-1.508,28.118-2.412,40.104-2.865 c3.694,3.317,7.237,6.483,10.629,9.498c18.846,16.81,33.168,28.947,46.134,37.465c0,0.075,0.075,0.075,0.151,0.075 c5.126,3.392,10.026,6.181,14.926,8.443c5.503,2.563,11.081,3.92,16.81,3.92c7.237,0,14.021-2.186,19.675-6.181 c5.729-4.146,9.875-10.101,11.76-16.81C420.18,387.694,418.899,378.724,414.376,370.658z M247.705,219.667 c-1.055-9.348-1.508-19.072-1.357-29.324c0.151-9.724,3.694-16.283,8.895-16.283c3.92,0,8.066,3.543,9.95,10.327 c0.528,2.035,0.905,4.372,0.98,7.01c0.151,3.166,0.075,6.483-0.075,9.875c-0.452,9.574-2.111,19.75-4.975,30.681 c-1.734,7.011-3.995,14.323-6.784,21.936C251.173,243.186,248.911,231.803,247.705,219.667z M121.967,418.073 c-1.282-3.166,0.151-9.272,7.991-16.81c11.986-11.458,30.756-20.504,56.914-27.364c-4.975,6.784-9.875,12.966-14.624,18.619 c-7.237,8.744-14.172,16.132-20.429,21.71c-5.352,4.824-11.232,7.84-16.81,8.594c-0.98,0.151-1.96,0.226-2.94,0.226 C127.168,423.049,123.173,421.089,121.967,418.073z M242.428,337.942l0.528-0.829l-0.829,0.151 c0.151-0.377,0.377-0.754,0.603-1.055c3.166-5.352,7.161-12.212,11.458-20.127l0.377,0.829l0.98-2.035 c3.166,4.523,6.634,8.971,10.252,13.267c1.734,2.035,3.543,3.995,5.352,5.955l-1.206,0.075l1.055,0.98 c-3.091,0.226-6.332,0.528-9.574,0.829c-2.035,0.226-4.146,0.377-6.257,0.603C250.796,337.037,246.499,337.49,242.428,337.942z M369.297,384.98c-8.971-5.729-18.996-13.795-31.359-24.575c17.564,1.809,31.359,5.654,41.159,11.383 c4.297,2.488,7.538,5.051,9.724,7.538c3.618,3.844,4.9,7.312,4.221,9.649c-0.603,2.337-3.241,3.92-6.483,3.92 c-1.885,0-3.844-0.452-5.88-1.432c-3.468-1.658-7.086-3.694-10.93-6.181C369.598,385.282,369.448,385.131,369.297,384.98z"></path>
          </g>
        </g>
      </g>
    </svg>
    ${it}</button>
        `
          }
        });

      }
      // Function to add an item to the localStorage list
      function addItemTolocalStorage(item) {

        let list = getlocalStorageList();
        if (!list.includes(item)) {
          if (list.length >= 5) {
            // list.shift(); // Remove the oldest item if the list is full
            alert("Max 5 files.")
          } else {
            list.push(item);
            localStorage.setItem('pdf', JSON.stringify(list));

          }
        }
        displayItem()
      }

      // Function to remove an item from the localStorage list
      function removeItemFromlocalStorage(item) {
        let list = getlocalStorageList();
        let index = list.indexOf(item);
        if (index !== -1) {
          list.splice(index, 1);
          localStorage.setItem('pdf', JSON.stringify(list));
        }
        displayItem()
      }

      // Function to get the localStorage list
      function getlocalStorageList() {
        displayItem()
        let list = localStorage.getItem('pdf');
        return list ? JSON.parse(list) : [];
      }
      // Function to check if a file ID exists in localStorage
      function isFileInlocalStorage(fileId) {
        displayItem()
        let list = getlocalStorageList();
        return list.includes(fileId);
      }
      displayItem();
    </script>
    <!-- Receipts Tab Content - END -->
  </div>

  @endsection
@extends ('layout')

@section('content')
<div class="grow">
  <!-- Hero START -->
  <div class="relative flex flex-col h-100 overflow-hidden">
    <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
    <div class="overlay relative flex flex-col">
      <!-- Heading - START -->
      <div class="my-8 text-center">
        <h1 class="font-bold text-3xl">Dashboard</h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->

  <!-- Dashboard - START -->
  <div class="grid grid-cols-5 max-[1500px]:grid-cols-4 max-[1100px]:grid-cols-3 max-[800px]:grid-cols-2 grid-rows-auto py-6 gap-2">


    <!-- Widget Start total sent/received-->
    <div class="widget col-span-1 max-md:col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg">
      <p class="text-lg font-[600] text-center py-2 my-1 border-b-2">{{$packages['totalPackages']}} Total Files</p>
      <div class="flex flex-col justify-evenly gap-4">
        <!--  -->
        <div class="grid grid-cols-2">
          <div class="flex flex-nowrap overflow-hidden max-h-[60px] max-w-[100px]">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1.5" stroke="orange" class="w-[100%] h-[100%]">
         <path stroke-linecap="round" stroke-linejoin="round" d="M15 15l6-6m0 0l-6-6m6 6H9a6 6 0 000 12h3" />
       </svg>
          </div>
          <div class="flex flex-col overflow-hidden max-h-[100px] max-w-[100px] justify-center items-center">
            <p class="text-xl text-center line-clamp-1">{{$packages['received']}}</p>
            <p class="text-sm text-center line-clamp-1 font-bold">Received</p>
          </div>
        </div>
        <!--  -->
        <div class="grid grid-cols-2">
          <div class="flex flex-nowrap overflow-hidden max-h-[60px] max-w-[100px]">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1.5" stroke="orange" class="w-[100%] h-[100%]">
         <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
       </svg>
          </div>
          <div class="flex flex-col overflow-hidden max-h-[100px] max-w-[100px] justify-center items-center">
            <p class="text-xl text-center line-clamp-1">{{$packages['viewed']}}</p>
            <p class="text-sm text-center line-clamp-1 font-bold">Viewed</p>
          </div>
        </div>
        <!--  -->
        <div class="grid grid-cols-2">
          <div class="flex flex-nowrap overflow-hidden max-h-[60px] max-w-[100px]">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1.5" stroke="orange" class="w-[100%] h-[100%]">
         <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
       </svg>
          </div>
          <div class="flex flex-col overflow-hidden max-h-[100px] max-w-[100px] justify-center items-center">
            <p class="text-xl text-center line-clamp-1">{{$packages['sent']}}</p>
            <p class="text-sm text-center line-clamp-1 font-bold">Sent</p>
          </div>
        </div>
        <!--  -->
      </div>
      <!-- Widget END -->
    </div>


   
    <!-- Widget Start last 3 transfers to/from user-->
    <div class="widget col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg" x-data="{ isReceiving: false, isSending: true}">
      <p class="text-lg font-[600] text-center py-2 my-1 border-b-2">Recent Transmisions</p>
      <!--  -->
      <div class="flex flex-nowrap justify-evenly text-xs">
        <!-- Last 3 Transmisions - START -->
        <div class="w-[100%] px-2">
          @if (!empty($recentTrans))
          @foreach ($recentTrans as $entry)
          <!-- Transmisions -->
          <div class="accordion-item flex text-start justify-between w-[90%] max-w-[800px] min-w-[240px] transition mx-auto my-1 py-2">
            <div class="flex flex-items-center flex-col flex-nowrap justify-evenly w-[100%] ">
              <span class="text-center">📁{{ $entry->file_name }}</span>
              <div class="flex flex-nowrap w-[100%] justify-center items-center">
                <span>{{ $entry->sender_displayname }}</span>
                @if ($entry->receiver_ezepost_addr !== Auth::user()->ezepost_addr)
                <span class="text-xl px-4">&#x003E;&#x003E;</span>
                @else
                <div class="flex rotate-180">
                  <span class="text-xl px-4">&#x003E;&#x003E;</span>
                </div>
                @endif
                <span class="flex flex-col">{{ $entry->receiver_displayname  }}</span>
              </div>
              <span class="text-center text-[10px]">📅{{ $entry->created_at }}</span>
            </div>

          </div>
          @endforeach
          @else
          <p class="text-center text-lg">No files found.</p>
          @endif
        </div>
        <!-- Last Transmisions - END -->
      </div>
    </div>
    <!-- Widget END -->


    @if(substr(Auth::user()->controlstring, 2, 1) === '0')
    <!-- Widget Start current plan / if tokens also show 2nd widget with how many tokens-->
    <div class="widget col-span-1 max-[500px]:col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg" x-data="{ isReceiving: false, isSending: true}">
      <p class="text-lg font-[600] text-center py-2 my-1 border-b-2">Subscription</p>
      <!-- if token  -->
      <div class="flex flex-col items-center justify-center my-auto">
        @include('components.token')
        <p class="text-center font-bold">Top-Up</p>
        <div class="flex justify-evenly flex-col w-[100%] items-center">
          <p class="text-center">Tokens: <span>
              {{ $balance }}</span></p>
        </div>
      </div>
      <!-- if "proper" plan -->

    </div>
    <!-- Widget END -->
    @else
    <!-- Widget Start current plan / if tokens also show 2nd widget with how many tokens-->
    <div class="widget col-span-1 max-[500px]:col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg" x-data="{ isReceiving: false, isSending: true}">
      <p class="text-lg font-[600] text-center py-2 my-1 border-b-2">Subscription</p>
      <!-- if token  -->

      <!-- if "proper" plan -->
      <div class="flex flex-col items-center justify-center my-auto">
        @include('components.rank', ['cs' => substr(Auth::user()->controlstring, 1, 2)])
        <p class="text-center font-bold">@include('components.rankname')</p>
        <div class="flex justify-evenly flex-col w-[100%] items-center">
          <p class="text-center">to check if subscription expires or is auto renewal</p>
          <p class="text-center">Expiry: <span>25/06/2023</span></p>
          <p class="text-center">Renewal: <span>25/07/23</span></p>
        </div>
      </div>
    </div>
    <!-- Widget END -->
    @endif

  </div>
  <!-- Dashboard - END -->

  @endsection
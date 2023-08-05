@extends ('layout')

@section('content')
<span :class="{ 'hidden': !isActive }"></span>
<div :class="{ 'col-span-2': !isActive }">
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

    @if(substr(Auth::user()->controlstring, 2, 1) === '0')
    <!-- Widget Start current plan / if tokens also show 2nd widget with how many tokens-->
    <div class="widget col-span-1 max-[500px]:col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg" x-data="{ isReceiving: false, isSending: true}">
      <p class="text-center my-2">Subscription</p>
      <!-- if token  -->
      <div class="flex flex-col items-center justify-center">
        @include('components.token')
        <p class="text-center font-bold">Top-Up</p>
        <div class="flex justify-evenly flex-col w-[100%] items-center">
          <p class="text-center">Tokens: <span>{{ substr(Auth::user()->controlstring, 7, 1) }}</span></p>
        </div>
      </div>
      <!-- if "proper" plan -->

    </div>
    <!-- Widget END -->
    @else
    <!-- Widget Start current plan / if tokens also show 2nd widget with how many tokens-->
    <div class="widget col-span-1 max-[500px]:col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg" x-data="{ isReceiving: false, isSending: true}">
      <p class="text-center my-2">Subscription</p>
      <!-- if token  -->

      <!-- if "proper" plan -->
      <div class="flex flex-col items-center justify-center">
        @include('components.rank', ['cs' => '03'])
        <p class="text-center font-bold">@include('components.rankname')</p>
        <div class="flex justify-evenly flex-col w-[100%] items-center">
          <p class="text-center">Start Period <span>25/06/2023</span></p>
          <p class="text-center">End Period: <span>25/07/23</span></p>
        </div>
      </div>
    </div>
    <!-- Widget END -->
    @endif



    <!-- Widget Start transfers in progres  up/down-->
    <div class="widget col-span-1 max-[500px]:col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg" x-data="{ isReceiving: false, isSending: true}">
      <p class="text-center my-2">Active Transmissions</p>
      <!--  -->
      <div class="flex flex-nowrap justify-evenly">
        <div class="flex flex-col p-1 items-center">
          <p class="text-center text-sm font-bold">Receiving</p>
          <div class="flex flex-nowrap overflow-hidden w-[50px] h-[50px]" :class="{ 'grayscale': !isReceiving }">
            <svg class="" :class="{ 'animate-infiniteLoop': isReceiving }" width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 5.70711C13.0976 5.31658 13.0976 4.68342 12.7071 4.29289C12.3166 3.90237 11.6834 3.90237 11.2929 4.29289L4.29289 11.2929C4.10536 11.4804 4 11.7348 4 12C4 12.2652 4.10536 12.5196 4.29289 12.7071L11.2929 19.7071C11.6834 20.0976 12.3166 20.0976 12.7071 19.7071C13.0976 19.3166 13.0976 18.6834 12.7071 18.2929L6.41421 12L12.7071 5.70711ZM19.7071 5.70711C20.0976 5.31658 20.0976 4.68342 19.7071 4.29289C19.3166 3.90237 18.6834 3.90237 18.2929 4.29289L11.2929 11.2929C11.1054 11.4804 11 11.7348 11 12C11 12.2652 11.1054 12.5196 11.2929 12.7071L18.2929 19.7071C18.6834 20.0976 19.3166 20.0976 19.7071 19.7071C20.0976 19.3166 20.0976 18.6834 19.7071 18.2929L13.4142 12L19.7071 5.70711Z" fill="#FFC44D"></path>
              </g>
            </svg>
          </div>
          <div>
            <p class="text-xs text-center pb-2" x-show="isSending">In Progress: {{ $inProgressCount }}</p>
          </div>
        </div>
        <!--  -->
        <div class="flex flex-col p-1 items-center">
          <p class="text-center text-sm font-bold">Sending</p>
          <div class="flex flex-nowrap overflow-hidden w-[50px] h-[50px]" :class="{ 'grayscale': !isSending }">
            <svg class="animate-infiniteLoop" :class="{ 'animate-infiniteLoop': isSending }" width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.70711 4.29289C5.31658 3.90237 4.68342 3.90237 4.29289 4.29289C3.90237 4.68342 3.90237 5.31658 4.29289 5.70711L10.5858 12L4.29289 18.2929C3.90237 18.6834 3.90237 19.3166 4.29289 19.7071C4.68342 20.0976 5.31658 20.0976 5.70711 19.7071L12.7071 12.7071C13.0976 12.3166 13.0976 11.6834 12.7071 11.2929L5.70711 4.29289ZM12.7071 4.29289C12.3166 3.90237 11.6834 3.90237 11.2929 4.29289C10.9024 4.68342 10.9024 5.31658 11.2929 5.70711L17.5858 12L11.2929 18.2929C10.9024 18.6834 10.9024 19.3166 11.2929 19.7071C11.6834 20.0976 12.3166 20.0976 12.7071 19.7071L19.7071 12.7071C20.0976 12.3166 20.0976 11.6834 19.7071 11.2929L12.7071 4.29289Z" fill="#FFC44D"></path>
              </g>
            </svg>
          </div>
          <p class="text-xs text-center pb-2" x-show="isSending"> In Progress: {{ $sendingCount }}</p>
        </div>
      </div>
      <!--  -->
    </div>
    <!-- Widget END -->


    <!-- Widget Start file transmision report   sent/received/failed-->
    <div class="widget col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg" x-data="{ isReceiving: false, isSending: true}">
      <p class="text-center my-2">Transmisions</p>
      <!--  -->
      <div class="flex flex-nowrap justify-evenly pb-2">
        <!-- Contact Card - START-->
        <div class="flex flex-col">
          <span class="mx-auto">@include('components.dlstatus1')</span>
          <p class="text-sm text-center line-clamp-1 font-bold">Succes</p>
          <p class="text-xl text-center line-clamp-1">{{ $successfulCount }}</p>
        </div>
        <!-- Contact Card - END-->
        <!-- Contact Card - START-->
        <div class="flex flex-col">
          <span class="mx-auto">@include('components.dlstatus2')</span>
          <p class="text-sm text-center line-clamp-1 font-bold">In Progress</p>
          <p class="text-xl text-center line-clamp-1">{{ $yourInProgressCount }}</p>
        </div>
        <!-- Contact Card - END-->
        <!-- Contact Card - START-->
        <div class="flex flex-col">
          <span class="mx-auto">@include('components.dlstatus3')</span>
          <p class="text-sm text-center line-clamp-1 font-bold">Failed</p>
          <p class="text-xl text-center line-clamp-1">{{ $failedCount }}</p>

        </div>
        <!-- Contact Card - END-->
      </div>
      <!--  -->
    </div>
    <!-- Widget END -->

    <!-- Widget Start last 3 transfers to/from user-->
    <div class="widget col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg" x-data="{ isReceiving: false, isSending: true}">
      <p class="text-center my-2">Recent Transmisions</p>
      <!--  -->
      <div class="flex flex-nowrap justify-evenly text-xs">
        <!-- Last 3 Transmisions - START -->
        <div class="w-[100%] px-2" x-data="{ isActive: null }">
        @if (!empty($getLastThreeFiles))
          @foreach ($getLastThreeFiles as $entry)
          <!-- Transmisions -->
          <div class="accordion-item cursor-pointer flex transition text-start justify-between w-[90%] max-w-[800px] min-w-[240px] transition mx-auto my-1 py-2">
            <div class="flex flex-items-center flex-nowrap justify-evenly w-[100%] max-[500px]:flex-col">
              <span>
                <p>{{ $entry->sender_vepost_addr }}</p>
              </span>
              <span class="animate-infiniteLoop"> >>> </span> <!-- if receiving ">>" else "<<" -->
              <span>
                <p>{{ $entry->receiver_vepost_addr }} </p>
              </span>
            </div>
            <a href="{{$entry->presigned_url}}" download target="_blank">
              <svg class="transition" width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <rect width="24" height="24" fill="white"></rect>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM13 8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8L11 13.5858L9.70711 12.2929C9.31658 11.9024 8.68342 11.9024 8.29289 12.2929C7.90237 12.6834 7.90237 13.3166 8.29289 13.7071L11.2059 16.6201C11.2209 16.6351 11.2363 16.6497 11.252 16.6637C11.4352 16.87 11.7024 17 12 17C12.2976 17 12.5648 16.87 12.748 16.6637C12.7637 16.6497 12.7791 16.6351 12.7941 16.6201L15.7071 13.7071C16.0976 13.3166 16.0976 12.6834 15.7071 12.2929C15.3166 11.9024 14.6834 11.9024 14.2929 12.2929L13 13.5858L13 8Z" fill="#ffae00"></path>
                </g>
              </svg>
            </a>
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


    <!-- Widget Start total sent/received-->
    <div class="widget col-span-1 max-[500px]:col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg">
      <p class="text-center my-2">Files</p>
      <div class="flex flex-nowrap justify-evenly">
        <div class="flex flex-col p-1 items-center">
          <p class="text-center text-sm font-bold">Received</p>
          <div class="flex flex-nowrap overflow-hidden max-h-[100px] max-w-[100px]">
            @include('components.receivedfile')
          </div>
          <p class="text-xl font-bold text-center pb-2">{{ $getAllReceived }}</p>
        </div>
        <!--  -->
        <div class="flex flex-col p-1 items-center">
          <p class="text-center text-sm font-bold">Sent</p>
          <div class="flex flex-nowrap overflow-hidden max-h-[100px] max-w-[100px]">
            @include('components.sentfile')
          </div>
          <p class="text-xl font-bold text-center pb-2">{{ $getAllSent }}</p>
        </div>
      </div>
      <!--  -->
    </div>
    <!-- Widget END -->


    <!-- Widget Start last 3 added contacts -->
    <div class="widget col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg" x-data="{ isReceiving: false, isSending: true}">
      <p class="text-center my-2">Recent Contacts</p>

      <div class="flex justify-center items-center"> <!-- Added classes -->
        @if(session()->has('success'))
        <div class="flex justify-between items-center p-4 my-2 bg-[#51ee5170] animate-fadeIN max-w-[90%]">
          <p>{{ session('success') }}</p>
          <button onclick="this.parentElement.remove()">@include('components.closebutton')</button>
        </div>
        @endif
      </div> <!-- End of centering div -->


      <div class="flex flex-wrap justify-evenly pb-2">
      @if (!empty($sortedContacts))
        @foreach ($sortedContacts as $username => $contactData)
        <!-- Contact Card - START -->
        <div class="flex flex-col basis-1/3 max-w-[200px]">
          <span class="mx-auto relative">
            <span class="block h-[50px] w-[50px]">@include('components.usersvg')</span>
            <span class="absolute top-0 right-0" title="Business Premium">@include('components.rank', ['cs' => '03'])</span>
          </span>
          <p class="text-sm text-center line-clamp-1 font-bold" title="{{ $username }}">{{ $username }}</p>
          <p class="text-xs text-center line-clamp-1" title="{{ $contactData['email'] }}">{{ $contactData['email'] }}</p>
          <div class="flex flex-nowrap items-center justify-center gap-4">
            <a href="{{ route('files', ['email' => $contactData['email'], 'name' => $username]) }}">
              <button>@include('components.sendfilesvg')</button>
            </a>
            <a href="mailto:{{$contactData['email']}}?subject=Query&amp;body=Your message...">
              <button>@include('components.emailsvg')</button>
            </a>
            <form>
              @csrf
              <button formmethod="post" formaction="/portal/contact/{{$contactData['email']}}/delete" title="Delete Contact">@include('components.deleteusersvg')</button>
            </form>
          </div>
        </div>
        <!-- Contact Card - END -->
        @endforeach
        @else
        <p class="text-center text-lg">You have no contacts yet.</p>
        @endif
      </div>
    </div>
    <!-- Widget END -->


  </div>
  <!-- Dashboard - END -->


  @endsection
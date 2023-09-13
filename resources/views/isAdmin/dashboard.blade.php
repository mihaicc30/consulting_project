@extends ('layout')

@section('content')

<div class="flex flex-nowrap col-span-2 grow">
  @include('isAdmin.nav')
  <div class="grid grid-cols-1 grow">
    <!-- Hero START -->
    <div class="relative flex flex-col h-100 overflow-hidden">
      <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
      <div class="overlay relative flex flex-col">
        <!-- Heading - START -->
        <div class="my-8 text-center">
          <h1 class="font-bold text-3xl">Admin Dashboard</h1>
        </div>
        <!-- Heading - END -->
      </div>
    </div>
    <!-- Hero END -->

    <!-- Dashboard - START -->
    <div class="grid grid-cols-4 max-[1100px]:grid-cols-3 max-[800px]:grid-cols-2 grid-rows-auto py-6 gap-2">

      <!-- Widget Start file transfer server status - START-->
      <div class="widget col-span-1 max-[500px]:col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg" x-data="{isOnline: true}">
        <p class="text-center my-2">Server Status</p>
        <!--  -->
        <div class="flex flex-nowrap flex-col justify-center grow">
          <div class="flex flex-col p-1 items-center justify-center">
            <p class="text-center text-sm font-bold" x-show="isOnline">Online</p>
            <p class="text-center text-sm font-bold" x-show="!isOnline">Offline</p>
            <span class="block rounded-full bg-green-500 h-[50px] w-[50px] shadow-[10px_10px_20px_#bebebe,-10px_-10px_20px_#fffff] p-2" x-show="isOnline"></span>
            <span class="block rounded-full bg-red-500 h-[50px] w-[50px] shadow-[10px_10px_20px_#bebebe,-10px_-10px_20px_#fffff] p-2" x-show="!isOnline"></span>
          </div>

        </div>
        <!--  -->
      </div>
      <!-- Widget Start file transfer server status - END-->


      <!-- Widget Start file transfer server status - START-->
      <div class="widget col-span-1 max-[500px]:col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg" x-data="{isOnline: true}">
        <p class="text-center my-2">Server Status</p>
        <!--  -->
        <div class="flex flex-nowrap flex-col p-1 gap-4 items-center justify-center" x-data="{isMaintenance: false, isServer: true, isFileServer: true}">

          <div class="w-[100%] flex justify-between items-center gap-2 text-xs font-[600] p-2 border-2 border-white whitespace-nowrap rounded shadow-md text-center" @click="isServer = !isServer" :class="{'fill-[#b7b7b7] shadow-[#b7b7b7]': !isServer, 'fill-[#14ed08] shadow-[#14ed08]': isServer}">
            <div class="checkmark relative flex justify-center items-center h-[30px] w-[30px] rounded-full bg-[--c2] transition shadow-xl" :class="{'fill-[#b7b7b7] shadow-[#b7b7b7]': !isServer, 'fill-[#14ed08]': isServer}">
              <svg class="mx-auto transition" :class="{'fill-[#b7b7b7]': !isServer, 'fill-[#14ed08]': isServer}" width="20px" height="20px" viewBox="-1.92 -1.92 35.84 35.84" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#acacac">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <title>switch1</title>
                  <path d="M15.5 31.062c-6.904 0-12.5-5.597-12.5-12.5 0-5.315 3.323-9.844 8-11.651v4.449c-2.399 1.503-4 4.162-4 7.202 0 4.694 3.806 8.5 8.5 8.5s8.5-3.806 8.5-8.5c0-2.596-1.166-4.915-3-6.475v-4.736c4.143 2.036 7 6.284 7 11.212 0 6.903-5.597 12.499-12.5 12.499zM16 17.062c-1.104 0-2-0.896-2-2v-11.124c0-1.104 0.896-2 2-2s2 0.896 2 2v11.125c0 1.104-0.896 1.999-2 1.999z"></path>
                </g>
              </svg>
            </div>
            <p>
              Toggle Web Server
            </p>
          </div>

          <div class="w-[100%] flex justify-between items-center gap-2 text-xs font-[600] p-2 border-2 border-white whitespace-nowrap rounded shadow-md text-center" @click="isFileServer = !isFileServer" :class="{'fill-[#b7b7b7] shadow-[#b7b7b7]': !isFileServer, 'fill-[#14ed08] shadow-[#14ed08]': isFileServer}">
            <div class="checkmark relative flex justify-center items-center h-[30px] w-[30px] rounded-full bg-[--c2] transition shadow-xl" :class="{'fill-[#b7b7b7] shadow-[#b7b7b7]': !isFileServer, 'fill-[#14ed08]': isFileServer}">
              <svg class="mx-auto transition" :class="{'fill-[#b7b7b7]': !isFileServer, 'fill-[#14ed08]': isFileServer}" width="20px" height="20px" viewBox="-1.92 -1.92 35.84 35.84" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#acacac">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <title>switch1</title>
                  <path d="M15.5 31.062c-6.904 0-12.5-5.597-12.5-12.5 0-5.315 3.323-9.844 8-11.651v4.449c-2.399 1.503-4 4.162-4 7.202 0 4.694 3.806 8.5 8.5 8.5s8.5-3.806 8.5-8.5c0-2.596-1.166-4.915-3-6.475v-4.736c4.143 2.036 7 6.284 7 11.212 0 6.903-5.597 12.499-12.5 12.499zM16 17.062c-1.104 0-2-0.896-2-2v-11.124c0-1.104 0.896-2 2-2s2 0.896 2 2v11.125c0 1.104-0.896 1.999-2 1.999z"></path>
                </g>
              </svg>
            </div>
            <p>
              Toggle File Transfer Server
            </p>
          </div>

          <div class="w-[100%] flex justify-between items-center gap-2 text-xs font-[600] p-2 border-2 border-white whitespace-nowrap rounded shadow-md text-center" @click="isMaintenance = !isMaintenance" :class="{'fill-[#b7b7b7] shadow-[#b7b7b7]': !isMaintenance, 'fill-[#14ed08] shadow-[#14ed08]': isMaintenance}">
            <div class="checkmark relative flex justify-center items-center h-[30px] w-[30px] rounded-full bg-[--c2] transition shadow-xl" :class="{'fill-[#b7b7b7] shadow-[#b7b7b7]': !isMaintenance, 'fill-[#14ed08]': isMaintenance}">
              <svg class="mx-auto transition" :class="{'fill-[#b7b7b7]': !isMaintenance, 'fill-[#14ed08]': isMaintenance}" width="20px" height="20px" viewBox="-1.92 -1.92 35.84 35.84" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#acacac">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <title>switch1</title>
                  <path d="M15.5 31.062c-6.904 0-12.5-5.597-12.5-12.5 0-5.315 3.323-9.844 8-11.651v4.449c-2.399 1.503-4 4.162-4 7.202 0 4.694 3.806 8.5 8.5 8.5s8.5-3.806 8.5-8.5c0-2.596-1.166-4.915-3-6.475v-4.736c4.143 2.036 7 6.284 7 11.212 0 6.903-5.597 12.499-12.5 12.499zM16 17.062c-1.104 0-2-0.896-2-2v-11.124c0-1.104 0.896-2 2-2s2 0.896 2 2v11.125c0 1.104-0.896 1.999-2 1.999z"></path>
                </g>
              </svg>
            </div>
            <p>
              Toggle Web Maintenance
            </p>
          </div>



        </div>
        <!--  -->
      </div>
      <!-- Widget Start file transfer server status - END-->

      <!-- Widget Start stats about users - START-->
      <div class="widget grid col-span-1 max-[500px]:col-span-2 border-2 border-[#e6e6e6] rounded-lg" x-data="{ isReciving: false, isSending: true}">
        <span class="col-span-2 mx-auto mt-2 h-[50px] w-[50px] block">@include('components.usersvg')</span>
        <p class="text-center col-span-2 font-bold">
          {{ array_sum($userCount) }} Total users
        </p>

        <p class="text-center my-2 col-span-2 border-b-2"></p>
        <!--  -->
        <div class="grid col-span-1 justify-center">
          <div class="grid ">
            <p class="font-bold text-center">Personal</p>
            <div>
              <div>
                <span class="font-bold">{{$userCount["00"]}}</span>
                <span class="text-center font-bold h-[20px] w-[20px] inline-block">@include('components.rank', ['cs' => '00'])</span>
                <span class="text-xs">Topup</span>
              </div>
              <div>
                <span class="font-bold">{{$userCount["01"]}}</span>
                <span class="text-center font-bold h-[20px] w-[20px] inline-block">@include('components.rank', ['cs' => '01'])</span>
                <span class="text-xs">Starter</span>

              </div>
              <div>
                <span class="font-bold">{{$userCount["02"]}}</span>
                <span class="text-center font-bold h-[20px] w-[20px] inline-block">@include('components.rank', ['cs' => '02'])</span>
                <span class="text-xs">Basic</span>
              </div>
              <div>
                <span class="font-bold">{{$userCount["03"]}}</span>
                <span class="text-center font-bold h-[20px] w-[20px] inline-block">@include('components.rank', ['cs' => '03'])</span>
                <span class="text-xs">Premium</span>
              </div>
            </div>
          </div>
        </div>
        <div class="grid col-span-1 justify-center">
          <div class="grid ">
            <p class="font-bold text-center">Business</p>
            <div>
              <div>
                <span class="font-bold">{{$userCount["10"]}}</span>
                <span class="text-center font-bold h-[20px] w-[20px] inline-block">@include('components.rank', ['cs' => '10'])</span>
                <span class="text-xs">Topup</span>
              </div>
              <div>
                <span class="font-bold">{{$userCount["11"]}}</span>
                <span class="text-center font-bold h-[20px] w-[20px] inline-block">@include('components.rank', ['cs' => '11'])</span>
                <span class="text-xs">Starter</span>

              </div>
              <div>
                <span class="font-bold">{{$userCount["12"]}}</span>
                <span class="text-center font-bold h-[20px] w-[20px] inline-block">@include('components.rank', ['cs' => '12'])</span>
                <span class="text-xs">Basic</span>

              </div>
              <div>
                <span class="font-bold">{{$userCount["13"]}}</span>
                <span class="text-center font-bold h-[20px] w-[20px] inline-block">@include('components.rank', ['cs' => '13'])</span>
                <span class="text-xs">Premium</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Widget Start stats about users - END-->

      <!-- Widget Start recent registred users - START-->
      <div class="widget col-span-1 max-[500px]:col-span-2 flex flex-col border-2 border-[#e6e6e6] rounded-lg" x-data="{ isReciving: false, isSending: true}">
        <p class="text-center my-2">Newest Users</p>
        <!--  -->
        <div class="flex flex-col justify-center items-center pb-2 gap-4">
          @foreach ($recentUsers as $user)
          <!-- Contact Card - START-->
          <div class="flex flex-nowrap basis-1/3 max-w-[200px]">
            <span class="mx-auto relative">
              <span class="h-[50px] w-[50px] block">@include('components.usersvg')</span>
              <span class="absolute top-0 right-0 h-[20px] w-[20px]">@include('components.rank', ['cs' => substr($user->controlstring, 1, 2)])</span>
            </span>
            <div>
              <p class="text-sm text-center line-clamp-1 font-bold" title="{{ $user->name }}">
                {{ $user->name }}
              </p>
              <p class="text-xs text-center line-clamp-1" title="{{ $user->email }}">
                {{ $user->email }}
              </p>
            </div>
          </div>
          <!-- Contact Card - END-->
          @endforeach

        </div>
        <!--  -->
      </div>
      <!-- Widget Start recent registred users - END-->


      <!-- Widget Start last 3 files added to the server  - START-->
      <div class="widget grid col-span-2 border-2 border-[#e6e6e6] rounded-lg">
        <p class="text-center my-2 mx-auto col-span-2">Recently Added Files</p>
        <p class="text-center col-span-2 mx-auto font-bold">{{$totalFiles}} Total Files</p>
        <p class="text-center my-2 col-span-2 border-b-2"></p>
        <!--  -->
        <div class="grid col-span-2 grid-cols-1 justify-center">
          <div class="relative flex flex-col flex-nowrap p-2">
            <!-- loop over files. MAX 5 FILES! -->
            @foreach ($fiveMostRecentFiles as $transfer)
            <div class="flex flex-nowrap items-center flex-col my-2 shadow-md w-[100%]">
              <div class="grid grid-cols-[1fr_.2fr_1fr] items-center">
                <p>{{$transfer->sender_username}}</p>
                <svg class="animate-infiniteLoop isSending mx-4" style="height:10px; width:10px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.70711 4.29289C5.31658 3.90237 4.68342 3.90237 4.29289 4.29289C3.90237 4.68342 3.90237 5.31658 4.29289 5.70711L10.5858 12L4.29289 18.2929C3.90237 18.6834 3.90237 19.3166 4.29289 19.7071C4.68342 20.0976 5.31658 20.0976 5.70711 19.7071L12.7071 12.7071C13.0976 12.3166 13.0976 11.6834 12.7071 11.2929L5.70711 4.29289ZM12.7071 4.29289C12.3166 3.90237 11.6834 3.90237 11.2929 4.29289C10.9024 4.68342 10.9024 5.31658 11.2929 5.70711L17.5858 12L11.2929 18.2929C10.9024 18.6834 10.9024 19.3166 11.2929 19.7071C11.6834 20.0976 12.3166 20.0976 12.7071 19.7071L19.7071 12.7071C20.0976 12.3166 20.0976 11.6834 19.7071 11.2929L12.7071 4.29289Z" fill="#FFC44D"></path>
                  </g>
                </svg>
                <p>{{$transfer->receiver_username}}</p>

              </div>
              <p class="w-[100%]">📁 {{$transfer->file_name}}</p>
              <p class="w-[100%] text-[10px]">📅 {{$transfer->created_at}}</p>
            </div>

            @endforeach
          </div>
        </div>
      </div>
      <!-- Widget Start last 3 files added to the server  - END-->

      <!-- Widget Start last 3 contact messages  - START-->
      <div class="widget flex flex-col col-span-2 border-2 border-[#e6e6e6] rounded-lg">
        <div class="grid w-[100%] ">
          <p class="text-center mx-auto">Recent Messages</p>
          <p class="text-center mx-auto font-bold border-b-2">
            <span title="Unread" class="font-bold text-xl">
              {{ $contactMessages->where('status', 'unread')->count() }}</span>
            <span>/</span>
            <span class="text-xs" title="Read">
              {{ $contactMessages->count() }}</span> Messages
          </p>

        </div>
        <!--  -->
        <div class="grid  justify-center">
          <div class="relative flex flex-col flex-nowrap p-2 text-xs gap-4">
            <!-- loop over last 3 messages! -->
            @foreach ($fiveMostRecentMessages as $mess)
            <div class="grid grid-cols-[1fr_3fr] gap-2 {{ $mess->status === 'unread' ? 'font-bold' : '' }}">
              <div class="flex flex-col border-r-2 pr-2">
                <p title="Email" class="line-clamp-1">{{$mess->from}}</p>
                <p title="Date" class="line-clamp-1">
                  {{ $mess->created_at }}
                </p>
              </div>
              <p title="Message" class="line-clamp-2">{{$mess->message}}</p>
            </div>
            @endforeach

          </div>
        </div>
      </div>
      <!-- Widget Start last 3 contact messages  - END-->

    </div>
    <!-- Dashboard - END -->

  </div>

</div>
@endsection
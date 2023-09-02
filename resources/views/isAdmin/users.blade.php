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
        <h1 class="font-bold text-3xl">Admin Users</h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->

  <!-- Dashboard - START -->
  <div class="grid grid-cols-1 py-6 gap-2" x-data="{ searchUser: '' }">
    <!-- User Search - START -->
    <div class="grid grid-cols-1 gap-4 p-2">
      <div class="relative flex flex-col justify-between navButton font-[600] mb-2">
        <p>Search User</p>
        <div class="flex flex-nowrap overflow-hidden">
        <input x-model="searchUser" type="email" name="email_{{ uniqid() }}" class="rounded-l p-2 w-[100%] text-black" placeholder="Email" autocomplete="off" value="">
      </div>
    </div>
      <!-- User Search - END -->

      <!-- List Of Users - START -->
      <div class="flex flex-wrap py-2 px-2 transition-all">
        @foreach ($users as $user)
        <!-- User Card - START -->
        <form method="POST" x-show="searchUser === '' || (searchUser !== '' && ({{ json_encode(strtolower($user->email)) }}.includes(searchUser.toLowerCase()) || {{ json_encode(strtolower($user->name)) }}.includes(searchUser.toLowerCase())))" class="{{ $user->controlstring[5] === '1' ? 'grayscale' : '' }}  flex flex-col max-w-[200px] shadow-xl p-2 m-2 rounded hover:scale-[1.1] transition-all duration-500">
          @csrf
          <input type="hidden" name="user_id" value="{{$user->id}}">
          <span class="mx-auto relative">
            <span class="block h-[50px] w-[50px]">@include('components.usersvg')</span>
            <span class="absolute top-0 right-0 w-[20px] h-[20px]">@include('components.rank',['cs' => substr($user->controlstring, 1, 2)])</span>
          </span>
          <p class="text-xs text-center line-clamp-1 font-bold" title="{{$user->name}}">{{$user->name}}</p>
          <p class="text-xs text-center line-clamp-1" title="{{$user->email}}">{{$user->email}}</p>

          <div class="flex flex-nowrap items-center justify-center gap-4">
            <a title="Send Email" href="mailto:{{$user->email}}?subject=Query&amp;body=Your message...">@include('components.emailsvg')</a>
            <button formaction="/admin/users/toggle" title="Block/Unblock User">@include('components.deleteusersvg')</button>
          </div>
          @if ($user->controlstring[5] === '1')
          <p class="text-xs text-center">-desktop blocked-</p>
          @endif
        </form>
        <!-- User Card - END -->
        @endforeach
      </div>
      <!-- List Of Users - END -->

    </div>
    <!-- Dashboard - END -->
    </div>

  </div>
  @endsection
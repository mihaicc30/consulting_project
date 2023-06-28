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
        <h1 class="font-bold text-3xl">Admin Server</h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->

  <!-- Dashboard - START -->
  <div class="grid grid-cols-4 max-[1100px]:grid-cols-3 max-[800px]:grid-cols-2 grid-rows-auto py-6 gap-2">
<!-- 
  <div class="flex flex-nowrap flex-col p-1 items-center justify-center" x-data="{isMaintenance: false, isServer: true}">
          <button class="text-white text-xs font-[600] p-2 border-2 border-white whitespace-nowrap rounded bg-[--c2] text-center">Toggle Web Maintenance</button>
          <button class="text-white text-xs font-[600] p-2 border-2 border-white whitespace-nowrap rounded bg-[--c2] text-center">Toggle Maintenance</button>
          <button class="text-white text-xs font-[600] p-2 border-2 border-white whitespace-nowrap rounded bg-[--c2] text-center">Toggle Maintenance</button>
        </div> -->

  </div>
  <!-- Dashboard - END -->


</div>
@endsection
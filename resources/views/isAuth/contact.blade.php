@extends ('layout')


@section('content')
<span :class="{ 'hidden': !isActive }"></span>
<div  :class="{ 'col-span-2': !isActive }">
  
  <!-- Hero START -->
<div class="relative flex flex-col h-100 overflow-hidden">
  <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
  <div class="overlay relative flex flex-col">
      <!-- Heading - START -->
      <div class="my-8 text-center">
        <h1 class="font-bold text-3xl">Contact</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, doloribus.</p>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->

  <!-- Contact - START -->
  <div class="flex flex-col py-6">
    <p class="my-[50vh]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente, id.</p>
    
  </div>
  <!-- Contact - END -->

</div>
@endsection
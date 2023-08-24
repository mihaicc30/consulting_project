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
<div class="flex justify-center items-center text-center mt-[10rem]">
<a href="https://billing.stripe.com/p/login/test_4gw6oJchs69w47e7ss?prefilled_email={{$email}}" target="_blank" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Click here to go to your Customer Portal</a>
</div>

@endsection
@extends('layout')

@section('content')

<div class="grow">

  <!-- Hero START -->
  <div class="relative flex flex-col h-100 overflow-hidden">
    <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
    <div class="overlay relative flex flex-col">
      <!-- Heading - START -->
      <div class="my-8 text-center">
        <h1 class="font-bold text-3xl">You are now subscribed to Some Plan.  </h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->

  <div class="flex justify-center align-center items-center text-center mt-4">
    <div class="bg-green-500 text-white py-3 px-6 rounded-lg">
      <p class="font-bold text-xl">Congratulations! </p>
      <p class="mt-2">You have successfully unsubscribed to the Plan.</p>
    </div>
  </div>


@endsection
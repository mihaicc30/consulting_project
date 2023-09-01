@extends('layout')

@section('content')

<div class="grow">

  <!-- Hero START -->
  <div class="relative flex flex-col h-100 overflow-hidden">
    <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
    <div class="overlay relative flex flex-col">
      <!-- Heading - START -->
      <div class="my-8 text-center">
        <h1 class="font-bold text-3xl">You are now subscribed to {{$plan_name }} Plan.  </h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->
@if($plan_name == 'Top-up')
  <div class="flex justify-center align-center items-center text-center mt-4">
    <div class="bg-green-500 text-white py-3 px-6 rounded-lg">
      <p class="font-bold text-xl">Congratulations! </p>
      <p class="mt-2">You have successfully topped up your account.</p>
    </div>
  </div>
@else 
  <div class="flex justify-center align-center items-center text-center mt-4">
    <div class="bg-green-500 text-white py-3 px-6 rounded-lg">
      <p class="font-bold text-xl">Congratulations! </p>
      <p class="mt-2">You have successfully subscribed to the {{$plan_name}} Plan.</p>
    </div>
  </div>
@endif



@endsection
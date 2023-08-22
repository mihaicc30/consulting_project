@extends ('layout')

@section('content')
<script src="https://js.stripe.com/v3/" async></script>

<span :class="{ 'hidden': !isActive }"></span>
<div :class="{ 'col-span-2': !isActive }">

  <!-- Hero START -->
  <div class="relative flex flex-col h-100 overflow-hidden">
    <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
    <div class="overlay relative flex flex-col">
      <!-- Heading - START -->
      <div class="my-8 text-center">
        <h1 class="font-bold text-3xl">Top-Up</h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->

  @if(isset($status))
  @if($status === "success")
  <div class="flex justify-between p-4 my-2 bg-[#51ee5170] animate-fadeIN">
    <p>{{$message}}</p>
    <button onclick="this.parentElement.remove()">@include('components.closebutton')</button>
  </div>
  @elseif($status === "fail")
  <div class="flex justify-between p-4 my-2 bg-[#ee565170] animate-fadeIN">
    <p>{{$message}}</p>
    <button onclick="this.parentElement.remove()">@include('components.closebutton')</button>
  </div>
  @endif
  @endif

  @if(substr(Auth::user()->controlstring, 2, 1) !== '0')
  <!-- Top-Up IF USER HAS A PLAN - START -->
  <div class="flex flex-wrap py-6 justify-center items-center">
    <!-- User Card -->
    <div class="flex flex-col max-w-[200px] shadow-xl p-2 m-2 rounded transition-all duration-500">
      <span class="mx-auto relative">
        @include('components.usersvg')
        <span class="absolute top-0 right-0 h-[20px] w-[20px]" title="Business Premium">@include('components.rank')</span>
      </span>
      <p class="text-xs text-center line-clamp-1 font-bold" title="{{ Auth::user()->name }}">
        {{ Auth::user()->name }}
      </p>
      <p class="text-xs text-center line-clamp-1" title="{{ Auth::user()->email }}">
        {{ Auth::user()->email }}
      </p>
    </div>
    <!-- User Card -->
    <div class="flex flex-col gap-2 text-center align-center items-center">
      <p>Your current plan does <u>not</u> need to be topped up. Enjoy using our unlimited services!</p>
      <div class="flex flex-wrap items-baseline">
        <p>In need of assisstance?</p>
        <a href="/contact" class="text-white font-[600] p-2 mx-1 sborder-2 border-white whitespace-nowrap rounded bg-[--c2]">Contact Us</a>
      </div>
    </div>
  </div>
  <!-- Top-Up - END -->
  @else
  <!-- Top-Up IF USER HAS **NOT** A PLAN - START -->
  <div class="flex flex-wrap py-6 justify-evenly items-center gap-4 shadow-xl m-2">
  
    <div class="flex flex-col items-center justify-center">
      @include('components.token')
      <p class="text-center font-bold">Top-Up</p>
      <div class="flex justify-evenly flex-col w-[100%] items-center">
        <p class="text-center">Balance: £<span>{{$balance}}</span></p>
      </div>
    </div>



        <!-- Top-Up - END -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var amountInput = document.getElementById('amount');
        var currencySelect = document.getElementById('currency');
        var stripeButton = document.querySelector('.stripe-button');

        amountInput.addEventListener('input', function() {
          stripeButton.setAttribute('data-amount', amountInput.value * 100);
        });

        currencySelect.addEventListener('change', function() {
          stripeButton.setAttribute('data-currency', currencySelect.value);
        });

      });
    </script>
   {{-- Script to fetch all the countries in the world --}}
  <script>

 
@endif
  
@endsection
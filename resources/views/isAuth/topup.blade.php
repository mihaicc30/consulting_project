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
  <div class="flex py-6 justify-center items-center shadow-xl m-2">
    <div class="flex flex-col items-center justify-center">
      @include('components.token')
      <p class="text-center font-bold">Top-Up</p>
      <div class="flex justify-evenly flex-col w-[100%] items-center">
        <p class="text-center">Current balance: <span>{{$balance}} tokens</span></p>
      </div>
      <div x-data="{ amount: '', currency: '' }">
        <form method="POST" action="{{ route('isauth.topup')}}" class="flex flex-col items-center mt-4" x-on:submit.prevent>
          @csrf

          <div class="flex bg-gray-100 p-8 rounded-lg shadow-lg text-center">
            <div class="mb-4">
              <label class="block text-gray-700 font-semibold" for="amount">Select Amount:</label>
                <input type="radio" id="5" name="amount" value="5" x-on:click="amount = 5">
                <label for="5">5</label>
                <input type="radio" id="10" name="amount" value="10" x-on:click="amount = 10">
                <label for="10">10</label>
                <input type="radio" id="20" name="amount" value="20" x-on:click="amount = 20">
                <label for="20">20</label>
                <input type="radio" id="30" name="amount" value="30" x-on:click="amount = 30">
                <label for="30">30</label>
            </div>
            <div class="border mx-2"></div>
            <div class="mb-4">
              <label class="block text-gray-700 font-semibold" for="currency">Select currency:</label>
                <input type="radio" id="gbp" name="currency" value="gbp" x-on:click="currency = 'Pound'">
                <label for="gbp">Pounds</label>
                <input type="radio" id="eur" name="currency" value="eur" x-on:click="currency = 'Euro'">
                <label for="eur">Euros</label>
                <input type="radio" id="usd" name="currency" value="usd" x-on:click="currency = 'Dollar'">
                <label for="usd">Dollars</label>
            </div>
          </div>

          <div class="flex bg-gray-200 p-2 mt-4 rounded-lg items-center">
            <p class="text-gray-700 flex">You will be charged&nbsp;<span id="selected-amount" class="font-bold" x-text="amount"></span>&nbsp; <span id="selected-currency" x-text="currency"></span></p>
          </div>
          <div class="alert"></div>
          <div class="mt-4">
            <button type="submit" id="stripe-button" class="w-full bg-[--c2] p-2 rounded text-white font-bold" x-on:click="
        if (amount && currency) {
          $el.closest('form').submit();
        } else {
          document.getElementsByClassName('alert')[0].innerHTML = '<p class=\'text-red-500 mt-2\'>Please select both amount and currency.</p>';
          $el.closest('form').preventDefault();
        }
      ">Top-Up</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  @endif

  @endsection
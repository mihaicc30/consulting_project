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
        <h1 class="font-bold text-3xl">Plans</h1>

      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->

  <!-- Plans - START -->
  <div class="flex flex-col py-6">


    <!-- Plans START -->
    <div x-data="{ isPersonal: true, isMonthly: true }">
      <div>
        <button @click="isPersonal = !isPersonal" :class="{ 'border-b-2 border-b-[--c2]': isPersonal }" class="p-2 m-2 font-bold">Personal</button>
        <button @click="isPersonal = !isPersonal" :class="{ 'border-b-2 border-b-[--c2]': !isPersonal }" class="p-2 m-2 font-bold">Business</button>
      </div>


      <!-- Pricing Plan Toggle - START -->
      <div class="flex flex-col items-center justify-center">
          <!-- Error Message - START -->
          @if(session('error'))
              <div class="error-message font-bold text-3xl text-red-600 p-6">
                  {{ session('error') }}
              </div>
          @endif

      <!-- Error Message - END -->
        <p class="text-3xl font-bold">Designed for <span x-text="isPersonal? 'personal' : 'business'"></span> usage</p>
        <p class="max-w-[500px] text-center text-xs my-4">Choose the plan that suits your needs best</p>
        <p>You have the option of montly of yearly billing</p>
        <div class="my-2 flex justify-center items-center">
          <span :class="{ 'bg-[--c2] text-white rounded transition': isMonthly }" class=" p-2 m-2 font-bold">Monthly</span>
          <label class="switch">  
            <input type="checkbox" id="monthlyCheckbox" name="checkboxed" @change="isMonthly = !isMonthly">
            <span class="slider"></span>
          </label>
          <span :class="{ 'bg-[--c2] text-white rounded transition': !isMonthly }" class=" p-2 m-2 font-bold">Yearly (- 10% Off)</span>
        </div>
      </div>
      <!-- Pricing Plan Toggle - END -->

      <!-- Personal - START -->
      <div x-show="isPersonal" class="flex flex-col overflow-auto items-center">
          <div class="flex flex-col text-center flex-nowrap">
              <!-- Personal Billing Cards - START -->
              <div class="grid grid-cols-3 gap-8 m-4 min-w-[860px]">
                  @foreach ($plans as $plan)
                      @if (Str::startsWith($plan->type, 'Personal'))
                          <!-- Plan Card - START-->
                          <div class="flex flex-col shadow-xl p-4 z-10 relative min-w-[160px] flex-nowrap">
                              <p class="text-xl font-bold whitespace-nowrap">
                                  {{ $plan['name'] }}
                              </p>
                              <p class="text-xs">
                                  {{ $plan['description'] }}
                              </p>
                              <p class="border-b-2 my-4"></p>
                              <p class="text-3xl font-bold">
                                  @if($plan['price'] == 0)
                                      <span class="text-lg">Pay As You Go</span>
                                  @else
                                      <span class="text-base">£</span>
                                      <template x-if="isMonthly">
                                          <span x-text="(parseFloat({{ $plan['price'] }}).toFixed(2)) + ' / month'"></span>
                                      </template>
                                      <template x-if="!isMonthly">
                                          <span x-text="(parseFloat({{ $plan['price'] }} * 0.9 * 12).toFixed(2)) + ' / year'"></span>
                                      </template>
                                  @endif
                              </p>
                              <p class="border-b-2 my-4"></p>
                              <div class="flex flex-col items-start  text-start grow">
                                  @foreach (json_decode($plan['options']) as $option)
                                      <p class="grid grid-cols-[24px_1fr]">
                                          <svg fill="#000000" width="24px" height="24px" viewBox="-2.16 -2.16 28.32 28.32"
                                              id="check-circle" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg"
                                              class="icon flat-color">
                                              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                              <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round"></g>
                                              <g id="SVGRepo_iconCarrier">
                                                  <circle id="primary" cx="12" cy="12" r="10"
                                                          style="fill: #ff943d;"></circle>
                                                  <path id="secondary"
                                                        d="M11,16a1,1,0,0,1-.71-.29l-3-3a1,1,0,1,1,1.42-1.42L11,13.59l4.29-4.3a1,1,0,0,1,1.42,1.42l-5,5A1,1,0,0,1,11,16Z"
                                                        style="fill: #fff;"></path>
                                              </g>
                                          </svg><span>
                                          {{ $option }}</span></p>
                                  @endforeach
                              </div>
                              <p class="border-b-2 my-4"></p>

                            @php
                              $slug = $plan['slug'];
                            @endphp
                          <template x-if="isMonthly">
                            @include('components.subscribeTemplate', ['plan' => $plan['name'], 'type' => $plan['type'], 'price' => $plan['price'], 'slug' => $plan['slug'], 'yearly' => '0' ] )
                          </template>  
                          <template x-if="!isMonthly">
                            @include('components.subscribeTemplate', ['plan' => $plan['name'], 'type' => $plan['type'], 'price' => $plan['price'] * 0.9 * 12 , 'slug' => $plan['slug'], 'yearly' => '1' ] )
                          </template>  
                          </div>
                          <!-- Plan Card - END-->
                      @endif
                  @endforeach
              </div>
              <!-- Personal Billing Cards - END -->
          </div>
      </div>
      <!-- Personal - END -->


      <!-- Bussiness - START -->
      <div x-show="!isPersonal" class="flex flex-col overflow-auto items-center">
        <div class="flex flex-col text-center flex-nowrap ">
          <!-- Bussiness Billing Cards - START -->
          <div class="grid grid-cols-3 gap-8 m-4 min-w-[860px]">
            @foreach ($plans as $plan)
            @if (Str::startsWith($plan->type, 'Business'))
            <!-- Plan Card - START-->
            <div class="flex flex-col shadow-xl p-4 z-10 relative min-w-[160px] flex-nowrap">
              <p class="text-xl font-bold whitespace-nowrap">
                {{ $plan['name'] }}
              </p>
              <p class="text-xs">
                {{ $plan['description'] }}
              </p>
              <p class="border-b-2 my-4"></p>
              <p class="text-3xl font-bold">
                @if($plan['price'] == 0)
                <span class="text-lg">Pay As You Go</span>
                @else
                <span class="text-base">£</span>
                <template x-if="isMonthly">
                                          <span x-text="(parseFloat({{ $plan['price'] }}).toFixed(2)) + ' / month'"></span>
                                      </template>
                                      <template x-if="!isMonthly">
                                          <span x-text="(parseFloat({{ $plan['price'] }} * 0.9 * 12).toFixed(2)) + ' / year'">  </span></template>
                @endif
              </p>
              <p class="border-b-2 my-4"></p>
              <div class="flex flex-col items-start  text-start grow">
                @foreach (json_decode($plan['options']) as $option)
                <p class="grid grid-cols-[24px_1fr]">
                  <svg class="grow" fill="#000000" width="24px" height="24px" viewBox="-2.16 -2.16 28.32 28.32" id="check-circle" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <circle id="primary" cx="12" cy="12" r="10" style="fill: #ff943d;"></circle>
                      <path id="secondary" d="M11,16a1,1,0,0,1-.71-.29l-3-3a1,1,0,1,1,1.42-1.42L11,13.59l4.29-4.3a1,1,0,0,1,1.42,1.42l-5,5A1,1,0,0,1,11,16Z" style="fill: #fff;"></path>
                    </g>
                  </svg>
                  <span>{{ $option }}</span>
                </p>
                @endforeach
              </div>
              <p class="border-b-2 my-4"></p>
              <template x-if="isMonthly">
                @include('components.subscribeTemplate', ['plan' => $plan['name'], 'type' => $plan['type'], 'price' => $plan['price'], 'slug' => $plan['slug'], 'yearly' => '0'] )
              </template>  
              <template x-if="!isMonthly">
                @include('components.subscribeTemplate', ['plan' => $plan['name'], 'type' => $plan['type'], 'price' => $plan['price'] * 0.9 * 12 , 'slug' => $plan['slug'], 'yearly' => '1'] )
              </template> 
            </div>
            <!-- Plan Card - END-->
            @endif

            @endforeach
          </div>
          <!-- Bussiness Billing Cards - END -->
        </div>
      </div>
      <!-- Bussiness - END -->
    </div>
    <!-- Plans END -->

  </div>
  <!-- Plans - END -->
<div class="bg-gray-100 p-4 text-center">
  <p class="text-gray-700 dark:text-gray-300">
    <strong class="text-2xl text-red-500">Cancelation Policy</strong> <br><ul><li>You can cancel your subscription at any time. </li><li>You will still have access to your account until the end of your billing period. </li><li>The cancellation process can only be done from your <strong class="text-xl">Customer Portal.</strong></li></ul>  
  </p>
</div>

</div>
@endsection
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
        <p>Upgrade your plan to unlock premium features and enjoy enhanced benefits.</p>

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
        <p class="text-3xl font-bold">Designed for <span x-text="isPersonal? 'personal' : 'business'"></span> usage</p>
        <p class="max-w-[500px] text-center text-xs my-4">Choose the plan that suits your needs best</p>

        <p>You have the option of montly of yearly billing</p>
        <div class="my-2 flex justify-center items-center">
          <span :class="{ 'bg-[--c2] text-white rounded transition': isMonthly }" class=" p-2 m-2 font-bold">Monthly</span>
          <label class="switch">
            <input type="checkbox" @change="isMonthly = !isMonthly">
            <span class="slider"></span>
          </label>
          <span :class="{ 'bg-[--c2] text-white rounded transition': !isMonthly }" class=" p-2 m-2 font-bold">Yearly</span>
        </div>
      </div>
      <!-- Pricing Plan Toggle - END -->



      <!-- Personal - START -->
      <div x-show="isPersonal" class="flex flex-col overflow-x-scroll">
        <div class="flex flex-col text-center flex-nowrap ">
          <!-- Personal Billing Cards - START -->
          <div class="grid grid-cols-4 gap-8 m-4 min-w-[860px]">
            <!-- Plan Card - START-->
            <div class="flex flex-col shadow-xl p-4 z-10 relative min-w-[160px] flex-nowrap">
              <p class="text-xl font-bold">Top-up</p>
              <p class="text-xs">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, id.</p>
              <p class="border-b-2 my-4"></p>
              <p class="text-3xl font-bold">Pay As You Go</p>
              <p class="border-b-2 my-4"></p>
              <div class="flex flex-col items-start flex-nowrap grow text-start">
                <p class="inline-flex whitespace-nowrap"><svg fill="#000000" width="24px" height="24px" viewBox="-2.16 -2.16 28.32 28.32" id="check-circle" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color whitespace-nowrap flex-nowrap">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <circle id="primary" cx="12" cy="12" r="10" style="fill: #ff943d;"></circle>
                      <path id="secondary" d="M11,16a1,1,0,0,1-.71-.29l-3-3a1,1,0,1,1,1.42-1.42L11,13.59l4.29-4.3a1,1,0,0,1,1.42,1.42l-5,5A1,1,0,0,1,11,16Z" style="fill: #e64100;"></path>
                    </g>
                  </svg><span>Max Size 10MB</span></p>
                <p class="inline-flex whitespace-nowrap"><svg fill="#000000" width="24px" height="24px" viewBox="-2.16 -2.16 28.32 28.32" id="check-circle" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color whitespace-nowrap flex-nowrap">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <circle id="primary" cx="12" cy="12" r="10" style="fill: #ff943d;"></circle>
                      <path id="secondary" d="M11,16a1,1,0,0,1-.71-.29l-3-3a1,1,0,1,1,1.42-1.42L11,13.59l4.29-4.3a1,1,0,0,1,1.42,1.42l-5,5A1,1,0,0,1,11,16Z" style="fill: #e64100;"></path>
                    </g>
                  </svg><span>Single File</span></p>
                <p class="inline-flex whitespace-nowrap"><svg fill="#000000" width="24px" height="24px" viewBox="-2.16 -2.16 28.32 28.32" id="check-circle" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-colo whitespace-nowrap flex-nowrapr">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <circle id="primary" cx="12" cy="12" r="10" style="fill: #ff943d;"></circle>
                      <path id="secondary" d="M11,16a1,1,0,0,1-.71-.29l-3-3a1,1,0,1,1,1.42-1.42L11,13.59l4.29-4.3a1,1,0,0,1,1.42,1.42l-5,5A1,1,0,0,1,11,16Z" style="fill: #e64100;"></path>
                    </g>
                  </svg><span>Normal Delivery</span></p>
              </div>
              <p class="border-b-2 my-4"></p>
              @include('components.subscribeTemplate')
            </div>
            <!-- Plan Card - END-->
            @foreach ($plans as $plan)
            @if (Str::startsWith($plan->name, 'Personal'))
            <!-- Plan Card - START-->
            <div class="flex flex-col shadow-xl p-4 z-10 relative min-w-[160px] flex-nowrap">
              <p class="text-xl font-bold">
                {{ $plan['name'] }}
              </p>
              <p class="text-xs">
                {{ $plan['description'] }}
              </p>
              <p class="border-b-2 my-4"></p>
              <p class="text-3xl font-bold">
                <span class="text-base">£</span>
                <template x-if="isMonthly">
                  <span x-text=" {{ $plan['price'] }}"></span>/month
                </template>
                <template x-if="!isMonthly">
                  <span x-text=" {{ $plan['price'] }} * 12"></span>/year
                </template>
              </p>
              <p class="border-b-2 my-4"></p>
              <div class="flex flex-col items-start  text-start grow">
                @foreach (json_decode($plan['options']) as $option)
                <p class="inline-flex"><svg fill="#000000" width="24px" height="24px" viewBox="-2.16 -2.16 28.32 28.32" id="check-circle" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <circle id="primary" cx="12" cy="12" r="10" style="fill: #ff943d;"></circle>
                      <path id="secondary" d="M11,16a1,1,0,0,1-.71-.29l-3-3a1,1,0,1,1,1.42-1.42L11,13.59l4.29-4.3a1,1,0,0,1,1.42,1.42l-5,5A1,1,0,0,1,11,16Z" style="fill: #e64100;"></path>
                    </g>
                  </svg><span>
                    {{ $option }}</span></p>
                @endforeach
              </div>
              <p class="border-b-2 my-4"></p>
              @include('components.subscribeTemplate')
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
      <div x-show="!isPersonal" class="flex flex-col overflow-x-scroll">
        <div class="flex flex-col text-center flex-nowrap ">
          <!-- Bussiness Billing Cards - START -->
          <div class="grid grid-cols-4 gap-8 m-4 min-w-[860px]">
            <!-- Plan Card - START-->
            <div class="flex flex-col shadow-xl p-4 z-10 relative min-w-[160px] flex-nowrap">
              <p class="text-xl font-bold">Top-up</p>
              <p class="text-xs">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, id.</p>
              <p class="border-b-2 my-4"></p>
              <p class="text-3xl font-bold">Pay As You Go</p>
              <p class="border-b-2 my-4"></p>
              <div class="flex flex-col items-start flex-nowrap grow text-start">
                <p class="inline-flex whitespace-nowrap"><svg fill="#000000" width="24px" height="24px" viewBox="-2.16 -2.16 28.32 28.32" id="check-circle" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color whitespace-nowrap flex-nowrap">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <circle id="primary" cx="12" cy="12" r="10" style="fill: #ff943d;"></circle>
                      <path id="secondary" d="M11,16a1,1,0,0,1-.71-.29l-3-3a1,1,0,1,1,1.42-1.42L11,13.59l4.29-4.3a1,1,0,0,1,1.42,1.42l-5,5A1,1,0,0,1,11,16Z" style="fill: #e64100;"></path>
                    </g>
                  </svg><span>Max Size 10MB</span></p>
                <p class="inline-flex whitespace-nowrap"><svg fill="#000000" width="24px" height="24px" viewBox="-2.16 -2.16 28.32 28.32" id="check-circle" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color whitespace-nowrap flex-nowrap">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <circle id="primary" cx="12" cy="12" r="10" style="fill: #ff943d;"></circle>
                      <path id="secondary" d="M11,16a1,1,0,0,1-.71-.29l-3-3a1,1,0,1,1,1.42-1.42L11,13.59l4.29-4.3a1,1,0,0,1,1.42,1.42l-5,5A1,1,0,0,1,11,16Z" style="fill: #e64100;"></path>
                    </g>
                  </svg><span>Single File</span></p>
                <p class="inline-flex whitespace-nowrap"><svg fill="#000000" width="24px" height="24px" viewBox="-2.16 -2.16 28.32 28.32" id="check-circle" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-colo whitespace-nowrap flex-nowrapr">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <circle id="primary" cx="12" cy="12" r="10" style="fill: #ff943d;"></circle>
                      <path id="secondary" d="M11,16a1,1,0,0,1-.71-.29l-3-3a1,1,0,1,1,1.42-1.42L11,13.59l4.29-4.3a1,1,0,0,1,1.42,1.42l-5,5A1,1,0,0,1,11,16Z" style="fill: #e64100;"></path>
                    </g>
                  </svg><span>Normal Delivery</span></p>
              </div>
              <p class="border-b-2 my-4"></p>
              @include('components.subscribeTemplate')
            </div>
            <!-- Plan Card - END-->
            @foreach ($plans as $plan)
            @if (Str::startsWith($plan->name, 'Business'))
            <!-- Plan Card - START-->
            <div class="flex flex-col shadow-xl p-4 z-10 relative min-w-[160px] flex-nowrap">
              <p class="text-xl font-bold">
                {{ $plan['name'] }}
              </p>
              <p class="text-xs">
                {{ $plan['description'] }}
              </p>
              <p class="border-b-2 my-4"></p>
              <p class="text-3xl font-bold">
                <span class="text-base">£</span>
                <template x-if="isMonthly">
                  <span x-text=" {{ $plan['price'] }}"></span>/month
                </template>
                <template x-if="!isMonthly">
                  <span x-text=" {{ $plan['price'] }} * 12"></span>/year
                </template>
              </p>
              <p class="border-b-2 my-4"></p>
              <div class="flex flex-col items-start  text-start grow">
                @foreach (json_decode($plan['options']) as $option)
                <p class="inline-flex"><svg fill="#000000" width="24px" height="24px" viewBox="-2.16 -2.16 28.32 28.32" id="check-circle" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <circle id="primary" cx="12" cy="12" r="10" style="fill: #ff943d;"></circle>
                      <path id="secondary" d="M11,16a1,1,0,0,1-.71-.29l-3-3a1,1,0,1,1,1.42-1.42L11,13.59l4.29-4.3a1,1,0,0,1,1.42,1.42l-5,5A1,1,0,0,1,11,16Z" style="fill: #e64100;"></path>
                    </g>
                  </svg><span>
                    {{ $option }}</span></p>
                @endforeach
              </div>
              <p class="border-b-2 my-4"></p>
              @include('components.subscribeTemplate')
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

</div>
@endsection
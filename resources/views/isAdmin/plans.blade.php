@extends ('layout')

@section('content')

<div class="flex flex-nowrap col-span-2 grow" x-data="{ isModal: false }">
  @include('isadmin.nav')
  
  <div class="grid grid-cols-1 grow">
    <!-- Hero START -->
    <div class="relative flex flex-col h-100 overflow-hidden">
      <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
      <div class="overlay relative flex flex-col">
        <!-- Heading - START -->
        <div class="my-8 text-center">
          <h1 class="font-bold text-3xl">Admin Plans</h1>
        </div>
        <!-- Heading - END -->
      </div>
    </div>
    <!-- Hero END -->


    <!-- Plans - START -->
    <div class="flex flex-col py-6">

      <!-- Plans START -->
        <div class="flex flex-col overflow-x-auto">
          <div class="flex flex-col text-center flex-nowrap ">
            <!-- Billing Cards - START -->
            <div class="flex flex-wrap gap-3 m-2">
              @foreach ($plans as $plan)
              <!-- Plan Card - START-->
              <div class="flex flex-col shadow-xl p-4 z-10 relative flex-nowrap flex-1 basis-[22%] max-w-[250px] min-w-[200px]">
                <p class="text-sm font-bold whitespace-nowrap">
                  {{ $plan['name'] }}
                </p>
                <p class="text-xs">
                  {{ $plan['description'] }}
                </p>
                <p class="border-b-2 my-4"></p>
                <p class="text-sm font-bold">
                  @if($plan['slug'] === 'top-up')
                  <span class="text-sm">Token Price: {{$plan['price']}}</span>
                  @else
                  <span class="text-sm">{{$plan['price']}}</span>

                  @endif
                </p>
                <p class="border-b-2 my-4"></p>
                <div class="flex flex-col items-start  text-start grow">
                  @foreach (json_decode($plan['options']) as $option)
                  @if (strlen($option) > 0 )
                  <p class="grid grid-cols-[24px_1fr] text-sm">
                    <svg fill="#000000" width="24px" height="24px" viewBox="-2.16 -2.16 28.32 28.32" id="check-circle" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <circle id="primary" cx="12" cy="12" r="10" style="fill: #ff943d;"></circle>
                        <path id="secondary" d="M11,16a1,1,0,0,1-.71-.29l-3-3a1,1,0,1,1,1.42-1.42L11,13.59l4.29-4.3a1,1,0,0,1,1.42,1.42l-5,5A1,1,0,0,1,11,16Z" style="fill: #fff;"></path>
                      </g>
                    </svg><span>
                      {{ $option }}</span>
                  </p>
                  @endif
                  @endforeach
                </div>
                <p class="border-b-2 my-4"></p>
                <button class="bg-[--c2] p-1 rounded text-white font-bold text-sm" type="submit" @click="isModal = true" onclick="setModal('{{ $plan }}')">Update</button>

              </div>
              <!-- Plan Card - END-->
              @endforeach
            </div>
            <!-- Billing Cards - END -->
          </div>
        </div>
      <!-- Plans END -->

    </div>
    <!-- Plans - END -->
  </div>
  @include('components.admin-plan-update-modal')
</div>

<script defer type="application/javascript">
  const setModal = (data) => {
    data = data.replace("\"[", "[").replace("]\"", "]")
    data = JSON.parse(data)

    let modalID = document.getElementById('planid');
    let modalCode = document.getElementById('apc');
    let modalDescription = document.getElementById('apd');
    let modalName = document.getElementById('apn');
    let modalPrice = document.getElementById('app');
    let modalAttributes = document.getElementById('apa');


    modalID.value = data.id
    modalCode.value = data.code
    modalDescription.value = data.description
    modalName.value = data.name
    modalPrice.value = parseFloat(data.price)
    data.options.forEach((option, index) => {
      index == 0 ?
        modalAttributes.innerHTML = `<input name="option${index}" class="w-[100%] text-xs" type="text" value="${option}">` :
        modalAttributes.innerHTML += `<input name="option${index}" class="w-[100%] text-xs" type="text" value="${option}">`

    });
  }
</script>
@endsection
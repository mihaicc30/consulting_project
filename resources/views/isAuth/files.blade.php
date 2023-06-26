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
        <h1 class="font-bold text-3xl">Files</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, doloribus.</p>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->

  <!-- Files - START -->
  <div class="flex flex-col py-6 border-2 border-[#e6e6e6] rounded-lg" x-data="{ isActive: 1 }">

    <div class="widget col-span-2 flex flex-col ">
      <!--  -->
      <div class="flex flex-nowrap justify-evenly text-xs">
        <div class="w-[100%] px-2 flex justify-evenly">

          <!-- Tab 1 -->
          <div class="accordion-item w-[90%] max-w-[800px] min-w-[240px] transition mx-auto my-1 py-2" :class="{ 'border-b-2 grayscale': isActive !== 1 }">
            <div class="accordion-header cursor-pointer flex justify-between transition text-start" @click="isActive === 1 ? '' : isActive = 1">
              <div class="flex flex-nowrap justify-evenly w-[100%] flex-col">
                <span class="mx-auto">@include('components.receivedfile')</span>
                <p class="text-sm text-center line-clamp-1 font-bold">Received</p>
              </div>
            </div>
          </div>
          <!-- Tab 1 -->

          <!-- Tab 2 -->
          <div class="accordion-item w-[90%] max-w-[800px] min-w-[240px] transition mx-auto my-1 py-2 border-l-2 border-r-2" :class="{ 'border-b-2 grayscale': isActive !== 2 }">
            <div class="accordion-header cursor-pointer flex justify-between transition text-start" @click="isActive === 2 ? '' : isActive = 2">
              <div class="flex flex-nowrap justify-evenly w-[100%] flex-col">
                <span class="mx-auto">@include('components.sentfile')</span>
                <p class="text-sm text-center line-clamp-1 font-bold">Sent</p>
              </div>
            </div>
          </div>
          <!-- Tab 2 -->

        </div>
      </div>
    </div>


    <div class="tabContainer">
      <!-- Received Tab Content - START -->
      <div class="accordion-content transition" x-show="isActive === 1">
        <div class="relative flex flex-col flex-nowrap p-2">
          <!-- Paginate top half - START -->
          <div class="paginate flex justify-center items-center gap-4 mt-2">
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">1</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">2</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">3</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">4</a>
          </div>
          <!-- Paginate top half - END -->


          <!-- Transmisions Loop 5/page - START -->

          <!-- Start of first data transmision -->
          <div class="my-4 shadow-xl p-2">
            <div class="flex flex-nowrap items-center w-[100%]">
              <div class="flex justify-between  w-[100%] flex-wrap">
                <div class="flex flex-wrap gap-4">
                  <div>
                    <p class="text-md">From: user@email.com</p>
                    <p class="text-xs">IP: 123.123.123.123</p>
                  </div>
                </div>

                <div>
                  <p>
                    {{ date('Y-m-d H:i:s') }}
                  </p>
                  <p>Status: <span>Success!</span></p>
                </div>
              </div>
            </div>

            <div class="relative flex flex-wrap p-2 text-xs">
              <!-- loop over files. MAX 5 FILES! -->
              <span class="absolute top-[-10px] left-[15px] text-[1.6rem] rotate-90">📎</span>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem ipsum dolor sit.jpg</p>
              </div>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem ipsum dolor sit amet..png</p>
              </div>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem, ipsum dolor.rar</p>
              </div>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem ipsum dolor sit.zip</p>
              </div>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.docx</p>
              </div>
            </div>
          </div>
          <!-- end of first data transmision -->
          
          <!-- Start of second data transmision// example of failed transfer -->
          <div class="my-4 shadow-xl p-2">
            <div class="flex flex-nowrap items-center w-[100%]">
              <div class="flex justify-between  w-[100%] flex-wrap">
                <div class="flex flex-wrap gap-4">
                  <div>
                    <p class="text-md">From: user@email.com</p>
                    <p class="text-xs">IP: 123.123.123.123</p>
                  </div>
                </div>

                <div>
                  <p>
                    {{ date('Y-m-d H:i:s') }}
                  </p>
                  <p>Status: <span class="text-[#fc1010]">Fail!</span></p>
                </div>
              </div>
            </div>

            <!-- do not loop over files -->
          </div>
          <!-- end of second data transmision -->

          <!-- Start of thrid data transmision -->
          <div class="my-4 shadow-xl p-2">
            <div class="flex flex-nowrap items-center w-[100%]">
              <div class="flex justify-between  w-[100%] flex-wrap">
                <div class="flex flex-wrap gap-4">
                  <div>
                    <p class="text-md">From: user@email.com</p>
                    <p class="text-xs">IP: 123.123.123.123</p>
                  </div>
                </div>

                <div>
                  <p>
                    {{ date('Y-m-d H:i:s') }}
                  </p>
                  <p>Status: <span>Success!</span></p>
                </div>
              </div>
            </div>

            <div class="relative flex flex-wrap p-2 text-xs">
              <!-- loop over files. MAX 5 FILES! -->
              <span class="absolute top-[-10px] left-[15px] text-[1.6rem] rotate-90">📎</span>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem ipsum dolor sit.jpg</p>
              </div>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem ipsum dolor sit amet..png</p>
              </div>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem, ipsum dolor.rar</p>
              </div>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem ipsum dolor sit.zip</p>
              </div>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.docx</p>
              </div>
            </div>
          </div>
          <!-- end of thrid data transmision -->

          <!-- 3 more loops to put.. -->


          <!-- Transmisions Loop 5/page - END -->

          <!-- Paginate bottom half - START -->
          <div class="paginate flex justify-center items-center gap-4 my-2">
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">1</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">2</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">3</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">4</a>
          </div>
          <!-- Paginate bottom half - END -->
        </div>
      </div>
      <!-- Received Tab Content - END -->

      <!-- Sent Tab Content - START -->
      <div class="accordion-content transition" x-show="isActive === 2">
        <div class="relative flex flex-col flex-nowrap p-2">

          <!-- Paginate top half - START -->
          <div class="paginate flex justify-center items-center gap-4 mt-2">
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">1</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">2</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">3</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">4</a>
          </div>
          <!-- Paginate top half - END -->


          <!-- Transmisions Loop 5/page - START -->

          <!-- Start of first data transmision -->
          <div class="my-4 shadow-xl p-2">
            <div class="flex flex-nowrap items-center w-[100%]">
              <div class="flex justify-between  w-[100%] flex-wrap">
                <div class="flex flex-wrap gap-4">
                  <div>
                    <p class="text-md">To: user@email.com</p>
                    <p class="text-xs">IP: 123.123.123.123</p>
                  </div>
                </div>

                <div>
                  <p>
                    {{ date('Y-m-d H:i:s') }}
                  </p>
                  <p>Status: <span class="text-[#fc1010]">Fail!</span></p>
                </div>
              </div>
            </div>

            <!-- do not loop over files -->
          </div>
          <!-- end of first data transmision -->
          
          <!-- Start of second data transmision -->
          <div class="my-4 shadow-xl p-2">
            <div class="flex flex-nowrap items-center w-[100%]">
              <div class="flex justify-between  w-[100%] flex-wrap">
                <div class="flex flex-wrap gap-4">
                  <div>
                    <p class="text-md">To: user@email.com</p>
                    <p class="text-xs">IP: 123.123.123.123</p>
                  </div>
                </div>

                <div>
                  <p>
                    {{ date('Y-m-d H:i:s') }}
                  </p>
                  <p>Status: <span>Success!</span></p>
                </div>
              </div>
            </div>

            <div class="relative flex flex-wrap p-2 text-xs">
              <!-- loop over files. MAX 5 FILES! -->
              <span class="absolute top-[-10px] left-[15px] text-[1.6rem] rotate-90">📎</span>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem ipsum dolor sit.jpg</p>
              </div>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem ipsum dolor sit amet..png</p>
              </div>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem, ipsum dolor.rar</p>
              </div>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem ipsum dolor sit.zip</p>
              </div>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.docx</p>
              </div>
            </div>
          </div>
          <!-- end of second data transmision -->

          <!-- Start of thrid data transmision -->
          <div class="my-4 shadow-xl p-2">
            <div class="flex flex-nowrap items-center w-[100%]">
              <div class="flex justify-between  w-[100%] flex-wrap">
                <div class="flex flex-wrap gap-4">
                  <div>
                    <p class="text-md">To: user@email.com</p>
                    <p class="text-xs">IP: 123.123.123.123</p>
                  </div>
                </div>

                <div>
                  <p>
                    {{ date('Y-m-d H:i:s') }}
                  </p>
                  <p>Status: <span>Success!</span></p>
                </div>
              </div>
            </div>

            <div class="relative flex flex-wrap p-2 text-xs">
              <!-- loop over files. MAX 5 FILES! -->
              <span class="absolute top-[-10px] left-[15px] text-[1.6rem] rotate-90">📎</span>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem ipsum dolor sit.jpg</p>
              </div>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem ipsum dolor sit amet..png</p>
              </div>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem, ipsum dolor.rar</p>
              </div>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem ipsum dolor sit.zip</p>
              </div>
              <div class="flex flex-nowrap items-center"><span class="p-1 m-1 cursor-pointer transition active:shadow-[inset_0px_1px_2px_2px_black]">@include('components.dlsvg')</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.docx</p>
              </div>
            </div>
          </div>
          <!-- end of thrid data transmision -->

          <!-- 3 more loops to put.. -->


          <!-- Transmisions Loop 5/page - END -->

          <!-- Paginate bottom half - START -->
          <div class="paginate flex justify-center items-center gap-4 my-2">
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">1</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">2</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">3</a>
            <a href="#" class="px-2 py-1 rounded-xl text-white text-sm bg-[--c2]">4</a>
          </div>
          <!-- Paginate bottom half - END -->
        </div>
      </div>
      <!-- Sent Tab Content - END -->
    </div>


  </div>
  <!-- Files - END -->

</div>
@endsection
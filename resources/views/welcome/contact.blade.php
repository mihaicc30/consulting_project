<!-- Hero START -->
<div class="relative flex flex-col h-1/2 bg-[url('/herovideo.mp4')]">
    <video
        src="herovideo.mp4"
        class="video absolute"
        loop
        muted
        autoplay
    ></video>
    <div class="overlay relative flex flex-col">
        
        <!-- Mobile Navbar START -->
        <div x-data="{ isActive: false }" class="sm:hidden flex justify-end fixed right-0 z-30" >
      <button class="sm:hidden max-sm:flex relative justify-end mt-6 bg-[#ffffffc4] p-4" 
      @click="isActive = !isActive" :class="{ 'active': isActive }">
        <svg width="40px" height="40px" viewBox="-3.2 -3.2 38.40 38.40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <defs>
              <linearGradient x1="50%" y1="0%" x2="50%" y2="99.0447173%" id="linearGradient-1">
                <stop stop-color="#ff7300" offset="0%"> </stop>
                <stop stop-color="#e64100" offset="100%"> </stop>
              </linearGradient>
            </defs>
            <g id="icons" stroke-width="0.00032" fill="none" fill-rule="evenodd">
              <g id="ui-gambling-website-lined-icnos-casinoshunter" transform="translate(-994.000000, -1911.000000)" fill="url(#linearGradient-1)" fill-rule="nonzero">
                <g id="4" transform="translate(50.000000, 1871.000000)">
                  <path d="M974,58 C975.104569,58 976,58.8954305 976,60 C976,61.1045695 975.104569,62 974,62 L946,62 C944.895431,62 944,61.1045695 944,60 C944,58.8954305 944.895431,58 946,58 L974,58 Z M974,49 C975.104569,49 976,49.8954305 976,51 C976,52.1045695 975.104569,53 974,53 L946,53 C944.895431,53 944,52.1045695 944,51 C944,49.8954305 944.895431,49 946,49 L974,49 Z M974,40 C975.104569,40 976,40.8954305 976,42 C976,43.1045695 975.104569,44 974,44 L946,44 C944.895431,44 944,43.1045695 944,42 C944,40.8954305 944.895431,40 946,40 L974,40 Z" id="menu"> </path>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </button>
      <div class="grid grid-cols-2 justify-items-center gap-4 absolute top-[100%] p-4 right-0 bg-[#ffebde] w-[100vw]" x-show="isActive">
                <a  @click="isActive = !isActive" href="/" class="col-span-2 h-16 w-[87vw] text-center flex items-center justify-center text-xl font-bold shadow-xl border-b-2 border-b-[--c2] hover:bg-[--c2] transition rounded" >Home</a>
                <a  @click="isActive = !isActive" href="/services" class="h-16 w-[40vw] text-center flex items-center justify-center text-xl font-bold shadow-xl border-b-2 border-b-[--c2] hover:bg-[--c2] transition rounded" >Services</a>
                <a  @click="isActive = !isActive" href="/plans" class="h-16 w-[40vw] text-center flex items-center justify-center text-xl font-bold shadow-xl border-b-2 border-b-[--c2] hover:bg-[--c2] transition rounded" >Plans</a>
                <a  @click="isActive = !isActive" href="/contact" class="active h-16 w-[40vw] text-center flex items-center justify-center text-xl font-bold shadow-xl border-b-2 border-b-[--c2] hover:bg-[--c2] transition rounded" >Contact</a>
                <a  @click="isActive = !isActive" href="/about" class="h-16 w-[40vw] text-center flex items-center justify-center text-xl font-bold shadow-xl border-b-2 border-b-[--c2] hover:bg-[--c2] transition rounded" >About</a>
            </div>

        </div>
        <!-- Mobile Navbar END -->
        
        <!-- Navbar START -->
        <div class="max-sm:hidden flex relative justify-end mt-6 bg-[#ffffffc4]">
            <ul class="z-20 flex gap-4 pr-4 py-2">
                <a class="p-2 relative navButton font-[600]" href="/">
                    <span
                        class="absolute bg-white inset-0 z-10 rounded "
                    ></span>
                    <span class="z-20 relative">Home</span>
                </a>
                <a class="p-2 relative navButton font-[600]" href="/services">
                    <span
                        class="absolute bg-white inset-0 z-10 rounded "
                    ></span>
                    <span class="z-20 relative">Services</span>
                </a>

                <a class="p-2 relative navButton font-[600]" href="/plans">
                    <span
                        class="absolute bg-white inset-0 z-10 rounded"
                    ></span>
                    <span class="z-20 relative">Plans</span>
                </a>
                <a class="p-2 relative navButton font-[600]" href="/contact">
                    <span
                        class="absolute bg-white inset-0 z-10 rounded active"
                    ></span>
                    <span class="z-20 relative">Contact</span>
                </a>
                <a class="p-2 relative navButton font-[600]" href="/about">
                    <span
                        class="absolute bg-white inset-0 z-10 rounded"
                    ></span>
                    <span class="z-20 relative">About</span>
                </a>
            </ul>
        </div>
        <!-- Navbar END -->

        <div
            class="flex max-md:flex-col max-md:items-center max-md:text-center gap-2 m-auto justify-center py-[7rem]"
        >
            <div
                class="flex text-white flex-col justify-center basis-1/2 gap-4"
            >
                <h1 class="font-bold text-5xl tracking-wider">
                    Trusted Web File Transfer For Your Safety.
                </h1>
                <p>Dedicated resources with full access and easy scaling.</p>
                <div>
                    <button class="p-2 border-2 bg-[--c2] rounded mr-2">
                        Get Started
                    </button>
                    <button class="p-2 border-2 bg-white rounded text-black">
                        Contact Us
                    </button>
                </div>
            </div>
            <div class="basis-1/3">
                <img src="2.png" alt="" />
            </div>
        </div>
    </div>
</div>
<!-- Hero END -->

<!-- Services START -->
<div class="flex flex-col text-center mt-12">
    <h1 class="text-xl font-bold underline decoration-[--c2]">-What Do We Offer-</h1>
    <p class="text-xs">Services</p>
    <div
        class="grid grid-cols-2 lg:grid-cols-4 max-sm:grid-cols-1 my-4 gap-2 py-6"
    >
        <div class="p-4 border-2 flex flex-col">
            <svg width="90px" height="90px" class="mx-auto" viewBox="-1.6 -1.6 35.20 35.20" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16.0002 3L20.9992 10H11.0004L16.0002 3Z" fill="#FFC44D"></path> <path d="M10.9992 10L6.00017 3L1.00037 10H10.9992Z" fill="#FFC44D"></path> <path d="M30.9992 10L26.0002 3L21.0004 10H30.9992Z" fill="#FFC44D"></path> <path d="M10.9999 10.0002L15.9999 31.0002L20.9999 10.0002H10.9999Z" stroke="#ff8800" stroke-width="0.8320000000000001" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16 31L1 10H11L16 31Z" fill="#FFC44D"></path> <path d="M16 31L20.9998 10H30.9998L16 31Z" fill="#FFC44D"></path> <path d="M10.9994 10L6.00037 3H15.9992L10.9994 10Z" fill="#FFE6EA"></path> <path d="M20.9993 9.99988L16.0004 3H25.9992L20.9993 9.99988L16 30.9999L10.9994 10L20.9993 9.99988Z" fill="#FFE6EA"></path> <path d="M6 3L1 10M6 3H26M6 3L11 10M1 10L16 31M1 10H31M16 31L31 10M16 31L21 10M16 31L11 10M31 10L26 3M26 3L21 10M21 10L16 3L11 10" stroke="#ff8800" stroke-width="0.8320000000000001" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            <h2 class="text-xl font-bold">Reliabile</h2>
            <h2 class="text-xl font-bold">Service</h2>
            <p>
                Our services are known for their reliability and dependability. We understand the importance of providing consistent and trustworthy solutions to our clients.
            </p>
        </div>
        <div class="p-4 border-2 flex flex-col">
            <svg width="90px" height="90px" class="mx-auto" viewBox="-51.2 -51.2 614.40 614.40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet" fill="#ff7300" stroke="#ff7300" stroke-width="8.192"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#FFC145" d="M503.73 144.318c-8.358-8.358-21.908-8.358-30.266 0a21.316 21.316 0 0 0-4.768 7.271a38.405 38.405 0 0 1-20.641-10.683c-14.092-14.093-14.923-36.497-2.5-51.574c6.216.668 12.667-1.37 17.432-6.135c8.358-8.358 8.358-21.908 0-30.266c-8.358-8.358-21.908-8.358-30.266 0c-5.054 5.054-7.03 12.004-5.972 18.559c-6.768 5.39-15.093 8.324-23.873 8.324c-10.262 0-19.91-3.997-27.167-11.253c-8.212-8.212-12.212-19.654-11.035-31.117c.338-.298.682-.586 1.006-.909c8.358-8.358 8.358-21.908 0-30.266c-8.358-8.358-21.908-8.358-30.266 0c-8.358 8.358-8.358 21.908 0 30.266a21.384 21.384 0 0 0 4.576 3.463a62.931 62.931 0 0 0 12.852 39.514c-43.976-6.317-98.849 2.534-133.594 37.28c-25.299 25.299-25.484 65.939-.276 91.329c13.875 13.975 27.706 20.358 39.371 22.964l-30.147 30.147l-10.527-10.527c-5.057-5.056-13.254-5.056-18.312 0c-4.023 4.023-4.834 10.03-2.455 14.866c-4.836-2.379-10.843-1.568-14.867 2.456c-4.023 4.023-4.834 10.031-2.455 14.867c-4.836-2.379-10.844-1.568-14.867 2.455c-5.057 5.057-5.057 13.255 0 18.311l10.527 10.527L25.871 463.556c-7.702 7.701-7.702 20.189 0 27.891c3.851 3.852 8.898 5.777 13.946 5.777s10.095-1.926 13.946-5.777l13.748-13.748l23.927 23.927c2.695 2.695 6.228 4.043 9.76 4.043s7.065-1.348 9.761-4.043c5.391-5.391 5.39-14.131 0-19.521l-23.927-23.927l14.434-14.434l14.819 14.819c2.695 2.695 6.228 4.043 9.76 4.043s7.065-1.348 9.761-4.043c5.391-5.391 5.39-14.131 0-19.521l-14.818-14.818l12.366-12.366l23.927 23.927c2.695 2.695 6.228 4.043 9.761 4.043s7.065-1.348 9.761-4.043c5.391-5.391 5.391-14.131 0-19.521l-23.927-23.927l50.259-50.259l9.13 9.13c2.528 2.528 5.842 3.793 9.156 3.793s6.627-1.265 9.156-3.793c4.023-4.023 4.834-10.03 2.456-14.865a12.912 12.912 0 0 0 14.866-2.456c4.023-4.022 4.834-10.029 2.455-14.865a12.912 12.912 0 0 0 14.867-2.456c5.057-5.056 5.057-13.254 0-18.311l-9.13-9.13l30.897-30.897c2.201 11.861 8.558 26.466 23.87 41.778c25.296 25.296 66.31 25.296 91.606 0a65.975 65.975 0 0 0 2.132-2.243a35.225 35.225 0 0 0 1.646-1.535c30.796-30.796 38.186-87.068 31.113-132.27a62.913 62.913 0 0 0 37.886 12.693c.213 0 .427-.012.641-.015c8.378 6.216 20.255 5.549 27.853-2.048c8.353-8.362 8.353-21.912-.005-30.27zm-90.948-40.132c-.191-.191-.396-.377-.592-.566c.34-.05.675-.119 1.014-.175c-.055.335-.12.669-.169 1.005c-.085-.085-.167-.179-.253-.264z"></path><path fill="#FFF" d="M377.496 183.639c-12.067 12.067-31.63 12.067-43.697 0c-12.067-12.067-12.067-31.63 0-43.697c12.067-12.067 31.63-12.067 43.697 0c12.067 12.067 12.067 31.631 0 43.697z"></path></g></svg>
            <h2 class="text-xl font-bold">Data</h2>
            <h2 class="text-xl font-bold">Architecture</h2>
            <p>We specialize in designing and implementing robust data architecture solutions. Our team leverages industry best practices to create efficient and scalable data systems.</p>
        </div>
        <div class="p-4 border-2 flex flex-col">
            <svg width="90px" height="90px" class="mx-auto" viewBox="-4.8 -4.8 57.60 57.60" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ff7300"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M37 28.3923V35.4066C37 39.048 34.0885 42 30.497 42C26.9054 42 23.9939 39.048 23.9939 35.4066L24.0061 13.1429C24.0061 9.19797 21.0946 6 17.503 6C13.9115 6 11 9.19797 11 13.1429V28.3923" stroke="#ff7300" stroke-width="1.6799999999999997" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M43 31L37 25L31 31" stroke="#ff7300" stroke-width="1.6799999999999997" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M43 10.7273C43 15.1818 37 19 37 19C37 19 31 15.1818 31 10.7273C31 9.20831 31.6321 7.75155 32.7574 6.67748C33.8826 5.60341 35.4087 5 37 5C38.5913 5 40.1174 5.60341 41.2426 6.67748C42.3679 7.75155 43 9.20831 43 10.7273Z" fill="#ffcd42" stroke="#ff7300" stroke-width="1.6799999999999997" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M17 34.7273C17 39.1818 11 43 11 43C11 43 5 39.1818 5 34.7273C5 33.2083 5.63214 31.7516 6.75736 30.6775C7.88258 29.6034 9.4087 29 11 29C12.5913 29 14.1174 29.6034 15.2426 30.6775C16.3679 31.7516 17 33.2083 17 34.7273Z" fill="#ffcd42" stroke="#ff7300" stroke-width="1.6799999999999997" stroke-linecap="round" stroke-linejoin="round"></path> <circle cx="37" cy="11" r="2" fill="white"></circle> <circle cx="11" cy="35" r="2" fill="white"></circle> </g></svg>
            <h2 class="text-xl font-bold">Packet</h2>
            <h2 class="text-xl font-bold">Tracing</h2>
            <p>We offer packet tracing services to help you analyze and troubleshoot network issues. Our experts can trace packets, identify bottlenecks, and optimize your network performance.</p>
        </div>
        <div class="p-4 border-2 flex flex-col">
            <svg class="mx-auto" height="100px" width="100px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-50.35 -50.35 604.17 604.17" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g transform="translate(4 1)"> <path style="fill:#FFC33B;" d="M466.705,155.16l-56.32,157.867h-0.853c0-9.387-2.56-20.48-9.387-27.307 c-5.973-5.973-16.213-14.507-30.72-23.04l1.707-3.413l57.173-120.32c4.267-10.24,14.507-16.213,28.16-11.947 C470.118,131.267,470.971,141.507,466.705,155.16z M281.531,241.347v0.853c-18.773,0.853-35.84,3.413-51.2,6.827v-0.853V28.867 c0-14.507,11.093-25.6,25.6-25.6c14.507,0,25.6,11.093,25.6,25.6V241.347z M178.278,84.333L208.998,255 c-29.867,9.387-46.933,21.333-46.933,21.333L127.931,92.867c-2.56-13.653,6.827-27.307,20.48-29.867 C162.918,61.293,175.718,70.68,178.278,84.333z M362.598,45.933c13.653,2.56,23.04,15.36,20.48,29.867l-30.72,174.08l-1.707,3.413 c-13.653-5.12-30.72-9.387-49.493-11.093v-2.56l31.573-173.227C335.291,52.76,348.945,44.227,362.598,45.933z"></path> <path style="fill:#FFC33B;" d="M208.998,255c6.827-2.56,13.653-4.267,21.333-5.973c15.36-3.413,32.427-5.973,51.2-6.827 c2.56,0,5.973,0,8.533,0c4.267,0,7.68,0,11.093,0c18.773,0.853,35.84,5.12,49.493,11.093c6.827,2.56,12.8,5.973,18.773,8.533 c14.507,7.68,25.6,17.067,30.72,23.04c6.827,6.827,9.387,17.92,9.387,27.307c0,2.56,0,5.12-0.853,6.827 c0,0-25.6,119.467-34.133,145.067c-8.533,25.6-17.067,34.133-34.133,34.133H195.345c-17.067,0-34.133-25.6-34.133-25.6 L30.652,263.533c-5.973-9.387-9.387-16.213-0.853-24.747c17.92-17.92,45.227-8.533,63.147,11.947l68.267,76.8v-51.2l0,0 C162.065,276.333,179.131,264.387,208.998,255"></path> </g> <path style="fill:#ff7300;" d="M345.265,503.467H200.198c-18.773,0-36.693-26.453-37.547-27.307L32.091,267.093 c-5.12-8.533-11.093-18.773,0-29.867c7.68-7.68,16.213-11.093,26.453-11.093c14.507,0,29.867,8.533,42.667,23.04l68.267,76.8 c1.707,1.707,1.707,4.267,0,5.973c-1.707,1.707-4.267,1.707-5.973,0l-68.267-76.8C84.145,243.2,70.491,235.52,58.545,235.52 c-7.68,0-14.507,2.56-20.48,8.533c-5.973,5.973-5.12,9.387,1.707,19.627l130.56,209.067c4.267,6.827,18.773,23.893,30.72,23.893 h145.067c13.653,0,21.333-4.267,29.867-31.573c8.533-24.747,34.133-143.36,34.133-144.213c1.707-9.387,0-23.04-7.68-29.867 c-9.387-9.387-46.08-41.813-107.52-41.813c-73.387,0-123.733,32.427-125.44,33.28l-0.853,0.853c0,0,0,0-0.853,0 c-2.56,0.853-4.267-0.853-5.12-3.413L128.518,96.427c-1.707-7.68,0-16.213,5.12-22.187c5.12-5.973,11.093-11.093,19.627-11.947 c16.213-2.56,31.573,7.68,34.987,23.893l23.893,136.533c0,2.56-0.853,4.267-3.413,5.12c-2.56,0-4.267-0.853-5.12-3.413 L179.718,87.893c-0.853-5.973-4.267-10.24-8.533-13.653c-4.267-3.413-10.24-4.267-16.213-3.413 c-5.973,0.853-10.24,4.267-13.653,8.533s-4.267,10.24-3.413,16.213l32.427,177.493c15.36-8.533,61.44-31.573,124.587-31.573 c64.853,0,103.253,33.28,114.347,43.52c9.387,9.387,11.947,26.453,9.387,38.4c-0.853,5.12-25.6,120.32-34.133,145.92 C375.131,489.813,366.598,503.467,345.265,503.467z M302.598,435.2c-1.707,0-3.413-0.853-4.267-3.413 c-21.333-73.387-79.36-81.92-81.92-81.92s-4.267-2.56-3.413-5.12c0-2.56,2.56-4.267,5.12-3.413c0.853,0,65.707,9.387,88.747,88.747 c0.853,2.56-0.853,4.267-2.56,5.12C303.451,435.2,302.598,435.2,302.598,435.2z M370.865,332.8c-61.44,0-95.573-51.2-97.28-52.907 c-1.707-1.707-0.853-4.267,0.853-5.973c1.707-1.707,4.267-0.853,5.973,0.853c0,0.853,33.28,49.493,90.453,49.493 c2.56,0,4.267,1.707,4.267,4.267C375.131,331.093,373.425,332.8,370.865,332.8z M432.305,268.8c-0.853,0-0.853,0-1.707,0 c-2.56-0.853-3.413-3.413-2.56-5.12l38.4-108.373c2.56-6.827,3.413-12.8,1.707-16.213c-1.707-2.56-4.267-5.12-8.533-6.827 c-11.947-4.267-19.627,2.56-22.187,9.387l-42.667,93.013c-0.853,2.56-3.413,3.413-5.973,1.707c-2.56-0.853-3.413-3.413-1.707-5.973 l42.667-92.16c5.12-13.653,18.773-18.773,33.28-13.653c6.827,2.56,11.093,5.973,12.8,11.093c2.56,5.973,2.56,13.653-0.853,23.04 l-38.4,108.373C435.718,267.093,434.011,268.8,432.305,268.8z M362.331,224.427C361.478,224.427,361.478,224.427,362.331,224.427 c-3.413-0.853-4.267-2.56-4.267-5.12l25.6-143.36c1.707-11.947-5.973-23.04-17.067-24.747c-11.093-1.707-23.04,5.973-24.747,17.067 l-24.747,142.507c0,2.56-2.56,4.267-5.12,3.413c-2.56,0-4.267-2.56-3.413-5.12L333.318,66.56 c2.56-16.213,18.773-27.307,34.987-23.893c16.213,2.56,27.307,18.773,23.893,34.987l-25.6,143.36 C365.745,222.72,364.038,224.427,362.331,224.427z M234.331,221.867c-2.56,0-4.267-1.707-4.267-4.267V29.867 C230.065,13.653,243.718,0,259.931,0s29.867,13.653,29.867,29.867v181.76c0,2.56-1.707,4.267-4.267,4.267s-4.267-1.707-4.267-4.267 V29.867c0-11.947-9.387-21.333-21.333-21.333c-11.947,0-21.333,9.387-21.333,21.333V217.6 C238.598,220.16,236.891,221.867,234.331,221.867z"></path> </g></svg>
            <h2 class="text-xl font-bold">24/7</h2>
            <h2 class="text-xl font-bold">Support</h2>
            <p>We provide round-the-clock support to ensure that your systems run smoothly at all times. Our dedicated support team is available 24/7 to address any concerns or issues you may encounter.</p>
        </div>
    </div>
</div>
<!-- Services END -->

<!-- Timeline Start -->
<h1 class="text-xl font-bold m-auto mt-12 underline decoration-[--c2]">-How It Works-</h1>
<p class="m-auto text-xs">Process</p>
<div class="timeline ease-in duration-300 py-2 px-1 w-100 text-center">
    <div class="circle-container">
        <section class="tl no-border"></section>
        <section class="tr no-border"></section>
        <div class="flex items-center justify-center">
            <span class="circle">
                <img src="t1.png" alt="" />
            </span>
        </div>
        <section class="bl"></section>
        <section class="br"></section>
    </div>
    <section class="info no-border">
        <h2>Step 1: Upload Files</h2>
        <span class="text-xs"
            >The first step is to upload the files you want to transfer. You can
            select one or multiple files from your device and upload them to the
            platform.</span
        >
    </section>
    <section></section>
    <section></section>
    <section class="info">
        <h2>Step 2: Set Transfer Options</h2>
        <span class="text-xs"
            >After uploading the files, you can set the transfer options. This
            includes selecting the recipient(s) or specifying an email address
            to send the files to. Additionally, you can set optional parameters
            such as password protection for the files or expiration date for the
            transfer link.</span
        >
    </section>
    <div class="circle-container">
        <section class="tl"></section>
        <section class="tr"></section>
        <div class="flex items-center justify-center">
            <span class="circle">
                <img src="t2.png" alt="" />
            </span>
        </div>
        <section class="bl"></section>
        <section class="br"></section>
    </div>
    <div class="circle-container">
        <section class="tl"></section>
        <section class="tr"></section>
        <div class="flex items-center justify-center">
            <span class="circle">
                <img src="t3.png" alt="" />
            </span>
        </div>
        <section class="bl"></section>
        <section class="br"></section>
    </div>
    <section class="info">
        <h2>Step 3: Confirm and Initiate Transfer</h2>
        <span class="text-xs"
            >Once you have set the transfer options, you can review and confirm
            the details. This step allows you to double-check the recipient(s),
            transfer options, and any additional settings.
        </span>
    </section>
    <section></section>
    <section></section>
    <section class="info">
        <h2>Step 4: Track Transfer and Download</h2>
        <span class="text-xs"
            >After initiating the transfer, you can track the progress of the
            transfer. The platform should provide real-time updates on the
            status of the transfer, such as when the files are sent, received,
            or downloaded. Once the recipient(s) receive the transfer link, they
            can download the files securely.</span
        >
    </section>
    <div class="circle-container">
        <section class="tl"></section>
        <section class="tr"></section>
        <div class="flex items-center justify-center">
            <span class="circle">
                <img src="t4.png" alt="" />
            </span>
        </div>
        <section class="bl no-border"></section>
        <section class="br no-border"></section>
    </div>
</div>
<!-- Timeline END -->

<!-- Why Us START -->
<div class="flex flex-col text-center mt-12">
    <h1 class="text-xl font-bold  underline decoration-[--c2]">-Why Choose Us-</h1>
    <p class="text-xs">Attributes</p>
    <div
        class="grid grid-cols-4 max-md:grid-cols-2 max-[330px]:grid-cols-1 my-4 gap-2 py-6"
    >
        <div class="p-4 border-2">
            <svg class="mx-auto" height="100px" width="100px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-50.52 -50.52 606.21 606.21" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#FFC44D;" d="M217.6,243.2c17.92,2.56,17.92,25.6,17.92,25.6v153.6c0,17.067-8.533,34.133-25.6,51.2 c-17.067,17.067-42.667,25.6-42.667,25.6H22.187l102.4-76.8c8.533-5.12,15.36-23.04,17.067-34.133l25.6-170.667 c17.067-85.333,25.6-145.067,51.2-145.067c12.8,0,17.067,3.413,17.067,17.067c0,17.067-10.24,148.48-11.093,154.453L217.6,243.2z M280.747,245.76L280.747,245.76c0-0.853-11.093-139.093-11.093-156.16c0-13.653,4.267-17.067,17.067-17.067 c25.6,0,34.133,59.733,51.2,145.067l25.6,170.667c2.56,10.24,8.533,28.16,17.067,34.133l102.4,76.8H337.92 c0,0-25.6-8.533-42.667-25.6c-17.067-17.067-25.6-34.133-25.6-51.2V268.8C269.653,268.8,269.653,251.733,280.747,245.76z"></path> <path style="fill:#ff7300;" d="M337.92,503.467c-0.853,0-0.853,0-1.707,0c-0.853,0-26.453-9.387-44.373-26.453 c-17.92-17.92-26.453-35.84-26.453-54.613V268.8c0-10.24,5.12-29.867,25.6-29.867s25.6,28.16,25.6,29.013l8.533,110.933 c0,2.56-1.707,4.267-4.267,4.267s-4.267-1.707-4.267-4.267l-8.533-110.933l0,0c0,0-4.267-21.333-17.067-21.333 c-17.067,0-17.067,20.48-17.067,21.333v153.6c0,16.213,8.533,32.427,24.747,47.787c16.213,16.213,40.96,24.747,40.96,24.747 c2.56,0.853,3.413,3.413,2.56,5.12C341.333,502.613,339.627,503.467,337.92,503.467z M167.253,503.467 c-1.707,0-3.413-0.853-4.267-2.56c-0.853-2.56,0.853-4.267,2.56-5.12c0,0,24.747-8.533,40.96-24.747 c16.213-16.213,24.747-32.427,24.747-47.787v-153.6c0-0.853,0-21.333-17.067-21.333c-12.8,0-17.067,22.187-17.067,22.187 l-8.533,110.933c0,2.56-2.56,4.267-4.267,4.267c-2.56,0-4.267-2.56-4.267-4.267l8.533-110.933c0-1.707,5.12-29.867,25.6-29.867 s25.6,19.627,25.6,29.867v153.6c0,17.92-9.387,36.693-26.453,54.613c-17.92,17.92-43.52,26.453-44.373,26.453 C168.107,503.467,168.107,503.467,167.253,503.467z M482.987,503.467c-0.853,0-1.707,0-2.56-0.853l-102.4-76.8 c-10.24-6.827-16.213-26.453-18.773-36.693l-25.6-170.667c-1.707-9.387-3.413-17.92-5.12-26.453 c-12.8-64-22.187-114.347-41.813-114.347c-11.093,0-12.8,1.707-12.8,12.8c0,17.067,8.533,126.293,8.533,128 c0,2.56-1.707,4.267-4.267,4.267s-4.267-1.707-4.267-4.267c0-4.267-8.533-110.933-8.533-128c0-15.36,5.973-21.333,21.333-21.333 c26.453,0,34.987,46.08,50.347,121.173c1.707,8.533,3.413,17.92,5.12,27.307l25.6,170.667c2.56,11.093,8.533,26.453,15.36,31.573 l102.4,76.8c1.707,1.707,2.56,4.267,0.853,5.973C485.547,502.613,484.693,503.467,482.987,503.467z M22.187,503.467 c-1.707,0-2.56-0.853-3.413-1.707c-1.707-1.707-0.853-4.267,0.853-5.973l102.4-76.8c6.827-4.267,13.653-20.48,15.36-31.573 l25.6-170.667c1.707-9.387,3.413-18.773,5.12-27.307C182.613,113.493,192,68.266,218.453,68.266c15.36,0,21.333,5.973,21.333,21.333 c0,17.067-8.533,123.733-8.533,128c0,2.56-2.56,4.267-4.267,4.267c-2.56,0-4.267-2.56-4.267-4.267c0-0.853,8.533-110.933,8.533-128 c0-11.093-1.707-12.8-12.8-12.8c-19.627,0-29.013,50.347-41.813,114.347c-1.707,8.533-3.413,17.92-5.12,27.307l-25.6,170.667 c-1.707,11.093-8.533,30.72-18.773,36.693l-102.4,76.8C23.893,503.467,23.04,503.467,22.187,503.467z M466.773,379.733 c-0.853,0-1.707,0-2.56-0.853l-60.587-34.987c-1.707-0.853-2.56-3.413-1.707-5.973c0.853-1.707,3.413-2.56,5.973-1.707L468.48,371.2 c1.707,0.853,2.56,3.413,1.707,5.973C470.187,378.88,468.48,379.733,466.773,379.733z M38.4,379.733c-1.707,0-2.56-0.853-3.413-2.56 c-0.853-1.707-0.853-4.267,1.707-5.973l60.587-34.987c1.707-0.853,4.267-0.853,5.973,1.707c0.853,1.707,0.853,4.267-1.707,5.973 L40.96,378.88C40.107,379.733,39.253,379.733,38.4,379.733z M500.053,256h-102.4c-2.56,0-4.267-1.707-4.267-4.267 c0-2.56,1.707-4.267,4.267-4.267h102.4c2.56,0,4.267,1.707,4.267,4.267C504.32,254.293,502.613,256,500.053,256z M107.52,256 L107.52,256H5.12c-2.56,0-4.267-1.707-4.267-4.267c0-2.56,1.707-4.267,4.267-4.267l0,0h102.4c2.56,0,4.267,1.707,4.267,4.267 C111.787,254.293,110.08,256,107.52,256z M380.587,181.76c-1.707,0-2.56-0.853-3.413-2.56c-0.853-1.707-0.853-4.267,1.707-5.973 l86.187-49.493c1.707-0.853,4.267-0.853,5.973,1.707c0.853,1.707,0.853,4.267-1.707,5.973l-86.187,49.493 C382.293,181.76,381.44,181.76,380.587,181.76z M124.587,181.76c-0.853,0-1.707,0-1.707-0.853l-86.187-49.493 c-1.707-0.853-2.56-3.413-1.707-5.973c0.853-1.707,3.413-2.56,5.973-1.707l86.187,49.493c1.707,0.853,2.56,3.413,1.707,5.973 C127.147,181.76,126.293,181.76,124.587,181.76z M354.987,78.507c-0.853,0-1.707,0-2.56-0.853c-1.707-0.853-2.56-3.413-1.707-5.973 l21.333-36.693c0.853-1.707,3.413-2.56,5.973-1.707c1.707,0.853,2.56,3.413,1.707,5.973L358.4,75.947 C357.547,77.653,356.693,78.507,354.987,78.507z M150.187,78.507c-1.707,0-2.56-0.853-3.413-2.56L125.44,39.254 c-0.853-1.707-0.853-4.267,1.707-5.973c1.707-0.853,4.267-0.853,5.973,1.707l21.333,36.693c0.853,1.707,0.853,4.267-1.707,5.973 C151.893,78.507,151.04,78.507,150.187,78.507z M252.587,34.133c-2.56,0-4.267-1.707-4.267-4.267v-25.6 c0-2.56,1.707-4.267,4.267-4.267s4.267,1.707,4.267,4.267v25.6C256.853,32.427,255.147,34.133,252.587,34.133z"></path> </g></svg>
            <h2 class="text-xl font-bold">Users</h2>
            <p>22k+</p>
            <p>Join our community and experience the benefits of our services.</p>
        </div>
        <div class="p-4 border-2">
            <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" viewBox="-45.5 -45.5 546.01 546.01" xml:space="preserve" width="100px" height="100px" fill="#000000" stroke="#000000" stroke-width="0.0045501"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <rect x="118.145" y="296.859" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 472.3967 413.0449)" style="fill:#ff7300;" width="65.018" height="15"></rect> <path style="fill:#ffa629;" d="M405.217,290.221c-66.391,66.391-174.033,66.391-240.425,0l103.34-137.084l137.084-103.34 C471.608,116.188,471.608,223.829,405.217,290.221z"></path> <path style="fill:#ffbf00;" d="M405.217,49.796L164.792,290.221c-66.391-66.391-66.391-174.033,0-240.425 S338.825-16.595,405.217,49.796z"></path> <path style="fill:#FFF1CF;" d="M380.464,74.549L189.545,265.468c52.721,52.721,138.198,52.721,190.919,0 S433.185,127.27,380.464,74.549z"></path> <path style="fill:#FFFFFF;" d="M362.786,247.79c52.721-52.721,60.635-130.284,17.678-173.241 c-52.721-52.721-138.198-52.721-190.919,0s-52.721,138.198,0,190.919C232.503,308.425,310.065,300.511,362.786,247.79z"></path> <polygon style="fill:#ff7300;" points="94.081,332.643 87.01,367.998 122.365,360.927 150.649,332.643 122.365,304.359 "></polygon> <polygon style="fill:#ff7300;" points="94.081,332.643 0,426.724 14.142,440.866 68.253,400.897 108.223,346.785 "></polygon> <rect x="1.728" y="390.896" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -263.4856 165.6825)" style="fill:#ff7300;" width="133.05" height="20"></rect> <path style="fill:#E44670;" d="M326.978,98.417c-1.953,0-3.873,0.12-5.76,0.349l-36.153,163.8 C287.793,261.061,375,212.635,375,146.439C375,119.919,353.498,98.417,326.978,98.417z"></path> <path style="fill:#ff7300;" d="M321.218,98.766c18.011,2.88,31.964,23.127,31.964,47.673c0,66.033-65.749,114.393-68.116,116.127 c-0.044,0.022-0.065,0.033-0.065,0.033s-90-48.916-90-116.16c0-26.52,21.491-48.022,48.011-48.022 c18.087,0,33.796,10.015,41.989,24.775C292.298,110.024,305.596,100.632,321.218,98.766z"></path> </g> </g></svg>
            <h2 class="text-xl font-bold">Satisfaction</h2>
            <p>100%</p>
            <p>Striving to deliver exceptional service that exceeds our clients' expectations, resulting in a 100% satisfaction rate.</p>
        </div>
        <div class="p-4 border-2">
            <svg class="mx-auto" width="100px" height="100px" viewBox="-8.21 -8.21 98.56 98.56" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="star_gold_orange" data-name="star gold orange" transform="translate(-462.47 -619.736)"> <rect id="Rectangle_18" data-name="Rectangle 18" width="0.003" height="0.004" transform="translate(503.588 662.924) rotate(-29.055)" fill="gray"></rect> <rect id="Rectangle_19" data-name="Rectangle 19" width="0.002" height="0.002" transform="translate(503.591 662.923)" fill="gray"></rect> <path id="Path_72" data-name="Path 72" d="M503.592,662.926Z" fill="gray"></path> <path id="Path_73" data-name="Path 73" d="M503.592,662.923v0l41.02-13.494-27.587-5.138-13.433,18.629Z" fill="#f9c543"></path> <rect id="Rectangle_20" data-name="Rectangle 20" width="0.002" height="0.002" transform="translate(503.591 662.925)" fill="gray"></rect> <path id="Path_74" data-name="Path 74" d="M503.592,662.923Z" fill="gray"></path> <path id="Path_75" data-name="Path 75" d="M525.465,669.942l19.147-20.51-41.02,13.494Z" fill="#fdb53f"></path> <path id="Path_76" data-name="Path 76" d="M503.592,662.923Z" fill="gray"></path> <path id="Path_77" data-name="Path 77" d="M481.772,670.1,478.33,697.95l25.256-35.023Z" fill="#f9c543"></path> <path id="Path_78" data-name="Path 78" d="M503.586,662.926,478.33,697.95l25.345-12.057-.083-22.967Z" fill="#ff7300"></path> <path id="Path_79" data-name="Path 79" d="M517.025,644.294l-13.588-24.559.155,43.188Z" fill="#ff7300"></path> <path id="Path_80" data-name="Path 80" d="M503.592,662.926h0L529.1,697.77l-3.632-27.828Z" fill="#ff7300"></path> <path id="Path_81" data-name="Path 81" d="M503.592,662.926l.083,22.967L529.1,697.77l-25.505-34.844Z" fill="#fdb53f"></path> <path id="Path_82" data-name="Path 82" d="M503.592,662.923h0l-.155-43.187-13.416,24.652,13.57,18.535Z" fill="#f9c543"></path> <path id="Path_83" data-name="Path 83" d="M490.021,644.388l-27.551,5.336,41.122,13.2Z" fill="#fdb53f"></path> <path id="Path_84" data-name="Path 84" d="M503.592,662.923h0l-41.122-13.2,19.3,20.375,21.814-7.173Z" fill="#ff7300"></path> </g> </g></svg>
            <h2 class="text-xl font-bold">Reviews</h2>
            <p>4.9/5</p>
            <p>We are proud of the positive feedback and continuously work to maintain our high standards.</p>
        </div>
        <div class="p-4 border-2">
            <svg width="100px" height="100px" class="mx-auto" viewBox="-6.4 -6.4 76.80 76.80" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" fill="#000000" stroke="#000000" stroke-width="0.256"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style> .cls-1 { fill: #e7ecef; } .cls-2 { fill: #8b8c89; } .cls-3 { fill: #FFC44D; } .cls-4 { fill: #FFC44D; } .cls-5 { fill: #ffbe8a; } .cls-6 { fill: #ff8f33; } .cls-7 { fill: #ff8f33; } </style></defs><path class="cls-4" d="M30.86,28.86c.33-.23,.72-.36,1.14-.36,1.1,0,2,.9,2,2s-.9,2-2,2c-.36,0-.71-.1-1-.27v1.45c0,.34-.17,.64-.43,.83,3.23,3.09,7.61,4.99,12.43,4.99,9.94,0,18-8.06,18-18S52.94,3.5,43,3.5s-17.91,7.97-18,17.84c1.15,.5,2.19,1.21,3.07,2.09,1.44,1.44,2.45,3.32,2.79,5.43Z"></path><path class="cls-5" d="M25.58,39.54l-3,1.29c-1.01,.43-2.15,.43-3.15,0l-3-1.29c-1.47-.63-2.42-2.08-2.42-3.68v-5.36c0-3.31,2.69-6,6-6h2c3.31,0,6,2.69,6,6v5.36c0,1.6-.95,3.05-2.42,3.68Z"></path><path class="cls-7" d="M34.14,45.5c-1.82-1.85-4.35-3-7.14-3h-3c0,1.66-1.34,3-3,3s-3-1.34-3-3h-3c-5.52,0-10,4.48-10,10v7H27l4-14h3.14Z"></path><path class="cls-5" d="M16,55.5h2c1.1,0,2,.9,2,2v2h-4v-4h0Z"></path><path class="cls-7" d="M11,32.23c-.29,.17-.64,.27-1,.27-1.1,0-2-.9-2-2s.9-2,2-2c.42,0,.81,.13,1.14,.36"></path><path class="cls-7" d="M31,32.23c.29,.17,.64,.27,1,.27,1.1,0,2-.9,2-2s-.9-2-2-2c-.42,0-.81,.13-1.14,.36"></path><path class="cls-3" d="M18,40.21l1.42,.61c1.01,.44,2.15,.44,3.16,0l1.42-.61v2.29c0,1.66-1.34,3-3,3s-3-1.34-3-3v-2.29Z"></path><polyline class="cls-2" points="27 59.5 31 45.5 53 45.5 49 59.5"></polyline><path class="cls-7" d="M27.4,27.88h-.01c-.57-.23-1.23-.38-2.06-.38-4.33,0-4.33,4-8.67,4-1.13,0-1.97-.27-2.66-.67v-.33c0-3.31,2.69-6,6-6h2c2.37,0,4.42,1.38,5.39,3.38h.01Z"></path><path class="cls-1" d="M28,35.1v-4.6c0-3.31-2.69-6-6-6h-2c-3.31,0-6,2.69-6,6v4h-2c-.55,0-1-.45-1-1v-3c0-5.52,4.48-10,10-10,2.76,0,5.26,1.12,7.07,2.93s2.93,4.31,2.93,7.07v3.18c0,.48-.34,.89-.8,.98l-2.2,.44Z"></path><path class="cls-4" d="M40,51.5c.55,0,1,.45,1,1s-.45,1-1,1v-2Z"></path><path class="cls-6" d="M21,59.5h-2v-2c0-.55-.45-1-1-1h-7c-.55,0-1-.45-1-1v-4c0-.27,.11-.52,.29-.71l2-2,1.41,1.41-1.71,1.71v2.59h6c1.65,0,3,1.35,3,3v2Z"></path><rect class="cls-4" height="2" width="50" x="3" y="58.5"></rect><path class="cls-6" d="M37.02,38.47c-1.44-.5-2.78-1.18-4.02-2.01,4.82-3.22,8-8.72,8-14.96,0-1.1,.9-2,2-2s2,.9,2,2c0,6.83-3.11,12.93-7.99,16.98h.01Z"></path><path class="cls-6" d="M47.39,38.95h0c-1.41,.36-2.88,.55-4.39,.55-.41,0-.82-.01-1.22-.04,4.48-4.66,7.22-10.99,7.22-17.96,0-3.31-2.69-6-6-6s-6,2.69-6,6-1.13,6.3-3.03,8.69c0,0,0,0,0,0h0c-.15-.97-.98-1.7-1.97-1.7-.42,0-.81,.13-1.14,.36-.05-.32-.11-.63-.2-.94,1.46-1.74,2.34-3.98,2.34-6.42,0-5.52,4.48-10,10-10s10,4.48,10,10c0,6.51-2.08,12.54-5.61,17.46"></path><path class="cls-6" d="M28.5,23.89c.32-.73,.5-1.54,.5-2.39,0-7.73,6.27-14,14-14s14,6.27,14,14c0,5.14-1.14,10.02-3.18,14.38,4.36-3.28,7.18-8.5,7.18-14.38,0-9.94-8.06-18-18-18s-17.91,7.97-18,17.84c1.15,.5,2.19,1.21,3.07,2.09,.15,.15,.29,.3,.43,.46Z"></path><path class="cls-7" d="M21,36.5h0c-.11-.54,.24-1.07,.78-1.18l8.22-1.64v-2.86c0-4.79-3.61-8.98-8.38-9.3-5.24-.35-9.62,3.81-9.62,8.98v3h2v2h-2c-1.1,0-2-.9-2-2v-2.68c0-5.72,4.24-10.74,9.94-11.27,6.54-.62,12.06,4.53,12.06,10.95v3.18c0,.95-.67,1.77-1.61,1.96l-8.22,1.64c-.54,.11-1.07-.24-1.18-.78Z"></path></g></svg>
            <h2 class="text-xl font-bold">Security</h2>
            <p>100%</p>
            <p>We implement robust security measures to safeguard your information, giving you peace of mind.</p>
        </div>
    </div>
</div>
<!-- Why Us END -->

<!-- Support START -->
<div class="relative flex flex-col h-fit mt-12 bg-[url('/8.jpg')]">
    <div class="overlay z-20 inset-0 flex flex-col relative">
        <span
            class="flex flex-wrap text-xl font-bold mx-auto mt-8 gap-2 max-[350px]:flex-col max-[350px]:items-center underline decoration-[--c2]"
        >
            -<span class="whitespace-normal">Best Technical</span
            ><span class="whitespace-normal">Support 24/7</span>-
        </span>
        <p class="text-xs mx-auto">Support and Guidance</p>
        <div
            class="grid grid-cols-2 max-sm:grid-cols-1 m-auto justify-center py-6"
        >
            <div
                class="flex text-white flex-col justify-center basis-1/2 gap-4 mx-8"
            >
                <p class="font-[600]">Anything. Anywhere. Anytime.</p>
                <p class="text-sm">
                    EZEPOST can assist you in regaining crucial time. We are here to assist you in determining the root cause of those recurring issues and determining the best strategy to prevent them from recurring in the future. IT Support difficulties can have a significant impact on your day-to-day operations, and your present IT personnel may not always be proactive. So, whether your firm need occasional remote IT help or outsources all of its IT services, we have a solution that provides flexible, cost-effective, and personalised technical support.
                </p>
                <p class="font-bold">Call Us : 12345-123-123</p>
                <p class="font-bold">Email Us : email@emai.email</p>
            </div>
            <div class="basis-1/3">
                <img src="3.png" class="m-auto" />
            </div>
        </div>
    </div>
</div>
<!-- Support END -->

<!-- Reviews START -->
<div class="relative flex flex-col items-center mt-12">
    <h1 class="text-xl font-bold text-center  underline decoration-[--c2]">-What Do People Say About Us-</h1>
    <p class="text-sm">Client Reviews</p>

    <div class="grid grid-cols-[.3fr,.7fr] max-sm:grid-cols-1 gap-4 mt-12 w-100">
        <div class="flex flex-col px-8">
            <span class="font-bold text-end text-5xl"><svg class="ml-auto" fill="#ffa200" width="32px" height="32px" viewBox="-2 -2 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#ffa200"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3 0 1.656 1.306 3 2.916 3 2.915 0 .972 5.799-2.916 5.799v1.4c6.939.001 9.658-13.199 2.916-13.199zm8.4 0c-1.609 0-2.915 1.343-2.915 3 0 1.656 1.306 3 2.915 3 2.916 0 .973 5.799-2.915 5.799v1.4c6.938.001 9.657-13.199 2.915-13.199z"></path></g></svg></span>
            <p class="whitespace-nowrap text-3xl text-end">Clients Say</p>
        </div>

        <div class="flex gap-4 overflow-x-scroll">
            <div class="flex flex-col max-w-[250px] border-2 p-2 shadow-xl rounded min-w-[200px]">
                <div class="flex gap-2">
                    <img
                        src="https://randomuser.me/api/portraits/men/41.jpg"
                        alt="avatar"
                        class="h-10 w-auto rounded-full"
                    />
                    <div class="mr-auto">
                        <p>John Doe</p>
                        <p class="text-xs font-bold">March 15, 2023</p>
                    </div>
                    <span><svg fill="#ffa200" width="32px" height="32px" viewBox="-2 -2 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#ffa200"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3 0 1.656 1.306 3 2.916 3 2.915 0 .972 5.799-2.916 5.799v1.4c6.939.001 9.658-13.199 2.916-13.199zm8.4 0c-1.609 0-2.915 1.343-2.915 3 0 1.656 1.306 3 2.915 3 2.916 0 .973 5.799-2.915 5.799v1.4c6.938.001 9.657-13.199 2.915-13.199z"></path></g></svg></span>
                </div>
                <p class="text-xs">
                    EZEPOSE is a game-changer! Simplifies my business operations and boosts efficiency.
                </p>
            </div>
            
            <div class="flex flex-col max-w-[250px] border-2 p-2 shadow-xl rounded min-w-[200px]">
                <div class="flex gap-2">
                    <img
                        src="https://randomuser.me/api/portraits/women/56.jpg"
                        alt="avatar"
                        class="h-10 w-auto rounded-full"
                    />
                    <div class="mr-auto">
                        <p>Jane Smith</p>
                        <p class="text-xs font-bold">June 5, 2023</p>
                    </div>
                    <span><svg fill="#ffa200" width="32px" height="32px" viewBox="-2 -2 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#ffa200"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3 0 1.656 1.306 3 2.916 3 2.915 0 .972 5.799-2.916 5.799v1.4c6.939.001 9.658-13.199 2.916-13.199zm8.4 0c-1.609 0-2.915 1.343-2.915 3 0 1.656 1.306 3 2.915 3 2.916 0 .973 5.799-2.915 5.799v1.4c6.938.001 9.657-13.199 2.915-13.199z"></path></g></svg></span>
                </div>
                <p class="text-xs">
                    Using EZEPOSE has significantly improved my sales tracking and inventory management.
                </p>
            </div>
            
            <div class="flex flex-col max-w-[250px] border-2 p-2 shadow-xl rounded min-w-[200px]">
                <div class="flex gap-2">
                    <img
                        src="https://randomuser.me/api/portraits/men/22.jpg"
                        alt="avatar"
                        class="h-10 w-auto rounded-full"
                    />
                    <div class="mr-auto">
                        <p>Emily Johnson</p>
                        <p class="text-xs font-bold">August 20, 2023</p>
                    </div>
                    <span><svg fill="#ffa200" width="32px" height="32px" viewBox="-2 -2 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#ffa200"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3 0 1.656 1.306 3 2.916 3 2.915 0 .972 5.799-2.916 5.799v1.4c6.939.001 9.658-13.199 2.916-13.199zm8.4 0c-1.609 0-2.915 1.343-2.915 3 0 1.656 1.306 3 2.915 3 2.916 0 .973 5.799-2.915 5.799v1.4c6.938.001 9.657-13.199 2.915-13.199z"></path></g></svg></span>
                </div>
                <p class="text-xs">
                    EZEPOSE has streamlined my checkout process, making transactions quick and hassle-free.
                </p>
            </div>
            
            <div class="flex flex-col max-w-[250px] border-2 p-2 shadow-xl rounded min-w-[200px]">
                <div class="flex gap-2">
                    <img
                        src="https://randomuser.me/api/portraits/women/87.jpg"
                        alt="avatar"
                        class="h-10 w-auto rounded-full"
                    />
                    <div class="mr-auto">
                        <p>Michael Brown</p>
                        <p class="text-xs font-bold">October 10, 2023</p>
                    </div>
                    <span><svg fill="#ffa200" width="32px" height="32px" viewBox="-2 -2 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#ffa200"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3 0 1.656 1.306 3 2.916 3 2.915 0 .972 5.799-2.916 5.799v1.4c6.939.001 9.658-13.199 2.916-13.199zm8.4 0c-1.609 0-2.915 1.343-2.915 3 0 1.656 1.306 3 2.915 3 2.916 0 .973 5.799-2.915 5.799v1.4c6.938.001 9.657-13.199 2.915-13.199z"></path></g></svg></span>
                </div>
                <p class="text-xs">
                    With EZEPOSE, I can easily generate detailed sales reports and analyze my business performance.
                </p>
            </div>
            
            <div class="flex flex-col max-w-[250px] border-2 p-2 shadow-xl rounded min-w-[200px]">
                <div class="flex gap-2">
                    <img
                        src="https://randomuser.me/api/portraits/men/78.jpg"
                        alt="avatar"
                        class="h-10 w-auto rounded-full"
                    />
                    <div class="mr-auto">
                        <p>Sarah Wilson</p>
                        <p class="text-xs font-bold">November 27, 2023</p>
                    </div>
                    <span><svg fill="#ffa200" width="32px" height="32px" viewBox="-2 -2 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#ffa200"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3 0 1.656 1.306 3 2.916 3 2.915 0 .972 5.799-2.916 5.799v1.4c6.939.001 9.658-13.199 2.916-13.199zm8.4 0c-1.609 0-2.915 1.343-2.915 3 0 1.656 1.306 3 2.915 3 2.916 0 .973 5.799-2.915 5.799v1.4c6.938.001 9.657-13.199 2.915-13.199z"></path></g></svg></span>
                </div>
                <p class="text-xs">
                    EZEPOSE is user-friendly and offers excellent support. Highly recommended for small businesses.
                </p>
            </div>
            
            <div class="flex flex-col max-w-[250px] border-2 p-2 shadow-xl rounded min-w-[200px]">
                <div class="flex gap-2">
                    <img
                        src="https://randomuser.me/api/portraits/women/32.jpg"
                        alt="avatar"
                        class="h-10 w-auto rounded-full"
                    />
                    <div class="mr-auto">
                        <p>David Thompson</p>
                        <p class="text-xs font-bold">December 12, 2023</p>
                    </div>
                    <span><svg fill="#ffa200" width="32px" height="32px" viewBox="-2 -2 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#ffa200"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3 0 1.656 1.306 3 2.916 3 2.915 0 .972 5.799-2.916 5.799v1.4c6.939.001 9.658-13.199 2.916-13.199zm8.4 0c-1.609 0-2.915 1.343-2.915 3 0 1.656 1.306 3 2.915 3 2.916 0 .973 5.799-2.915 5.799v1.4c6.938.001 9.657-13.199 2.915-13.199z"></path></g></svg></span>
                </div>
                <p class="text-xs">
                    EZEPOSE is an incredible point of sale system! It has revolutionized how I manage my business.
                </p>
            </div>
            

        </div>
    </div>
</div>
<!-- Reviews END -->

<!-- Footer START -->
<div class="relative mt-12 text-white bg-[url('/9.jpg')]">
    <div class="overlay z-20 inset-0 flex flex-col relative">
        <div
            class="grid grid-cols-4 mx-4 mt-4 z-30 max-sm:grid-cols-2 max-[400px]:grid-cols-1"
        >
            <div class="flex flex-col p-2 gap-4 text-xs">
                <div>
                    <svg
                        class="block h-8 w-auto grow mt-2 max-sm:h-8"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1"
                        id="Layer_1"
                        x="0px"
                        y="0px"
                        viewBox="0 0 131.4 80"
                        style="enable-background: new 0 0 131.4 80"
                        xml:space="preserve"
                    >
                        <style type="text/css">
                            .st0 {
                                fill: #e53323;
                            }
                            .st1 {
                                fill: url(#SVGID_1_);
                            }
                            .st2 {
                                fill: url(#SVGID_00000056394859992788285620000016356982458054443397_);
                            }
                            .st3 {
                                fill: #ffcb00;
                            }
                            .st4 {
                                fill: url(#SVGID_00000129194780860868990140000007357946114950875017_);
                            }
                            .st5 {
                                fill: #f29100;
                            }
                        </style>
                        <path
                            class="st0"
                            d="M38.5,44.3v6.1c0,0.5-0.4,1-1,1H1c-0.5,0-1-0.4-1-1V1c0-0.5,0.4-1,1-1h35.5c0.5,0,1,0.4,1,1V7c0,0.5-0.4,1-1,1  h-27v13.3h23.8c0.5,0,1,0.4,1,1v5.9c0,0.5-0.4,1-1,1H9.5v14.1h28C38,43.3,38.5,43.7,38.5,44.3z"
                        ></path>
                        <path
                            class="st0"
                            d="M131.4,44.3v6.1c0,0.5-0.4,1-1,1H93.9c-0.5,0-1-0.4-1-1V1c0-0.5,0.4-1,1-1h35.5c0.5,0,1,0.4,1,1V7  c0,0.5-0.4,1-1,1h-27v13.3h23.8c0.5,0,1,0.4,1,1v5.9c0,0.5-0.4,1-1,1h-23.8v14.1h28C131,43.3,131.4,43.7,131.4,44.3z"
                        ></path>
                        <path
                            class="st0"
                            d="M81.5,37.9c3.7,0,6.7,3,6.7,6.7c0,3.7-3,6.7-6.7,6.7c-3.7,0-6.7-3-6.7-6.7C74.8,40.9,77.8,37.9,81.5,37.9"
                        ></path>
                        <linearGradient
                            id="SVGID_1_"
                            gradientUnits="userSpaceOnUse"
                            x1="51.016"
                            y1="44.5926"
                            x2="75.541"
                            y2="44.5926"
                        >
                            <stop offset="0" style="stop-color: #bf0d0d"></stop>
                            <stop
                                offset="9.322089e-02"
                                style="stop-color: #c71512"
                            ></stop>
                            <stop
                                offset="0.3551"
                                style="stop-color: #d8261b"
                            ></stop>
                            <stop
                                offset="0.6423"
                                style="stop-color: #e23021"
                            ></stop>
                            <stop offset="1" style="stop-color: #e53323"></stop>
                        </linearGradient>
                        <path
                            class="st1"
                            d="M72.5,44.6c0-2.7,1.2-5.1,3-6.7H57.7c-3.7,0-6.7,3-6.7,6.7c0,3.7,3,6.7,6.7,6.7h17.8  C73.7,49.7,72.5,47.3,72.5,44.6z"
                        ></path>
                        <linearGradient
                            id="SVGID_00000132772404809936920710000015471056043988234416_"
                            gradientUnits="userSpaceOnUse"
                            x1="45.9171"
                            y1="49.0714"
                            x2="79.4457"
                            y2="10.1596"
                        >
                            <stop offset="0" style="stop-color: #e95a0c"></stop>
                            <stop
                                offset="0.25"
                                style="stop-color: #f29100"
                            ></stop>
                            <stop
                                offset="0.7505"
                                style="stop-color: #f29100"
                            ></stop>
                            <stop offset="1" style="stop-color: #e95a0c"></stop>
                        </linearGradient>
                        <path
                            style="
                                fill: url(#SVGID_00000132772404809936920710000015471056043988234416_);
                            "
                            d="M57.7,51.3c-1.3,0-2.5-0.5-3.4-1.5  c-1.6-1.9-1.4-4.7,0.5-6.3l25.7-22.2c2.8-2.4,3.1-6.6,0.7-9.5c-2.4-2.8-6.6-3.1-9.5-0.7L45.7,33.6c-4.2,3.6-4.7,10-1.1,14.2  c2,2.3,4.8,3.5,7.6,3.5L57.7,51.3z"
                        ></path>
                        <path
                            class="st3"
                            d="M48.9,0c3.7,0,6.7,3,6.7,6.7c0,3.7-3,6.7-6.7,6.7c-3.7,0-6.7-3-6.7-6.7C42.2,3,45.2,0,48.9,0"
                        ></path>
                        <linearGradient
                            id="SVGID_00000074440112933318192930000005754585911127858072_"
                            gradientUnits="userSpaceOnUse"
                            x1="54.8232"
                            y1="10.6357"
                            x2="88.1831"
                            y2="10.6357"
                        >
                            <stop offset="0" style="stop-color: #ffcb00"></stop>
                            <stop
                                offset="0.3577"
                                style="stop-color: #fec800"
                            ></stop>
                            <stop
                                offset="0.6449"
                                style="stop-color: #fcbe00"
                            ></stop>
                            <stop
                                offset="0.9068"
                                style="stop-color: #f8ad00"
                            ></stop>
                            <stop offset="1" style="stop-color: #f6a500"></stop>
                        </linearGradient>
                        <path
                            style="
                                fill: url(#SVGID_00000074440112933318192930000005754585911127858072_);
                            "
                            d="M85.7,3.5c-2-2.3-4.8-3.5-7.6-3.5H54.8  c1.9,1.6,3,4,3,6.7c0,2.7-1.2,5.1-3,6.7l22.8,0c1.3,0,2.5,0.5,3.4,1.6c1.6,1.9,1.4,4.7-0.5,6.3l4.1-3.6C88.9,14.1,89.4,7.7,85.7,3.5  z"
                        ></path>
                        <g>
                            <path
                                class="st5"
                                d="M12.8,61.1c1.2,0.6,2.2,1.3,2.9,2.4c0.7,1,1,2.3,1,3.7c0,1.4-0.3,2.6-1,3.7c-0.7,1-1.6,1.8-2.9,2.4   c-1.2,0.6-2.7,0.8-4.4,0.8H4v5.6H0.4V60.3h8C10.1,60.3,11.5,60.6,12.8,61.1z M11.8,70.1c0.8-0.7,1.2-1.6,1.2-2.9   c0-1.2-0.4-2.2-1.2-2.9c-0.8-0.7-2-1-3.6-1H4v7.7h4.2C9.8,71.1,11,70.7,11.8,70.1z"
                            ></path>
                            <path
                                class="st5"
                                d="M42.7,78.7c-1.6-0.9-2.8-2.1-3.7-3.6c-0.9-1.5-1.4-3.2-1.4-5.1s0.5-3.6,1.4-5.1c0.9-1.5,2.2-2.7,3.7-3.6   s3.4-1.3,5.4-1.3c2,0,3.8,0.4,5.4,1.3c1.6,0.9,2.8,2,3.7,3.6c0.9,1.5,1.4,3.2,1.4,5.1c0,1.9-0.5,3.6-1.4,5.1   c-0.9,1.5-2.2,2.7-3.7,3.6c-1.6,0.9-3.4,1.3-5.4,1.3C46.1,80,44.3,79.6,42.7,78.7z M51.6,76c1-0.6,1.8-1.4,2.4-2.4   c0.6-1,0.9-2.2,0.9-3.5s-0.3-2.5-0.9-3.5c-0.6-1-1.4-1.9-2.4-2.4c-1-0.6-2.2-0.9-3.5-0.9c-1.3,0-2.5,0.3-3.5,0.9   c-1,0.6-1.8,1.4-2.4,2.4c-0.6,1-0.9,2.2-0.9,3.5s0.3,2.5,0.9,3.5c0.6,1,1.4,1.9,2.4,2.4c1,0.6,2.2,0.9,3.5,0.9   C49.4,76.8,50.6,76.5,51.6,76z"
                            ></path>
                            <path
                                class="st5"
                                d="M82.5,79.4c-1.4-0.4-2.5-1-3.3-1.7l1.2-2.8c0.8,0.6,1.8,1.1,2.9,1.5c1.2,0.4,2.3,0.6,3.5,0.6   c1.4,0,2.5-0.2,3.2-0.7c0.7-0.5,1.1-1.1,1.1-1.8c0-0.6-0.2-1-0.6-1.4c-0.4-0.4-0.9-0.6-1.5-0.8c-0.6-0.2-1.4-0.4-2.5-0.7   c-1.5-0.4-2.7-0.7-3.6-1.1c-0.9-0.4-1.7-0.9-2.4-1.7c-0.7-0.7-1-1.8-1-3c0-1.1,0.3-2,0.9-2.9c0.6-0.9,1.5-1.6,2.6-2.1   c1.2-0.5,2.6-0.8,4.3-0.8c1.2,0,2.3,0.1,3.5,0.4c1.1,0.3,2.1,0.7,3,1.3l-1.1,2.8c-0.9-0.5-1.7-0.9-2.7-1.1   c-0.9-0.3-1.8-0.4-2.7-0.4c-1.4,0-2.5,0.2-3.2,0.7c-0.7,0.5-1,1.1-1,1.9c0,0.6,0.2,1,0.6,1.4c0.4,0.4,0.9,0.6,1.5,0.8   s1.4,0.4,2.5,0.7c1.4,0.3,2.6,0.7,3.5,1c0.9,0.4,1.7,0.9,2.4,1.7c0.7,0.7,1,1.7,1,3c0,1.1-0.3,2-0.9,2.9c-0.6,0.9-1.5,1.6-2.6,2.1   C90,79.7,88.5,80,86.8,80C85.3,80,83.9,79.8,82.5,79.4z"
                            ></path>
                            <path
                                class="st5"
                                d="M121.1,63.4h-6.4v-3.1h16.5v3.1h-6.4v16.4h-3.6V63.4z"
                            ></path>
                        </g>
                    </svg>
                </div>
                <p>Your Trusted Partner for Effortless Shipping and Maximum Security.</p>

                <p class="inline-flex items-center"><svg width="34px" height="34px" viewBox="0 0 1024.00 1024.00" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M729.6 870.4c0 28.16-23.04 51.2-51.2 51.2H345.6c-28.16 0-51.2-23.04-51.2-51.2V179.2c0-28.16 23.04-51.2 51.2-51.2h332.8c28.16 0 51.2 23.04 51.2 51.2v691.2z" fill="#e2ada7"></path><path d="M678.4 934.4H345.6c-35.84 0-64-28.16-64-64V179.2c0-35.84 28.16-64 64-64h332.8c35.84 0 64 28.16 64 64v691.2c0 35.84-28.16 64-64 64zM345.6 140.8c-21.76 0-38.4 16.64-38.4 38.4v691.2c0 21.76 16.64 38.4 38.4 38.4h332.8c21.76 0 38.4-16.64 38.4-38.4V179.2c0-21.76-16.64-38.4-38.4-38.4H345.6z" fill="#231C1C"></path><path d="M691.2 744.96c0 12.8-11.52 23.04-25.6 23.04H358.4c-14.08 0-25.6-10.24-25.6-23.04V253.44c0-12.8 11.52-23.04 25.6-23.04h307.2c14.08 0 25.6 10.24 25.6 23.04v491.52z" fill="#F2E5CA"></path><path d="M665.6 780.8H358.4c-21.76 0-38.4-16.64-38.4-35.84V253.44c0-20.48 16.64-35.84 38.4-35.84h307.2c21.76 0 38.4 16.64 38.4 35.84v491.52c0 19.2-16.64 35.84-38.4 35.84zM358.4 243.2c-7.68 0-12.8 5.12-12.8 10.24v491.52c0 5.12 5.12 10.24 12.8 10.24h307.2c7.68 0 12.8-5.12 12.8-10.24V253.44c0-5.12-5.12-10.24-12.8-10.24H358.4z" fill="#231C1C"></path><path d="M512 844.8m-38.4 0a38.4 38.4 0 1 0 76.8 0 38.4 38.4 0 1 0-76.8 0Z" fill="#D4594C"></path><path d="M512 896c-28.16 0-51.2-23.04-51.2-51.2s23.04-51.2 51.2-51.2 51.2 23.04 51.2 51.2-23.04 51.2-51.2 51.2z m0-76.8c-14.08 0-25.6 11.52-25.6 25.6s11.52 25.6 25.6 25.6 25.6-11.52 25.6-25.6-11.52-25.6-25.6-25.6z" fill="#231C1C"></path><path d="M460.8 166.4h102.4v25.6h-102.4z" fill="#231C1C"></path></g></svg> +44 12345 123 123</p>
                <p class="inline-flex items-center"><svg width="34px" height="34px" version="1.1" id="_x35_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-112.64 -112.64 737.28 737.28" xml:space="preserve" width="64px" height="64px" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <polygon style="fill:#C0AC7E;" points="511.401,173.663 502.513,179.269 458.244,207.066 268.606,326.073 266.213,327.652 265.699,327.968 256.043,334.048 255.701,334.207 247.753,329.232 246.299,328.284 66.659,215.516 54.439,207.856 0.598,174.057 0,173.663 54.439,139.469 249.548,16.988 261.854,16.988 458.244,140.258 464.74,144.365 "></polygon> <path style="fill:#B6995F;" d="M467.859,16.065v383.862c0,8.807-7.88,15.985-17.641,15.985H62.29 c-9.671,0-17.551-7.178-17.551-15.985V16.065C44.739,7.176,52.619,0,62.29,0h387.928C459.978,0,467.859,7.176,467.859,16.065z"></path> <g> <g> <rect x="110.787" y="75.101" style="fill:#DAB99E;" width="190.508" height="25.378"></rect> <rect x="110.787" y="71.093" style="fill:#8F816A;" width="190.508" height="25.378"></rect> </g> <g> <rect x="110.787" y="214.682" style="fill:#DAB99E;" width="289.501" height="25.378"></rect> <rect x="110.787" y="210.675" style="fill:#8F816A;" width="289.501" height="25.378"></rect> </g> <g> <rect x="110.787" y="284.473" style="fill:#DAB99E;" width="289.501" height="25.378"></rect> <rect x="110.787" y="280.466" style="fill:#8F816A;" width="289.501" height="25.378"></rect> </g> <g> <rect x="110.787" y="144.891" style="fill:#DAB99E;" width="289.501" height="25.378"></rect> <rect x="110.787" y="140.884" style="fill:#8F816A;" width="289.501" height="25.378"></rect> </g> </g> <polygon style="fill:#FBDABC;" points="256.299,322.118 253.308,323.881 195.45,357.662 188.356,361.847 12.392,464.583 0.598,471.413 0.598,172.824 71.446,214.169 246.642,316.464 248.009,317.272 256.043,321.971 "></polygon> <polygon style="fill:#DFC7A2;" points="512,172.824 512,471.487 511.914,471.413 511.487,471.119 511.145,470.899 511.059,470.899 263.734,326.525 259.375,323.954 256.299,322.118 266.042,316.464 266.298,316.317 266.555,316.17 275.528,310.956 "></polygon> <circle style="opacity:0.68;fill:#EEF3CA;" cx="377.142" cy="75.101" r="38.186"></circle> <path style="fill:#757575;" d="M512,425.251v45.808h-0.513l-7.35,0.342H27.689l-0.341-7.094 c8.632-5.896,20.082-13.845,27.518-18.887l1.025-0.684l24.956-17.178l38.97-26.92l11.28-7.777l118.365-81.615l7.947-5.556 c1.88-1.195,4.017-2.222,6.324-2.904c2.735-0.941,5.726-1.539,8.717-1.795c1.025-0.086,1.965-0.171,2.991-0.086 c1.025-0.171,2.052-0.171,3.077-0.171c2.735-0.085,5.385,0.171,7.948,0.683c2.734,0.513,5.213,1.369,7.435,2.564l89.735,49.91 l44.354,24.697l11.538,6.41l41.79,23.245l27.518,15.298c0.77,0.428,1.624,0.855,2.479,1.368 C511.487,424.995,511.743,425.166,512,425.251z"></path> <path style="fill:#E7C8AA;" d="M512,441.404v29.997H0.598v-29.997c8.974-5.471,20.768-12.905,28.459-17.52l1.025-0.684 l25.724-15.98l40.252-24.955l11.623-7.264l122.125-75.805l8.204-5.127c4.273-2.564,9.828-3.846,15.298-3.932 c1.025-0.086,1.965-0.086,2.991,0c1.026-0.086,2.051-0.086,3.077,0c2.393,0,4.701,0.257,6.923,0.769 c3.077,0.599,5.896,1.71,8.29,3.163l11.879,7.349l75.377,46.834l43.073,26.75l11.196,7.007l40.68,25.212l26.748,16.665 c0.77,0.428,1.539,0.854,2.393,1.367c5.47,3.505,12.477,7.864,19.058,11.88C507.385,438.669,509.778,440.122,512,441.404z"></path> <path style="opacity:0.2;fill:#E84114;" d="M467.816,16.066v4.273c0-8.887-7.863-16.066-17.605-16.066H62.301 c-9.656,0-17.604,7.178-17.604,16.066v-4.273C44.696,7.178,52.645,0,62.301,0h387.911C459.953,0,467.816,7.178,467.816,16.066z"></path> </g> </g></svg> someEmail@email.email</p>
                <p class="inline-flex items-center"><svg width="34px" height="34px" viewBox="-6.72 -6.72 45.44 45.44" enable-background="new 0 0 32 32" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Layer_2"></g> <g id="Layer_3"></g> <g id="Layer_4"></g> <g id="Layer_5"></g> <g id="Layer_6"></g> <g id="Layer_7"></g> <g id="Layer_8"></g> <g id="Layer_9"></g> <g id="Layer_10"></g> <g id="Layer_11"></g> <g id="Layer_12"></g> <g id="Layer_13"></g> <g id="Layer_14"></g> <g id="Layer_15"></g> <g id="Layer_16"></g> <g id="Layer_17"></g> <g id="Layer_18"></g> <g id="Layer_19"></g> <g id="Maps_11_"></g> <g id="Maps_10_"></g> <g id="Maps_9_"></g> <g id="Maps_8_"></g> <g id="Maps_7_"></g> <g id="Maps_6_"></g> <g id="Maps_5_"></g> <g id="Maps_4_"></g> <g id="Maps_3_"></g> <g id="Maps_2_"></g> <g id="Maps_1_"> <path d="M16,1C10.49,1,6,5.5,6,11.04c0,5.25,8.34,13.72,9.29,14.67C15.49,25.9,15.74,26,16,26s0.51-0.1,0.71-0.29 C17.66,24.76,26,16.29,26,11.04C26,5.5,21.51,1,16,1z" fill="#ffbb00"></path> <path d="M20,11.04c0,2.2-1.79,4-4,4s-4-1.8-4-4c0-2.21,1.79-4,4-4S20,8.83,20,11.04z" fill="#f58a8a"></path> <g> <path d="M16,31c-0.2354,0-0.4595-0.0005-0.6943-0.0107C8.21,30.8652,1,28.5957,1,24.5 c0-2.0806,1.9492-3.8872,5.4893-5.0874c0.5225-0.1748,1.0903,0.103,1.2681,0.6265c0.1772,0.5229-0.103,1.0903-0.6265,1.2681 C4.583,22.1709,3,23.394,3,24.5c0,2.0215,5.0791,4.3623,12.3677,4.4902C15.5986,29,15.7925,29.001,16,29 c0.208,0,0.4009,0,0.6055-0.0088C23.9209,28.8623,29,26.5215,29,24.5c0-1.106-1.583-2.3291-4.1309-3.1929 c-0.5234-0.1777-0.8037-0.7451-0.6265-1.2681c0.1777-0.5234,0.7451-0.8022,1.2681-0.6265C29.0508,20.6128,31,22.4194,31,24.5 c0,4.0957-7.21,6.3652-14.3325,6.4902C16.4595,30.9995,16.2354,31,16,31z" fill="#f58a8a"></path> </g> </g> <g id="Maps"></g> </g></svg> Birmingam, B12DA</p>
                <div class="flex gap-4">
                    <span class="w-8 h-8 rounded cursor-pointer hover:translate-y-1 transition"><svg viewBox="0 0 14 14" role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#485a96" d="M12.3377569 13.000045c.36572 0 .662243-.2965683.662243-.66228789V1.6622429c0-.3658549-.296568-.6622879-.662243-.6622879H1.66228797c-.36585448 0-.66228788.296478-.66228788.6622879v10.67546925c0 .36576455.2964334.66228785.66228788.66228785H12.3377569z"></path><path fill="#ffffff" d="M9.2798126 13.000045V8.3529692h1.5598161l.2335322-1.8110629H9.2797676V5.3856227c0-.5243449.1455865-.8816567.8975283-.8816567l.958991-.0004496V2.8837212c-.165864-.022031-.735171-.071354-1.3974139-.071354-1.3827115 0-2.329338.8439787-2.329338 2.3939481v1.3355914H5.8457173v1.8110629H7.409535v4.6470308h1.8702776z"></path></g></svg></span>
                    <span class="w-8 h-8 rounded cursor-pointer hover:translate-y-1 transition"><svg viewBox="0 0 24 24" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g transform="translate(0 -1028.4)"> <g fill="#2980b9"> <path d="m12 1039.4c-3.0105 0-5.2407 0.1-6.7256 0.2-0.4788 0.1-0.9101 0.3-1.2672 0.6-0.357 0.3-0.6012 0.7-0.7148 1.1-0.211 0.9-0.2924 2.2-0.2924 4 0 1.9 0.0814 3.2 0.2924 4.1 0.1055 0.5 0.3578 0.8 0.7148 1.2 0.3652 0.3 0.764 0.5 1.2347 0.5 1.493 0.2 3.7476 0.3 6.7581 0.3 3.01 0 5.265-0.1 6.758-0.3 0.471 0 0.91-0.2 1.267-0.5 0.357-0.4 0.569-0.7 0.683-1.2 0.211-0.9 0.292-2.2 0.292-4.1 0-1.8-0.081-3.1-0.292-4-0.106-0.4-0.318-0.8-0.683-1.1-0.357-0.3-0.796-0.5-1.267-0.6-1.493-0.1-3.748-0.2-6.758-0.2z" fill="#c0392b"></path> <path d="m12 1038.4c-3.0105 0-5.2407 0.1-6.7256 0.2-0.4788 0.1-0.9101 0.3-1.2672 0.6-0.357 0.3-0.6012 0.7-0.7148 1.1-0.211 0.9-0.2924 2.2-0.2924 4 0 1.9 0.0814 3.2 0.2924 4.1 0.1055 0.5 0.3578 0.8 0.7148 1.2 0.3652 0.3 0.764 0.5 1.2347 0.5 1.493 0.2 3.7476 0.3 6.7581 0.3 3.01 0 5.265-0.1 6.758-0.3 0.471 0 0.91-0.2 1.267-0.5 0.357-0.4 0.569-0.7 0.683-1.2 0.211-0.9 0.292-2.2 0.292-4.1 0-1.8-0.081-3.1-0.292-4-0.106-0.4-0.318-0.8-0.683-1.1-0.357-0.3-0.796-0.5-1.267-0.6-1.493-0.1-3.748-0.2-6.758-0.2z" fill="#e74c3c"></path> <path d="m6.5 1l1.5 5v3h1v-3l1.5-5h-1l-1 3.3438-1-3.3438h-1zm6 2c-0.828 0-1.5 0.6716-1.5 1.5v3c0 0.8284 0.672 1.5 1.5 1.5s1.5-0.6716 1.5-1.5v-3c0-0.8284-0.672-1.5-1.5-1.5zm2.5 0v0.3438 1.6562 2.75c0 0.3821 0.036 0.664 0.094 0.8438 0.093 0.277 0.325 0.4063 0.656 0.4062 0.359 0.0001 0.869-0.2232 1.25-0.6875v0.25 0.4375h1v-6h-1v4.5 0.0938c-0.216 0.322-0.587 0.5-0.781 0.5-0.13 0-0.197-0.0852-0.219-0.25-0.007-0.015 0-0.1591 0-0.4063v-2.4375-1.6562-0.3438h-1zm-2.5 1c0.276 0 0.5 0.2239 0.5 0.5v3c0 0.2761-0.224 0.5-0.5 0.5s-0.5-0.2239-0.5-0.5v-3c0-0.2761 0.224-0.5 0.5-0.5z" transform="translate(0 1028.4)" fill="#202020"></path> <g fill="#ecf0f1"> <rect height="1" width="4" y="1040.4" x="4.5"></rect> <rect height="7" width="1" y="1041.4" x="6"></rect> <path d="m8 1042.4v0.3 1.7 2.7c0 0.4 0.0362 0.7 0.0938 0.9 0.0934 0.2 0.3256 0.4 0.6562 0.4 0.3594 0 0.8691-0.3 1.25-0.7v0.2 0.5h1v-6h-1v4.5 0.1c-0.2156 0.3-0.5872 0.5-0.7812 0.5-0.1294 0-0.1972-0.1-0.2188-0.3-0.0072 0 0-0.2 0-0.4v-2.4-1.7-0.3h-1z"></path> <path d="m12 12v2 6h1v-0.438-0.25c0.381 0.465 0.891 0.688 1.25 0.688 0.331 0 0.563-0.129 0.656-0.406 0.058-0.18 0.094-0.462 0.094-0.844v-1.75-1.75c0-0.382-0.036-0.664-0.094-0.844-0.093-0.277-0.325-0.406-0.656-0.406-0.359 0-0.869 0.223-1.25 0.688v-0.688-2h-1zm1.781 2.906c0.13 0 0.197 0.085 0.219 0.25 0.007 0.015 0 0.159 0 0.406v1.438 1.438c0 0.247 0.007 0.391 0 0.406-0.022 0.165-0.089 0.25-0.219 0.25-0.194 0-0.565-0.178-0.781-0.5v-0.094-3.094c0.216-0.322 0.587-0.5 0.781-0.5z" transform="translate(0 1028.4)"></path> <path d="m17.5 14c-0.828 0-1.5 0.672-1.5 1.5v3c0 0.828 0.672 1.5 1.5 1.5s1.5-0.672 1.5-1.5v-0.5h-1v0.5c0 0.276-0.224 0.5-0.5 0.5s-0.5-0.224-0.5-0.5v-0.5-1h1 1v-1.5c0-0.828-0.672-1.5-1.5-1.5zm0 1c0.276 0 0.5 0.224 0.5 0.5v0.5h-1v-0.5c0-0.276 0.224-0.5 0.5-0.5z" transform="translate(0 1028.4)"></path> </g> </g> </g> </g></svg></span>
                    <span class="w-8 h-8 rounded cursor-pointer hover:translate-y-1 transition"><svg viewBox="0 0 24 24" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g transform="translate(0 -1028.4)"> <g> <path d="m4 1031.4c-1.1046 0-2 0.9-2 2v16c0 1.1 0.8954 2 2 2h16c1.105 0 2-0.9 2-2v-16c0-1.1-0.895-2-2-2h-16z" fill="#1499ca"></path> <path d="m4 2c-1.1046 0-2 0.8954-2 2v16c0 1.105 0.8954 2 2 2h16c1.105 0 2-0.895 2-2v-16c0-1.1046-0.895-2-2-2h-16z" transform="translate(0 1028.4)" fill="#1ab2e8"></path> <path fill="#1499ca" d="m15.474 1036.5c-0.811 0-1.532 0.2-2.107 0.8-0.569 0.6-0.835 1.3-0.835 2.1 0 0.2 0.024 0.4 0.072 0.7-1.198-0.1-2.325-0.4-3.378-0.9-1.0475-0.6-1.9556-1.3-2.6882-2.2-0.2664 0.4-0.3996 0.9-0.3996 1.5 0 0.5 0.1272 1 0.3633 1.4s0.5449 0.7 0.9445 1c-0.4723 0-0.8961-0.1-1.3078-0.4v0.1c0 0.7 0.2119 1.3 0.6539 1.9 0.448 0.5 1.0292 0.8 1.7073 1-0.2543 0-0.5388 0.1-0.7992 0.1-0.1695 0-0.3451 0-0.5448-0.1 0.1876 0.6 0.5509 1.1 1.0534 1.5s1.0716 0.5 1.7074 0.6c-1.0656 0.8-2.3068 1.2-3.669 1.2h-0.6902c1.3622 0.8 2.8637 1.3 4.504 1.3 1.042 0 2.029-0.2 2.943-0.5s1.677-0.8 2.325-1.3c0.648-0.6 1.205-1.2 1.671-1.9 0.472-0.8 0.823-1.5 1.053-2.3s0.363-1.6 0.363-2.4c0-0.1-0.03-0.3-0.036-0.4 0.575-0.4 1.084-0.8 1.49-1.4-0.564 0.2-1.145 0.3-1.708 0.4 0.636-0.4 1.084-0.9 1.308-1.6-0.581 0.3-1.193 0.6-1.853 0.7-0.581-0.6-1.295-0.9-2.143-0.9z"></path> <path fill="#ecf0f1" d="m15.474 1035.5c-0.811 0-1.531 0.2-2.107 0.8-0.569 0.6-0.835 1.3-0.835 2.1 0 0.2 0.024 0.4 0.073 0.7-1.199-0.1-2.325-0.4-3.3788-0.9-1.0474-0.6-1.9556-1.3-2.6882-2.2-0.2664 0.4-0.3995 0.9-0.3995 1.5 0 0.5 0.1271 1 0.3632 1.4s0.5449 0.7 0.9445 1c-0.4722 0-0.8961-0.1-1.3077-0.4v0.1c0 0.7 0.2119 1.3 0.6538 1.9 0.448 0.5 1.0293 0.8 1.7074 1-0.2543 0-0.5389 0.1-0.7992 0.1-0.1695 0-0.3451 0-0.5449-0.1 0.1877 0.6 0.5509 1.1 1.0534 1.5 0.5026 0.4 1.0717 0.5 1.7074 0.6-1.0656 0.8-2.3067 1.2-3.669 1.2h-0.6902c1.3623 0.8 2.8637 1.3 4.5048 1.3 1.041 0 2.028-0.2 2.942-0.5s1.677-0.8 2.325-1.3c0.648-0.6 1.205-1.2 1.671-1.9 0.472-0.8 0.823-1.5 1.053-2.3 0.231-0.8 0.364-1.6 0.364-2.4 0-0.1-0.031-0.3-0.037-0.4 0.576-0.4 1.084-0.8 1.49-1.4-0.563 0.2-1.145 0.3-1.708 0.4 0.636-0.4 1.084-0.9 1.308-1.6-0.581 0.3-1.193 0.6-1.852 0.7-0.582-0.6-1.296-0.9-2.144-0.9z"></path> </g> </g> </g></svg></span>
                    <span class="w-8 h-8 rounded cursor-pointer hover:translate-y-1 transition"><svg viewBox="0 0 14 14" role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <radialGradient id="a" cx="130.802" cy="895.86902" r="968.776" gradientTransform="matrix(.539 -.842 .618 .395 -492.923 652.145)" gradientUnits="userSpaceOnUse"> <stop offset="0" stop-color="#F9ED32"></stop> <stop offset=".53" stop-color="#FF4700"></stop> <stop offset=".72" stop-color="#EE2A7B"></stop> <stop offset="1" stop-color="#002AFF"></stop> </radialGradient> <path fill="url(#a)" d="M43.7 180h524.6c24.2 0 43.7 19.6 43.7 43.7v524.6c0 24.2-19.6 43.7-43.7 43.7H43.7C19.6 792 0 772.4 0 748.3V223.7C0 199.6 19.6 180 43.7 180z" transform="translate(1.000001 -2.5294102) scale(.0196)"></path> <g fill="#ffffff" stroke="#ffffff" stroke-miterlimit="10" transform="translate(1.000001 -2.5294102) scale(.0196)"> <path stroke-width="8" d="M413.9 721.5H198.1c-70.3 0-127.6-57.2-127.6-127.6V378.1c0-70.3 57.2-127.6 127.6-127.6H414c70.3 0 127.6 57.2 127.6 127.6V594c-.1 70.3-57.3 127.5-127.7 127.5zM198.1 289.8c-48.7 0-88.3 39.6-88.3 88.3V594c0 48.7 39.6 88.3 88.3 88.3H414c48.7 0 88.3-39.6 88.3-88.3V378.1c0-48.7-39.6-88.3-88.3-88.3H198.1zm107.9 314c-64.9 0-117.8-52.8-117.8-117.8 0-64.9 52.8-117.8 117.8-117.8 64.9 0 117.8 52.8 117.8 117.8 0 64.9-52.9 117.8-117.8 117.8zm0-196.3c-43.3 0-78.5 35.2-78.5 78.5s35.2 78.5 78.5 78.5 78.5-35.2 78.5-78.5-35.2-78.5-78.5-78.5z"></path> <circle cx="427.70001" cy="364.29999" r="25" stroke-width="9"></circle> </g> </g></svg></span>
                </div>
            </div>

            <div class="flex flex-col p-2">
                <p class="font-bold">Portal</p>
                <a href="#" class="inline-flex"><span><svg width="24px" height="24px" viewBox="-4.8 -4.8 57.60 57.60" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.384"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="#ff6666" stroke="#000000" stroke-width="0.9120000000000001" stroke-linejoin="round"></path> <path d="M14.4917 24.5H32.4917" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M23.4917 15.5L32.4917 24.5L23.4917 33.5" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></span> Customer</a>
                <a href="#" class="inline-flex"><span><svg width="24px" height="24px" viewBox="-4.8 -4.8 57.60 57.60" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.384"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="#ff6666" stroke="#000000" stroke-width="0.9120000000000001" stroke-linejoin="round"></path> <path d="M14.4917 24.5H32.4917" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M23.4917 15.5L32.4917 24.5L23.4917 33.5" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></span> Business</a>
                <a href="#" class="inline-flex"><span><svg width="24px" height="24px" viewBox="-4.8 -4.8 57.60 57.60" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.384"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="#ff6666" stroke="#000000" stroke-width="0.9120000000000001" stroke-linejoin="round"></path> <path d="M14.4917 24.5H32.4917" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M23.4917 15.5L32.4917 24.5L23.4917 33.5" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></span> Admin</a>

                
                <p class="font-bold mt-2">Account</p>
                <a href="#" class="inline-flex"><span><svg width="24px" height="24px" viewBox="-4.8 -4.8 57.60 57.60" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.384"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="#ff6666" stroke="#000000" stroke-width="0.9120000000000001" stroke-linejoin="round"></path> <path d="M14.4917 24.5H32.4917" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M23.4917 15.5L32.4917 24.5L23.4917 33.5" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></span> Plans</a>
                <a href="#" class="inline-flex"><span><svg width="24px" height="24px" viewBox="-4.8 -4.8 57.60 57.60" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.384"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="#ff6666" stroke="#000000" stroke-width="0.9120000000000001" stroke-linejoin="round"></path> <path d="M14.4917 24.5H32.4917" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M23.4917 15.5L32.4917 24.5L23.4917 33.5" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></span> Services</a>
                <a href="#" class="inline-flex"><span><svg width="24px" height="24px" viewBox="-4.8 -4.8 57.60 57.60" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.384"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="#ff6666" stroke="#000000" stroke-width="0.9120000000000001" stroke-linejoin="round"></path> <path d="M14.4917 24.5H32.4917" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M23.4917 15.5L32.4917 24.5L23.4917 33.5" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></span> Topup</a>
            </div>
            <div class="flex flex-col p-2">
                <p class="font-bold">Support</p>
                <a href="#" class="inline-flex"><span><svg width="24px" height="24px" viewBox="-4.8 -4.8 57.60 57.60" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.384"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="#ff6666" stroke="#000000" stroke-width="0.9120000000000001" stroke-linejoin="round"></path> <path d="M14.4917 24.5H32.4917" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M23.4917 15.5L32.4917 24.5L23.4917 33.5" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></span> Blog</a>
                <a href="#" class="inline-flex"><span><svg width="24px" height="24px" viewBox="-4.8 -4.8 57.60 57.60" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.384"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="#ff6666" stroke="#000000" stroke-width="0.9120000000000001" stroke-linejoin="round"></path> <path d="M14.4917 24.5H32.4917" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M23.4917 15.5L32.4917 24.5L23.4917 33.5" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></span> Contact</a>
                <a href="#" class="inline-flex"><span><svg width="24px" height="24px" viewBox="-4.8 -4.8 57.60 57.60" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.384"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="#ff6666" stroke="#000000" stroke-width="0.9120000000000001" stroke-linejoin="round"></path> <path d="M14.4917 24.5H32.4917" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M23.4917 15.5L32.4917 24.5L23.4917 33.5" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></span> Report Abuse</a>
                <a href="#" class="inline-flex"><span><svg width="24px" height="24px" viewBox="-4.8 -4.8 57.60 57.60" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.384"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="#ff6666" stroke="#000000" stroke-width="0.9120000000000001" stroke-linejoin="round"></path> <path d="M14.4917 24.5H32.4917" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M23.4917 15.5L32.4917 24.5L23.4917 33.5" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></span> Affiliate</a>
                <a href="#" class="inline-flex"><span><svg width="24px" height="24px" viewBox="-4.8 -4.8 57.60 57.60" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.384"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="#ff6666" stroke="#000000" stroke-width="0.9120000000000001" stroke-linejoin="round"></path> <path d="M14.4917 24.5H32.4917" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M23.4917 15.5L32.4917 24.5L23.4917 33.5" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></span> Refunds</a>
                <a href="#" class="inline-flex"><span><svg width="24px" height="24px" viewBox="-4.8 -4.8 57.60 57.60" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.384"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="#ff6666" stroke="#000000" stroke-width="0.9120000000000001" stroke-linejoin="round"></path> <path d="M14.4917 24.5H32.4917" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M23.4917 15.5L32.4917 24.5L23.4917 33.5" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></span> Payments</a>
            </div>

            <div class="flex flex-col p-2">
                <p class="font-bold">Newsletter</p>
                <input
                    type="text"
                    class="rounded p-2"
                    placeholder="Your Email"
                />

                <a href="#" class="inline-flex"><span><svg width="24px" height="24px" viewBox="-4.8 -4.8 57.60 57.60" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.384"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="#ff6666" stroke="#000000" stroke-width="0.9120000000000001" stroke-linejoin="round"></path> <path d="M14.4917 24.5H32.4917" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M23.4917 15.5L32.4917 24.5L23.4917 33.5" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></span> Terms of Service</a>
                <a href="#" class="inline-flex"><span><svg width="24px" height="24px" viewBox="-4.8 -4.8 57.60 57.60" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.384"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="#ff6666" stroke="#000000" stroke-width="0.9120000000000001" stroke-linejoin="round"></path> <path d="M14.4917 24.5H32.4917" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M23.4917 15.5L32.4917 24.5L23.4917 33.5" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></span> Privacy Policy</a>
                <a href="#" class="inline-flex"><span><svg width="24px" height="24px" viewBox="-4.8 -4.8 57.60 57.60" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.384"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="#ff6666" stroke="#000000" stroke-width="0.9120000000000001" stroke-linejoin="round"></path> <path d="M14.4917 24.5H32.4917" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M23.4917 15.5L32.4917 24.5L23.4917 33.5" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></span> Legal</a>
            </div>
        </div>

        <div class="flex flex-wrap justify-around p-4">
            <div class="flex flex-wrap gap-2 items-baseline">
                <p>Partners:</p>
                <span class="w-8 h-8 rounded cursor-pointer hover:translate-y-1 transition"><svg viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Amazon-color</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-601.000000, -560.000000)"> <g id="Amazon" transform="translate(601.000000, 560.000000)"> <path d="M25.4026553,25.9595294 C24.660417,27.4418824 23.3876054,28.3962353 22.0103725,28.7181176 C21.8015298,28.7181176 21.4826213,28.8225882 21.1637129,28.8225882 C18.835399,28.8225882 17.458166,27.0211765 17.458166,24.3727059 C17.458166,20.9788235 19.4703937,19.392 22.0103725,18.6465882 C23.3876054,18.3303529 24.9793255,18.2230588 26.5682233,18.2230588 L26.5682233,19.4964706 C26.5682233,21.9331765 26.6726447,23.8390588 25.4026553,25.9595294 L25.4026553,25.9595294 Z M26.5682233,13.3524706 C25.1909904,13.4569412 23.5992703,13.5614118 22.0103725,13.7703529 C19.574815,14.0922353 17.1392576,14.5157647 15.1298521,15.4701176 C11.2098182,17.0597647 8.55977364,20.4508235 8.55977364,25.4287059 C8.55977364,31.6856471 12.5842289,34.8621176 17.6726531,34.8621176 C19.3659723,34.8621176 20.7432053,34.6475294 22.0103725,34.3341176 C24.0282445,33.696 25.7187415,32.5298824 27.7309692,30.4094118 C28.8965372,31.9990588 29.2182679,32.7444706 31.2276733,34.4385882 C31.7582467,34.6475294 32.28882,34.6475294 32.7093276,34.3341176 C33.9821392,33.2724706 36.208854,31.3637647 37.3715998,30.3049412 C37.9021732,29.8814118 37.7977518,29.2432941 37.4760212,28.7181176 C36.3132753,27.2329412 35.1448851,25.9595294 35.1448851,23.0992941 L35.1448851,13.5614118 C35.1448851,9.53505882 35.4666157,5.82494118 32.5004849,3.072 C30.0649275,0.849882353 26.2493149,0 23.2831841,0 L22.0103725,0 C16.6115064,0.313411765 10.8937319,2.64564706 9.61809814,9.32329412 C9.40643324,10.1731765 10.0442501,10.4894118 10.4675799,10.5938824 L16.3998415,11.3364706 C17.0348362,11.2291765 17.3537447,10.6983529 17.458166,10.1731765 C17.9859172,7.84094118 19.8937235,6.67482353 22.0103725,6.46023529 L22.4365245,6.46023529 C23.7093361,6.46023529 25.086569,6.99105882 25.8259851,8.05270588 C26.6726447,9.32329412 26.5682233,11.0202353 26.5682233,12.5054118 L26.5682233,13.3524706 L26.5682233,13.3524706 Z" fill="#343B45"> </path> <path d="M47.9943556,35.9463529 L47.9943556,35.9435294 C47.971778,35.4437647 47.8673567,35.0625882 47.658514,34.7463529 L47.6359364,34.7152941 L47.6105366,34.6842353 C47.3988717,34.4527059 47.1956734,34.3651765 46.9755419,34.2691765 C46.3179696,34.0150588 45.3612442,33.8795294 44.2097872,33.8767059 C43.382883,33.8767059 42.4713128,33.9557647 41.5540982,34.1562353 L41.551276,34.0941176 L40.6284171,34.4018824 L40.6114839,34.4103529 L40.0893771,34.5797647 L40.0893771,34.6023529 C39.47696,34.8564706 38.9209869,35.1727059 38.4045245,35.5482353 C38.0827939,35.7882353 37.8175072,36.1072941 37.8033962,36.5957647 C37.7949296,36.8611765 37.9303952,37.1661176 38.1533489,37.3468235 C38.3763025,37.5275294 38.6359448,37.5896471 38.8645429,37.5896471 C38.9181647,37.5896471 38.9689643,37.5868235 39.0141194,37.5783529 L39.0592746,37.5755294 L39.093141,37.5698824 C39.5446928,37.4738824 40.2022651,37.4089412 40.9727253,37.3016471 C41.6331198,37.2282353 42.3330251,37.1745882 42.9397978,37.1745882 C43.368772,37.1717647 43.7554132,37.2028235 44.0206999,37.2592941 C44.1533432,37.2875294 44.2521202,37.3214118 44.3057419,37.3496471 C44.3254973,37.3552941 44.3396083,37.3637647 44.3480749,37.3694118 C44.3593637,37.4061176 44.3762969,37.5021176 44.3734747,37.6348235 C44.3791191,38.1430588 44.164632,39.0861176 43.8683012,40.0065882 C43.5804369,40.9270588 43.2304843,41.8503529 42.999064,42.4630588 C42.94262,42.6042353 42.9059314,42.7595294 42.9059314,42.9289412 C42.900287,43.1745882 43.0018862,43.4738824 43.2163733,43.6715294 C43.425216,43.8691765 43.696147,43.9482353 43.9219229,43.9482353 L43.9332117,43.9482353 C44.2718756,43.9454118 44.5597398,43.8098824 44.8080933,43.6150588 C47.1505182,41.5087059 47.9661336,38.1430588 48,36.2484706 L47.9943556,35.9463529 Z M41.0489247,38.8658824 C40.8090378,38.8630588 40.5635065,38.9195294 40.3349084,39.0268235 C40.0780883,39.1284706 39.8156239,39.2470588 39.5672704,39.3515294 L39.2032068,39.504 L38.7290774,39.6931765 L38.7290774,39.6988235 C33.5785648,41.7882353 28.16841,43.0136471 23.1618295,43.1209412 C22.9783866,43.1265882 22.7921215,43.1265882 22.614323,43.1265882 C14.7403887,43.1322353 8.31706456,39.4785882 1.83729642,35.8785882 C1.61152053,35.76 1.37727804,35.6978824 1.15150215,35.6978824 C0.860815683,35.6978824 0.561662624,35.808 0.344353327,36.0112941 C0.12704403,36.2174118 -0.00277710907,36.5138824 4.50895989e-05,36.816 C-0.00277710907,37.2084706 0.208887791,37.5698824 0.505218651,37.8042353 C6.58705678,43.0870588 13.25309,47.9943529 22.2192152,48 C22.3941915,48 22.57199,47.9943529 22.7497885,47.9915294 C28.453452,47.8644706 34.902176,45.936 39.9087564,42.7905882 L39.9398006,42.7708235 C40.5945507,42.3783529 41.2493008,41.9322353 41.8673623,41.4381176 C42.2511813,41.1529412 42.516468,40.7068235 42.516468,40.2437647 C42.4995348,39.4221176 41.8024517,38.8658824 41.0489247,38.8658824 Z" id="Fill-237" fill="#FF9A00"> </path> </g> </g> </g> </g></svg></span>
                <span class="w-8 h-8 rounded cursor-pointer hover:translate-y-1 transition"><svg viewBox="0 -3 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>drive-color</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-601.000000, -955.000000)"> <g id="drive" transform="translate(601.000000, 955.000000)"> <polygon id="Shape" fill="#3777E3" points="8.00048064 42 15.9998798 28 48 28 39.9998798 42"> </polygon> <polygon id="Shape" fill="#FFCF63" points="32.0004806 28 48 28 32.0004806 0 15.9998798 0"> </polygon> <polygon id="Shape" fill="#11A861" points="0 28 8.00048064 42 24 14 15.9998798 0"> </polygon> </g> </g> </g> </g></svg></span>
                <span class="w-8 h-8 rounded cursor-pointer hover:translate-y-1 transition"><svg viewBox="-4 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Evernote-color</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-805.000000, -1043.000000)" fill="#20C05C"> <path d="M834.792989,1065.70423 C834.147558,1065.68173 833.526032,1065.72223 832.946339,1065.81523 C833.109191,1064.49374 833.653026,1062.87076 835.578862,1062.93826 C837.710876,1063.01326 838.009687,1065.03524 838.017157,1066.40622 C837.117737,1066.00273 836.004667,1065.74773 834.792989,1065.70423 M843.909706,1051.35086 C843.552627,1049.43538 842.41864,1048.49189 841.392225,1048.12139 C840.286625,1047.7194 838.042556,1047.3039 835.223277,1046.9694 C832.955303,1046.70241 830.289911,1046.72341 828.679321,1046.7729 C828.486588,1045.44392 827.55878,1044.23043 826.518919,1043.81043 C823.751931,1042.69144 819.474455,1042.96144 818.377819,1043.27044 C817.505292,1043.51493 816.538639,1044.01743 816.00078,1044.78992 C815.640713,1045.30592 815.40764,1045.96891 815.406146,1046.8929 C815.406146,1047.4164 815.421087,1048.64789 815.433039,1049.74288 C815.446486,1050.84087 815.461426,1051.82336 815.461426,1051.83086 C815.461426,1052.80735 814.671072,1053.60384 813.692467,1053.60534 L809.205823,1053.60534 C808.248134,1053.60534 807.516048,1053.76734 806.958766,1054.02084 C806.398496,1054.27734 806.002571,1054.62083 805.700773,1055.02733 C805.101657,1055.83582 804.997073,1056.83181 805.000061,1057.8488 C805.000061,1057.8488 805.009026,1058.6813 805.209229,1060.28928 C805.375069,1061.53427 806.719717,1070.23269 807.997133,1072.87717 C808.491665,1073.90616 808.821851,1074.33515 809.79448,1074.78815 C811.962352,1075.72114 816.915141,1076.75763 819.235406,1077.05463 C821.552684,1077.35162 823.006398,1077.97712 823.87295,1076.15314 C823.875938,1076.14864 824.04626,1075.69864 824.280826,1075.04015 C825.033829,1072.75117 825.138413,1070.72019 825.138413,1069.2517 C825.138413,1069.1017 825.356545,1069.0957 825.356545,1069.2517 C825.356545,1070.28819 825.15933,1073.96016 827.921836,1074.94565 C829.012495,1075.33414 831.274492,1075.67914 833.572347,1075.95064 C835.650576,1076.19064 837.159571,1077.01113 837.159571,1082.36458 C837.159571,1085.62105 836.478282,1086.06805 832.916458,1086.06805 C830.028451,1086.06805 828.927334,1086.14304 828.927334,1083.84057 C828.927334,1081.97908 830.762032,1082.17408 832.120127,1082.17408 C832.728207,1082.17408 832.287461,1081.72108 832.287461,1080.5721 C832.287461,1079.42911 832.998631,1078.76911 832.326306,1078.75261 C827.626013,1078.62211 824.860519,1078.74661 824.860519,1084.64756 C824.860519,1090.00551 826.902891,1091 833.572347,1091 C838.80303,1091 840.646692,1090.8275 842.8056,1084.10156 C843.232899,1082.77258 844.266785,1078.72111 844.891299,1071.91567 C845.287224,1067.61371 844.51928,1054.62833 843.909706,1051.35086 M808.995161,1052.29735 L808.998149,1052.29735 L813.484793,1052.29735 C813.74177,1052.29735 813.949444,1052.08586 813.949444,1051.83086 C813.949444,1051.82936 813.895658,1047.96839 813.895658,1046.8944 L813.895658,1046.8809 C813.895658,1045.99891 814.079427,1045.23092 814.400648,1044.58592 L814.554536,1044.29793 C814.536607,1044.29943 814.520172,1044.30843 814.502244,1044.32493 L805.78444,1053.00535 C805.768005,1053.01885 805.756053,1053.03835 805.75157,1053.05635 C805.932351,1052.96635 806.17887,1052.84485 806.213233,1052.82985 C806.972212,1052.48485 807.89255,1052.29735 808.995161,1052.29735" id="Evernote"> </path> </g> </g> </g></svg></span>
                <span class="w-8 h-8 rounded cursor-pointer hover:translate-y-1 transition"><svg viewBox="-49.6 0 222 222" id="svg2" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><g id="layer1" transform="translate(12.495 6.756)"> <g id="g4182"> <g id="g5747" transform="translate(81.631 113.771) scale(.29074)"> <path id="path4155" class="st0" d="M-52.5-412.3l-.3 168-.3 168-13.8-39v-.1l-17.9 374c17.6 49.6 27 76.1 27.1 76.2.1.1 10.1.7 22.2 1.3 36.6 1.8 82 5.7 116.5 10 8 1 14.8 1.5 15.3 1.1s.6-171.4.5-380.1l-.3-379.4h-149z"></path> <path id="path4157" class="st0" d="M-322-412.8V-33c0 208.9.2 380 .5 380.3.3.3 13.2-1 28.8-2.7 15.6-1.7 37.1-3.9 47.8-4.8 16.4-1.4 65.6-4.5 71.2-4.6 1.7 0 1.8-8.5 2-160.9l.3-160.9 11.9 33.6c1.8 5.2 2.4 6.8 4.2 11.9l17.9-373.9c-3.8-10.7-1.8-5.1-6.1-17.3-14.6-41.3-27-76.2-27.5-77.8l-1-2.8h-150z"></path> <path id="path5715" class="st0" d="M-52.5-412.3l-.3 168-.3 168-13.8-39v-.1l-17.9 374c17.6 49.6 27 76.1 27.1 76.2.1.1 10.1.7 22.2 1.3 36.6 1.8 82 5.7 116.5 10 8 1 14.8 1.5 15.3 1.1s.6-171.4.5-380.1l-.3-379.4h-149z"></path> <path id="path5717" class="st0" d="M-322-412.8V-33c0 208.9.2 380 .5 380.3.3.3 13.2-1 28.8-2.7 15.6-1.7 37.1-3.9 47.8-4.8 16.4-1.4 65.6-4.5 71.2-4.6 1.7 0 1.8-8.5 2-160.9l.3-160.9 11.9 33.6c1.8 5.2 2.4 6.8 4.2 11.9l17.9-373.9c-3.8-10.7-1.8-5.1-6.1-17.3-14.6-41.3-27-76.2-27.5-77.8l-1-2.8h-150z"></path> <radialGradient id="path5719_1_" cx="18038.016" cy="-146.44" r="368.717" gradientTransform="matrix(.07072 -.02449 -.897 -2.5906 -1526.665 25.194)" gradientUnits="userSpaceOnUse"> <stop offset="0"></stop> <stop offset="1" stop-opacity="0"></stop> </radialGradient> <path id="path5719" class="st1" d="M-322-412.8v213.2l150.2 398.4c0-9.1 0-14.1.1-24.5l.3-160.9 11.9 33.6C-93.5 234.2-58 334.6-57.8 334.8c.1.1 10.1.7 22.2 1.3 36.6 1.8 82 5.7 116.5 10 8 1 14.8 1.5 15.3 1.1.3-.3.5-84.1.5-202.4L-52.7-285l-.1 40.7-.3 168-13.8-39c-13.5-38.1-22.5-63.6-76.8-217-14.6-41.3-27-76.2-27.5-77.8l-1-2.8H-322v.1z"></path> <path id="path5721" class="st2" d="M-322-412.8l150.5 426.5v-.2l11.9 33.6C-93.5 234.2-58 334.6-57.8 334.8c.1.1 10.1.7 22.2 1.3 36.6 1.8 82 5.7 116.5 10 7.9 1 14.8 1.5 15.2 1.1L-53.1-76.4v.1l-13.8-39c-13.5-38.1-22.5-63.6-76.8-217-14.6-41.3-27-76.2-27.5-77.8l-1-2.8h-74.9l-74.9.1z"></path> </g> </g> </g> </g></svg></span>
            </div>
        </div>
        <div class="text-xs text-center p-4">
            Copyright © 2023 Solent. All Rights Reserved.
        </div>
    </div>
</div>
<!-- Footer END -->

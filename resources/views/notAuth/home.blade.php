@extends ('layout')


@section('content')
<!-- Hero START -->
<div class="relative flex flex-col h-100 overflow-hidden">
  <video src="storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
  <div class="overlay relative flex flex-col">
    <div class="flex max-md:flex-col max-md:items-center max-md:text-center gap-2 m-auto justify-center py-[7rem]">
      <div class="flex text-white flex-col justify-center basis-1/2 gap-4">
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
        <img src="/storage/2.png" alt="" />
      </div>
    </div>
  </div>
</div>
<!-- Hero END -->

<!-- Services START -->
<div class="flex flex-col text-center mt-12">
  <h1 class="text-xl font-bold underline decoration-[--c2]">-What Do We Offer-</h1>

  <p class="text-xs">Services</p>

  <div class="grid grid-cols-2 lg:grid-cols-4 max-sm:grid-cols-1 my-4 gap-2 py-6">
    <div class="p-4 border-2 flex flex-col">
      <svg width="90px" height="90px" class="mx-auto" viewBox="-1.6 -1.6 35.20 35.20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path d="M16.0002 3L20.9992 10H11.0004L16.0002 3Z" fill="#FFC44D"></path>
          <path d="M10.9992 10L6.00017 3L1.00037 10H10.9992Z" fill="#FFC44D"></path>
          <path d="M30.9992 10L26.0002 3L21.0004 10H30.9992Z" fill="#FFC44D"></path>
          <path d="M10.9999 10.0002L15.9999 31.0002L20.9999 10.0002H10.9999Z" stroke="#ff8800" stroke-width="0.8320000000000001" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M16 31L1 10H11L16 31Z" fill="#FFC44D"></path>
          <path d="M16 31L20.9998 10H30.9998L16 31Z" fill="#FFC44D"></path>
          <path d="M10.9994 10L6.00037 3H15.9992L10.9994 10Z" fill="#FFE6EA"></path>
          <path d="M20.9993 9.99988L16.0004 3H25.9992L20.9993 9.99988L16 30.9999L10.9994 10L20.9993 9.99988Z" fill="#FFE6EA"></path>
          <path d="M6 3L1 10M6 3H26M6 3L11 10M1 10L16 31M1 10H31M16 31L31 10M16 31L21 10M16 31L11 10M31 10L26 3M26 3L21 10M21 10L16 3L11 10" stroke="#ff8800" stroke-width="0.8320000000000001" stroke-linecap="round" stroke-linejoin="round"></path>
        </g>
      </svg>
      <h2 class="text-xl font-bold">Reliabile</h2>
      <h2 class="text-xl font-bold">Service</h2>
      <p>
        Our services are known for their reliability and dependability. We understand the importance of providing consistent and trustworthy solutions to our clients.
      </p>
    </div>
    <div class="p-4 border-2 flex flex-col">
      <svg width="90px" height="90px" class="mx-auto" viewBox="-51.2 -51.2 614.40 614.40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet" fill="#ff7300" stroke="#ff7300" stroke-width="8.192">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path fill="#FFC145" d="M503.73 144.318c-8.358-8.358-21.908-8.358-30.266 0a21.316 21.316 0 0 0-4.768 7.271a38.405 38.405 0 0 1-20.641-10.683c-14.092-14.093-14.923-36.497-2.5-51.574c6.216.668 12.667-1.37 17.432-6.135c8.358-8.358 8.358-21.908 0-30.266c-8.358-8.358-21.908-8.358-30.266 0c-5.054 5.054-7.03 12.004-5.972 18.559c-6.768 5.39-15.093 8.324-23.873 8.324c-10.262 0-19.91-3.997-27.167-11.253c-8.212-8.212-12.212-19.654-11.035-31.117c.338-.298.682-.586 1.006-.909c8.358-8.358 8.358-21.908 0-30.266c-8.358-8.358-21.908-8.358-30.266 0c-8.358 8.358-8.358 21.908 0 30.266a21.384 21.384 0 0 0 4.576 3.463a62.931 62.931 0 0 0 12.852 39.514c-43.976-6.317-98.849 2.534-133.594 37.28c-25.299 25.299-25.484 65.939-.276 91.329c13.875 13.975 27.706 20.358 39.371 22.964l-30.147 30.147l-10.527-10.527c-5.057-5.056-13.254-5.056-18.312 0c-4.023 4.023-4.834 10.03-2.455 14.866c-4.836-2.379-10.843-1.568-14.867 2.456c-4.023 4.023-4.834 10.031-2.455 14.867c-4.836-2.379-10.844-1.568-14.867 2.455c-5.057 5.057-5.057 13.255 0 18.311l10.527 10.527L25.871 463.556c-7.702 7.701-7.702 20.189 0 27.891c3.851 3.852 8.898 5.777 13.946 5.777s10.095-1.926 13.946-5.777l13.748-13.748l23.927 23.927c2.695 2.695 6.228 4.043 9.76 4.043s7.065-1.348 9.761-4.043c5.391-5.391 5.39-14.131 0-19.521l-23.927-23.927l14.434-14.434l14.819 14.819c2.695 2.695 6.228 4.043 9.76 4.043s7.065-1.348 9.761-4.043c5.391-5.391 5.39-14.131 0-19.521l-14.818-14.818l12.366-12.366l23.927 23.927c2.695 2.695 6.228 4.043 9.761 4.043s7.065-1.348 9.761-4.043c5.391-5.391 5.391-14.131 0-19.521l-23.927-23.927l50.259-50.259l9.13 9.13c2.528 2.528 5.842 3.793 9.156 3.793s6.627-1.265 9.156-3.793c4.023-4.023 4.834-10.03 2.456-14.865a12.912 12.912 0 0 0 14.866-2.456c4.023-4.022 4.834-10.029 2.455-14.865a12.912 12.912 0 0 0 14.867-2.456c5.057-5.056 5.057-13.254 0-18.311l-9.13-9.13l30.897-30.897c2.201 11.861 8.558 26.466 23.87 41.778c25.296 25.296 66.31 25.296 91.606 0a65.975 65.975 0 0 0 2.132-2.243a35.225 35.225 0 0 0 1.646-1.535c30.796-30.796 38.186-87.068 31.113-132.27a62.913 62.913 0 0 0 37.886 12.693c.213 0 .427-.012.641-.015c8.378 6.216 20.255 5.549 27.853-2.048c8.353-8.362 8.353-21.912-.005-30.27zm-90.948-40.132c-.191-.191-.396-.377-.592-.566c.34-.05.675-.119 1.014-.175c-.055.335-.12.669-.169 1.005c-.085-.085-.167-.179-.253-.264z"></path>
          <path fill="#FFF" d="M377.496 183.639c-12.067 12.067-31.63 12.067-43.697 0c-12.067-12.067-12.067-31.63 0-43.697c12.067-12.067 31.63-12.067 43.697 0c12.067 12.067 12.067 31.631 0 43.697z"></path>
        </g>
      </svg>
      <h2 class="text-xl font-bold">Data</h2>
      <h2 class="text-xl font-bold">Architecture</h2>
      <p>We specialize in designing and implementing robust data architecture solutions. Our team leverages industry best practices to create efficient and scalable data systems.</p>
    </div>
    <div class="p-4 border-2 flex flex-col">
      <svg width="90px" height="90px" class="mx-auto" viewBox="-4.8 -4.8 57.60 57.60" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ff7300">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path d="M37 28.3923V35.4066C37 39.048 34.0885 42 30.497 42C26.9054 42 23.9939 39.048 23.9939 35.4066L24.0061 13.1429C24.0061 9.19797 21.0946 6 17.503 6C13.9115 6 11 9.19797 11 13.1429V28.3923" stroke="#ff7300" stroke-width="1.6799999999999997" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M43 31L37 25L31 31" stroke="#ff7300" stroke-width="1.6799999999999997" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M43 10.7273C43 15.1818 37 19 37 19C37 19 31 15.1818 31 10.7273C31 9.20831 31.6321 7.75155 32.7574 6.67748C33.8826 5.60341 35.4087 5 37 5C38.5913 5 40.1174 5.60341 41.2426 6.67748C42.3679 7.75155 43 9.20831 43 10.7273Z" fill="#ffcd42" stroke="#ff7300" stroke-width="1.6799999999999997" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M17 34.7273C17 39.1818 11 43 11 43C11 43 5 39.1818 5 34.7273C5 33.2083 5.63214 31.7516 6.75736 30.6775C7.88258 29.6034 9.4087 29 11 29C12.5913 29 14.1174 29.6034 15.2426 30.6775C16.3679 31.7516 17 33.2083 17 34.7273Z" fill="#ffcd42" stroke="#ff7300" stroke-width="1.6799999999999997" stroke-linecap="round" stroke-linejoin="round"></path>
          <circle cx="37" cy="11" r="2" fill="white"></circle>
          <circle cx="11" cy="35" r="2" fill="white"></circle>
        </g>
      </svg>
      <h2 class="text-xl font-bold">Packet</h2>
      <h2 class="text-xl font-bold">Tracing</h2>
      <p>We offer packet tracing services to help you analyze and troubleshoot network issues. Our experts can trace packets, identify bottlenecks, and optimize your network performance.</p>
    </div>
    <div class="p-4 border-2 flex flex-col">
      <svg class="mx-auto" height="100px" width="100px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-50.35 -50.35 604.17 604.17" xml:space="preserve" fill="#000000">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <g transform="translate(4 1)">
            <path style="fill:#FFC33B;" d="M466.705,155.16l-56.32,157.867h-0.853c0-9.387-2.56-20.48-9.387-27.307 c-5.973-5.973-16.213-14.507-30.72-23.04l1.707-3.413l57.173-120.32c4.267-10.24,14.507-16.213,28.16-11.947 C470.118,131.267,470.971,141.507,466.705,155.16z M281.531,241.347v0.853c-18.773,0.853-35.84,3.413-51.2,6.827v-0.853V28.867 c0-14.507,11.093-25.6,25.6-25.6c14.507,0,25.6,11.093,25.6,25.6V241.347z M178.278,84.333L208.998,255 c-29.867,9.387-46.933,21.333-46.933,21.333L127.931,92.867c-2.56-13.653,6.827-27.307,20.48-29.867 C162.918,61.293,175.718,70.68,178.278,84.333z M362.598,45.933c13.653,2.56,23.04,15.36,20.48,29.867l-30.72,174.08l-1.707,3.413 c-13.653-5.12-30.72-9.387-49.493-11.093v-2.56l31.573-173.227C335.291,52.76,348.945,44.227,362.598,45.933z"></path>
            <path style="fill:#FFC33B;" d="M208.998,255c6.827-2.56,13.653-4.267,21.333-5.973c15.36-3.413,32.427-5.973,51.2-6.827 c2.56,0,5.973,0,8.533,0c4.267,0,7.68,0,11.093,0c18.773,0.853,35.84,5.12,49.493,11.093c6.827,2.56,12.8,5.973,18.773,8.533 c14.507,7.68,25.6,17.067,30.72,23.04c6.827,6.827,9.387,17.92,9.387,27.307c0,2.56,0,5.12-0.853,6.827 c0,0-25.6,119.467-34.133,145.067c-8.533,25.6-17.067,34.133-34.133,34.133H195.345c-17.067,0-34.133-25.6-34.133-25.6 L30.652,263.533c-5.973-9.387-9.387-16.213-0.853-24.747c17.92-17.92,45.227-8.533,63.147,11.947l68.267,76.8v-51.2l0,0 C162.065,276.333,179.131,264.387,208.998,255"></path>
          </g>
          <path style="fill:#ff7300;" d="M345.265,503.467H200.198c-18.773,0-36.693-26.453-37.547-27.307L32.091,267.093 c-5.12-8.533-11.093-18.773,0-29.867c7.68-7.68,16.213-11.093,26.453-11.093c14.507,0,29.867,8.533,42.667,23.04l68.267,76.8 c1.707,1.707,1.707,4.267,0,5.973c-1.707,1.707-4.267,1.707-5.973,0l-68.267-76.8C84.145,243.2,70.491,235.52,58.545,235.52 c-7.68,0-14.507,2.56-20.48,8.533c-5.973,5.973-5.12,9.387,1.707,19.627l130.56,209.067c4.267,6.827,18.773,23.893,30.72,23.893 h145.067c13.653,0,21.333-4.267,29.867-31.573c8.533-24.747,34.133-143.36,34.133-144.213c1.707-9.387,0-23.04-7.68-29.867 c-9.387-9.387-46.08-41.813-107.52-41.813c-73.387,0-123.733,32.427-125.44,33.28l-0.853,0.853c0,0,0,0-0.853,0 c-2.56,0.853-4.267-0.853-5.12-3.413L128.518,96.427c-1.707-7.68,0-16.213,5.12-22.187c5.12-5.973,11.093-11.093,19.627-11.947 c16.213-2.56,31.573,7.68,34.987,23.893l23.893,136.533c0,2.56-0.853,4.267-3.413,5.12c-2.56,0-4.267-0.853-5.12-3.413 L179.718,87.893c-0.853-5.973-4.267-10.24-8.533-13.653c-4.267-3.413-10.24-4.267-16.213-3.413 c-5.973,0.853-10.24,4.267-13.653,8.533s-4.267,10.24-3.413,16.213l32.427,177.493c15.36-8.533,61.44-31.573,124.587-31.573 c64.853,0,103.253,33.28,114.347,43.52c9.387,9.387,11.947,26.453,9.387,38.4c-0.853,5.12-25.6,120.32-34.133,145.92 C375.131,489.813,366.598,503.467,345.265,503.467z M302.598,435.2c-1.707,0-3.413-0.853-4.267-3.413 c-21.333-73.387-79.36-81.92-81.92-81.92s-4.267-2.56-3.413-5.12c0-2.56,2.56-4.267,5.12-3.413c0.853,0,65.707,9.387,88.747,88.747 c0.853,2.56-0.853,4.267-2.56,5.12C303.451,435.2,302.598,435.2,302.598,435.2z M370.865,332.8c-61.44,0-95.573-51.2-97.28-52.907 c-1.707-1.707-0.853-4.267,0.853-5.973c1.707-1.707,4.267-0.853,5.973,0.853c0,0.853,33.28,49.493,90.453,49.493 c2.56,0,4.267,1.707,4.267,4.267C375.131,331.093,373.425,332.8,370.865,332.8z M432.305,268.8c-0.853,0-0.853,0-1.707,0 c-2.56-0.853-3.413-3.413-2.56-5.12l38.4-108.373c2.56-6.827,3.413-12.8,1.707-16.213c-1.707-2.56-4.267-5.12-8.533-6.827 c-11.947-4.267-19.627,2.56-22.187,9.387l-42.667,93.013c-0.853,2.56-3.413,3.413-5.973,1.707c-2.56-0.853-3.413-3.413-1.707-5.973 l42.667-92.16c5.12-13.653,18.773-18.773,33.28-13.653c6.827,2.56,11.093,5.973,12.8,11.093c2.56,5.973,2.56,13.653-0.853,23.04 l-38.4,108.373C435.718,267.093,434.011,268.8,432.305,268.8z M362.331,224.427C361.478,224.427,361.478,224.427,362.331,224.427 c-3.413-0.853-4.267-2.56-4.267-5.12l25.6-143.36c1.707-11.947-5.973-23.04-17.067-24.747c-11.093-1.707-23.04,5.973-24.747,17.067 l-24.747,142.507c0,2.56-2.56,4.267-5.12,3.413c-2.56,0-4.267-2.56-3.413-5.12L333.318,66.56 c2.56-16.213,18.773-27.307,34.987-23.893c16.213,2.56,27.307,18.773,23.893,34.987l-25.6,143.36 C365.745,222.72,364.038,224.427,362.331,224.427z M234.331,221.867c-2.56,0-4.267-1.707-4.267-4.267V29.867 C230.065,13.653,243.718,0,259.931,0s29.867,13.653,29.867,29.867v181.76c0,2.56-1.707,4.267-4.267,4.267s-4.267-1.707-4.267-4.267 V29.867c0-11.947-9.387-21.333-21.333-21.333c-11.947,0-21.333,9.387-21.333,21.333V217.6 C238.598,220.16,236.891,221.867,234.331,221.867z"></path>
        </g>
      </svg>
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
        <img src="storage/t1.png" alt="" />
      </span>
    </div>
    <section class="bl"></section>
    <section class="br"></section>
  </div>
  <section class="info no-border">
    <h2>Step 1: Upload Files</h2>
    <span class="text-xs">The first step is to upload the files you want to transfer. You can
      select one or multiple files from your device and upload them to the
      platform.</span>
  </section>
  <section></section>
  <section></section>
  <section class="info">
    <h2>Step 2: Set Transfer Options</h2>
    <span class="text-xs">After uploading the files, you can set the transfer options. This
      includes selecting the recipient(s) or specifying an email address
      to send the files to. Additionally, you can set optional parameters
      such as password protection for the files or expiration date for the
      transfer link.</span>
  </section>
  <div class="circle-container">
    <section class="tl"></section>
    <section class="tr"></section>
    <div class="flex items-center justify-center">
      <span class="circle">
        <img src="storage/t2.png" alt="" />
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
        <img src="storage/t3.png" alt="" />
      </span>
    </div>
    <section class="bl"></section>
    <section class="br"></section>
  </div>
  <section class="info">
    <h2>Step 3: Confirm and Initiate Transfer</h2>
    <span class="text-xs">Once you have set the transfer options, you can review and confirm
      the details. This step allows you to double-check the recipient(s),
      transfer options, and any additional settings.
    </span>
  </section>
  <section></section>
  <section></section>
  <section class="info">
    <h2>Step 4: Track Transfer and Download</h2>
    <span class="text-xs">After initiating the transfer, you can track the progress of the
      transfer. The platform should provide real-time updates on the
      status of the transfer, such as when the files are sent, received,
      or downloaded. Once the recipient(s) receive the transfer link, they
      can download the files securely.</span>
  </section>
  <div class="circle-container">
    <section class="tl"></section>
    <section class="tr"></section>
    <div class="flex items-center justify-center">
      <span class="circle">
        <img src="storage/t4.png" alt="" />
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
  <div class="grid grid-cols-4 max-md:grid-cols-2 max-[330px]:grid-cols-1 my-4 gap-2 py-6">
    <div class="p-4 border-2">
      <svg class="mx-auto" height="100px" width="100px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-50.52 -50.52 606.21 606.21" xml:space="preserve" fill="#000000">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path style="fill:#FFC44D;" d="M217.6,243.2c17.92,2.56,17.92,25.6,17.92,25.6v153.6c0,17.067-8.533,34.133-25.6,51.2 c-17.067,17.067-42.667,25.6-42.667,25.6H22.187l102.4-76.8c8.533-5.12,15.36-23.04,17.067-34.133l25.6-170.667 c17.067-85.333,25.6-145.067,51.2-145.067c12.8,0,17.067,3.413,17.067,17.067c0,17.067-10.24,148.48-11.093,154.453L217.6,243.2z M280.747,245.76L280.747,245.76c0-0.853-11.093-139.093-11.093-156.16c0-13.653,4.267-17.067,17.067-17.067 c25.6,0,34.133,59.733,51.2,145.067l25.6,170.667c2.56,10.24,8.533,28.16,17.067,34.133l102.4,76.8H337.92 c0,0-25.6-8.533-42.667-25.6c-17.067-17.067-25.6-34.133-25.6-51.2V268.8C269.653,268.8,269.653,251.733,280.747,245.76z"></path>
          <path style="fill:#ff7300;" d="M337.92,503.467c-0.853,0-0.853,0-1.707,0c-0.853,0-26.453-9.387-44.373-26.453 c-17.92-17.92-26.453-35.84-26.453-54.613V268.8c0-10.24,5.12-29.867,25.6-29.867s25.6,28.16,25.6,29.013l8.533,110.933 c0,2.56-1.707,4.267-4.267,4.267s-4.267-1.707-4.267-4.267l-8.533-110.933l0,0c0,0-4.267-21.333-17.067-21.333 c-17.067,0-17.067,20.48-17.067,21.333v153.6c0,16.213,8.533,32.427,24.747,47.787c16.213,16.213,40.96,24.747,40.96,24.747 c2.56,0.853,3.413,3.413,2.56,5.12C341.333,502.613,339.627,503.467,337.92,503.467z M167.253,503.467 c-1.707,0-3.413-0.853-4.267-2.56c-0.853-2.56,0.853-4.267,2.56-5.12c0,0,24.747-8.533,40.96-24.747 c16.213-16.213,24.747-32.427,24.747-47.787v-153.6c0-0.853,0-21.333-17.067-21.333c-12.8,0-17.067,22.187-17.067,22.187 l-8.533,110.933c0,2.56-2.56,4.267-4.267,4.267c-2.56,0-4.267-2.56-4.267-4.267l8.533-110.933c0-1.707,5.12-29.867,25.6-29.867 s25.6,19.627,25.6,29.867v153.6c0,17.92-9.387,36.693-26.453,54.613c-17.92,17.92-43.52,26.453-44.373,26.453 C168.107,503.467,168.107,503.467,167.253,503.467z M482.987,503.467c-0.853,0-1.707,0-2.56-0.853l-102.4-76.8 c-10.24-6.827-16.213-26.453-18.773-36.693l-25.6-170.667c-1.707-9.387-3.413-17.92-5.12-26.453 c-12.8-64-22.187-114.347-41.813-114.347c-11.093,0-12.8,1.707-12.8,12.8c0,17.067,8.533,126.293,8.533,128 c0,2.56-1.707,4.267-4.267,4.267s-4.267-1.707-4.267-4.267c0-4.267-8.533-110.933-8.533-128c0-15.36,5.973-21.333,21.333-21.333 c26.453,0,34.987,46.08,50.347,121.173c1.707,8.533,3.413,17.92,5.12,27.307l25.6,170.667c2.56,11.093,8.533,26.453,15.36,31.573 l102.4,76.8c1.707,1.707,2.56,4.267,0.853,5.973C485.547,502.613,484.693,503.467,482.987,503.467z M22.187,503.467 c-1.707,0-2.56-0.853-3.413-1.707c-1.707-1.707-0.853-4.267,0.853-5.973l102.4-76.8c6.827-4.267,13.653-20.48,15.36-31.573 l25.6-170.667c1.707-9.387,3.413-18.773,5.12-27.307C182.613,113.493,192,68.266,218.453,68.266c15.36,0,21.333,5.973,21.333,21.333 c0,17.067-8.533,123.733-8.533,128c0,2.56-2.56,4.267-4.267,4.267c-2.56,0-4.267-2.56-4.267-4.267c0-0.853,8.533-110.933,8.533-128 c0-11.093-1.707-12.8-12.8-12.8c-19.627,0-29.013,50.347-41.813,114.347c-1.707,8.533-3.413,17.92-5.12,27.307l-25.6,170.667 c-1.707,11.093-8.533,30.72-18.773,36.693l-102.4,76.8C23.893,503.467,23.04,503.467,22.187,503.467z M466.773,379.733 c-0.853,0-1.707,0-2.56-0.853l-60.587-34.987c-1.707-0.853-2.56-3.413-1.707-5.973c0.853-1.707,3.413-2.56,5.973-1.707L468.48,371.2 c1.707,0.853,2.56,3.413,1.707,5.973C470.187,378.88,468.48,379.733,466.773,379.733z M38.4,379.733c-1.707,0-2.56-0.853-3.413-2.56 c-0.853-1.707-0.853-4.267,1.707-5.973l60.587-34.987c1.707-0.853,4.267-0.853,5.973,1.707c0.853,1.707,0.853,4.267-1.707,5.973 L40.96,378.88C40.107,379.733,39.253,379.733,38.4,379.733z M500.053,256h-102.4c-2.56,0-4.267-1.707-4.267-4.267 c0-2.56,1.707-4.267,4.267-4.267h102.4c2.56,0,4.267,1.707,4.267,4.267C504.32,254.293,502.613,256,500.053,256z M107.52,256 L107.52,256H5.12c-2.56,0-4.267-1.707-4.267-4.267c0-2.56,1.707-4.267,4.267-4.267l0,0h102.4c2.56,0,4.267,1.707,4.267,4.267 C111.787,254.293,110.08,256,107.52,256z M380.587,181.76c-1.707,0-2.56-0.853-3.413-2.56c-0.853-1.707-0.853-4.267,1.707-5.973 l86.187-49.493c1.707-0.853,4.267-0.853,5.973,1.707c0.853,1.707,0.853,4.267-1.707,5.973l-86.187,49.493 C382.293,181.76,381.44,181.76,380.587,181.76z M124.587,181.76c-0.853,0-1.707,0-1.707-0.853l-86.187-49.493 c-1.707-0.853-2.56-3.413-1.707-5.973c0.853-1.707,3.413-2.56,5.973-1.707l86.187,49.493c1.707,0.853,2.56,3.413,1.707,5.973 C127.147,181.76,126.293,181.76,124.587,181.76z M354.987,78.507c-0.853,0-1.707,0-2.56-0.853c-1.707-0.853-2.56-3.413-1.707-5.973 l21.333-36.693c0.853-1.707,3.413-2.56,5.973-1.707c1.707,0.853,2.56,3.413,1.707,5.973L358.4,75.947 C357.547,77.653,356.693,78.507,354.987,78.507z M150.187,78.507c-1.707,0-2.56-0.853-3.413-2.56L125.44,39.254 c-0.853-1.707-0.853-4.267,1.707-5.973c1.707-0.853,4.267-0.853,5.973,1.707l21.333,36.693c0.853,1.707,0.853,4.267-1.707,5.973 C151.893,78.507,151.04,78.507,150.187,78.507z M252.587,34.133c-2.56,0-4.267-1.707-4.267-4.267v-25.6 c0-2.56,1.707-4.267,4.267-4.267s4.267,1.707,4.267,4.267v25.6C256.853,32.427,255.147,34.133,252.587,34.133z"></path>
        </g>
      </svg>
      <h2 class="text-xl font-bold">Users</h2>
      <p>22k+</p>
      <p>Join our community and experience the benefits of our services.</p>
    </div>
    <div class="p-4 border-2">
      <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" viewBox="-45.5 -45.5 546.01 546.01" xml:space="preserve" width="100px" height="100px" fill="#000000" stroke="#000000" stroke-width="0.0045501">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <g>
            <rect x="118.145" y="296.859" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 472.3967 413.0449)" style="fill:#ff7300;" width="65.018" height="15"></rect>
            <path style="fill:#ffa629;" d="M405.217,290.221c-66.391,66.391-174.033,66.391-240.425,0l103.34-137.084l137.084-103.34 C471.608,116.188,471.608,223.829,405.217,290.221z"></path>
            <path style="fill:#ffbf00;" d="M405.217,49.796L164.792,290.221c-66.391-66.391-66.391-174.033,0-240.425 S338.825-16.595,405.217,49.796z"></path>
            <path style="fill:#FFF1CF;" d="M380.464,74.549L189.545,265.468c52.721,52.721,138.198,52.721,190.919,0 S433.185,127.27,380.464,74.549z"></path>
            <path style="fill:#FFFFFF;" d="M362.786,247.79c52.721-52.721,60.635-130.284,17.678-173.241 c-52.721-52.721-138.198-52.721-190.919,0s-52.721,138.198,0,190.919C232.503,308.425,310.065,300.511,362.786,247.79z"></path>
            <polygon style="fill:#ff7300;" points="94.081,332.643 87.01,367.998 122.365,360.927 150.649,332.643 122.365,304.359 "></polygon>
            <polygon style="fill:#ff7300;" points="94.081,332.643 0,426.724 14.142,440.866 68.253,400.897 108.223,346.785 "></polygon>
            <rect x="1.728" y="390.896" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -263.4856 165.6825)" style="fill:#ff7300;" width="133.05" height="20"></rect>
            <path style="fill:#E44670;" d="M326.978,98.417c-1.953,0-3.873,0.12-5.76,0.349l-36.153,163.8 C287.793,261.061,375,212.635,375,146.439C375,119.919,353.498,98.417,326.978,98.417z"></path>
            <path style="fill:#ff7300;" d="M321.218,98.766c18.011,2.88,31.964,23.127,31.964,47.673c0,66.033-65.749,114.393-68.116,116.127 c-0.044,0.022-0.065,0.033-0.065,0.033s-90-48.916-90-116.16c0-26.52,21.491-48.022,48.011-48.022 c18.087,0,33.796,10.015,41.989,24.775C292.298,110.024,305.596,100.632,321.218,98.766z"></path>
          </g>
        </g>
      </svg>
      <h2 class="text-xl font-bold">Satisfaction</h2>
      <p>100%</p>
      <p>Striving to deliver exceptional service that exceeds our clients' expectations, resulting in a 100% satisfaction rate.</p>
    </div>
    <div class="p-4 border-2">
      <svg class="mx-auto" width="100px" height="100px" viewBox="-8.21 -8.21 98.56 98.56" xmlns="http://www.w3.org/2000/svg" fill="#000000">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <g id="star_gold_orange" data-name="star gold orange" transform="translate(-462.47 -619.736)">
            <rect id="Rectangle_18" data-name="Rectangle 18" width="0.003" height="0.004" transform="translate(503.588 662.924) rotate(-29.055)" fill="gray"></rect>
            <rect id="Rectangle_19" data-name="Rectangle 19" width="0.002" height="0.002" transform="translate(503.591 662.923)" fill="gray"></rect>
            <path id="Path_72" data-name="Path 72" d="M503.592,662.926Z" fill="gray"></path>
            <path id="Path_73" data-name="Path 73" d="M503.592,662.923v0l41.02-13.494-27.587-5.138-13.433,18.629Z" fill="#f9c543"></path>
            <rect id="Rectangle_20" data-name="Rectangle 20" width="0.002" height="0.002" transform="translate(503.591 662.925)" fill="gray"></rect>
            <path id="Path_74" data-name="Path 74" d="M503.592,662.923Z" fill="gray"></path>
            <path id="Path_75" data-name="Path 75" d="M525.465,669.942l19.147-20.51-41.02,13.494Z" fill="#fdb53f"></path>
            <path id="Path_76" data-name="Path 76" d="M503.592,662.923Z" fill="gray"></path>
            <path id="Path_77" data-name="Path 77" d="M481.772,670.1,478.33,697.95l25.256-35.023Z" fill="#f9c543"></path>
            <path id="Path_78" data-name="Path 78" d="M503.586,662.926,478.33,697.95l25.345-12.057-.083-22.967Z" fill="#ff7300"></path>
            <path id="Path_79" data-name="Path 79" d="M517.025,644.294l-13.588-24.559.155,43.188Z" fill="#ff7300"></path>
            <path id="Path_80" data-name="Path 80" d="M503.592,662.926h0L529.1,697.77l-3.632-27.828Z" fill="#ff7300"></path>
            <path id="Path_81" data-name="Path 81" d="M503.592,662.926l.083,22.967L529.1,697.77l-25.505-34.844Z" fill="#fdb53f"></path>
            <path id="Path_82" data-name="Path 82" d="M503.592,662.923h0l-.155-43.187-13.416,24.652,13.57,18.535Z" fill="#f9c543"></path>
            <path id="Path_83" data-name="Path 83" d="M490.021,644.388l-27.551,5.336,41.122,13.2Z" fill="#fdb53f"></path>
            <path id="Path_84" data-name="Path 84" d="M503.592,662.923h0l-41.122-13.2,19.3,20.375,21.814-7.173Z" fill="#ff7300"></path>
          </g>
        </g>
      </svg>
      <h2 class="text-xl font-bold">Reviews</h2>
      <p>4.9/5</p>
      <p>We are proud of the positive feedback and continuously work to maintain our high standards.</p>
    </div>
    <div class="p-4 border-2">
      <svg width="100px" height="100px" class="mx-auto" viewBox="-6.4 -6.4 76.80 76.80" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" fill="#000000" stroke="#000000" stroke-width="0.256">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <defs>
            <style>
              .cls-1 {
                fill: #e7ecef;
              }

              .cls-2 {
                fill: #8b8c89;
              }

              .cls-3 {
                fill: #FFC44D;
              }

              .cls-4 {
                fill: #FFC44D;
              }

              .cls-5 {
                fill: #ffbe8a;
              }

              .cls-6 {
                fill: #ff8f33;
              }

              .cls-7 {
                fill: #ff8f33;
              }
            </style>
          </defs>
          <path class="cls-4" d="M30.86,28.86c.33-.23,.72-.36,1.14-.36,1.1,0,2,.9,2,2s-.9,2-2,2c-.36,0-.71-.1-1-.27v1.45c0,.34-.17,.64-.43,.83,3.23,3.09,7.61,4.99,12.43,4.99,9.94,0,18-8.06,18-18S52.94,3.5,43,3.5s-17.91,7.97-18,17.84c1.15,.5,2.19,1.21,3.07,2.09,1.44,1.44,2.45,3.32,2.79,5.43Z"></path>
          <path class="cls-5" d="M25.58,39.54l-3,1.29c-1.01,.43-2.15,.43-3.15,0l-3-1.29c-1.47-.63-2.42-2.08-2.42-3.68v-5.36c0-3.31,2.69-6,6-6h2c3.31,0,6,2.69,6,6v5.36c0,1.6-.95,3.05-2.42,3.68Z"></path>
          <path class="cls-7" d="M34.14,45.5c-1.82-1.85-4.35-3-7.14-3h-3c0,1.66-1.34,3-3,3s-3-1.34-3-3h-3c-5.52,0-10,4.48-10,10v7H27l4-14h3.14Z"></path>
          <path class="cls-5" d="M16,55.5h2c1.1,0,2,.9,2,2v2h-4v-4h0Z"></path>
          <path class="cls-7" d="M11,32.23c-.29,.17-.64,.27-1,.27-1.1,0-2-.9-2-2s.9-2,2-2c.42,0,.81,.13,1.14,.36"></path>
          <path class="cls-7" d="M31,32.23c.29,.17,.64,.27,1,.27,1.1,0,2-.9,2-2s-.9-2-2-2c-.42,0-.81,.13-1.14,.36"></path>
          <path class="cls-3" d="M18,40.21l1.42,.61c1.01,.44,2.15,.44,3.16,0l1.42-.61v2.29c0,1.66-1.34,3-3,3s-3-1.34-3-3v-2.29Z"></path>
          <polyline class="cls-2" points="27 59.5 31 45.5 53 45.5 49 59.5"></polyline>
          <path class="cls-7" d="M27.4,27.88h-.01c-.57-.23-1.23-.38-2.06-.38-4.33,0-4.33,4-8.67,4-1.13,0-1.97-.27-2.66-.67v-.33c0-3.31,2.69-6,6-6h2c2.37,0,4.42,1.38,5.39,3.38h.01Z"></path>
          <path class="cls-1" d="M28,35.1v-4.6c0-3.31-2.69-6-6-6h-2c-3.31,0-6,2.69-6,6v4h-2c-.55,0-1-.45-1-1v-3c0-5.52,4.48-10,10-10,2.76,0,5.26,1.12,7.07,2.93s2.93,4.31,2.93,7.07v3.18c0,.48-.34,.89-.8,.98l-2.2,.44Z"></path>
          <path class="cls-4" d="M40,51.5c.55,0,1,.45,1,1s-.45,1-1,1v-2Z"></path>
          <path class="cls-6" d="M21,59.5h-2v-2c0-.55-.45-1-1-1h-7c-.55,0-1-.45-1-1v-4c0-.27,.11-.52,.29-.71l2-2,1.41,1.41-1.71,1.71v2.59h6c1.65,0,3,1.35,3,3v2Z"></path>
          <rect class="cls-4" height="2" width="50" x="3" y="58.5"></rect>
          <path class="cls-6" d="M37.02,38.47c-1.44-.5-2.78-1.18-4.02-2.01,4.82-3.22,8-8.72,8-14.96,0-1.1,.9-2,2-2s2,.9,2,2c0,6.83-3.11,12.93-7.99,16.98h.01Z"></path>
          <path class="cls-6" d="M47.39,38.95h0c-1.41,.36-2.88,.55-4.39,.55-.41,0-.82-.01-1.22-.04,4.48-4.66,7.22-10.99,7.22-17.96,0-3.31-2.69-6-6-6s-6,2.69-6,6-1.13,6.3-3.03,8.69c0,0,0,0,0,0h0c-.15-.97-.98-1.7-1.97-1.7-.42,0-.81,.13-1.14,.36-.05-.32-.11-.63-.2-.94,1.46-1.74,2.34-3.98,2.34-6.42,0-5.52,4.48-10,10-10s10,4.48,10,10c0,6.51-2.08,12.54-5.61,17.46"></path>
          <path class="cls-6" d="M28.5,23.89c.32-.73,.5-1.54,.5-2.39,0-7.73,6.27-14,14-14s14,6.27,14,14c0,5.14-1.14,10.02-3.18,14.38,4.36-3.28,7.18-8.5,7.18-14.38,0-9.94-8.06-18-18-18s-17.91,7.97-18,17.84c1.15,.5,2.19,1.21,3.07,2.09,.15,.15,.29,.3,.43,.46Z"></path>
          <path class="cls-7" d="M21,36.5h0c-.11-.54,.24-1.07,.78-1.18l8.22-1.64v-2.86c0-4.79-3.61-8.98-8.38-9.3-5.24-.35-9.62,3.81-9.62,8.98v3h2v2h-2c-1.1,0-2-.9-2-2v-2.68c0-5.72,4.24-10.74,9.94-11.27,6.54-.62,12.06,4.53,12.06,10.95v3.18c0,.95-.67,1.77-1.61,1.96l-8.22,1.64c-.54,.11-1.07-.24-1.18-.78Z"></path>
        </g>
      </svg>
      <h2 class="text-xl font-bold">Security</h2>
      <p>100%</p>
      <p>We implement robust security measures to safeguard your information, giving you peace of mind.</p>
    </div>
  </div>
</div>
<!-- Why Us END -->

<!-- Support START -->
<div class="relative flex flex-col h-fit mt-12 bg-[url('/storage/8.jpg')]">
  <div class="overlay z-20 inset-0 flex flex-col relative">
    <span class="flex flex-wrap text-xl font-bold mx-auto mt-8 gap-2 max-[350px]:flex-col max-[350px]:items-center underline decoration-[--c2]">
      -<span class="whitespace-normal">Best Technical</span><span class="whitespace-normal">Support 24/7</span>-
    </span>
    <p class="text-xs mx-auto">Support and Guidance</p>
    <div class="grid grid-cols-2 max-sm:grid-cols-1 m-auto justify-center py-6">
      <div class="flex text-white flex-col justify-center basis-1/2 gap-4 mx-8">
        <p class="font-[600]">Anything. Anywhere. Anytime.</p>
        <p class="text-sm">
          EZEPOST can assist you in regaining crucial time. We are here to assist you in determining the root cause of those recurring issues and determining the best strategy to prevent them from recurring in the future. IT Support difficulties can have a significant impact on your day-to-day operations, and your present IT personnel may not always be proactive. So, whether your firm need occasional remote IT help or outsources all of its IT services, we have a solution that provides flexible, cost-effective, and personalised technical support.
        </p>
        <p class="font-bold">Call Us : 12345-123-123</p>
        <p class="font-bold">Email Us : email@emai.email</p>
      </div>
      <div class="basis-1/3">
        <img src="storage/3.png" class="m-auto" />
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
      <span class="font-bold text-end text-5xl"><svg class="ml-auto" fill="#ffa200" width="32px" height="32px" viewBox="-2 -2 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#ffa200">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3 0 1.656 1.306 3 2.916 3 2.915 0 .972 5.799-2.916 5.799v1.4c6.939.001 9.658-13.199 2.916-13.199zm8.4 0c-1.609 0-2.915 1.343-2.915 3 0 1.656 1.306 3 2.915 3 2.916 0 .973 5.799-2.915 5.799v1.4c6.938.001 9.657-13.199 2.915-13.199z"></path>
          </g>
        </svg></span>
      <p class="whitespace-nowrap text-3xl text-end">Clients Say</p>
    </div>

    <div class="flex gap-4 overflow-x-scroll">
      <div class="flex flex-col max-w-[250px] border-2 p-2 shadow-xl rounded min-w-[200px]">
        <div class="flex gap-2">
          <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="avatar" class="h-10 w-auto rounded-full" />
          <div class="mr-auto">
            <p>John Doe</p>
            <p class="text-xs font-bold">March 15, 2023</p>
          </div>
          <span><svg fill="#ffa200" width="32px" height="32px" viewBox="-2 -2 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#ffa200">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3 0 1.656 1.306 3 2.916 3 2.915 0 .972 5.799-2.916 5.799v1.4c6.939.001 9.658-13.199 2.916-13.199zm8.4 0c-1.609 0-2.915 1.343-2.915 3 0 1.656 1.306 3 2.915 3 2.916 0 .973 5.799-2.915 5.799v1.4c6.938.001 9.657-13.199 2.915-13.199z"></path>
              </g>
            </svg></span>
        </div>
        <p class="text-xs">
          EZEPOSE is a game-changer! Simplifies my business operations and boosts efficiency.
        </p>
      </div>

      <div class="flex flex-col max-w-[250px] border-2 p-2 shadow-xl rounded min-w-[200px]">
        <div class="flex gap-2">
          <img src="https://randomuser.me/api/portraits/women/56.jpg" alt="avatar" class="h-10 w-auto rounded-full" />
          <div class="mr-auto">
            <p>Jane Smith</p>
            <p class="text-xs font-bold">June 5, 2023</p>
          </div>
          <span><svg fill="#ffa200" width="32px" height="32px" viewBox="-2 -2 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#ffa200">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3 0 1.656 1.306 3 2.916 3 2.915 0 .972 5.799-2.916 5.799v1.4c6.939.001 9.658-13.199 2.916-13.199zm8.4 0c-1.609 0-2.915 1.343-2.915 3 0 1.656 1.306 3 2.915 3 2.916 0 .973 5.799-2.915 5.799v1.4c6.938.001 9.657-13.199 2.915-13.199z"></path>
              </g>
            </svg></span>
        </div>
        <p class="text-xs">
          Using EZEPOSE has significantly improved my sales tracking and inventory management.
        </p>
      </div>

      <div class="flex flex-col max-w-[250px] border-2 p-2 shadow-xl rounded min-w-[200px]">
        <div class="flex gap-2">
          <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="avatar" class="h-10 w-auto rounded-full" />
          <div class="mr-auto">
            <p>Emily Johnson</p>
            <p class="text-xs font-bold">August 20, 2023</p>
          </div>
          <span><svg fill="#ffa200" width="32px" height="32px" viewBox="-2 -2 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#ffa200">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3 0 1.656 1.306 3 2.916 3 2.915 0 .972 5.799-2.916 5.799v1.4c6.939.001 9.658-13.199 2.916-13.199zm8.4 0c-1.609 0-2.915 1.343-2.915 3 0 1.656 1.306 3 2.915 3 2.916 0 .973 5.799-2.915 5.799v1.4c6.938.001 9.657-13.199 2.915-13.199z"></path>
              </g>
            </svg></span>
        </div>
        <p class="text-xs">
          EZEPOSE has streamlined my checkout process, making transactions quick and hassle-free.
        </p>
      </div>

      <div class="flex flex-col max-w-[250px] border-2 p-2 shadow-xl rounded min-w-[200px]">
        <div class="flex gap-2">
          <img src="https://randomuser.me/api/portraits/women/87.jpg" alt="avatar" class="h-10 w-auto rounded-full" />
          <div class="mr-auto">
            <p>Michael Brown</p>
            <p class="text-xs font-bold">October 10, 2023</p>
          </div>
          <span><svg fill="#ffa200" width="32px" height="32px" viewBox="-2 -2 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#ffa200">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3 0 1.656 1.306 3 2.916 3 2.915 0 .972 5.799-2.916 5.799v1.4c6.939.001 9.658-13.199 2.916-13.199zm8.4 0c-1.609 0-2.915 1.343-2.915 3 0 1.656 1.306 3 2.915 3 2.916 0 .973 5.799-2.915 5.799v1.4c6.938.001 9.657-13.199 2.915-13.199z"></path>
              </g>
            </svg></span>
        </div>
        <p class="text-xs">
          With EZEPOSE, I can easily generate detailed sales reports and analyze my business performance.
        </p>
      </div>

      <div class="flex flex-col max-w-[250px] border-2 p-2 shadow-xl rounded min-w-[200px]">
        <div class="flex gap-2">
          <img src="https://randomuser.me/api/portraits/men/78.jpg" alt="avatar" class="h-10 w-auto rounded-full" />
          <div class="mr-auto">
            <p>Sarah Wilson</p>
            <p class="text-xs font-bold">November 27, 2023</p>
          </div>
          <span><svg fill="#ffa200" width="32px" height="32px" viewBox="-2 -2 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#ffa200">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3 0 1.656 1.306 3 2.916 3 2.915 0 .972 5.799-2.916 5.799v1.4c6.939.001 9.658-13.199 2.916-13.199zm8.4 0c-1.609 0-2.915 1.343-2.915 3 0 1.656 1.306 3 2.915 3 2.916 0 .973 5.799-2.915 5.799v1.4c6.938.001 9.657-13.199 2.915-13.199z"></path>
              </g>
            </svg></span>
        </div>
        <p class="text-xs">
          EZEPOSE is user-friendly and offers excellent support. Highly recommended for small businesses.
        </p>
      </div>

      <div class="flex flex-col max-w-[250px] border-2 p-2 shadow-xl rounded min-w-[200px]">
        <div class="flex gap-2">
          <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="avatar" class="h-10 w-auto rounded-full" />
          <div class="mr-auto">
            <p>David Thompson</p>
            <p class="text-xs font-bold">December 12, 2023</p>
          </div>
          <span><svg fill="#ffa200" width="32px" height="32px" viewBox="-2 -2 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#ffa200">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3 0 1.656 1.306 3 2.916 3 2.915 0 .972 5.799-2.916 5.799v1.4c6.939.001 9.658-13.199 2.916-13.199zm8.4 0c-1.609 0-2.915 1.343-2.915 3 0 1.656 1.306 3 2.915 3 2.916 0 .973 5.799-2.915 5.799v1.4c6.938.001 9.657-13.199 2.915-13.199z"></path>
              </g>
            </svg></span>
        </div>
        <p class="text-xs">
          EZEPOSE is an incredible point of sale system! It has revolutionized how I manage my business.
        </p>
      </div>


    </div>
  </div>
</div>
<!-- Reviews END -->

@endsection
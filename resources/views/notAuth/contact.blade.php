@extends ('layout')


@section('content')
<!-- Hero START -->
<div class="relative flex flex-col h-100 overflow-hidden">
  <video src="storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
  <div class="overlay relative flex flex-col">
    <!-- Heading - START -->
    <div class="my-8 text-center">
      <h1 class="font-bold text-3xl">Contact Us</h1>
      <p>Easily accessible customer service is crucial in today's 24-hour</p>
    </div>
    <!-- Heading - END -->
  </div>
</div>
<!-- Hero END -->

<!-- Contact Info - START -->
<div class="flex flex-col py-6">
  <p class="text-xl text-center">Get In Touch With Us</p>
  <p class="text-sm text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, voluptates!</p>
  <div class="flex flex-wrap justify-center gap-4">
    <div onclick="alert('to implement')" class="transition hover:scale-[0.94] min-w-[146px] text-center shadow-xl p-4 rounded">
      <svg version="1.0" class="mx-auto" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="-9.6 -9.6 83.20 83.20" enable-background="new 0 0 64 64" xml:space="preserve" fill="#ff7300" stroke="#ff7300" stroke-width="2.496">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <g>
            <g>
              <path fill="#ff4d00" d="M32,0C18.745,0,8,10.745,8,24c0,5.678,2.502,10.671,5.271,15l17.097,24.156C30.743,63.686,31.352,64,32,64 s1.257-0.314,1.632-0.844L50.729,39C53.375,35.438,56,29.678,56,24C56,10.745,45.255,0,32,0z M48.087,39h-0.01L32,61L15.923,39 h-0.01C13.469,35.469,10,29.799,10,24c0-12.15,9.85-22,22-22s22,9.85,22,22C54,29.799,50.281,35.781,48.087,39z"></path>
              <path fill="#ff4d00" d="M32,14c-5.523,0-10,4.478-10,10s4.477,10,10,10s10-4.478,10-10S37.523,14,32,14z M32,32 c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path>
              <path fill="#ff4d00" d="M32,10c-7.732,0-14,6.268-14,14s6.268,14,14,14s14-6.268,14-14S39.732,10,32,10z M32,36 c-6.627,0-12-5.373-12-12s5.373-12,12-12s12,5.373,12,12S38.627,36,32,36z"></path>
            </g>
            <g>
              <path fill="#ff7b00" d="M32,12c-6.627,0-12,5.373-12,12s5.373,12,12,12s12-5.373,12-12S38.627,12,32,12z M32,34 c-5.522,0-10-4.477-10-10s4.478-10,10-10s10,4.477,10,10S37.522,34,32,34z"></path>
              <path fill="#ff7b00" d="M32,2c-12.15,0-22,9.85-22,22c0,5.799,3.469,11.469,5.913,15h0.01L32,61l16.077-22h0.01 C50.281,35.781,54,29.799,54,24C54,11.85,44.15,2,32,2z M32,38c-7.732,0-14-6.268-14-14s6.268-14,14-14s14,6.268,14,14 S39.732,38,32,38z"></path>
            </g>
            <path opacity="0.2" fill="#ff0000" d="M32,12c-6.627,0-12,5.373-12,12s5.373,12,12,12s12-5.373,12-12S38.627,12,32,12z M32,34 c-5.522,0-10-4.477-10-10s4.478-10,10-10s10,4.477,10,10S37.522,34,32,34z"></path>
          </g>
        </g>
      </svg>
      <p class="text-xl font-bold">Main Branch</p>
      <p class="text-sm">Birmingham, UK</p>
    </div>
    <div class="transition hover:scale-[0.98] min-w-[146px] text-center shadow-xl p-4 rounded">
      <svg width="64px" height="64px" class="mx-auto" viewBox="0 0 1024.00 1024.00" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path d="M729.6 870.4c0 28.16-23.04 51.2-51.2 51.2H345.6c-28.16 0-51.2-23.04-51.2-51.2V179.2c0-28.16 23.04-51.2 51.2-51.2h332.8c28.16 0 51.2 23.04 51.2 51.2v691.2z" fill="#e2ada7"></path>
          <path d="M678.4 934.4H345.6c-35.84 0-64-28.16-64-64V179.2c0-35.84 28.16-64 64-64h332.8c35.84 0 64 28.16 64 64v691.2c0 35.84-28.16 64-64 64zM345.6 140.8c-21.76 0-38.4 16.64-38.4 38.4v691.2c0 21.76 16.64 38.4 38.4 38.4h332.8c21.76 0 38.4-16.64 38.4-38.4V179.2c0-21.76-16.64-38.4-38.4-38.4H345.6z" fill="#231C1C"></path>
          <path d="M691.2 744.96c0 12.8-11.52 23.04-25.6 23.04H358.4c-14.08 0-25.6-10.24-25.6-23.04V253.44c0-12.8 11.52-23.04 25.6-23.04h307.2c14.08 0 25.6 10.24 25.6 23.04v491.52z" fill="#F2E5CA"></path>
          <path d="M665.6 780.8H358.4c-21.76 0-38.4-16.64-38.4-35.84V253.44c0-20.48 16.64-35.84 38.4-35.84h307.2c21.76 0 38.4 16.64 38.4 35.84v491.52c0 19.2-16.64 35.84-38.4 35.84zM358.4 243.2c-7.68 0-12.8 5.12-12.8 10.24v491.52c0 5.12 5.12 10.24 12.8 10.24h307.2c7.68 0 12.8-5.12 12.8-10.24V253.44c0-5.12-5.12-10.24-12.8-10.24H358.4z" fill="#231C1C"></path>
          <path d="M512 844.8m-38.4 0a38.4 38.4 0 1 0 76.8 0 38.4 38.4 0 1 0-76.8 0Z" fill="#D4594C"></path>
          <path d="M512 896c-28.16 0-51.2-23.04-51.2-51.2s23.04-51.2 51.2-51.2 51.2 23.04 51.2 51.2-23.04 51.2-51.2 51.2z m0-76.8c-14.08 0-25.6 11.52-25.6 25.6s11.52 25.6 25.6 25.6 25.6-11.52 25.6-25.6-11.52-25.6-25.6-25.6z" fill="#231C1C"></path>
          <path d="M460.8 166.4h102.4v25.6h-102.4z" fill="#231C1C"></path>
        </g>
      </svg>
      <p class="text-xl font-bold">Phone</p>
      <p class="text-sm">+44 12345 123 123</p>
    </div>
    <div class="transition hover:scale-[0.98] min-w-[146px] text-center shadow-xl p-4 rounded">
      <svg width="64px" height="64px" class="mx-auto" version="1.1" id="_x35_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-112.64 -112.64 737.28 737.28" xml:space="preserve" fill="#000000">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <g>
            <polygon style="fill:#C0AC7E;" points="511.401,173.663 502.513,179.269 458.244,207.066 268.606,326.073 266.213,327.652 265.699,327.968 256.043,334.048 255.701,334.207 247.753,329.232 246.299,328.284 66.659,215.516 54.439,207.856 0.598,174.057 0,173.663 54.439,139.469 249.548,16.988 261.854,16.988 458.244,140.258 464.74,144.365 "></polygon>
            <path style="fill:#B6995F;" d="M467.859,16.065v383.862c0,8.807-7.88,15.985-17.641,15.985H62.29 c-9.671,0-17.551-7.178-17.551-15.985V16.065C44.739,7.176,52.619,0,62.29,0h387.928C459.978,0,467.859,7.176,467.859,16.065z"></path>
            <g>
              <g>
                <rect x="110.787" y="75.101" style="fill:#DAB99E;" width="190.508" height="25.378"></rect>
                <rect x="110.787" y="71.093" style="fill:#8F816A;" width="190.508" height="25.378"></rect>
              </g>
              <g>
                <rect x="110.787" y="214.682" style="fill:#DAB99E;" width="289.501" height="25.378"></rect>
                <rect x="110.787" y="210.675" style="fill:#8F816A;" width="289.501" height="25.378"></rect>
              </g>
              <g>
                <rect x="110.787" y="284.473" style="fill:#DAB99E;" width="289.501" height="25.378"></rect>
                <rect x="110.787" y="280.466" style="fill:#8F816A;" width="289.501" height="25.378"></rect>
              </g>
              <g>
                <rect x="110.787" y="144.891" style="fill:#DAB99E;" width="289.501" height="25.378"></rect>
                <rect x="110.787" y="140.884" style="fill:#8F816A;" width="289.501" height="25.378"></rect>
              </g>
            </g>
            <polygon style="fill:#FBDABC;" points="256.299,322.118 253.308,323.881 195.45,357.662 188.356,361.847 12.392,464.583 0.598,471.413 0.598,172.824 71.446,214.169 246.642,316.464 248.009,317.272 256.043,321.971 "></polygon>
            <polygon style="fill:#DFC7A2;" points="512,172.824 512,471.487 511.914,471.413 511.487,471.119 511.145,470.899 511.059,470.899 263.734,326.525 259.375,323.954 256.299,322.118 266.042,316.464 266.298,316.317 266.555,316.17 275.528,310.956 "></polygon>
            <circle style="opacity:0.68;fill:#EEF3CA;" cx="377.142" cy="75.101" r="38.186"></circle>
            <path style="fill:#757575;" d="M512,425.251v45.808h-0.513l-7.35,0.342H27.689l-0.341-7.094 c8.632-5.896,20.082-13.845,27.518-18.887l1.025-0.684l24.956-17.178l38.97-26.92l11.28-7.777l118.365-81.615l7.947-5.556 c1.88-1.195,4.017-2.222,6.324-2.904c2.735-0.941,5.726-1.539,8.717-1.795c1.025-0.086,1.965-0.171,2.991-0.086 c1.025-0.171,2.052-0.171,3.077-0.171c2.735-0.085,5.385,0.171,7.948,0.683c2.734,0.513,5.213,1.369,7.435,2.564l89.735,49.91 l44.354,24.697l11.538,6.41l41.79,23.245l27.518,15.298c0.77,0.428,1.624,0.855,2.479,1.368 C511.487,424.995,511.743,425.166,512,425.251z"></path>
            <path style="fill:#E7C8AA;" d="M512,441.404v29.997H0.598v-29.997c8.974-5.471,20.768-12.905,28.459-17.52l1.025-0.684 l25.724-15.98l40.252-24.955l11.623-7.264l122.125-75.805l8.204-5.127c4.273-2.564,9.828-3.846,15.298-3.932 c1.025-0.086,1.965-0.086,2.991,0c1.026-0.086,2.051-0.086,3.077,0c2.393,0,4.701,0.257,6.923,0.769 c3.077,0.599,5.896,1.71,8.29,3.163l11.879,7.349l75.377,46.834l43.073,26.75l11.196,7.007l40.68,25.212l26.748,16.665 c0.77,0.428,1.539,0.854,2.393,1.367c5.47,3.505,12.477,7.864,19.058,11.88C507.385,438.669,509.778,440.122,512,441.404z"></path>
            <path style="opacity:0.2;fill:#E84114;" d="M467.816,16.066v4.273c0-8.887-7.863-16.066-17.605-16.066H62.301 c-9.656,0-17.604,7.178-17.604,16.066v-4.273C44.696,7.178,52.645,0,62.301,0h387.911C459.953,0,467.816,7.178,467.816,16.066z"></path>
          </g>
        </g>
      </svg>
      <p class="text-xl font-bold">Email</p>
      <p class="text-sm">someemail@email.email</p>
    </div>
    <div class="transition hover:scale-[0.98] min-w-[146px] text-center shadow-xl p-4 rounded">
      <svg width="64px" height="64px" class="mx-auto" viewBox="-5.28 -5.28 34.56 34.56" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ff6600" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="miter">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <circle cx="12" cy="12" r="10" stroke-width="0" fill="#ff0000" opacity="0.1"></circle>
          <circle cx="12" cy="12" r="10"></circle>
          <polyline points="12 7 12 12 17 12"></polyline>
        </g>
      </svg>
      <p class="text-xl font-bold">Working Hours</p>
      <p class="text-sm">Mon - Fri : 9am - 6pm</p>
    </div>
  </div>
</div>
<!-- Contact Info - END -->


<!-- Contact Form - START -->
<div class="flex flex-col py-6 shadow-xl p-4">
    <form class="flex flex-col sm:w-4/5 max-sm:w-[100%] max-w-[998px] mx-auto p-4">
    @csrf
    <div class="grid grid-cols-2 max-sm:grid-cols-1">
            <input class="shadow-xl p-4 m-2 border-none" type="text" placeholder="Name*" name="name" required>
            <input class="shadow-xl p-4 m-2 border-none" type="text" placeholder="Email*" name="email" required>
        </div>

        <div class="grid grid-cols-2 max-sm:grid-cols-1">
            <input class="shadow-xl p-4 m-2 border-none" type="text" placeholder="Phone"  name="phone">
            <input class="shadow-xl p-4 m-2 border-none" type="text" placeholder="Subject"  name="subject">
        </div>

        <textarea class="shadow-xl p-4 m-2 border-none" name="" id="" cols="30" rows="10" name="message" placeholder="Your Message*" required></textarea>

        <button class="text-white font-[600] p-2 whitespace-nowrap rounded bg-[--c2] m-2 shadow-xl active:shadow-inner active:shadow-black">Send Message</button>
    </form>
</div>
<!-- Contact Form - END -->

@endsection
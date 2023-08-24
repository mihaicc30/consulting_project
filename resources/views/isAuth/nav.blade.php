 <!-- Navbar START -->
 
 <button class="max-sm:flex rounded bg-[#ffffffc4] pt-[7px] pl-[5px] h-[40px] w-[40px] fixed top-[10%] z-50" @click="isActive = !isActive" :class="{ 'active': isActive }">
     <svg width="30px" height="30px" viewBox="-3.2 -3.2 38.40 38.40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
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
 <div class="flex bg-[#ffffffc4] h-[100svh] fixed top-[10%] z-50">


  <ul class="z-20 flex flex-col pb-2 mt-[3.5rem] min-h-[86vh] fixed w-[200px]" x-show="isActive" :class="{ 'hidden': !isActive }">
    <div class="flex flex-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1.5" stroke="blue" class="w-5 h-5 ml-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
      </svg>
      <a class="relative navButton font-[600] w-full" href="/portal/dashboard">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="ml-2 z-20 relative">Home</span>
      </a>
    </div>
    
    <div class="flex flex-center mt-2"> <svg class="block mr-1 h-5 w-auto max-sm:h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 -20 131.4 80" style="enable-background:new 0 -20 131.4 80;" xml:space="preserve">
      <style type="text/css">
            .st0 {
              fill: #E53323;
            }

            .st1 {
              fill: url(#SVGID_1_);
            }

            .st2 {
              fill: url(#SVGID_00000056394859992788285620000016356982458054443397_);
            }

            .st3 {
              fill: #FFCB00;
            }

            .st4 {
              fill: url(#SVGID_00000129194780860868990140000007357946114950875017_);
            }

            .st5 {
              fill: #F29100;
            }
          </style>
          <path class="st0" d="M38.5,44.3v6.1c0,0.5-0.4,1-1,1H1c-0.5,0-1-0.4-1-1V1c0-0.5,0.4-1,1-1h35.5c0.5,0,1,0.4,1,1V7c0,0.5-0.4,1-1,1  h-27v13.3h23.8c0.5,0,1,0.4,1,1v5.9c0,0.5-0.4,1-1,1H9.5v14.1h28C38,43.3,38.5,43.7,38.5,44.3z"></path>
          <path class="st0" d="M131.4,44.3v6.1c0,0.5-0.4,1-1,1H93.9c-0.5,0-1-0.4-1-1V1c0-0.5,0.4-1,1-1h35.5c0.5,0,1,0.4,1,1V7  c0,0.5-0.4,1-1,1h-27v13.3h23.8c0.5,0,1,0.4,1,1v5.9c0,0.5-0.4,1-1,1h-23.8v14.1h28C131,43.3,131.4,43.7,131.4,44.3z"></path>
          <path class="st0" d="M81.5,37.9c3.7,0,6.7,3,6.7,6.7c0,3.7-3,6.7-6.7,6.7c-3.7,0-6.7-3-6.7-6.7C74.8,40.9,77.8,37.9,81.5,37.9"></path>
          <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="51.016" y1="44.5926" x2="75.541" y2="44.5926">
            <stop offset="0" style="stop-color:#BF0D0D"></stop>
            <stop offset="9.322089e-02" style="stop-color:#C71512"></stop>
            <stop offset="0.3551" style="stop-color:#D8261B"></stop>
            <stop offset="0.6423" style="stop-color:#E23021"></stop>
            <stop offset="1" style="stop-color:#E53323"></stop>
          </linearGradient>
          <path class="st1" d="M72.5,44.6c0-2.7,1.2-5.1,3-6.7H57.7c-3.7,0-6.7,3-6.7,6.7c0,3.7,3,6.7,6.7,6.7h17.8  C73.7,49.7,72.5,47.3,72.5,44.6z"></path>
          <linearGradient id="SVGID_00000132772404809936920710000015471056043988234416_" gradientUnits="userSpaceOnUse" x1="45.9171" y1="49.0714" x2="79.4457" y2="10.1596">
            <stop offset="0" style="stop-color:#E95A0C"></stop>
            <stop offset="0.25" style="stop-color:#F29100"></stop>
            <stop offset="0.7505" style="stop-color:#F29100"></stop>
            <stop offset="1" style="stop-color:#E95A0C"></stop>
          </linearGradient>
          <path style="fill:url(#SVGID_00000132772404809936920710000015471056043988234416_);" d="M57.7,51.3c-1.3,0-2.5-0.5-3.4-1.5  c-1.6-1.9-1.4-4.7,0.5-6.3l25.7-22.2c2.8-2.4,3.1-6.6,0.7-9.5c-2.4-2.8-6.6-3.1-9.5-0.7L45.7,33.6c-4.2,3.6-4.7,10-1.1,14.2  c2,2.3,4.8,3.5,7.6,3.5L57.7,51.3z"></path>
          <path class="st3" d="M48.9,0c3.7,0,6.7,3,6.7,6.7c0,3.7-3,6.7-6.7,6.7c-3.7,0-6.7-3-6.7-6.7C42.2,3,45.2,0,48.9,0"></path>
          <linearGradient id="SVGID_00000074440112933318192930000005754585911127858072_" gradientUnits="userSpaceOnUse" x1="54.8232" y1="10.6357" x2="88.1831" y2="10.6357">
            <stop offset="0" style="stop-color:#FFCB00"></stop>
            <stop offset="0.3577" style="stop-color:#FEC800"></stop>
            <stop offset="0.6449" style="stop-color:#FCBE00"></stop>
            <stop offset="0.9068" style="stop-color:#F8AD00"></stop>
            <stop offset="1" style="stop-color:#F6A500"></stop>
          </linearGradient>
          <path style="fill:url(#SVGID_00000074440112933318192930000005754585911127858072_);" d="M85.7,3.5c-2-2.3-4.8-3.5-7.6-3.5H54.8  c1.9,1.6,3,4,3,6.7c0,2.7-1.2,5.1-3,6.7l22.8,0c1.3,0,2.5,0.5,3.4,1.6c1.6,1.9,1.4,4.7-0.5,6.3l4.1-3.6C88.9,14.1,89.4,7.7,85.7,3.5  z"></path>
        </svg> <p>Packages Today</p>
    </div>
    <div class="flex flex-center mt-2"> 
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1.5" stroke="orange" class="w-5 h-5 ml-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
      </svg>
      <a class="relative navButton font-[600] w-full" href="/portal/home-today">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="ml-2 z-20 relative">EZEBox</span>
      </a>
    </div>
    <div class="flex flex-center mt-2"> 
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1.5" stroke="orange" class="w-5 h-5 ml-6">
       <path stroke-linecap="round" stroke-linejoin="round" d="M15 15l6-6m0 0l-6-6m6 6H9a6 6 0 000 12h3" />
      </svg>
      <a class="relative navButton font-[600] w-full" href="/portal/received">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="ml-2 z-20 relative">Received</span>
      </a>
    </div>
    <div class="flex flex-center mt-2"> 
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1.5" stroke="orange" class="w-5 h-5 ml-6">
       <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
      </svg>
      <a class="relative navButton font-[600] w-full" href="/portal/viewed">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="ml-2 z-20 relative ">Viewed</span>
      </a>
    </div>
    <div class="flex flex-center mt-2"> 
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1.5" stroke="orange" class="w-5 h-5 ml-6">
       <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
      </svg>
      <a class="relative navButton font-[600] w-full" href="/portal/sent">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="ml-2 z-20 relative ">Sent</span>
      </a>
    </div>
    
    <div class="flex flex-center mt-2"> <svg class="block mr-1 h-5 w-auto max-sm:h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 -20 131.4 80" style="enable-background:new 0 -20 131.4 80;" xml:space="preserve">
          <style type="text/css">
            .st0 {
              fill: #E53323;
            }

            .st1 {
              fill: url(#SVGID_1_);
            }

            .st2 {
              fill: url(#SVGID_00000056394859992788285620000016356982458054443397_);
            }

            .st3 {
              fill: #FFCB00;
            }

            .st4 {
              fill: url(#SVGID_00000129194780860868990140000007357946114950875017_);
            }

            .st5 {
              fill: #F29100;
            }
          </style>
          <path class="st0" d="M38.5,44.3v6.1c0,0.5-0.4,1-1,1H1c-0.5,0-1-0.4-1-1V1c0-0.5,0.4-1,1-1h35.5c0.5,0,1,0.4,1,1V7c0,0.5-0.4,1-1,1  h-27v13.3h23.8c0.5,0,1,0.4,1,1v5.9c0,0.5-0.4,1-1,1H9.5v14.1h28C38,43.3,38.5,43.7,38.5,44.3z"></path>
          <path class="st0" d="M131.4,44.3v6.1c0,0.5-0.4,1-1,1H93.9c-0.5,0-1-0.4-1-1V1c0-0.5,0.4-1,1-1h35.5c0.5,0,1,0.4,1,1V7  c0,0.5-0.4,1-1,1h-27v13.3h23.8c0.5,0,1,0.4,1,1v5.9c0,0.5-0.4,1-1,1h-23.8v14.1h28C131,43.3,131.4,43.7,131.4,44.3z"></path>
          <path class="st0" d="M81.5,37.9c3.7,0,6.7,3,6.7,6.7c0,3.7-3,6.7-6.7,6.7c-3.7,0-6.7-3-6.7-6.7C74.8,40.9,77.8,37.9,81.5,37.9"></path>
          <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="51.016" y1="44.5926" x2="75.541" y2="44.5926">
            <stop offset="0" style="stop-color:#BF0D0D"></stop>
            <stop offset="9.322089e-02" style="stop-color:#C71512"></stop>
            <stop offset="0.3551" style="stop-color:#D8261B"></stop>
            <stop offset="0.6423" style="stop-color:#E23021"></stop>
            <stop offset="1" style="stop-color:#E53323"></stop>
          </linearGradient>
          <path class="st1" d="M72.5,44.6c0-2.7,1.2-5.1,3-6.7H57.7c-3.7,0-6.7,3-6.7,6.7c0,3.7,3,6.7,6.7,6.7h17.8  C73.7,49.7,72.5,47.3,72.5,44.6z"></path>
          <linearGradient id="SVGID_00000132772404809936920710000015471056043988234416_" gradientUnits="userSpaceOnUse" x1="45.9171" y1="49.0714" x2="79.4457" y2="10.1596">
            <stop offset="0" style="stop-color:#E95A0C"></stop>
            <stop offset="0.25" style="stop-color:#F29100"></stop>
            <stop offset="0.7505" style="stop-color:#F29100"></stop>
            <stop offset="1" style="stop-color:#E95A0C"></stop>
          </linearGradient>
          <path style="fill:url(#SVGID_00000132772404809936920710000015471056043988234416_);" d="M57.7,51.3c-1.3,0-2.5-0.5-3.4-1.5  c-1.6-1.9-1.4-4.7,0.5-6.3l25.7-22.2c2.8-2.4,3.1-6.6,0.7-9.5c-2.4-2.8-6.6-3.1-9.5-0.7L45.7,33.6c-4.2,3.6-4.7,10-1.1,14.2  c2,2.3,4.8,3.5,7.6,3.5L57.7,51.3z"></path>
          <path class="st3" d="M48.9,0c3.7,0,6.7,3,6.7,6.7c0,3.7-3,6.7-6.7,6.7c-3.7,0-6.7-3-6.7-6.7C42.2,3,45.2,0,48.9,0"></path>
          <linearGradient id="SVGID_00000074440112933318192930000005754585911127858072_" gradientUnits="userSpaceOnUse" x1="54.8232" y1="10.6357" x2="88.1831" y2="10.6357">
            <stop offset="0" style="stop-color:#FFCB00"></stop>
            <stop offset="0.3577" style="stop-color:#FEC800"></stop>
            <stop offset="0.6449" style="stop-color:#FCBE00"></stop>
            <stop offset="0.9068" style="stop-color:#F8AD00"></stop>
            <stop offset="1" style="stop-color:#F6A500"></stop>
          </linearGradient>
          <path style="fill:url(#SVGID_00000074440112933318192930000005754585911127858072_);" d="M85.7,3.5c-2-2.3-4.8-3.5-7.6-3.5H54.8  c1.9,1.6,3,4,3,6.7c0,2.7-1.2,5.1-3,6.7l22.8,0c1.3,0,2.5,0.5,3.4,1.6c1.6,1.9,1.4,4.7-0.5,6.3l4.1-3.6C88.9,14.1,89.4,7.7,85.7,3.5  z"></path>
        </svg> 
        <p>Packages History</p>
    </div>
    <div class="flex flex-center mt-2"> 
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1.5" stroke="blue" class="w-5 h-5 ml-6">
       <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
      </svg>
      <a class="relative navButton font-[600] w-full" href="/portal/history-home">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="ml-2 z-20 relative">EZEBox</span>
      </a>
    </div>
    <div class="flex flex-center mt-2"> 
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1.5" stroke="blue" class="w-5 h-5 ml-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 15l6-6m0 0l-6-6m6 6H9a6 6 0 000 12h3" />
      </svg>
      <a class="relative navButton font-[600] w-full" href="/portal/history-received">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="ml-2 z-20 relative">Received</span>
      </a>
    </div>
    <div class="flex flex-center mt-2"> 
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1.5" stroke="blue" class="w-5 h-5 ml-6">
       <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
      </svg>
      <a class="relative navButton font-[600] w-full" href="/portal/history-viewed">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="ml-2 z-20 relative ">Viewed</span>
      </a>
    </div>
    <div class="flex flex-center mt-2"> 
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1.5" stroke="blue" class="w-5 h-5 ml-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
      </svg>
      <a class="relative navButton font-[600] w-full" href="/portal/history-sent">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="ml-2 z-20 relative ">Sent</span>
      </a>
    </div>
    <div class="flex flex-center mt-2"> <svg class="block mr-1 h-5 w-auto max-sm:h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 -20 131.4 80" style="enable-background:new 0 -20 131.4 80;" xml:space="preserve">
          <style type="text/css">
            .st0 {
              fill: #E53323;
            }

            .st1 {
              fill: url(#SVGID_1_);
            }

            .st2 {
              fill: url(#SVGID_00000056394859992788285620000016356982458054443397_);
            }

            .st3 {
              fill: #FFCB00;
            }

            .st4 {
              fill: url(#SVGID_00000129194780860868990140000007357946114950875017_);
            }

            .st5 {
              fill: #F29100;
            }
          </style>
          <path class="st0" d="M38.5,44.3v6.1c0,0.5-0.4,1-1,1H1c-0.5,0-1-0.4-1-1V1c0-0.5,0.4-1,1-1h35.5c0.5,0,1,0.4,1,1V7c0,0.5-0.4,1-1,1  h-27v13.3h23.8c0.5,0,1,0.4,1,1v5.9c0,0.5-0.4,1-1,1H9.5v14.1h28C38,43.3,38.5,43.7,38.5,44.3z"></path>
          <path class="st0" d="M131.4,44.3v6.1c0,0.5-0.4,1-1,1H93.9c-0.5,0-1-0.4-1-1V1c0-0.5,0.4-1,1-1h35.5c0.5,0,1,0.4,1,1V7  c0,0.5-0.4,1-1,1h-27v13.3h23.8c0.5,0,1,0.4,1,1v5.9c0,0.5-0.4,1-1,1h-23.8v14.1h28C131,43.3,131.4,43.7,131.4,44.3z"></path>
          <path class="st0" d="M81.5,37.9c3.7,0,6.7,3,6.7,6.7c0,3.7-3,6.7-6.7,6.7c-3.7,0-6.7-3-6.7-6.7C74.8,40.9,77.8,37.9,81.5,37.9"></path>
          <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="51.016" y1="44.5926" x2="75.541" y2="44.5926">
            <stop offset="0" style="stop-color:#BF0D0D"></stop>
            <stop offset="9.322089e-02" style="stop-color:#C71512"></stop>
            <stop offset="0.3551" style="stop-color:#D8261B"></stop>
            <stop offset="0.6423" style="stop-color:#E23021"></stop>
            <stop offset="1" style="stop-color:#E53323"></stop>
          </linearGradient>
          <path class="st1" d="M72.5,44.6c0-2.7,1.2-5.1,3-6.7H57.7c-3.7,0-6.7,3-6.7,6.7c0,3.7,3,6.7,6.7,6.7h17.8  C73.7,49.7,72.5,47.3,72.5,44.6z"></path>
          <linearGradient id="SVGID_00000132772404809936920710000015471056043988234416_" gradientUnits="userSpaceOnUse" x1="45.9171" y1="49.0714" x2="79.4457" y2="10.1596">
            <stop offset="0" style="stop-color:#E95A0C"></stop>
            <stop offset="0.25" style="stop-color:#F29100"></stop>
            <stop offset="0.7505" style="stop-color:#F29100"></stop>
            <stop offset="1" style="stop-color:#E95A0C"></stop>
          </linearGradient>
          <path style="fill:url(#SVGID_00000132772404809936920710000015471056043988234416_);" d="M57.7,51.3c-1.3,0-2.5-0.5-3.4-1.5  c-1.6-1.9-1.4-4.7,0.5-6.3l25.7-22.2c2.8-2.4,3.1-6.6,0.7-9.5c-2.4-2.8-6.6-3.1-9.5-0.7L45.7,33.6c-4.2,3.6-4.7,10-1.1,14.2  c2,2.3,4.8,3.5,7.6,3.5L57.7,51.3z"></path>
          <path class="st3" d="M48.9,0c3.7,0,6.7,3,6.7,6.7c0,3.7-3,6.7-6.7,6.7c-3.7,0-6.7-3-6.7-6.7C42.2,3,45.2,0,48.9,0"></path>
          <linearGradient id="SVGID_00000074440112933318192930000005754585911127858072_" gradientUnits="userSpaceOnUse" x1="54.8232" y1="10.6357" x2="88.1831" y2="10.6357">
            <stop offset="0" style="stop-color:#FFCB00"></stop>
            <stop offset="0.3577" style="stop-color:#FEC800"></stop>
            <stop offset="0.6449" style="stop-color:#FCBE00"></stop>
            <stop offset="0.9068" style="stop-color:#F8AD00"></stop>
            <stop offset="1" style="stop-color:#F6A500"></stop>
          </linearGradient>
          <path style="fill:url(#SVGID_00000074440112933318192930000005754585911127858072_);" d="M85.7,3.5c-2-2.3-4.8-3.5-7.6-3.5H54.8  c1.9,1.6,3,4,3,6.7c0,2.7-1.2,5.1-3,6.7l22.8,0c1.3,0,2.5,0.5,3.4,1.6c1.6,1.9,1.4,4.7-0.5,6.3l4.1-3.6C88.9,14.1,89.4,7.7,85.7,3.5  z"></path>
        </svg> <p>Topup & Subscriptions</p>
    </div>
 
    <div class="flex flex-center mt-2"> 
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1.5" stroke="red" class="w-5 h-5 ml-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 100 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <a class="relative navButton font-[600] w-full" href="/portal/plans">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="ml-2 z-20 relative">Subscribe</span>
      </a>
    </div>
    <div class="flex flex-center mt-2"> 
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1.5" stroke="red" class="w-5 h-5 ml-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
      </svg>
      <a class="relative navButton font-[600] w-full" href="/portal/topup">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="ml-2 z-20 relative ">Top-up</span>
      </a>
    </div>
    <div class="flex flex-center mt-2"> 
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1.5" stroke="red" class="w-5 h-5 ml-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 100 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <a class="relative navButton font-[600] w-full" href="https://billing.stripe.com/p/login/test_aEU4jefPhdAn0rS5kl?prefilled_email={{Auth()->user()->email}}" target="_blank">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="ml-2 z-20 relative ">Customer Portal</span>
      </a>
    </div>

     <form action="{{ route('logout') }}" method="POST" class="p-2 relative navButton font-[600] border-b-2">
        @csrf
        <span class="absolute bg-white inset-0 z-10 rounded"></span>
        <button type="submit" class="z-20 relative">Logout</button>
      </form>
      
      <div class="flex flex-col col-span-2 mt-2">
        <a class="relative flex justify-center items-center" href="/portal/files">
          <svg height="24px" width="24px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.2 -51.2 614.40 614.40" xml:space="preserve" fill="#000000" stroke="#000000" stroke-width="0.00512">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path style="fill:#FFAA00;" d="M256,100.174c-27.619,0-50.087-22.468-50.087-50.087S228.381,0,256,0s50.087,22.468,50.087,50.087 S283.619,100.174,256,100.174z M256,33.391c-9.196,0-16.696,7.5-16.696,16.696s7.5,16.696,16.696,16.696 c9.196,0,16.696-7.5,16.696-16.696S265.196,33.391,256,33.391z"></path>
              <path style="fill:#FF7705;" d="M256.006,0v33.394c9.194,0.003,16.69,7.5,16.69,16.693s-7.496,16.69-16.69,16.693v33.394 c27.618-0.004,50.081-22.469,50.081-50.087S283.624,0.004,256.006,0z"></path>
              <path style="fill:#FFAA00;" d="M256,512c-46.043,0-83.478-37.435-83.478-83.478c0-9.228,7.467-16.696,16.696-16.696h133.565 c9.228,0,16.696,7.467,16.696,16.696C339.478,474.565,302.043,512,256,512z"></path>
              <path style="fill:#FF7705;" d="M322.783,411.826h-66.777V512c46.042-0.004,83.473-37.437,83.473-83.478 C339.478,419.293,332.011,411.826,322.783,411.826z"></path>
              <path style="fill:#FFC44D;" d="M439.652,348.113v-97.678C439.642,149,357.435,66.793,256,66.783 C154.565,66.793,72.358,149,72.348,250.435v97.678c-19.41,6.901-33.384,25.233-33.391,47.017 c0.01,27.668,22.419,50.075,50.087,50.085h333.913c27.668-0.01,50.077-22.417,50.087-50.085 C473.036,373.346,459.063,355.014,439.652,348.113z"></path>
              <path style="fill:#FFAA00;" d="M439.652,348.113v-97.678C439.642,149,357.435,66.793,256,66.783v378.432h166.957 c27.668-0.01,50.077-22.417,50.087-50.085C473.036,373.346,459.063,355.014,439.652,348.113z"></path>
              <path style="fill:#FFF3DB;" d="M155.826,267.13c-9.228,0-16.696-7.467-16.696-16.696c0-47.022,28.011-89.283,71.381-107.641 c8.446-3.587,18.294,0.326,21.88,8.836c3.62,8.51-0.358,18.294-8.836,21.88c-31.012,13.142-51.033,43.337-51.033,76.925 C172.522,259.663,165.054,267.13,155.826,267.13z"></path>
            </g>
          </svg>
          <span class="px-1 py-1 rounded-xl text-black text-sm">0</span>
        </a>
        <p class="text-xs text-center text-ellipsis overflow-hidden">
          {{ Auth::user()->name }}
        </p>
        <p class="text-xs text-center text-ellipsis overflow-hidden">
          {{ Auth::user()->email }}
        </p>
      </div>

  </ul>
  </div>
 <!-- Navbar END -->
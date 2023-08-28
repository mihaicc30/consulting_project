 <!-- Navbar START -->
 <div x-bind:class="{'basis-[18%] min-w-[200px] max-w-[210px]': isActive, 'basis-[4%]': !isActive}" class="relative h-[100%]">

   <button class="max-sm:flex bg-[#ffffffc4] p-2 h-[40px] w-[40px] fixed top-[88px] z-50" @click="isActive = !isActive" :class="{ 'active': isActive }">
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

   <ul class="z-20 flex flex-col pb-2 fixed top-[124px] min-w-[190px] max-w-[200px] max-md:text-xs" x-show="isActive" :class="{ 'hidden': !isActive }">
     <div class="flex flex-center mt-2">
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1.5" stroke="blue" class="w-5 h-5 ml-6">
         <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
       </svg>
       <a class="relative navButton font-[600] w-full" href="/portal/dashboard">
         <span class="absolute bg-white inset-0 z-10 rounded"></span>
         <span class="ml-2 z-20 relative">Home</span>
       </a>
     </div>

     <div class="flex flex-center mt-2">
       <svg class="block mr-1 h-5 w-auto max-sm:h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 -20 131.4 80" style="enable-background:new 0 -20 131.4 80;" xml:space="preserve">
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

       <span>Packages</span>
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
       <p>Topup & Subscriptions</p>
     </div>

     <div class="flex flex-center mt-2">
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24" stroke-width="1.5" stroke="red" class="w-5 h-5 ml-6">
         <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 100 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
       </svg>
       <a class="relative navButton font-[600] w-full" href="/portal/subscriptions">
         <span class="absolute bg-white inset-0 z-10 rounded"></span>
         <span class="ml-2 z-20 relative">Subscriptions</span>
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
       <p>Account Management</p>
     </div>

     <div class="flex flex-center mt-2">
     <svg class="w-5 h-5 ml-6 my-auto" fill="#af38ff" viewBox="0 0 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#af38ff" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M2,21h8a1,1,0,0,0,0-2H3.071A7.011,7.011,0,0,1,10,13a5.044,5.044,0,1,0-3.377-1.337A9.01,9.01,0,0,0,1,20,1,1,0,0,0,2,21ZM10,5A3,3,0,1,1,7,8,3,3,0,0,1,10,5ZM22.546,15.6h-.707a.468.468,0,0,1-.428-.3l0-.006a.467.467,0,0,1,.089-.516l.5-.5a.454.454,0,0,0,0-.643l-.63-.63a.454.454,0,0,0-.643,0l-.5.5a.467.467,0,0,1-.516.089l-.006,0a.468.468,0,0,1-.3-.428v-.707A.454.454,0,0,0,18.946,12h-.892a.454.454,0,0,0-.454.454v.707a.468.468,0,0,1-.3.428l-.006,0a.467.467,0,0,1-.516-.089l-.5-.5a.454.454,0,0,0-.643,0l-.63.63a.454.454,0,0,0,0,.643l.5.5a.467.467,0,0,1,.089.516l0,.006a.468.468,0,0,1-.428.3h-.707a.454.454,0,0,0-.454.454v.892a.454.454,0,0,0,.454.454h.707a.468.468,0,0,1,.428.3l0,.006a.467.467,0,0,1-.089.516l-.5.5a.454.454,0,0,0,0,.643l.63.63a.454.454,0,0,0,.643,0l.5-.5a.467.467,0,0,1,.516-.089l.006,0a.468.468,0,0,1,.3.428v.707a.454.454,0,0,0,.454.454h.892a.454.454,0,0,0,.454-.454v-.707a.468.468,0,0,1,.3-.428l.006,0a.467.467,0,0,1,.516.089l.5.5a.454.454,0,0,0,.643,0l.63-.63a.454.454,0,0,0,0-.643l-.5-.5a.467.467,0,0,1-.089-.516l0-.006a.468.468,0,0,1,.428-.3h.707A.454.454,0,0,0,23,16.946v-.892A.454.454,0,0,0,22.546,15.6ZM18.5,17.85a1.35,1.35,0,1,1,1.35-1.35A1.349,1.349,0,0,1,18.5,17.85Z"></path></g></svg>
       <a class="relative navButton font-[600] w-full" href="/profile">
         <span class="absolute bg-white inset-0 z-10 rounded"></span>
         <span class="ml-2 z-20 relative">Profile</span>
       </a>
     </div>

     
     <div class="flex flex-center mt-2">
     <svg class="w-5 h-5 ml-6 my-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.9453 1.25C13.5778 1.24998 12.4754 1.24996 11.6085 1.36652C10.7084 1.48754 9.95048 1.74643 9.34857 2.34835C8.82363 2.87328 8.55839 3.51836 8.41916 4.27635C8.28387 5.01291 8.25799 5.9143 8.25196 6.99583C8.24966 7.41003 8.58357 7.74768 8.99778 7.74999C9.41199 7.7523 9.74964 7.41838 9.75194 7.00418C9.75803 5.91068 9.78643 5.1356 9.89448 4.54735C9.99859 3.98054 10.1658 3.65246 10.4092 3.40901C10.686 3.13225 11.0746 2.9518 11.8083 2.85315C12.5637 2.75159 13.5648 2.75 15.0002 2.75H16.0002C17.4356 2.75 18.4367 2.75159 19.1921 2.85315C19.9259 2.9518 20.3144 3.13225 20.5912 3.40901C20.868 3.68577 21.0484 4.07435 21.1471 4.80812C21.2486 5.56347 21.2502 6.56459 21.2502 8V16C21.2502 17.4354 21.2486 18.4365 21.1471 19.1919C21.0484 19.9257 20.868 20.3142 20.5912 20.591C20.3144 20.8678 19.9259 21.0482 19.1921 21.1469C18.4367 21.2484 17.4356 21.25 16.0002 21.25H15.0002C13.5648 21.25 12.5637 21.2484 11.8083 21.1469C11.0746 21.0482 10.686 20.8678 10.4092 20.591C10.1658 20.3475 9.99859 20.0195 9.89448 19.4527C9.78643 18.8644 9.75803 18.0893 9.75194 16.9958C9.74964 16.5816 9.41199 16.2477 8.99778 16.25C8.58357 16.2523 8.24966 16.59 8.25196 17.0042C8.25799 18.0857 8.28387 18.9871 8.41916 19.7236C8.55839 20.4816 8.82363 21.1267 9.34857 21.6517C9.95048 22.2536 10.7084 22.5125 11.6085 22.6335C12.4754 22.75 13.5778 22.75 14.9453 22.75H16.0551C17.4227 22.75 18.525 22.75 19.392 22.6335C20.2921 22.5125 21.0499 22.2536 21.6519 21.6517C22.2538 21.0497 22.5127 20.2919 22.6337 19.3918C22.7503 18.5248 22.7502 17.4225 22.7502 16.0549V7.94513C22.7502 6.57754 22.7503 5.47522 22.6337 4.60825C22.5127 3.70814 22.2538 2.95027 21.6519 2.34835C21.0499 1.74643 20.2921 1.48754 19.392 1.36652C18.525 1.24996 17.4227 1.24998 16.0551 1.25H14.9453Z" fill="#af38ff"></path> <path d="M15 11.25C15.4142 11.25 15.75 11.5858 15.75 12C15.75 12.4142 15.4142 12.75 15 12.75H4.02744L5.98809 14.4306C6.30259 14.7001 6.33901 15.1736 6.06944 15.4881C5.79988 15.8026 5.3264 15.839 5.01191 15.5694L1.51191 12.5694C1.34567 12.427 1.25 12.2189 1.25 12C1.25 11.7811 1.34567 11.573 1.51191 11.4306L5.01191 8.43056C5.3264 8.16099 5.79988 8.19741 6.06944 8.51191C6.33901 8.8264 6.30259 9.29988 5.98809 9.56944L4.02744 11.25H15Z" fill="#af38ff"></path> </g></svg>    @csrf
     <form action="{{ route('logout') }}" method="POST" class="relative navButton font-[600] w-full">
         @csrf
         <span class="absolute bg-white inset-0 z-10 rounded"></span>
         <button type="submit" class="ml-2 z-20 relative">Logout</button>
       </form>
     </div>

   </ul>
 </div>
 <!-- Navbar END -->
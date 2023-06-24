 <!-- Navbar START -->
 
 <button class="max-sm:flex bg-[#ffffffc4] p-2 h-[40px] w-[40px] fixed top-[10%] z-50" @click="isActive = !isActive" :class="{ 'active': isActive }">
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


   <ul class="z-20 flex flex-col pr-4 pb-2 mt-[3.5rem] min-h-[86vh] fixed w-[100px]" x-show="isActive" :class="{ 'hidden': !isActive }">
     <a class="p-2 relative navButton font-[600] border-b-2" href="/portal/dashboard">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="z-20 relative">Home</span>
     </a>
     <a class="p-2 relative navButton font-[600] border-b-2" href="/portal/files">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="z-20 relative">Files</span>
     </a>

     <a class="p-2 relative navButton font-[600] border-b-2" href="/portal/plans">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="z-20 relative">Plans</span>
     </a>
     <a class="p-2 relative navButton font-[600] border-b-2" href="/portal/contact">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="z-20 relative">Contact</span>
     </a>
     <a class="p-2 relative navButton font-[600] border-b-2" href="/portal/topup">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="z-20 relative">Top-Up</span>
     </a>

     
     <a class="p-2 relative navButton font-[600] border-b-2" href="/portal/profile">
       <span class="absolute bg-white inset-0 z-10 rounded"></span>
       <span class="z-20 relative">Profile</span>
     </a>
     <form action="{{ route('logout') }}" method="POST" class="p-2 relative navButton font-[600] border-b-2">
  @csrf
  <span class="absolute bg-white inset-0 z-10 rounded"></span>
  <button type="submit" class="z-20 relative">Logout</button>
</form>
   </ul>
 </div>
 <!-- Navbar END -->
@if(auth()->check())
<a class="bg-[--c2] p-2 rounded text-white font-bold" href="/portal/plans">Subscribe</a>
@else
<a class="bg-[--c2] p-2 rounded text-white font-bold" href="/login">Subscribe</a>
@endif
@auth
    @php

        $ctrlString = auth()->user()->controlstring;
        $controlString = strlen($ctrlString) > 18 ? substr($ctrlString, 1, 2) : ''; 
        $yearlyCheck = substr($ctrlString, 3, 1) === '1' ? True : False; 

        $isTopUpPersonal = (($controlString === '00' || $controlString === '10') && ($plan === 'Personal Top-up' || $plan === 'Top-up'));
        $isTopUpBusiness = (($controlString === '00' || $controlString === '10') && ($plan === 'Personal Top-up' || $plan === 'Top-up'));
        
        $isPersonalStarter = $controlString === '01' && $plan === 'Personal Starter';
        $isPersonalBasic = $controlString === '02' && $plan === 'Personal Basic';
        $isPersonalPremium = $controlString === '03' && $plan === 'Personal Premium';

        $isBusinessStarter = $controlString === '11' && $plan === 'Business Starter';
        $isBusinessBasic = $controlString === '12' && $plan === 'Business Basic';
        $isBusinessPremium = $controlString === '13' && $plan === 'Business Premium';

    @endphp
    @if(($isPersonalStarter || $isPersonalBasic || $isPersonalPremium || $isTopUpPersonal || $isBusinessStarter || $isBusinessBasic || $isBusinessPremium || $isTopUpBusiness))
        @if ($yearlyCheck && $yearly === '1' )
            <!-- <a class="bg-[--c3] p-2 rounded text-white font-bold" href="https://billing.stripe.com/p/login/test_aEU4jefPhdAn0rS5kl?prefilled_email={{Auth()->user()->email}}">Cancel Subscription</a> -->
            <form method="post" action="{{route('subscription.cancel')}}">
                @csrf
                 <button class="bg-[--c3] p-2 rounded text-white font-bold w-[100%]" >Cancel Subscription</button>
            </form>
        @elseif(!$yearlyCheck && $yearly === '0' )
            <!-- <a class="bg-[--c3] p-2 rounded text-white font-bold" href="https://billing.stripe.com/p/login/test_aEU4jefPhdAn0rS5kl?prefilled_email={{Auth()->user()->email}}">Cancel Subscription</a> -->
            <form method="post" action="{{route('subscription.cancel')}}">
                @csrf
                <input type="hidden">
                 <button class="bg-[--c3] p-2 rounded text-white font-bold w-[100%]" >Cancel Subscription</button>
            </form>
        @else
            <a class="bg-[--c2] p-2 rounded text-white font-bold" href="{{ route('plans.show', ['plan' => $slug, 'price' => $price , 'yearly' => $yearly ]) }}">Subscribe</a>
        @endif
    @else
        <a href="{{ route('plans.show', ['plan' => $slug, 'price' => $price , 'yearly' => $yearly ]) }}" class="bg-[--c2] p-2 rounded text-white font-bold">Subscribe</a>
    @endif
@else
    <button class="bg-[--c2] p-2 rounded text-white font-bold" onclick="window.location.href = '/login'">Subscribe</button>
@endif

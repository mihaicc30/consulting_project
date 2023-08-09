
@auth
    @php
        $controlString = auth()->user()->controlstring;
        $controlString = strlen($controlString) > 18 ? substr($controlString, 1, 2) : '';

        $isTopUpPersonal = (($controlString === '00' || $controlString === '10') && ($plan === 'Personal Top-up' || $plan === 'Top-up'));
        $isTopUpBusiness = (($controlString === '00' || $controlString === '10') && ($plan === 'Personal Top-up' || $plan === 'Top-up'));
        
        $isPersonalStarter = $controlString === '01' && $plan === 'Personal Starter';
        $isPersonalBasic = $controlString === '02' && $plan === 'Personal Basic';
        $isPersonalPremium = $controlString === '03' && $plan === 'Personal Premium';

        $isBusinessStarter = $controlString === '11' && $plan === 'Business Starter';
        $isBusinessBasic = $controlString === '12' && $plan === 'Business Basic';
        $isBusinessPremium = $controlString === '13' && $plan === 'Business Premium';

    @endphp
    @if($isPersonalStarter || $isPersonalBasic || $isPersonalPremium || $isTopUpPersonal || $isBusinessStarter || $isBusinessBasic || $isBusinessPremium || $isTopUpBusiness)
    <button class="bg-[--c5] p-2 rounded text-white font-bold" href="/#" disabled="true">Already Subscribed</button>
    @else
        <form method="POST" action="/portal/plans/{{ $plan }}" id="upgradeForm">
            @csrf

            <input type="hidden" name="plan" value="{{ $plan }}">
            <input type="hidden" name="type" value="{{ $type }}">
         <script src="https://checkout.stripe.com/checkout.js"
            class="stripe-button"
            data-key="{{ env('STRIPE_KEY') }}"
            data-name="{{$plan}}"
            data-description="{{$type}}"
            data-amount="{{ $price * 100 }}" 
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto"
            data-label="Upgrade"
            data-allow-remember-me="true" 
            data-email="{{ Auth::user()->email }}"
            > 
        </script>
        <script>
                // Hide default stripe button
                x = document.querySelectorAll('.stripe-button-el');
                for (var i = 0; i < x.length; i++) {
                    x[i].style.display = 'none';
                    }
        </script>
        <button type="submit" class="rounded bg-[--c2] text-white font-bold p-2">Checkout</button>
        </form>
    @endif
@else
    <button class="bg-[--c2] p-2 rounded text-white font-bold" onclick="window.location.href = '/login'">Subscribe</button>
    
@endif


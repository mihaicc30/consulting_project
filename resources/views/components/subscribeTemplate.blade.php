@auth
    @php
        $ctrlString = auth()->user()->controlstring;
      
        
        $controlString = strlen($ctrlString) > 18 ? substr($ctrlString, 1, 2) : '';
        $yearlyCheck = substr($ctrlString, 3, 1) === '1';

        $isPersonalStarter = $controlString === '01' && $plan === 'Personal Starter';
        $isPersonalBasic = $controlString === '02' && $plan === 'Personal Basic';
        $isPersonalPremium = $controlString === '03' && $plan === 'Personal Premium';

        $isBusinessStarter = $controlString === '11' && $plan === 'Business Starter';
        $isBusinessBasic = $controlString === '12' && $plan === 'Business Basic';
        $isBusinessPremium = $controlString === '13' && $plan === 'Business Premium';

        $cancelSubscriptionUrl = route('subscription.cancel');
        $subscribeUrl = route('plans.show', ['plan' => str_replace(' ', '-', $plan),'yearly' => $yearly]);
    @endphp

    @if ($isPersonalStarter || $isPersonalBasic || $isPersonalPremium || $isBusinessStarter || $isBusinessBasic || $isBusinessPremium)
        <form method="post" action="{{ $cancelSubscriptionUrl }}">
            @csrf
            <button class="bg-[--c3] p-2 rounded text-white font-bold w-[100%]">Cancel Subscription</button>
        </form>
    @else
        <a class="bg-[--c2] p-2 rounded text-white font-bold" href="{{ $subscribeUrl }}">Subscribe</a>
    @endif

@else
    <button class="bg-[--c2] p-2 rounded text-white font-bold" onclick="window.location.href = '/login'">Subscribe</button>
@endif
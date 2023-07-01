
@auth
    @php
        $controlString = auth()->user()->controlstring;
        $controlString = strlen($controlString) > 18 ? substr($controlString, 1, 2) : '';

        $isTopUpPersonal = $controlString === '00' && $plan === 'Personal Top-up';
        $isTopUpBusiness = $controlString === '10' && $plan === 'Business Top-up';

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
        <form method="POST" action="/portal/plans">
            @csrf
            <button class="bg-[--c2] p-2 rounded text-white font-bold" type="submit">Upgrade</button>
        </form>
    @endif
@else
    <button class="bg-[--c2] p-2 rounded text-white font-bold" onclick="window.location.href = '/login'">Subscribe</button>
@endif
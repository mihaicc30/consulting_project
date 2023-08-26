@extends ('layout')

@section('content')

<span :class="{ 'hidden': !isActive }"></span>
<div :class="{ 'col-span-2': !isActive }">

  <!-- Hero START -->
  <div class="relative flex flex-col h-100 overflow-hidden">
    {{-- <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video> --}}
    <div class="overlay relative flex flex-col">
      <!-- Heading - START -->
      <div class="my-8 text-center">
        <h1 class="font-bold text-3xl">You will be charged ${{$price}} for {{ $plan->name }} Plan </h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->

<div class="flex items-center justify-center mt-10">
  <div class="items-center bg-white w-full md:w-1/3 p-8 rounded-lg shadow-md">
    <form action="{{ $yearly === '' ? route('topup.create') : route('subscription.create') }}" method="post" id="payment-form" name="payment-form">
        @csrf
         <h1 class="text-2xl font-semibold mb-6">Billing Information</h1>
        <div id="address-element"></div>
        <hr class="my-4">
        <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">
        <input type="hidden" name="yearly" id="yearly" value="{{ $yearly }}">
        <input type="hidden" name="price" id="price" value="{{ $price }}">
        <input type="hidden" name="currency" id="currency" value="{{ $currency }}">
        <label for="card-holder-name">Card Holder Name</label>
          <input type="text" id="card-holder-name" name="card-holder-name" class="block w-full mt-1 p-2 border rounded" placeholder="" required>
            <label  for="card-element">
              <p>Card Details</p>
            </label>
        <div id="card-element" class="border border-black p-2 rounded h-[2.5rem] w-full mb-4"></div>
        <button type="submit" data-secret={{$intent->client_secret}} class="w-full bg-blue-500 text-white py-2 rounded" id="card-button" name="card-button">Pay Now</button>
    </form>
  </div>
</div>
<script src="https://js.stripe.com/v3/"></script>
<script>
  window.addEventListener("load", async (event) => {
    const stripe = Stripe('{{ env('STRIPE_KEY') }}');
    const elements = stripe.elements();
    const cardElement = elements.create('card', {
      hidePostalCode: true,
    });
    cardElement.mount('#card-element');

    const form = document.getElementById('payment-form');
    const cardBtn = document.getElementById('card-button');
    const cardHolderName = document.getElementById('card-holder-name');

    // Billing Address information
    const addressElement = elements.create('address', { mode: 'billing' });
    addressElement.mount('#address-element');

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      cardBtn.disabled = true;

      const addressElement = elements.getElement('address');
      const result = await addressElement.getValue();

      if (result.complete) {
        const value = result.value.address;
        const addressLine = value.line1;
        const addressCity = value.city;
        const addressCountry = value.country;
        const addressPostalCode = value.postal_code;

        try {

            const { setupIntent, error } = await stripe.confirmCardSetup(
              cardBtn.dataset.secret, {
                payment_method: {
                  card: cardElement,
                  billing_details: {
                    address: {
                      line1: addressLine,
                      city: addressCity,
                      country: addressCountry,
                      postal_code: addressPostalCode,
                    },
                    name: cardHolderName.value,
                  },
                },
              }
            );

          if (error) {
            console.log(error);
            cardBtn.disabled = false;
          } else {
            console.log(stripe);
                  const {paymentConfirm, error} = await stripe.confirmPayment(
                    cardElement
                  );
                    if (error) {
                      console.log(error);
                      cardBtn.disabled = false;
                    } else {
                          let stripeIntent = document.createElement('input');
                          stripeIntent.setAttribute('type', 'hidden');
                          stripeIntent.setAttribute('name', 'stripeIntent');
                          stripeIntent.setAttribute('value', JSON.stringify(setupIntent));
                          form.appendChild(stripeIntent);
                          form.submit();
                  }
          }
        } catch (error) {
          console.error(error);
          cardBtn.disabled = false;
        }
      }
    });
});
</script>

@endsection


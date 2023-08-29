@extends ('layout')

@section('content')
<style>
  input:not(.opt):not(#card-holder-name) {
    position: absolute;
    opacity: 0;
    z-index: -1;
  }

  /* Accordion styles */
  .tabs {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 4px -2px rgba(0, 0, 0, 0.5);
  }

  .tab {
    width: 100%;
    color: white;
    overflow: hidden;
  }

  .tab-label {
    display: flex;
    justify-content: space-between;
    padding: 1em;
    background: #f08409c9;
    font-weight: bold;
    cursor: pointer;
    border: 1px solid #00000073;
    border-bottom: none;
    /* Icon */
  }

  .tab-label:hover {
    background: #f08409c9;
  }

  .tab-label::after {
    content: "❯";
    width: 1em;
    height: 1em;
    text-align: center;
    transition: all 0.35s;
  }

  .tab-content {
    max-height: 0;
    padding: 0 1em;
    color: #2c3e50;
    background: white;
    transition: all 0.35s;
  }


  input:checked+.tab-label {
    background: #f08409c9;
  }

  input:checked+.tab-label::after {
    transform: rotate(90deg);
  }

  input:checked~.tab-content {
    max-height: 100vh;
    padding: 1em;
  }
</style>
<span :class="{ 'hidden': !isActive }"></span>
<div class="grow flex flex-col">

  <!-- Hero START -->
  <div class="relative flex flex-col h-100 overflow-hidden">
    <video src="../../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
    <div class="overlay relative flex flex-col">
      <!-- Heading - START -->
      <div class="my-8 text-center">
        <h1 class="font-bold text-3xl">Payment Setup</h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->
  <script defer>
    var psetup = new Object;
  </script>

  <div class="flex items-center justify-center mt-10 grow">
    <!--  -->
    <div class="flex flex-col min-w-[200px] max-w-[500px] w-[100%] border-2 rounded-lg p-4 shadow-[9px_9px_18px_#bebebe,-9px_-9px_18px_#ffffff]">
      <div class="col">
        <div class="tabs font-[600]" x-data="{opt1:'Personal', opt2:'Monthly', opt3:'GBP', opt4:'Starter', opt5:'One-Time', opt6:''}">
          <!--  -->
          <div class="tab">
            <input type="checkbox" id="rd1" name="rd1" x-bind:checked="!opt1" />
            <label class="tab-label rounded-t-lg" for="rd1">
              <span class="mr-2">01.</span>
              <span>Plan Type:</span>
              <span x-text="opt1" class="ml-2 mr-auto"></span>
            </label>
            <div class="tab-content flex flex-col gap-2 shadow-[inset_0px_0px_10px_4px_#6f6f6f4a]">
              <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt1 === 'Personal' }">
                <input type="radio" name="opt1" id="label1" x-on:click="opt1 = 'Personal'" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                <label for="label1" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">Personal</label>
              </div>
              <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt1 === 'Business' }">
                <input type="radio" name="opt1" id="label2" x-on:click="opt1 = 'Business'" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                <label for="label2" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">Business</label>
              </div>
            </div>
          </div>
          <!--  -->

          <!--  -->
          <div class="tab">
            <input type="checkbox" id="rd4" name="rd4" x-bind:checked="!opt2" />
            <label class="tab-label" for="rd4">
              <span class="mr-2">02.</span>
              <span>Plan Name:</span>
              <span x-text="opt4" class="ml-2 mr-auto"></span>
            </label>
            <div class="tab-content flex flex-col gap-2 shadow-[inset_0px_0px_10px_4px_#6f6f6f4a]">
              <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt4 === 'Starter' }">
                <input type="radio" name="opt4" id="label8" x-on:click="opt4 = 'Starter'" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                <label for="label8" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">Starter</label>
              </div>
              <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt4 === 'Basic' }">
                <input type="radio" name="opt4" id="label9" x-on:click="opt4 = 'Basic'" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                <label for="label9" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">Basic</label>
              </div>
              <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt4 === 'Premium' }">
                <input type="radio" name="opt4" id="label10" x-on:click="opt4 = 'Premium'" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                <label for="label10" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">Premium</label>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="tab">
            <input type="checkbox" id="rd2" name="rd2" x-bind:checked="!opt3" />
            <label class="tab-label" for="rd2">
              <span class="mr-2">03.</span>
              <span>Plan Basis:</span>
              <span x-text="opt2" class="ml-2 mr-auto"></span>
            </label>
            <div class="tab-content flex flex-col gap-2 shadow-[inset_0px_0px_10px_4px_#6f6f6f4a]">
              <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt2 === 'Monthly' }">
                <input type="radio" name="opt2" id="label3" x-on:click="opt2 = 'Monthly'" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                <label for="label3" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">Monthly</label>
              </div>
              <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt2 === 'Yearly' }">
                <input type="radio" name="opt2" id="label4" x-on:click="opt2 = 'Yearly'" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                <label for="label4" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">Yearly</label>
              </div>
            </div>
          </div>
          <!--  -->
          <!--  -->
          <div class="tab">
            <input type="checkbox" id="rd3" name="rd3" x-bind:checked="!opt4" />
            <label class="tab-label" for="rd3">
              <span class="mr-2">04.</span>
              <span>Plan Currency:</span>
              <span x-text="opt3" class="ml-2 mr-auto"></span>
            </label>
            <div class="tab-content flex flex-col gap-2 shadow-[inset_0px_0px_10px_4px_#6f6f6f4a]">
              <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt3 === 'GBP' }">
                <input type="radio" name="opt3" id="label5" x-on:click="opt3 = 'GBP'" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                <label for="label5" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">£ GBP</label>
              </div>
              <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt3 === 'DOLLAR' }">
                <input type="radio" name="opt3" id="label6" x-on:click="opt3 = 'DOLLAR'" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                <label for="label6" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">$ DOLLAR</label>
              </div>
              <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt3 === 'EURO' }">
                <input type="radio" name="opt3" id="label7" x-on:click="opt3 = 'EURO'" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                <label for="label7" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">€ EURO</label>
              </div>
            </div>
          </div>
          <!--  -->

          <!--  -->
          <div class="tab">
            <input type="checkbox" id="rd5" name="rd5" x-bind:checked="!opt5" />
            <label class="tab-label" for="rd5">
              <span class="mr-2">05.</span>
              <span>Plan Duration:</span>
              <span x-text="opt5" class="ml-2 mr-auto"></span>
            </label>
            <div class="tab-content flex flex-col gap-2 shadow-[inset_0px_0px_10px_4px_#6f6f6f4a]">
              <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt5 === 'One-Time' }">
                <input type="radio" name="opt5" id="label11" x-on:click="opt5 = 'One-Time'" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                <label for="label11" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">One-Time</label>
              </div>
              <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt5 === 'Recurring' }">
                <input type="radio" name="opt5" id="label12" x-on:click="opt5 = 'Recurring'" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                <label for="label12" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">Recurring</label>
              </div>

            </div>
          </div>
          <!--  -->
          
          <!--  -->
          <div class="tab">
            <input type="checkbox" id="rd6" name="rd6" x-bind:checked="!opt6"/>
            <label class="tab-label" for="rd6">
              <span class="mr-2">06.</span>
              <span>Plan Payment Details:</span>
              <span x-text="opt6" class="ml-2 mr-auto"></span>
            </label>
            <div class="tab-content flex flex-col gap-2 shadow-[inset_0px_0px_10px_4px_#6f6f6f4a]">
            <form action="{{route('subscription.create')}}" method="post" id="payment-form" name="payment-form">
                @csrf
                <h1 class="text-2xl font-semibold mb-6">Billing Information</h1>
                <div id="address-element"></div>
                <hr class="my-4">

                <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">
                <label for="card-holder-name">Card Holder Name</label>
                  <input type="text" id="card-holder-name" name="card-holder-name" class="block w-full mt-1 p-2 border rounded" placeholder="" required>
                    <label  for="card-element">
                      <p>Card Details</p>
                    </label>
                <div id="card-element" class="border border-black p-2 rounded h-[2.5rem] w-full mb-4"></div>
                <button type="button" class="m-2 p-2 border-2 shadow-md" x-on:click="console.log(opt1,opt2,opt3,opt4,opt5,opt6)">**for dev**Check Data**</button>
                <button type="submit" data-secret="{{$intent->client_secret}}" class="w-full bg-blue-500 text-white py-2 rounded" id="card-button" name="card-button">Pay Now</button>
            </form>
            </div>
          </div>
          <!--  -->
        </div>
      </div>
    </div>

    <!--  -->


    <!-- <div class="items-center bg-white w-full md:w-1/3 p-8 rounded-lg shadow-md">
    <form action="{{route('subscription.create')}}" method="post" id="payment-form" name="payment-form">
        @csrf
         <h1 class="text-2xl font-semibold mb-6">Billing Information</h1>
        <div id="address-element"></div>
        <hr class="my-4">

        <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">
        <label for="card-holder-name">Card Holder Name</label>
          <input type="text" id="card-holder-name" name="card-holder-name" class="block w-full mt-1 p-2 border rounded" placeholder="" required>
            <label  for="card-element">
              <p>Card Details</p>
            </label>
        <div id="card-element" class="border border-black p-2 rounded h-[2.5rem] w-full mb-4"></div>

        <button type="submit" data-secret="{{$intent->client_secret}}" class="w-full bg-blue-500 text-white py-2 rounded" id="card-button" name="card-button">Pay Now</button>
    </form>
  </div> -->
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
     
      // cardBtn.disabled = true;
      try {
      const addressElement = elements.getElement('address');
      const result = await addressElement.getValue();
      if (result.complete) {
        const value = result.value.address;
        const addressLine = value.line1;
        const addressCity = value.city;
        const addressCountry = value.country;
        const addressPostalCode = value.postal_code;
       
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
            // cardBtn.disabled = false;
          } else {
            // cardBtn.disabled = false;
            let token = document.createElement('input');
            token.setAttribute('type', 'hidden');
            token.setAttribute('name', 'token');
            token.setAttribute('value', setupIntent.payment_method);
            form.appendChild(token);
            form.submit();
          }
        }
      } catch (error) {
        console.error(error);
        // cardBtn.disabled = false;
      }
    });
  });
</script>

  @endsection
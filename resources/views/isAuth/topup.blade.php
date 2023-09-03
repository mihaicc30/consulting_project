@extends ('layout')

@section('content')
<style>
  input:not(.opt):not(#card-holder-name):not(.pricePlanId) {
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

<script src="https://js.stripe.com/v3/" async></script>
<div class="grow">
  <!-- Hero START -->
  <!-- Hero START -->
  <div class="relative flex flex-col h-100 overflow-hidden">
    <video src="../storage/herovideo.mp4" class="video absolute h-100 max-md:h-[100%] w-[100svw] object-cover scale-150 origin-center" loop muted autoplay></video>
    <div class="overlay relative flex flex-col">
      <!-- Heading - START -->
      <div class="my-8 text-center">
        <h1 class="font-bold text-3xl">Top-Up</h1>
      </div>
      <!-- Heading - END -->
    </div>
  </div>
  <!-- Hero END -->

  @if(substr(Auth::user()->controlstring, 2, 1) !== '0')
  <!-- Top-Up IF USER HAS A PLAN - START -->
  <div class="flex flex-wrap py-6 justify-center items-center">
    <!-- User Card -->
    <div class="flex flex-col max-w-[200px] shadow-xl p-2 m-2 rounded transition-all duration-500">
      <span class="mx-auto relative">
        @include('components.usersvg')
        <span class="absolute top-0 right-0 h-[20px] w-[20px]" title="Business Premium">@include('components.rank')</span>
      </span>
      <p class="text-xs text-center line-clamp-1 font-bold" title="{{ Auth::user()->name }}">
        {{ Auth::user()->name }}
      </p>
      <p class="text-xs text-center line-clamp-1" title="{{ Auth::user()->email }}">
        {{ Auth::user()->email }}
      </p>
    </div>
    <!-- User Card -->
    <div class="flex flex-col gap-2 text-center align-center items-center">
      <p>Your current plan does <u>not</u> need to be topped up. Enjoy using our unlimited services!</p>
      <div class="flex flex-wrap items-baseline">
        <p>In need of assisstance?</p>
        <a href="/contact" class="text-white font-[600] p-2 mx-1 sborder-2 border-white whitespace-nowrap rounded bg-[--c2]">Contact Us</a>
      </div>
    </div>
  </div>
  <!-- Top-Up - END -->
  @else
  <!-- Top-Up IF USER HAS **NOT** A PLAN - START -->
  @if(isset($message) && $message !== '')
  <div class="w-[100%] p-4 bg-green-300 flex flex-nowrap justify-between">
    <p>{{$message}}</p>
    <button x-on:click="$el.parentElement.remove()">✖</button>
  </div>
  @endif
  @if(isset($err))
  <div class="w-[100%] p-4 bg-red-300 flex flex-nowrap justify-between">
    <p>{{$err}}</p>
    <button x-on:click="$el.parentElement.remove()">✖</button>
  </div>
  @endif

  <div class="flex py-6 justify-center items-center shadow-xl m-2" x-data="{opt1:'', opt2:'', opt3:'', 
    calculatePaymentAmount: function() {
      if (this.opt1 === 'gbp') {
        if (this.opt2 === '5') {
          return ({{ $tokenCurrencyOptions->gbp->unit_amount }} / 100 * 5).toFixed(2);
        } else if (this.opt2 === '10') {
          return ({{ $tokenCurrencyOptions->gbp->unit_amount }} / 100 * 10).toFixed(2);
        } else if (this.opt2 === '20') {
          return ({{ $tokenCurrencyOptions->gbp->unit_amount }} / 100 * 20).toFixed(2);
        } else if (this.opt2 === '30') {
          return ({{ $tokenCurrencyOptions->gbp->unit_amount }} / 100 * 30).toFixed(2);
        } else {
          return 'Loading...';
        }
      } else if (this.opt1 === 'usd') {
        if (this.opt2 === '5') {
          return ({{ $tokenCurrencyOptions->usd->unit_amount }} / 100 * 5).toFixed(2);
        } else if (this.opt2 === '10') {
          return ({{ $tokenCurrencyOptions->usd->unit_amount }} / 100 * 10).toFixed(2);
        } else if (this.opt2 === '20') {
          return ({{ $tokenCurrencyOptions->usd->unit_amount }} / 100 * 20).toFixed(2);
        } else if (this.opt2 === '30') {
          return ({{ $tokenCurrencyOptions->usd->unit_amount }} / 100 * 30).toFixed(2);
        } else {
          return 'Loading...';
        }
      } else if (this.opt1 === 'eur') {
        if (this.opt2 === '5') {
          return ({{ $tokenCurrencyOptions->eur->unit_amount }} / 100 * 5).toFixed(2);
        } else if (this.opt2 === '10') {
          return ({{ $tokenCurrencyOptions->eur->unit_amount }} / 100 * 10).toFixed(2);
        } else if (this.opt2 === '20') {
          return ({{ $tokenCurrencyOptions->eur->unit_amount }} / 100 * 20).toFixed(2);
        } else if (this.opt2 === '30') {
          return ({{ $tokenCurrencyOptions->eur->unit_amount }} / 100 * 30).toFixed(2);
        } else {
          return 'Loading...';
        }
      } else if( this.opt1 === '' || this.opt2 === '') {
        return 'Loading...';
      }
    }}">
    <div class="flex flex-col items-center justify-center gap-4">
      @include('components.token')
      <div class="flex justify-evenly flex-col w-[100%] items-center">
        <p class="text-center">Current balance: <span>{{$balance}} tokens</span></p>
      </div>

      <div class="flex flex-col min-w-[200px] max-w-[500px] w-[100%] border-2 rounded-lg p-4 shadow-[9px_9px_18px_#bebebe,-9px_-9px_18px_#ffffff]">
        <div class="col">
          <div class="tabs font-[600]">
            <!-- <div class="tabs font-[600]" x-data="{opt1:'GBP', opt2:'2', opt3:''}"> -->

            <p class="text-center">Need a top-up ?</p>
            <!-- opt1 -->
            <div class="tab">
              <input type="checkbox" id="rd1" name="rd1" x-bind:checked="!opt1" />
              <label class="tab-label rounded-t-lg" for="rd1">
                <span class="mr-2">01.</span>
                <span>Paying Currency:</span>
                <span x-text="opt1" class="ml-2 mr-auto uppercase"></span>
              </label>
              <div class="tab-content flex flex-col gap-2 shadow-[inset_0px_0px_10px_4px_#6f6f6f4a]">
                <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt1 === 'gbp' }">
                  <input type="radio" name="opt1" id="label5" x-on:click="$opt1 = 'gbp';opt1 = 'gbp'" value="gbp" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                  <label for="label5" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">£ BRITISH POUND</label>
                </div>
                <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt1 === 'usd' }">
                  <input type="radio" name="opt1" id="label6" x-on:click="$opt1 = 'usd';opt1 = 'usd'" value="usd" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                  <label for="label6" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">$ DOLLAR</label>
                </div>
                <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt1 === 'eur' }">
                  <input type="radio" name="opt1" id="label7" x-on:click="$opt1 = 'eur';opt1 = 'eur'" value="eur" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                  <label for="label7" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">€ EURO</label>
                </div>
              </div>
            </div>
            <!--  -->

            <!-- opt2 -->
            <div class="tab">
              <input type="checkbox" id="rd2" name="rd2" x-bind:checked="!opt2" />
              <label class="tab-label" for="rd2">
                <span class="mr-2">02.</span>
                <span>Number of Tokens</span>
                <span x-text="opt2" class="ml-2 mr-auto"></span>
              </label>
              <div class="tab-content flex flex-col gap-2 shadow-[inset_0px_0px_10px_4px_#6f6f6f4a]">
                <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt2 === '5' }">
                  <input type="radio" name="opt2" id="label8" x-on:click="opt2 = '5'" value="5" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                  <label for="label8" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">5</label>
                </div>
                <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt2 === '10' }">
                  <input type="radio" name="opt2" id="label9" x-on:click="opt2 = '10'" value="10" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                  <label for="label9" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">10</label>
                </div>
                <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt2 === '20' }">
                  <input type="radio" name="opt2" id="label10" x-on:click="opt2 = '20'" value="20" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                  <label for="label10" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">20</label>
                </div>
                <div class="relative w-[100%] py-4 px-2 border-2 rounded-lg hover:bg-[#f08409c9] hover:text-white text-center" x-bind:class="{ 'text-white bg-[#f08409c9] shadow-[inset_0px_2px_2px_2px_black]': opt2 === '30' }">
                  <input type="radio" name="opt2" id="label100" x-on:click="opt2 = '30'" value="30" onclick="this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked=!this.parentElement.parentElement.previousElementSibling.previousElementSibling.checked">
                  <label for="label100" class="absolute top-0 left-0 h-[100%] w-[100%] flex justify-center items-center">30</label>
                </div>
              </div>
            </div>
            <!-- opt3 -->
            <div class="tab">
              <input type="checkbox" id="rd3" name="rd3" x-bind:checked="!opt3" />
              <label class="tab-label" for="rd3">
                <span class="mr-2">03.</span>
                <span>Token Payment Details:</span>
                <span x-text="opt3" class="ml-2 mr-auto"></span>
              </label>
              <div class="tab-content flex flex-col gap-2 shadow-[inset_0px_0px_10px_4px_#6f6f6f4a]">

                <p>Payment:
                  <span x-show="opt1 !== '' && opt2 !== ''" x-text="opt1" class="ml-2 mr-auto uppercase"></span>
                  <span x-text="calculatePaymentAmount()"></span>
                </p>

                <form method="POST" action="{{ route('isAuth.topup')}}" id="payment-form" name="payment-form">
                  @csrf
                  <input type="hidden" name="currency" x-model="opt1">
                  <input type="hidden" name="tokenNumber" x-model="opt2">
                  <input type="hidden" name="paymentMethod" id='paymentMethod'>
                  <h1 class="text-2xl font-semibold mb-6">Billing Information</h1>
                  <div id="address-element"></div>
                  <hr class="my-4">

                  <label for="card-holder-name">Card Holder Name</label>
                  <input type="text" value="{{ auth()->user()->name }}" id="card-holder-name" name="card-holder-name" class="block w-full mt-1 p-2 border rounded" placeholder="" required>
                  <label for="card-element">
                    <p>Card Details</p>
                  </label>
                  <div id="card-element" class="border border-black p-2 rounded h-[2.5rem] w-full mb-4"></div>

                  <button :disabled="!opt1 || !opt2 " type="submit" data-secret="{{$intent['client_secret']}}" class="w-full bg-blue-500 text-white py-2 rounded disabled:bg-gray-200" id="card-button" name="card-button">Pay Now</button>
                </form>
              </div>
            </div>
            <!--  -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <script async>
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
      const clientSecret = document.querySelector("#card-button").getAttribute('data-secret')
      // Billing Address information
      const addressElement = elements.create('address', {
        mode: 'billing'
      });
      addressElement.mount('#address-element');
      form.addEventListener('submit', async (e) => {
        e.preventDefault();
        try {
          const addressElement = elements.getElement('address');
          const result = await addressElement.getValue();
          if (result.complete) {
            const value = result.value.address;
            const addressLine = value.line1;
            const addressCity = value.city;
            const addressCountry = value.country;
            const addressPostalCode = value.postal_code;

            let amount = 111
            const {
              setupIntent,
              error
            } = await stripe.confirmCardSetup(
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
            console.log("setupIntent:", setupIntent)
            console.log("step1");

            const {
              paymentMethod,
              error2
            } = await stripe.createPaymentMethod({
              type: 'card',
              card: cardElement,
              billing_details: {
                name: cardHolderName.value,
              },
            });
            document.getElementById('paymentMethod').value = paymentMethod.id
            console.log("paymentMethod:", paymentMethod)
            console.log("step2");

            form.submit();
          }
        } catch (error) {
          console.error(error);
        }
      });
    });
  </script>


  @endif

  @endsection
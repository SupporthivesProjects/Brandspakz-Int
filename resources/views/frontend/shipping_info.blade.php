@extends('frontend.layouts.app')

@section('content')


    {{--  <section class="checkout4_page">
        <div class="che_s1">
            <div class="ches1_inner">
                <h1 class="ches1_title mobile_none">Billing Details</h1>
                <h1 class="ches1_title desktop_none" data-aos="fade-up">Billing Details</h1>
                <p class="ches1_subtitle" data-aos="fade-up">Please enter your billing details below and review your order
                    before continuing to checkout. </p>
                <div class="ches1_main_box">
                    <div class="ches1_box">
                        <div class="circle_div active">
                            <p class="circle_number">1</p>
                        </div>
                        <p class="circle_title active">Summary</p>
                    </div>
                    <div class="ches1_box">
                        <div class="circle_div active">
                            <p class="circle_number">2</p>
                        </div>
                        <p class="circle_title active">Billing Details</p>
                    </div>
                    <div class="ches1_box">
                        <div class="circle_div">
                            <p class="circle_number">3</p>
                        </div>
                        <p class="circle_title">Payment</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="che_s2">

            <div class="sec_up_cont">
                <div class="container sec_contain px-0 ">
                    <div class="sec_down_box">
                        <div class="che3_s2_left">
                            <h4 class="suumary_title">billing Details</h4>
                            @if (Auth::check())
                                @php
                                    $user = Auth::user();
                                    $lastBillingAddress = \App\Models\LastBillingAddress::getLastBillingAddress(
                                        $user->id,
                                    );
                                @endphp
                                <div class="divitrix">
                                    <div class="">
                                        <input type="text" class="form-control input_global" name="name"
                                           value="{{ $lastBillingAddress->name ?? '' }}" placeholder="First Name" form="shippingAddress"
                                            required>
                                    </div>
                                    <div class="">
                                        <input type="text" class="form-control input_global" name="lname"
                                            value="{{ $lastBillingAddress->lname ?? '' }}" placeholder="Last name" form="shippingAddress"
                                            required>
                                    </div>
                                    <div class="">
                                        <input type="email" class="form-control input_global" name="email"
                                            value="{{ $lastBillingAddress->email ?? '' }}" placeholder="Email address" form="shippingAddress"
                                            readonly>
                                    </div>
                                    <div class="">
                                        <input type="tel" class="form-control input_global" name="phone"
                                            value="{{ $lastBillingAddress->phone ?? '' }}" placeholder="Phone" form="shippingAddress" required>
                                    </div>
                                    <div class="">
                                        <input type="date" class="form-control input_global" value="{{ $lastBillingAddress->dob ?? '' }}"
                                            id="dob" name="dob" placeholder="Date of birth"
                                            max="@php echo date('Y-m-d',strtotime('18 years ago')); @endphp"
                                            form="shippingAddress" required>
                                    </div>
                                    <div class="">
                                        <input type="text" class="form-control input_global" name="address"
                                            value="{{ $lastBillingAddress->address ?? '' }}" placeholder="Address Line 1" form="shippingAddress"
                                            required>
                                    </div>
                                    <div class="">
                                        <input type="text" class="form-control input_global" name="addressL2"
                                            value="{{ $lastBillingAddress->addressL2 ?? '' }}" placeholder="Address Line 2"
                                            form="shippingAddress">
                                    </div>
                                    <div class="">
                                        <select class="form-select inpi_boxx" id="country" name="country"
                                            style="border: 1px solid #BDBDBD;" aria-label="Default select example"
                                            form="shippingAddress" required>
                                            <!--<option selected="">Country</option>-->
                                            <!--<option value="1">One</option>-->
                                            <!--<option value="2">Two</option>-->
                                            <!--<option value="3">Three</option>-->
                                            @foreach (\App\Models\Country::all() as $key => $country)
                                                <option value="{{ $country->code ?? '' }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="">
                                        <input type="text" class="form-control input_global" name="city"
                                            value="{{ $lastBillingAddress->city ?? '' }}" placeholder="City/Town" form="shippingAddress"
                                            required>
                                    </div>
                                    <div class="">
                                        <input type="text" class="form-control input_global" name="postal_code"
                                            value="{{ $lastBillingAddress->postal_code ?? '' }}" placeholder="Zip / Post Code"
                                            form="shippingAddress" required>
                                    </div>
                                </div>
                            @endif
                            <div class="divitrix2">
                                <p class="divitrix_text">Your personal data will be used to process your order, support
                                    your experience throughout this website, and for other purposes described in our
                                    <span>Privacy Policy.</span>
                                </p>
                                <img src="{{ asset('frontend/Lingosphere/img/masterCard.svg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="summ_ary">
                            <div class="summary_box">
                                <h4 class="suumary_title">Summary</h4>
                                @php
                                    $subtotal = 0;
                                    $tax = 0;
                                    $shipping = 0;

                                @endphp
                                @foreach (Session::get('cart') as $key => $cartItem)
                                    @php
                                        $product = \App\Models\Product::find($cartItem['id']);
                                        $subtotal = $subtotal + round(convert_price($cartItem['price']), 2);
                                    @endphp
                                     
                                    <div class="cart_box">
                                        <div class="left_cart_name">
                                            <h4 class="l_c_t">{{ $product->name }}</h4>
                                            <h4 class="l_c_s">{{ $product->subscription }}
                                            </h4>
                                        </div>
                                        <div class="right_cart_name">
                                            <h4 class="l_c_t">{{ single_price($cartItem['price']) }}</h4>
                                        </div>
                                    </div>
                                @endforeach
                                <hr class="line">
                                <div class="sub_disc_box">
                                    <div class="cart_tottal">
                                        <h4 class="suumary_title">Total</h4>
                                        <h4 class="suumary_title">{{ currency_symbol() . number_format($subtotal, 2) }}
                                        </h4>
                                    </div>
                                </div>
                                <div class="lowwer_content">
                                    <div class="icons_box">
                                        <img src="{{ asset('frontend/Lingosphere/img/cal_logo.svg') }}" alt=""
                                            class="logos">
                                        <div class="icons_content">
                                            <h4 class="radio_title">Turnaround Time: 48 Hours</h4>
                                            <h4 class="icon_subtitle">Your request will be translated and returned within
                                                48 hours. Check your inbox for updates.</h4>
                                        </div>
                                    </div>
                                    <div class="icons_box">
                                        <img src="{{ asset('frontend/Lingosphere/img/trans_late.svg') }}" alt=""
                                            class="logos">
                                        <div class="icons_content">
                                            <h4 class="radio_title">Easy Checkout</h4>
                                            <h4 class="icon_subtitle">Payments are securely processed through our system
                                                for your peace of mind.</h4>
                                        </div>
                                    </div>
                                    <div class="icons_box">
                                        <img src="{{ asset('frontend/Lingosphere/img/credit_card_logo.svg') }}"
                                            alt="" class="logos">
                                        <div class="icons_content">
                                            <h4 class="radio_title">High-Quality Translation</h4>
                                            <h4 class="icon_subtitle">Expert translations in your chosen languages,
                                                ensuring cultural nuances are captured.</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <form class="ultrabox" id="shippingAddress" data-toggle="validator"
                                    action="{{ route('checkout.store_shipping_infostore') }}" role="form"
                                    method="POST" onsubmit="return check_agree(this);">
                                    @csrf
                                    <input type="hidden" form="shippingAddress" class="form-control" name="user_id"
                                        value="{{ $user->id }}" required />
                                    <input type="hidden" form="shippingAddress" name="checkout_type" value="logged">
                                    <div class="cboxcap_div">
                                        <div class="chec_bo">
                                            <div class="c-checkbox_M">
                                                <div class="c-div_M">
                                                    <label class="d-flex justify-content-center justify-content-lg-start">
                                                        <input type="checkbox" id="terms" name="terms">
                                                        <label for="terms"></label>
                                                    </label>
                                                </div>
                                                <div class="c-text_M">
                                                    <p class="login_strong_M">By clicking the button you acknowledge that
                                                        you have read and agree to the <a href="">Terms of Use.</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h-captcha mx-auto my_mob_24"
                                            data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}" form="contactform"></div>
                                    </div>
                                    <button class="btn btn_redd mt-3" type="submit">Proceed to checkout</button>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>--}]

    {{-- new code --}}

    <section class="section_terms">
        <div class="secure_pay1">
            <img src="{{ asset('frontend/BrandSparkz/assets/img/intersect.png') }}" alt="" class="intersect">
            <div class="container">
                <div class="terms_div1">
                    <h3 class="terms_heading">Checkout</h3>
                    <p class="para_terms">Lorem ipsum dolor sit amet consectetur. Purus eget arcu non suscipit id.</p>
                </div>
            </div>
        </div>
        <div class="term2_main SCmain">
            <div class="secure_div1">
                <div class="secure_top">
                    <div class="div_for_ps_inner SCdivTop">
                        <h3 class="heading_of_pS">Billing Details</h3>
                    </div>
                    <div class="inputSC_main">
                        <div class="inputSC_inner">
                            <div class="inputparaSC">
                                <p class="paraSC">First Name</p>
                                <input type="text" class="inputSC">
                            </div>
                            <div class="inputparaSC">
                                <p class="paraSC">Phone</p>
                                <input type="text" class="inputSC">
                            </div>
                            <div class="inputparaSC">
                                <p class="paraSC">Address Line 1</p>
                                <input type="text" class="inputSC">
                            </div>
                            <div class="inputparaSC">
                                <p class="paraSC">City</p>
                                <input type="text" class="inputSC">
                            </div>
                            <div class="inputparaSC">
                                <p class="paraSC">County</p>
                                <input type="text" class="inputSC">
                            </div>
                        </div>
                        <div class="inputSC_inner">
                            <div class="inputparaSC">
                                <p class="paraSC">Last Name</p>
                                <input type="text" class="inputSC">
                            </div>
                            <div class="inputparaSC">
                                <p class="paraSC">Email</p>
                                <input type="text" class="inputSC">
                            </div>
                            <div class="inputparaSC">
                                <p class="paraSC">Address Line 2</p>
                                <input type="text" class="inputSC">
                            </div>
                            <div class="inputparaSC">
                                <p class="paraSC">Country</p>
                                <input type="text" class="inputSC">
                            </div>
                            <div class="inputparaSC">
                                <p class="paraSC">Postcode / Zip</p>
                                <input type="text" class="inputSC">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="secure_middle">

                </div>
                <div class="secure_bottom">
                    <div class="bottomSC_main">
                        <div class="term2_main">
                            <div class="div_for_pS forSC">
                                <div class="div_for_ps_inner">
                                    <h3 class="heading_of_pS">Order Summary</h3>
                                </div>
                                <table class="table table-borderless ">
                                    <thead>
                                        <tr class="table_ps">
                                            <th scope="col">
                                                <p class="head_ps">Product</p>
                                            </th>
                                            <th scope="col">
                                                <p class="head_ps">No.&nbsp;Months</p>
                                            </th>
                                            <th scope="col">
                                                <p class="head_ps for_center">Qty</p>
                                            </th>
                                            <th scope="col">
                                                <p class="head_ps for_total1">Subtotal</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table_ps">
                                            <td scope="row">
                                                <p class="data_ps"><span>SEO</span>- Platnium Package</p>
                                            </td>
                                            <td>
                                                <p class="data_ps">1 Month</p>
                                            </td>
                                            <td>
                                                <p class="data_ps for_center">1</p>
                                            </td>
                                            <td>
                                                <p class=" for_total">£1,839.00</p>
                                            </td>
                                        </tr>
                                        <tr class="table_ps">
                                            <td scope="row">
                                                <p class="data_ps"><span>SEO</span>- Platnium Package</p>
                                            </td>
                                            <td>
                                                <p class="data_ps">1 Month</p>
                                            </td>
                                            <td>
                                                <p class="data_ps for_center">1</p>
                                            </td>
                                            <td>
                                                <p class="for_total">£1,839.00</p>
                                            </td>
                                        </tr>
                                        <tr class="table_ps">
                                            <td scope="row">
                                                <p class="data_ps"><span>SEO</span>- Platnium Package</p>
                                            </td>
                                            <td>
                                                <p class="data_ps">1 Month</p>
                                            </td>
                                            <td>
                                                <p class="data_ps for_center">1</p>
                                            </td>
                                            <td>
                                                <p class="for_total">£1,839.00</p>
                                            </td>
                                        </tr>
                                        <tr class="table_ps">
                                            <td scope="row">
                                                <p class="data_ps"><span>SEO</span>- Platnium Package</p>
                                            </td>
                                            <td>
                                                <p class="data_ps">1 Month</p>
                                            </td>
                                            <td>
                                                <p class="data_ps for_center">1</p>
                                            </td>
                                            <td>
                                                <p class=" for_total">£1,839.00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row"></td>
                                            <td></td>
                                            <td>
                                                <p class="head_ps for_subtotal for_center">Total</p>
                                            </td>
                                            <td>
                                                <p class="for_total for_bottom">£7,356.00</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="bottomSCdiv2">
                            <div class="bottomSCbtncp">
                                <div class="SC_forcoupon">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/cuoponSC.png') }}" alt="cuoponSC" class="img_cpSC">
                                    <div class="SC_forcoupon2">
                                        <p class="para_bottom_SC">Have a coupon?</p>
                                        <div class="line_SC mobile_none"></div>
                                        <input type="text" class="input_bottom_SC" placeholder="Enter your code here">
                                    </div>
                                </div>
                                <button class="btn btn_button_Sc">Apply Coupon</button>
                            </div>
                        </div>
                        <div class="bottomSCauth">
                            <div class="bottomdiv_authe">
                                <input type="checkbox" class="checkbox_SC">
                                <p class="para_checkboxSC">By ticking this box, you agree to the
                                    <span>Terms & Conditions</span> & <span>Privacy Policy</span></p>
                            </div>
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/SCcapcha.png') }}" alt="" class="SC_capcha">
                        </div>
                        <button class="btn btn_SC">Complete Checkout</button>
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/SCMastercard.png') }}" alt="" class="SC_mastercard">
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    

@endsection

@section('script')
    <script type="text/javascript">
        function removeFromCart1(key) {
            $.post('{{ route('cart.removeFromCart') }}', {
                _token: '{{ csrf_token() }}',
                key: key
            }, function(data) {
                //updateNavCart();
                $('#cart-summary').html(data);
                Swal.fire({
                    icon: 'success',
                    title: 'Item Removed',
                    text: 'Item has been removed from cart'
                })

                location.reload();
            });
        }

        function removeFromCartView(e, key) {
            e.preventDefault();
            removeFromCart(key);
            //location.reload();
        }

        function updateQuantity(key, element) {
            $.post('{{ route('cart.updateQuantity') }}', {
                _token: '{{ csrf_token() }}',
                key: key,
                quantity: element.value
            }, function(data) {
                updateNavCart();
                $('#cart-summary').html(data);
            });
        }

        function showCheckoutModal() {
            $('#GuestCheckout').modal();
        }
    </script>

    <script>
        function field_box_file() {
            console.log('me');
            document.getElementById('document').click();
        }
        $("#document").on("change", function(e) {
            document.getElementById('upload_placeholder').innerHTML = e.target.files[0].name;
        })

        function removeFromCartView(e, key) {
            e.preventDefault();
            removeFromCart(key);
        }

        function showCheckoutModal() {
            $('#GuestCheckout').modal();
        }
    </script>

    <script>
        function check_agree(form) {
            var response = hcaptcha.getResponse();

            if (form.terms.checked && response) {
                return true;
            }

            if (!form.terms.checked) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please accept terms and conditions'
                });
            } else if (!response) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please complete the captcha'
                });
            }
            return false;
        }
    </script> 
@endsection

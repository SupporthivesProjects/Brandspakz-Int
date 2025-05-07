@extends('frontend.layouts.app')

@section('content')

<section >

    <section class="sec1_s">
        <video class="bg-image d-lg-block d-md-block d-none" loop="" muted="" autoplay=""
            style="object-fit: cover;">
            <source src="{{ asset('frontend/BrandSparkz/assets/img/email.mp4') }}" type="video/mp4">
        </video>
        <video class="bg-image d-lg-none d-md-none d-block" loop="" muted="" autoplay="" style="object-fit: cover;">
            <source src="{{ asset('frontend/BrandSparkz/assets/img/email_mob.mp4') }}" type="video/mp4">
        </video>

        <div class="sec1_video">
            <h1 class="main_tt" data-aos="fade-up" >
                Email Marketing
            </h1>
            <p class="main_pp" data-aos="fade-up">Unlock the full potential of your business with our targeted, personalised, and results-driven email marketing campaigns to ignite new interest and build new connections. </p>
            <button class="btn btn_global" onclick="window.location='#target-element'">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern.png') }}" alt="" class="img-fluid btn_global_pattern">
                    <div class="btn_global_inner w-100">
                        
                        <p class="cart_text" data-aos="fade-up">Explore our pricing</p>
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/down_arrow.svg') }}" alt="" class="img-fluid cart_logo">
                    </div>
            </button>
        </div>

        <div class="mobile_none">
            <div class="prop1">
                <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
                    <circle cx="19.5" cy="19.5" r="19.5" fill="white" fill-opacity="0.56" />
                    <circle cx="19.5" cy="19.5" r="9.5" fill="white" />
                </svg>
                <p class="prop_pp " data-aos="fade-up">Two Factor Authentication</p>
            </div>
        </div>

        <div class="mobile_none">
            <div class="prop2 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
                    <circle cx="19.5" cy="19.5" r="19.5" fill="white" fill-opacity="0.56" />
                    <circle cx="19.5" cy="19.5" r="9.5" fill="white" />
                </svg>
                <p class="prop_pp " data-aos="fade-up">A/B Testing</p>
            </div>
        </div>

        <div class="mobile_none">
            <div class="prop3">
                <p class="prop_pp " data-aos="fade-up">Multi User Access</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
                    <circle cx="19.5" cy="19.5" r="19.5" fill="white" fill-opacity="0.56" />
                    <circle cx="19.5" cy="19.5" r="9.5" fill="white" />
                </svg>

            </div>
        </div>


    </section>

    <section class="sec2_s">
        <img src="{{ asset('frontend/BrandSparkz/assets/img/intersect_tt.png') }}" alt="" class="img-fluid intersect_tt mobile_none">
        <img src="{{ asset('frontend/BrandSparkz/assets/img/mobile_intersect.png') }}" alt="" class="img-fluid intersect_tt_mob desktop_none">
        <div class="container p-0">
            <div class="inner_sec2">
                <div class="left_inner2">

                    <div class="inin_div">
                        <h1 class="div2_tt" data-aos="fade-up">
                            What is email <br>marketing?
                        </h1>
                        <p class="div2_pp" data-aos="fade-up"  >In the digital world of today, email marketing remains one of the most effective and affordable ways to connect with your audience, build new relationships, re-establish existing ones, and drive revenue. Whether you’re looking to nurture leads, launch a new product, or keep your existing customers engaged, our email marketing campaigns at Brand Sparkz will help you reach your goals. </p>

                    </div>
                </div>
                <div class="right_inner2">
                    <div class="inin_div">
                        <h1 class="div2_tt" data-aos="fade-up" >
                            Reach interested customers fast
                        </h1>
                        <p class="div2_pp" data-aos="fade-up" >Email marketing campaigns consistently deliver one of the highest returns on investment among all digital marketing channels by allowing you to reach your customers right in their inbox though a personalised and direct channel that encourages engagement and trust. Our tailored campaigns will help you send the right message to the right person at the right time using behaviour-based triggers and customer segmentation. </p>

                    </div>
                </div>
            </div>
        </div>

        <!-- <img class="img-fluid inter mobile_none" src="{{ asset('frontend/BrandSparkz/assets/img/Intersect_t.png') }}"> -->

    </section>

    <section class="sec3_s">

        <div class="sec3_1div">
            <h1 class="sec3_tt" data-aos="fade-up" >How We <span class="sec3_spantt">Make<br class="desktop_none"> It Happen</span></h1>
            <p class="sec_pp" data-aos="fade-up" >At Brand Sparkz we take time to get to know you and your business so we know what is likely to resonate with your audience and ignite new interest within your customer base. </p>
        </div>

        <div class="cards_div container custom_padding">

            <div class="cards_crd">

                <img src="{{ asset('frontend/BrandSparkz/assets/img/1.png') }}" alt="" class="img-fluid crd_image mobile_none">
                <img src="{{ asset('frontend/BrandSparkz/assets/img/mob_crd.png') }}" alt="" class="img-fluid crd_image desktop_none">
                <div class="context_crd">
                    <h1 class="crd_tt" data-aos="fade-up" >
                        Creation
                    </h1>

                    <p class="crd_pp" data-aos="fade-up" >
                        Our talented team of creatives will create bespoke plans to meet your needs. 
                    </p>

                </div>

            </div>
            <div class="cards_crd">

                <img src="{{ asset('frontend/BrandSparkz/assets/img/2.png') }}" alt="" class="img-fluid crd_image mobile_none">
                <img src="{{ asset('frontend/BrandSparkz/assets/img/mob_crd2.png') }}" alt="" class="img-fluid crd_image desktop_none">
                <div class="context_crd">
                    <h1 class="crd_tt" data-aos="fade-up" >
                        Communication
                    </h1>

                    <p class="crd_pp" data-aos="fade-up" >
                        Communication is key and we keep you informed every step of the way. 
                    </p>

                </div>

            </div>
            <div class="cards_crd">

                <img src="{{ asset('frontend/BrandSparkz/assets/img/3.png') }}" alt="" class="img-fluid crd_image mobile_none">
                <img src="{{ asset('frontend/BrandSparkz/assets/img/mob_crd3.png') }}" alt="" class="img-fluid crd_image desktop_none">
                <div class="context_crd">
                    <h1 class="crd_tt" data-aos="fade-up" >
                        Development
                    </h1>

                    <p class="crd_pp" data-aos="fade-up" >
                        Our development team work tirelessly in the background to build campaigns that deliver. 
                    </p>

                </div>

            </div>
            <div class="cards_crd">

                <img src="{{ asset('frontend/BrandSparkz/assets/img/4.png') }}" alt="" class="img-fluid crd_image mobile_none">
                <img src="{{ asset('frontend/BrandSparkz/assets/img/mob_crd4.png') }}" alt="" class="img-fluid crd_image desktop_none">
                <div class="context_crd">
                    <h1 class="crd_tt" data-aos="fade-up" >
                        Results
                    </h1>

                    <p class="crd_pp" data-aos="fade-up" >
                        The results speak for themselves with ROI and boosted leads and conversions. 
                    </p>

                </div>

            </div>

        </div>

    </section>

    <section class="sec4_s">

        <div class="container custom_padding2">
            <div class="sec4_1">

                <h1 class="sec4_tt" data-aos="fade-up" >What’s included <br> <span class="sec4_tt_span">with email marketing </span></h1>
                <p class="sec4_pp" data-aos="fade-up" >Within all our email marketing campaigns we include strategy and campaign planning, list building and segmentation, A/B testing and performance analytics, as well as mobile-optimised email designs so you can connect with customers wherever they are. </p>

            </div>

            <div class="sec4_2">
                <div class="sec4_crd">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/em_1.png') }}" alt="" class="img-fluid crd_image2 mobile_none">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/em1_mob.png') }}" alt="" class="img-fluid crd_image2 desktop_none">
                    <div class="sec4_down">
                        <h1 class="crd4_tt" data-aos="fade-up" >A/B Testing</h1>
                        <p class="crd4_pp" data-aos="fade-up" >We constantly track the performance of   <br class="desktop_none"> campaigns using A/B testing strategies.</p>

                    </div>
                </div>

                <div class="sec4_crd">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/em_2.png') }}" alt="" class="img-fluid crd_image2 mobile_none">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/em2_mob.png') }}" alt="" class="img-fluid crd_image2 desktop_none">
                    <div class="sec4_down">
                        <h1 class="crd4_tt" data-aos="fade-up" >Transactional Emails</h1>
                        <p class="crd4_pp" data-aos="fade-up" >Show your customers your true value<br class="desktop_none">  and worth with authentic testimonials. </p>

                    </div>
                </div>

                <div class="sec4_crd">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/em_3.png') }}" alt="" class="img-fluid crd_image2 mobile_none">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/em3_mob.png') }}" alt="" class="img-fluid crd_image2 desktop_none">
                    <div class="sec4_down">
                        <h1 class="crd4_tt" data-aos="fade-up" >Mobile Optimization</h1>
                        <p class="crd4_pp" data-aos="fade-up" >Beautifully designed emails which are  <br class="desktop_none"> mobile optimised for on-the-go comms.</p>

                    </div>
                </div>
            </div>
        </div>
        

    </section>

    <section class="sec5_s">

        <div class="container custom_padding5">

            <div class="inner_sec5_ulta">
                <div class="left_sec5">
                    <div class="inin_sec5">
                        <h1 class="sec5_tt" data-aos="fade-up" >Digital Marketing <br><span class="span_sec5_tt">That Hits Different!</span>
                        </h1>
                        <p class="sec5_pp" data-aos="fade-up" >The results speak for themselves when you work with Brand Sparkz. Get in touch today to find out more about us and how we can ignite your business ambitions. 
                        </p>
    
                        <div class="pointer_p">
                            <div class="pointer_line">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/pointer.svg') }}" alt="" class="img-fluid">
                                <p class="pointer_pp" data-aos="fade-up" >Expertly crafted campaigns that always deliver results. </p>
                            </div>
                            <div class="pointer_line">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/pointer.svg') }}" alt="" class="img-fluid">
                                <p class="pointer_pp" data-aos="fade-up" >Tailor made and bespoke packages for maximum impact. </p>
                            </div>
                            <div class="pointer_line">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/pointer.svg') }}" alt="" class="img-fluid">
                                <p class="pointer_pp" data-aos="fade-up" >Constantly tracked and analysed campaigns..</p>
                            </div>
    
                        </div>
                    </div>
    
                    <button class="btn btn_global2 on_phone" onclick="location.href='{{route('aboutus') }}'">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern2.png') }}" alt="" class="img-fluid btn_global_pattern2">
                        <div class="btn_global_inner2 on_phone">
                            <p class="cart_text" data-aos="fade-up" >Learn more about us</p>
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/up_right.svg') }}" alt="" class="img-fluid cart_logo">
                        </div>
                    </button>

                </div>
                <div class="right_sec5">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/em_photo.png') }}" alt="" class="img-fluid mobile_none">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/em_photo_mob.png') }}" alt="" class="img-fluid desktop_none">
                </div>
            </div>

        </div>
        

    </section>

    <section class="sec8_s" id="target-element">

        
        <h1 class="table_tt">
            Pricing That <br class="desktop_none">Makes Sense
        </h1>
        <p class="table_pp">No contracts. No Surprise fees.</p>
        <div class="for_below_table em_width mx-auto">
            <div class="social_tablebar w-100">
                <div class="tab_btnbar">
                    <div class="nav-tabs-container position-relative">
                        <ul class="nav nav-pills service_tabbar" id="pills-tab" role="tablist">
                            <li class="nav-item col mb-0" role="presentation">
                                <button class="active service_tabbtn w-100" id="pills-one-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one"
                                    aria-selected="true">1&nbsp;Month</button>
                            </li>
                            <li class="nav-item col mb-0" role="presentation">
                                <button class="service_tabbtn w-100" id="pills-three-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three"
                                    aria-selected="false">3&nbsp;Months</button>
                            </li>
                            <li class="nav-item col mb-0" role="presentation">
                                <button class="service_tabbtn w-100" id="pills-six-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-six" type="button" role="tab" aria-controls="pills-six"
                                    aria-selected="false">6&nbsp;Months</button>
                            </li>
                            <li class="nav-item col mb-0" role="presentation">
                                <button class="service_tabbtn w-100" id="pills-twelve-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-twelve" type="button" role="tab" aria-controls="pills-twelve"
                                    aria-selected="false">12&nbsp;Months</button>
                            </li>
                        </ul>
                        <div class="progress-line">
                            <div class="progress-arrow"></div>
                        </div>
                    </div>
                </div>
                <p class="social_swipetext desktop_none">Swipe left and right to view table</p>
                <div class="tab_contentbar tab-content">
                    <div class="tab-content" id="pills-tabContent">
                        <!-- 1 Months Tab -->
                        <div class="tab-pane fade show active service_contentmain" id="pills-one" role="tabpanel"
                            aria-labelledby="pills-one-tab">
                            <div class="service_tabcontent table-responsive">
                                <table class="table table-borderless mb-0 service_table">
                                    <thead class="service_table_header">
                                        <tr class="align-middle">
                                            <th scope="col" class="text-center">
                                            </th>
                                            @foreach($emProducts['1_month'] as $product)
                                                <th scope="col" class="text-center">
                                                    <div class="social_tablehead">
                                                        <p class="social_tabletitle">
                                                            @php
                                                            $nameParts = explode(' - ', $product->name);
                                                            echo count($nameParts) > 1 ? $nameParts[1] : $product->name;
                                                            @endphp
                                                        </p>
                                                        <p class="social_tableamt">{{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}</p>
                                                        <p class="social_tablesubtitle">+VAT</p>
                                                        <button type="button" class="btn social_tablebtn" onclick="addToCart1Step({{ $product->id }})" style="cursor:pointer;">Add To Cart</button>
                                                    </div>
                                                </th>
                                            @endforeach
                                            {{-- <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">Silver</p>
                                                    <p class="social_tableamt">£264</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn">Add To Cart</button>
                                                </div>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">Gold</p>
                                                    <p class="social_tableamt">£547</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn">Add To Cart</button>
                                                </div>
                                            </th> --}}
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Monthly email send limit</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">
                                                    @if($key == 0) 3000
                                                    @elseif($key == 1) 7000
                                                    @else Unlimited
                                                    @endif
                                                </p>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Multiple users</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">Unlimited</p>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">User Roles & Permissions</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Two Factor Authentication</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Customizable template library</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Custom fields</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Drag-and-drop builder</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Signup forms</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Mobile optimization tools</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">A/B testing </p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Preference Center</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Design & spam testing</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if($key == 0)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Real-time reporting analytics</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Worldview reporting</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">RSS (straightforward syndication)</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Transactional emails</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Campaign Tags</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Email section locking</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Dynamic content</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Countdown timer</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Optimal Time zone sending</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Send time optimization</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Advanced link tracking</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Email support</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Phone support</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if($key == 0)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Deliverability support</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- 3 Months Tab -->
                        <div class="tab-pane fade service_contentmain" id="pills-three" role="tabpanel"
                            aria-labelledby="pills-three-tab">
                            <div class="service_tabcontent table-responsive">
                                <table class="table table-borderless mb-0 service_table">
                                    <thead class="service_table_header">
                                        <tr class="align-middle">
                                            <th scope="col" class="text-center">
                                            </th>
                                            @foreach($emProducts['3_months'] as $product)
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">
                                                        @php
                                                            $nameParts = explode(' - ', $product->name);
                                                            echo count($nameParts) > 1 ? $nameParts[1] : $product->name;
                                                        @endphp
                                                    </p>
                                                    <p class="social_tableamt">{{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn" onclick="addToCart1Step({{ $product->id }})" style="cursor:pointer;">Add To Cart</button>
                                                </div>
                                            </th>
                                            @endforeach
                                            {{-- <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">Silver</p>
                                                    <p class="social_tableamt">£264</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn">Add To Cart</button>
                                                </div>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">Gold</p>
                                                    <p class="social_tableamt">£547</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn">Add To Cart</button>
                                                </div>
                                            </th> --}}
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Monthly email send limit</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">
                                                    @if($key == 0) 3000
                                                    @elseif($key == 1) 7000
                                                    @else Unlimited
                                                    @endif
                                                </p>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Multiple users</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">Unlimited</p>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">User Roles & Permissions</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Two Factor Authentication</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Customizable template library</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Custom fields</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Drag-and-drop builder</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Signup forms</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Mobile optimization tools</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">A/B testing </p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Preference Center</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Design & spam testing</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key == 0)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Real-time reporting analytics</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Worldview reporting</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">RSS (straightforward syndication)</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Transactional emails</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Campaign Tags</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Email section locking</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Dynamic content</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Countdown timer</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Optimal Time zone sending</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Send time optimization</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Advanced link tracking</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Email support</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Phone support</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key == 0)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Deliverability support</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- 6 Months Tab -->
                        <div class="tab-pane fade service_contentmain" id="pills-six" role="tabpanel"
                            aria-labelledby="pills-six-tab">
                            <div class="service_tabcontent table-responsive">
                                <table class="table table-borderless mb-0 service_table">
                                    <thead class="service_table_header">
                                        <tr class="align-middle">
                                            <th scope="col" class="text-center">
                                            </th>
                                            @foreach($emProducts['6_months'] as $product)
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">
                                                        @php
                                                            $nameParts = explode(' - ', $product->name);
                                                            echo count($nameParts) > 1 ? $nameParts[1] : $product->name;
                                                        @endphp
                                                    </p>
                                                    <p class="social_tableamt">{{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn" onclick="addToCart1Step({{ $product->id }})" style="cursor:pointer;">Add To Cart</button>
                                                </div>
                                            </th>
                                            @endforeach

                                            {{-- <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">Silver</p>
                                                    <p class="social_tableamt">£264</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn">Add To Cart</button>
                                                </div>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">Gold</p>
                                                    <p class="social_tableamt">£547</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn">Add To Cart</button>
                                                </div>
                                            </th> --}}
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Monthly email send limit</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">
                                                    @if($key == 0) 3000
                                                    @elseif($key == 1) 7000
                                                    @else Unlimited
                                                    @endif
                                                </p>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Multiple users</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">Unlimited</p>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">User Roles & Permissions</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Two Factor Authentication</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Customizable template library</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Custom fields</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Drag-and-drop builder</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Signup forms</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Mobile optimization tools</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">A/B testing </p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Preference Center</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Design & spam testing</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key == 0)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Real-time reporting analytics</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Worldview reporting</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">RSS (straightforward syndication)</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Transactional emails</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Campaign Tags</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Email section locking</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Dynamic content</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Countdown timer</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Optimal Time zone sending</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Send time optimization</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Advanced link tracking</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Email support</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Phone support</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key == 0)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Deliverability support</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- 12 Months Tab -->
                        <div class="tab-pane fade service_contentmain" id="pills-twelve" role="tabpanel"
                            aria-labelledby="pills-twelve-tab">
                            <div class="service_tabcontent table-responsive">
                                <table class="table table-borderless mb-0 service_table">
                                    <thead class="service_table_header">
                                        <tr class="align-middle">
                                            <th scope="col" class="text-center">
                                            </th>
                                            @foreach($emProducts['12_months'] as $product)
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">
                                                        @php
                                                            $nameParts = explode(' - ', $product->name);
                                                            echo count($nameParts) > 1 ? $nameParts[1] : $product->name;
                                                        @endphp
                                                    </p>
                                                    <p class="social_tableamt">{{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn" onclick="addToCart1Step({{ $product->id }})" style="cursor:pointer;">Add To Cart</button>
                                                </div>
                                            </th>
                                            @endforeach
                                            {{-- <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">Silver</p>
                                                    <p class="social_tableamt">£264</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn">Add To Cart</button>
                                                </div>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">Gold</p>
                                                    <p class="social_tableamt">£547</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn">Add To Cart</button>
                                                </div>
                                            </th> --}}
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Monthly email send limit</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">
                                                    @if($key == 0) 3000
                                                    @elseif($key == 1) 7000
                                                    @else Unlimited
                                                    @endif
                                                </p>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Multiple users</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">Unlimited</p>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">User Roles & Permissions</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Two Factor Authentication</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Customizable template library</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Custom fields</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Drag-and-drop builder</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Signup forms</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Mobile optimization tools</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">A/B testing </p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Preference Center</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Design & spam testing</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key == 0)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Real-time reporting analytics</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Worldview reporting</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">RSS (straightforward syndication)</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Transactional emails</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Campaign Tags</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Email section locking</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Dynamic content</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Countdown timer</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Optimal Time zone sending</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Send time optimization</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Advanced link tracking</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Email support</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Phone support</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key == 0)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Deliverability support</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

     <section class="sec7_s">

            <div class="insec7_s">

                <div>
                    <h1 class="form_tt" data-aos="fade-up" >Need something <span class="span_form_tt">bespoke?</span> </h1>
                    <p class="form_pp" data-aos="fade-up" >We can build bespoke packages based on your unique needs as a business. <br>
                        Simply fill in the form below and someone will come back to you. 
                        </p>
                </div>

                


                <form class="form_section" id="requestform1" action="{{ route('contactus.store') }}" method="post"
                enctype="multipart/form-data" onsubmit="return check_agree1(this);">
                    @csrf
                     <input type="hidden" name="from_page" form="requestform1" value="service">
                    <div class="hori_hor">
                        <div class="one_section">
                            <p class="label_l">Full Name</p>
                            <input type="text" id="fullname" name="fullname" class="input_tag"required>

                        </div>
                        <div class="one_section">
                            <p class="label_l">Email</p>
                            <input type="text" id="email" name="email" class="input_tag" required>

                        </div>

                    </div>
                    <div class="spacer2"></div>

                    <div class="hori_hor">
                        <div class="one_section">
                            <p class="label_l">Phone</p>
                            <input type="text" id="phone" name="phone" class="input_tag" required>

                        </div>
                        <div class="one_section">
                            <p class="label_l">Upload Brief</p>
                            <div class="upload_div" onclick="field_box_file()">
                                <p class="upload_placeholder" id="upload_placeholder">Upload brief here</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M5.89286 15.9289C4.29518 15.9289 3 14.9291 3 13.4631C3 11.9972 4.29518 10.8088 5.89286 10.8088C6.0015 10.8088 6.10875 10.8143 6.21429 10.825V10.8088H6.25407C6.22781 10.6155 6.21429 10.4187 6.21429 10.2189C6.21429 7.61272 8.51682 5.5 11.3571 5.5C13.2805 5.5 14.9573 6.46881 15.8395 7.90361C16.0551 7.87452 16.2756 7.85945 16.5 7.85945C18.9853 7.85945 21 9.70808 21 11.9885C21 13.8657 19.6348 15.2967 17.7656 15.7684M11.858 19.5V12.7258M11.858 12.7258L8.90625 15.5196M11.858 12.7258L14.8125 15.5196"
                                        stroke="#3C3C3C" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>

                            <input type="file" class="form-control input_upload" style="display: contents;"
                                id="document" name="document" >
                        </div>

                    </div>
                    <div class="spacer"></div>
                    <div class="hori_hor">
                        <div class="one_section">
                            <p class="label_l">Additional Information</p>
                            <textarea class="textarea_t" id="message" name="message">
                                </textarea>

                        </div>

                        <div class="for_robot_checkbox">
                            <div class="c-checkbox">
                                <div class="c-div">
                                    <label class="d-flex justify-content-center justify-content-lg-start">
                                        <input type="checkbox" id="terms" name="terms">
                                        <label for="terms"></label>
                                    </label>
                                </div>
                                <div class="c-text">
                                    <p class="login_strong">By ticking this box, you agree to the<br> <a href="{{ route('termsandconditions') }}"

                                            class="blue_text">Terms & Conditions</a> & <a href="{{ route('privacypolicy') }}" class="blue_text">Privacy
                                            Policy</a></p>
                                </div>
                            </div>
    
                            <div class="spacer2"></div>
    
                            <!--<img class="notrobot_1" src="./assets/img/not_a_robot.png">-->
                            <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
                            <div class="h-captcha" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"></div>
                        </div>

                    </div>
                </form>


                <button class="btn btn_global form_btn_wid" type="submit" form="requestform1">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern.png') }}" alt="" class="img-fluid btn_global_pattern">
                    <div class="btn_global_inner w-100">
                        
                        <p class="cart_text">Submit Request</p>
                    </div>
            </button>

           

            </div>

    </section>
</section>

@endsection

@section('scripts')

<script> 
    function field_box_file() {
       console.log('me');
       document.getElementById('document').click();
       }
       $("#document").on("change", function(e){
       document.getElementById('upload_placeholder').innerHTML = e.target.files[0].name;
       })
</script>

<script>
   document.querySelectorAll('.service_tabbtn').forEach((button, index) => {
   button.addEventListener('click', function () {
       document.querySelector('.progress-arrow').style.transform = `translateX(${index * 90}px)`;
   });
});
</script>

<script>
    $(document).ready(function () {
        const a = document.querySelectorAll(".service_table tbody tr td:nth-child(2)");
        const c = document.querySelectorAll(".service_table tbody tr td:last-child");
        const d = document.querySelectorAll(".service_table tbody tr:first-child td");
        const e = document.querySelectorAll(".service_table tbody tr:last-child td");
        const f = document.querySelectorAll(".service_table tbody tr td:last-child");
        a.forEach(x => {
            const b = document.createElement("div");
            b.className = "white_box";
            x.appendChild(b);
        })
        c.forEach(x => {
            const b = document.createElement("div");
            b.className = "white_box2";
            x.appendChild(b);
        })
        d.forEach(x => {
            const b = document.createElement("div");
            b.className = "image_box";
            x.appendChild(b);
        })
        e.forEach(x => {
            const b = document.createElement("div");
            b.className = "image_box2";
            x.appendChild(b);
        })
        f.forEach(x => {
            const b = document.createElement("div");
            b.className = "image_box3";
            const height = x.offsetHeight;
            b.style.height = height + "px";

            
            x.appendChild(b);
        })

    }
    )

</script>

<script>
        function check_agree1(form) {
            if (!form.fullname.value) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Enter Fullname'
                });
                return false;
            }

            if (!form.email.value) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Enter Email'
                });
                return false;
            }

            if (!form.phone.value) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Enter Phone'
                });
                return false;
            }

            if (!form.document.value) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Upload a Document'
                });
                return false;
            }

            if (!form.message.value) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Enter Additional Information'
                });
                return false;
            }

            if (!form.terms.checked) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Accept Terms & Conditions'
                });
                return false;
            }

            return true;
        }

</script>

@endsection





@extends('frontend.layouts.app')
@section('content')
    <style>
        .ser_s1_inner {
            background: url("{{ asset('frontend/PushDynamics/image/ppc_s1.png') }}");
            background-size: cover;
            background-position: right top;
            background-repeat: no-repeat;
        }

        @media only screen and (max-width: 600px) {
            .ser_s1_inner {
                background: url("{{ asset('frontend/PushDynamics/image/ppc_s1_mobo.png') }}");
                background-size: cover;
                background-position: right top;
                background-repeat: no-repeat;
            }
        }
    </style>

    <section class="service_section">
        <div class="ser_s1">
            <div class="ser_s1_inner">
                <div class="ser_s1_content">
                    <h6 class="ser_s1_pre_title" data-aos="fade-up">PACKAGE AND PRICING</h6>
                    <h1 class="ser_s1_title" data-aos="fade-up">Pay-per-click </h1>
                    <p class="ser_s1_subtitle" data-aos="fade-up">
                        Gain high levels of brand exposure and generate more leads with PPC.

                    </p>
                    <button class="btn btn_global_m mo_mx_auto" onclick="scrollToDiv()">View Pricing</button>
                </div>
            </div>
        </div>
        <div class="ser_s2">
            <div class="container">
                <div class="ser_s2_frame">
                    <div class="ser_s2_left">
                        <h6 class="ser_s2_pre_title" data-aos="fade-up">What is PPC?</h6>
                        <h1 class="ser_s2_title" data-aos="fade-up">
                            Get your business found online

                        </h1>
                        <div class="ser_s2_bar"></div>
                        <p class="ser_s2_subtitle" data-aos="fade-up">
                            Companies looking for fast and effective ways to position their business directly in front of
                            high-converting customers should use our PPC services. Instantly increase your visibility on
                            search engines, and get immediate results with PPC. This service is ideal if you are looking for
                            an instant campaign boost and a fast return on investment.

                        </p>
                    </div>
                    <div class="ser_s2_right">
                        <h6 class="ser_s2_pre_title" data-aos="fade-up">Why is PPC Important?</h6>
                        <h1 class="ser_s2_title" data-aos="fade-up">
                            Reach interested customers fast
                        </h1>
                        <div class="ser_s2_bar"></div>
                        <p class="ser_s2_subtitle" data-aos="fade-up">
                            Our targeted PPC services will help you maintain full control over your paid search marketing
                            efforts which result in positive business outcomes. We will analyse to understand your target
                            demographics and their activities to determine how to best approach them using PPC ads. It
                            provides you with precise visibility, speeds up your customer's buying journey, and ultimately
                            boosts your conversion rates.

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="background_socio">


            <div class="sec2_socio">

                <div>
                    <h1 class="title_tt" data-aos="fade-up">How Does it work</h1>
                    <p class="title_pp" data-aos="fade-up">At Push Dynamics we take time to get to know you as a business to
                        understand your individual objectives and costs, from which we develop bespoke digital marketing
                        packages.
                    </p>

                </div>

                <div class="container custom_padding">
                    <div class="socio_crd_div">

                        <div class="socio_crd">
                            <img src="{{ asset('frontend/PushDynamics/image/crd_image.png') }}" alt=""
                                class="img-fluid crd_image">
                            <div class="crd_content">
                                <h1 class="crd_tt" data-aos="fade-up">CREATION</h1>
                                <p class="crd_pp" data-aos="fade-up">We specialise in creating winning campaigns for
                                    businesses of all sizes.
                                </p>

                            </div>
                        </div>

                        <div class="socio_crd">
                            <img src="{{ asset('frontend/PushDynamics/image/crd_image2.png') }}" alt=""
                                class="img-fluid crd_image">
                            <div class="crd_content">
                                <h1 class="crd_tt" data-aos="fade-up">Communication
                                </h1>
                                <p class="crd_pp" data-aos="fade-up">Communication and updating our clients is key to all
                                    our campaigns.
                                </p>

                            </div>
                        </div>

                        <div class="socio_crd">
                            <img src="{{ asset('frontend/PushDynamics/image/crd_image3.png') }}" alt=""
                                class="img-fluid crd_image">
                            <div class="crd_content">
                                <h1 class="crd_tt" data-aos="fade-up">Development
                                </h1>
                                <p class="crd_pp" data-aos="fade-up">We take time to develop tailor made solutions which
                                    will work for you.
                                </p>

                            </div>
                        </div>

                        <div class="socio_crd">
                            <img src="{{ asset('frontend/PushDynamics/image/crd_image4.png') }}" alt=""
                                class="img-fluid crd_image">
                            <div class="crd_content">
                                <h1 class="crd_tt" data-aos="fade-up">Results </h1>
                                <p class="crd_pp" data-aos="fade-up">When you work with Push Dynamics, the results will
                                    speak for themselves.
                                </p>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="background_socio3">
            <div class="socio_sec3">

                <div class="container custom_padding2">
                    <div class="main_sec3_socio">

                        <div class="first_div_sec3">
                            <div class="leftsec3">
                                <p class="left_socio_pp" data-aos="fade-up">Included Features</p>
                                <h1 class="left_socio_tt" data-aos="fade-up">How PPC helps you succeed
                                </h1>
                            </div>
                            <p class="socio_sec3_pp" data-aos="fade-up">
                                PPC works best when integrated with SEO as combined they offer maximum visibility, drive
                                relevant traffic to your website, and deliver long-term benefits. PPC is also a good
                                solution if you have a short time window and need to promote something quickly.

                            </p>
                        </div>

                        <div class="second_div_sec3">
                            <div class="green_crd">
                                <img src="{{ asset('frontend/PushDynamics/image/greencrd_icon13.svg') }}" alt=""
                                    class="img-fluid">
                                <div>
                                    <h1 class="green_crd_tt" data-aos="fade-up">Unlimited Changes</h1>
                                    <p class="green_crd_pp" data-aos="fade-up">All our PPC packages come with unlimited ad
                                        changes.

                                    </p>
                                </div>

                            </div>
                            <div class="green_crd">
                                <img src="{{ asset('frontend/PushDynamics/image/greencrd_icon14.svg') }}" alt=""
                                    class="img-fluid">
                                <div>
                                    <h1 class="green_crd_tt" data-aos="fade-up">Keyword Diagnostic</h1>
                                    <p class="green_crd_pp" data-aos="fade-up">Using data analysis we will target your
                                        audience with precision.

                                    </p>
                                </div>

                            </div>
                            <div class="green_crd">
                                <img src="{{ asset('frontend/PushDynamics/image/greencrd_icon15.svg') }}" alt=""
                                    class="img-fluid">
                                <div>
                                    <h1 class="green_crd_tt" data-aos="fade-up">Google Ad account</h1>
                                    <p class="green_crd_pp" data-aos="fade-up">All packages come with a free Google Ads
                                        account.

                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="ser_s5">
            <div class="container">
                <div class="ser_s5_frame">
                    <div class="ser_s5_left">
                        <img src="{{ asset('frontend/PushDynamics/image/sm_s5.png') }}" alt=""
                            class="img-fluid ser_s5_left_mobo">
                    </div>
                    <div class="ser_s5_right">
                        <div class="ser_s5_content">
                            <div class="for_pad">

                                <h5 class="ser_s5_pre_title" data-aos="fade-up">Why Push Dynamics?</h5>
                                <h1 class="ser_s5_title" data-aos="fade-up">
                                    A team of PPC experts for you

                                </h1>
                                <p class="ser_s5_subtitle" data-aos="fade-up">
                                    Push Dynamics is a trusted leader in Pay Per Click management services. We will help you
                                    to increase leads, grow brand awareness, and reach your goals.

                                </p>

                            </div>
                            <div class="ser_s5_inner_content">
                                <div class="ser_s5_inner_row">
                                    <img src="{{ asset('frontend/PushDynamics/image/green_tic.svg') }}" alt=""
                                        class="img-fluid" style="height: 24px;width: 24px;">
                                    <p class="ser_s5_inner_content_subtitle" data-aos="fade-up">Instant visibility boost
                                        for your business online.
                                    </p>
                                </div>
                                <div class="ser_s5_inner_row">
                                    <img src="{{ asset('frontend/PushDynamics/image/green_tic.svg') }}" alt=""
                                        class="img-fluid" style="height: 24px;width: 24px;">
                                    <p class="ser_s5_inner_content_subtitle" data-aos="fade-up">Great PPC and SEO package
                                        deals available.
                                    </p>
                                </div>
                                <div class="ser_s5_inner_row">
                                    <img src="{{ asset('frontend/PushDynamics/image/green_tic.svg') }}" alt=""
                                        class="img-fluid" style="height: 24px;width: 24px;">
                                    <p class="ser_s5_inner_content_subtitle" data-aos="fade-up">Ideal for quick promotions
                                        in a short time frame. </p>
                                </div>
                            </div>
                            <button class="btn btn_global_m">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blk" id="targetDiv">
            <div class="social_s6">
                <div class="social_c6 em_c6 container">
                    <div class="social_s6titlebar">
                        <h2 class="social_s6title">Simple, transparent Pricing</h2>
                        <p class="social_s6subtitle">No contracts. No Surprise fees.</p>
                    </div>
                    <div class="social_s6line mobile_none"></div>
                    <div class="social_tablebar w-100">
                        <div class="tab_btnbar">
                            <div class="nav-tabs-container position-relative">
                                <ul class="nav nav-pills service_tabbar" id="pills-tab" role="tablist">
                                    <li class="nav-item col mb-0" role="presentation">
                                        <button class="active service_tabbtn w-100" id="pills-one-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-one" type="button"
                                            role="tab" aria-controls="pills-one"
                                            aria-selected="true">1 Month</button>
                                    </li>
                                    <li class="nav-item col mb-0" role="presentation">
                                        <button class="service_tabbtn w-100" id="pills-three-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-three" type="button" role="tab"
                                            aria-controls="pills-three" aria-selected="false">3 Months</button>
                                    </li>
                                    <li class="nav-item col mb-0" role="presentation">
                                        <button class="service_tabbtn w-100" id="pills-six-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-six" type="button" role="tab"
                                            aria-controls="pills-six" aria-selected="false">6 Months</button>
                                    </li>
                                    <li class="nav-item col mb-0" role="presentation">
                                        <button class="service_tabbtn w-100" id="pills-twelve-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-twelve" type="button" role="tab"
                                            aria-controls="pills-twelve" aria-selected="false">12 Months</button>
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
                                {{-- 1st Month --}}
                                <div class="tab-pane fade show active service_contentmain" id="pills-one" role="tabpanel"
                                    aria-labelledby="pills-one-tab">
                                    <div class="service_tabcontent table-responsive">
                                        <table class="table table-borderless mb-0 service_table">
                                            <thead class="service_table_header">
                                                <tr class="align-middle">
                                                    <th scope="col" class="text-center">
                                                    </th>
                                                    @foreach ($ppcProducts['1_month'] as $product)
                                                        <th scope="col" class="text-center">
                                                            <div class="social_tablehead">
                                                                <p class="social_tabletitle">
                                                                    {{ explode(' - ', $product->name)[1] }}</p>
                                                                <p class="social_tableamt">
                                                                    {{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}
                                                                </p>
                                                                <p class="social_tablesubtitle">+VAT</p>
                                                                <button type="button" class="btn social_tablebtn"
                                                                    onclick="addToCart1Step({{ $product->id }})">Add To Cart</button>
                                                            </div>
                                                        </th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody class="service_table_body">
                                                <tr class="align-middle">
                                                    <td>
                                                        <p class="service_bodytitle">Unlimited adjustments</p>
                                                    </td>
                                                    @foreach ($ppcProducts['1_month'] as $product)
                                                        <td class="text-center">
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                        </td>
                                                    @endforeach
                                                </tr>
                                                <tr class="align-middle">
                                                    <td>
                                                        <p class="service_bodytitle">Keyword Diagnostic</p>
                                                    </td>
                                                    @foreach ($ppcProducts['1_month'] as $product)
                                                        <td class="text-center">
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                        </td>
                                                    @endforeach
                                                </tr>
                                                <tr class="align-middle">
                                                    <td>
                                                        <p class="service_bodytitle">Google Ads Account</p>
                                                    </td>
                                                    @foreach ($ppcProducts['1_month'] as $product)
                                                        <td class="text-center">
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                        </td>
                                                    @endforeach
                                                </tr>
                                                <tr class="align-middle">
                                                    <td>
                                                        <p class="service_bodytitle">monthly analysis (Bids)</p>
                                                    </td>
                                                    @foreach ($ppcProducts['1_month'] as $key => $product)
                                                        <td class="text-center">
                                                            @if ($key == 0)
                                                                <img class="img-fluid"
                                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                            @else
                                                                <img class="img-fluid"
                                                                    src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                            @endif
                                                        </td>
                                                    @endforeach
                                                </tr>
                                                <tr class="align-middle">
                                                    <td>
                                                        <p class="service_bodytitle">Creation of Ad Groups</p>
                                                    </td>
                                                    @foreach ($ppcProducts['1_month'] as $key => $product)
                                                        <td class="text-center">
                                                            @if ($key == 0)
                                                                <img class="img-fluid"
                                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                            @else
                                                                <img class="img-fluid"
                                                                    src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                            @endif
                                                        </td>
                                                    @endforeach
                                                </tr>
                                                <tr class="align-middle">
                                                    <td>
                                                        <p class="service_bodytitle">display advertising creation</p>
                                                    </td>
                                                    @foreach ($ppcProducts['1_month'] as $key => $product)
                                                        <td class="text-center">
                                                            @if ($key < 2)
                                                                <img class="img-fluid"
                                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                            @else
                                                                <img class="img-fluid"
                                                                    src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                            @endif
                                                        </td>
                                                    @endforeach
                                                </tr>
                                                <tr class="align-middle">
                                                    <td>
                                                        <p class="service_bodytitle">competitor keyword tracker</p>
                                                    </td>
                                                    @foreach ($ppcProducts['1_month'] as $key => $product)
                                                        <td class="text-center">
                                                            @if ($key < 2)
                                                                <img class="img-fluid"
                                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                            @else
                                                                <img class="img-fluid"
                                                                    src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                            @endif
                                                        </td>
                                                    @endforeach
                                                </tr>
                                                <tr class="align-middle">
                                                    <td>
                                                        <p class="service_bodytitle">reporting</p>
                                                    </td>
                                                    @foreach ($ppcProducts['1_month'] as $product)
                                                        <td class="text-center">
                                                            <p class="service_bodytext">Monthly</p>
                                                        </td>
                                                    @endforeach
                                                </tr>
                                                <tr class="align-middle">
                                                    <td>
                                                        <p class="service_bodytitle">No Contract, Cancel Anytime</p>
                                                    </td>
                                                    @foreach ($ppcProducts['1_month'] as $product)
                                                        <td class="text-center">
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                        </td>
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                                            {{-- 3rd Month --}}
                                                            <div class="tab-pane fade service_contentmain" id="pills-three" role="tabpanel"
                                                                aria-labelledby="pills-three-tab">
                                                                <div class="service_tabcontent table-responsive">
                                                                    <table class="table table-borderless mb-0 service_table">
                                                                        <thead class="service_table_header">
                                                                            <tr class="align-middle">
                                                                                <th scope="col" class="text-center">
                                                                                </th>
                                                                                @foreach ($ppcProducts['3_months'] as $product)
                                                                                    <th scope="col" class="text-center">
                                                                                        <div class="social_tablehead">
                                                                                            <p class="social_tabletitle">
                                                                                                {{ explode(' - ', $product->name)[1] }}</p>
                                                                                            <p class="social_tableamt">
                                                                                                {{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}
                                                                                            </p>
                                                                                            <p class="social_tablesubtitle">+VAT</p>
                                                                                            <button type="button" class="btn social_tablebtn"
                                                                                                onclick="addToCart1Step({{ $product->id }})">Add To Cart</button>
                                                                                        </div>
                                                                                    </th>
                                                                                @endforeach
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="service_table_body">
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">Unlimited adjustments</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['3_months'] as $product)
                                                                                    <td class="text-center">
                                                                                        <img class="img-fluid"
                                                                                            src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">Keyword Diagnostic</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['3_months'] as $product)
                                                                                    <td class="text-center">
                                                                                        <img class="img-fluid"
                                                                                            src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">Google Ads Account</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['3_months'] as $product)
                                                                                    <td class="text-center">
                                                                                        <img class="img-fluid"
                                                                                            src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">monthly analysis (Bids)</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['3_months'] as $key => $product)
                                                                                    <td class="text-center">
                                                                                        @if ($key == 0)
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                                                        @else
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                        @endif
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">Creation of Ad Groups</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['3_months'] as $key => $product)
                                                                                    <td class="text-center">
                                                                                        @if ($key == 0)
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                                                        @else
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                        @endif
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">display advertising creation</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['3_months'] as $key => $product)
                                                                                    <td class="text-center">
                                                                                        @if ($key < 2)
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                                                        @else
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                        @endif
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">competitor keyword tracker</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['3_months'] as $key => $product)
                                                                                    <td class="text-center">
                                                                                        @if ($key < 2)
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                                                        @else
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                        @endif
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">reporting</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['3_months'] as $product)
                                                                                    <td class="text-center">
                                                                                        <p class="service_bodytext">Monthly</p>
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">No Contract, Cancel Anytime</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['3_months'] as $product)
                                                                                    <td class="text-center">
                                                                                        <img class="img-fluid"
                                                                                            src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                
                                                            {{-- 6th Month --}}
                                                            <div class="tab-pane fade service_contentmain" id="pills-six" role="tabpanel"
                                                                aria-labelledby="pills-six-tab">
                                                                <div class="service_tabcontent table-responsive">
                                                                    <table class="table table-borderless mb-0 service_table">
                                                                        <thead class="service_table_header">
                                                                            <tr class="align-middle">
                                                                                <th scope="col" class="text-center">
                                                                                </th>
                                                                                @foreach ($ppcProducts['6_months'] as $product)
                                                                                    <th scope="col" class="text-center">
                                                                                        <div class="social_tablehead">
                                                                                            <p class="social_tabletitle">
                                                                                                {{ explode(' - ', $product->name)[1] }}</p>
                                                                                            <p class="social_tableamt">
                                                                                                {{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}
                                                                                            </p>
                                                                                            <p class="social_tablesubtitle">+VAT</p>
                                                                                            <button type="button" class="btn social_tablebtn"
                                                                                                onclick="addToCart1Step({{ $product->id }})">Add To Cart</button>
                                                                                        </div>
                                                                                    </th>
                                                                                @endforeach
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="service_table_body">
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">Unlimited adjustments</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['6_months'] as $product)
                                                                                    <td class="text-center">
                                                                                        <img class="img-fluid"
                                                                                            src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">Keyword Diagnostic</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['6_months'] as $product)
                                                                                    <td class="text-center">
                                                                                        <img class="img-fluid"
                                                                                            src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">Google Ads Account</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['6_months'] as $product)
                                                                                    <td class="text-center">
                                                                                        <img class="img-fluid"
                                                                                            src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">monthly analysis (Bids)</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['6_months'] as $key => $product)
                                                                                    <td class="text-center">
                                                                                        @if ($key == 0)
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                                                        @else
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                        @endif
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">Creation of Ad Groups</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['6_months'] as $key => $product)
                                                                                    <td class="text-center">
                                                                                        @if ($key == 0)
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                                                        @else
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                        @endif
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">display advertising creation</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['6_months'] as $key => $product)
                                                                                    <td class="text-center">
                                                                                        @if ($key < 2)
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                                                        @else
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                        @endif
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">competitor keyword tracker</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['6_months'] as $key => $product)
                                                                                    <td class="text-center">
                                                                                        @if ($key < 2)
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                                                        @else
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                        @endif
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">reporting</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['6_months'] as $product)
                                                                                    <td class="text-center">
                                                                                        <p class="service_bodytext">Monthly</p>
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">No Contract, Cancel Anytime</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['6_months'] as $product)
                                                                                    <td class="text-center">
                                                                                        <img class="img-fluid"
                                                                                            src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                
                                                            {{-- 12th Month --}}
                                                            <div class="tab-pane fade service_contentmain" id="pills-twelve" role="tabpanel"
                                                                aria-labelledby="pills-twelve-tab">
                                                                <div class="service_tabcontent table-responsive">
                                                                    <table class="table table-borderless mb-0 service_table">
                                                                        <thead class="service_table_header">
                                                                            <tr class="align-middle">
                                                                                <th scope="col" class="text-center">
                                                                                </th>
                                                                                @foreach ($ppcProducts['12_months'] as $product)
                                                                                    <th scope="col" class="text-center">
                                                                                        <div class="social_tablehead">
                                                                                            <p class="social_tabletitle">
                                                                                                {{ explode(' - ', $product->name)[1] }}</p>
                                                                                            <p class="social_tableamt">
                                                                                                {{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}
                                                                                            </p>
                                                                                            <p class="social_tablesubtitle">+VAT</p>
                                                                                            <button type="button" class="btn social_tablebtn"
                                                                                                onclick="addToCart1Step({{ $product->id }})">Add To Cart</button>
                                                                                        </div>
                                                                                    </th>
                                                                                @endforeach
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="service_table_body">
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">Unlimited adjustments</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['12_months'] as $product)
                                                                                    <td class="text-center">
                                                                                        <img class="img-fluid"
                                                                                            src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">Keyword Diagnostic</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['12_months'] as $product)
                                                                                    <td class="text-center">
                                                                                        <img class="img-fluid"
                                                                                            src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">Google Ads Account</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['12_months'] as $product)
                                                                                    <td class="text-center">
                                                                                        <img class="img-fluid"
                                                                                            src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">monthly analysis (Bids)</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['12_months'] as $key => $product)
                                                                                    <td class="text-center">
                                                                                        @if ($key == 0)
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                                                        @else
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                        @endif
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">Creation of Ad Groups</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['12_months'] as $key => $product)
                                                                                    <td class="text-center">
                                                                                        @if ($key == 0)
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                                                        @else
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                        @endif
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">display advertising creation</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['12_months'] as $key => $product)
                                                                                    <td class="text-center">
                                                                                        @if ($key < 2)
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                                                        @else
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                        @endif
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">competitor keyword tracker</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['12_months'] as $key => $product)
                                                                                    <td class="text-center">
                                                                                        @if ($key < 2)
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                                                        @else
                                                                                            <img class="img-fluid"
                                                                                                src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                                                        @endif
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">reporting</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['12_months'] as $product)
                                                                                    <td class="text-center">
                                                                                        <p class="service_bodytext">Monthly</p>
                                                                                    </td>
                                                                                @endforeach
                                                                            </tr>
                                                                            <tr class="align-middle">
                                                                                <td>
                                                                                    <p class="service_bodytitle">No Contract, Cancel Anytime</p>
                                                                                </td>
                                                                                @foreach ($ppcProducts['12_months'] as $product)
                                                                                <td class="text-center">
                                                                                    <img class="img-fluid"
                                                                                        src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                    </div>
                                </div>
                                <div class="for_white">
                                    <div class="ser_s7">
                                        <div class="container">
                                            <h1 class="ser_s7_title" data-aos="fade-up">Need a custom package?</h1>
                                            <p class="ser_s7_subtitle" data-aos="fade-up">
                                                Pick and choose what features you would like in your very own custom package <br>
                                                Simply upload a document of your brief and our team will get back to you.
                                            </p>
                        
                                            <form class="ser_s7_content_form" id="requestform1" action="{{ route('contactus.store') }}"
                                                method="post" enctype="multipart/form-data" onsubmit="return check_agree1(this);">
                                                @csrf
                                                <input type="hidden" name="from_page" form="requestform1" value="service">
                                                <div class="ser_s7_form_elememt">
                                                    <p class="ser_s7_form_label">Username</p>
                                                    <input type="text" class="form-control input_global_m" id="fullname" name="fullname"
                                                        form="requestform1" required>
                                                </div>
                                                <div class="ser_s7_form_elememt">
                                                    <p class="ser_s7_form_label">Email</p>
                                                    <input type="email" class="form-control input_global_m" id="email" name="email"
                                                        form="requestform1" required>
                                                </div>
                                                <div class="ser_s7_form_elememt">
                                                    <p class="ser_s7_form_label">Phone</p>
                                                    <input type="tel" class="form-control input_global_m" id="phone" name="phone"
                                                        form="requestform1" required>
                                                </div>
                                                <div class="ser_s7_form_elememt">
                                                    <p class="ser_s7_form_label">Upload Brief</p>
                                                    <input type="file" class="form-control input_global_m" id="document" name="document"
                                                        form="requestform1" required>
                                                </div>
                                                <div class="ser_s7_form_elememt">
                                                    <p class="ser_s7_form_label">Additional Information</p>
                                                    <textarea class="form-control textarea_global_m" id="message" name="message" form="requestform1" required></textarea>
                                                </div>
                                                <div class="ser_s7_form_elememt">
                                                    <p class="ser_s7_form_label">&nbsp;</p>
                                                    <div class="c-checkbox">
                                                        <div class="c-div">
                                                            <label class="d-flex justify-content-center justify-content-lg-start">
                                                                <input type="checkbox" id="terms" name="terms" form="requestform1">
                                                                <label for="terms"></label>
                                                            </label>
                                                        </div>
                                                        <div class="c-text">
                                                            <p class="login_strong">By ticking this box, you agree to the <a
                                                                    href="{{ route('termsandconditions') }}">Terms & Conditions</a> & <a
                                                                    href="{{ route('privacypolicy') }}">Privacy Policy.</a></p>
                                                        </div>
                                                    </div>
                                                    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
                                                    <div class="h-captcha" form="requestform1" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}">
                                                    </div>
                                                </div>
                                            </form>
                                            <button class="btn btn_global_m" type="submit" form="requestform1">Submit Request</button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        @endsection
                        
                        @section('script')
                            <script>
                                function check_agree1(form) {
                                    var response = grecaptcha.getResponse();
                                    console.log(form.email.valid);
                                    if (form.fullname && form.email && form.phone && form.message && form.terms.checked) {
                        
                                        $('#submit-btn').attr('disabled', true);
                                        return true;
                                    } else if (!form.fullname.value) {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: 'Please Enter Fullname'
                                        })
                                        return false;
                                    } else if (!form.email.value) {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: 'Please Enter Email'
                                        })
                                        return false;
                                    } else if (!form.phone.value) {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: 'Please Enter Phone'
                                        })
                                        return false;
                                    } else if (!form.message.value) {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: 'Please Enter Comments'
                                        })
                                        return false;
                                    } else if (!form.terms.checked) {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: 'Please Accept T&C'
                                        })
                                        return false;
                                    }
                                    return false;
                                }
                            </script>
                            <script>
                                function scrollToDiv() {
                                    document.getElementById('targetDiv').scrollIntoView({
                                        behavior: 'smooth'
                                    });
                                }
                            </script>
                            <script>
                                document.querySelectorAll('.service_tabbtn').forEach((button, index) => {
                                    button.addEventListener('click', function() {
                                        document.querySelector('.progress-arrow').style.transform = `translateX(${index * 90}px)`;
                                    });
                                });
                            </script>
                        @endsection
                        
@extends('frontend.layouts.app')

@section('content')
    {{-- New Code Start --}}

    {{-- <section class="home_page">



        <div class="hs1">
            <div class="sh1_inner">
                <div class="hs1_main">
                    <div class="hs1_left">
                        <div class="hs1_content">
                            <div class="hs1_pill">
                                <p class="hs1_pre_title">Your Translation Partner for All Translations</p>
                            </div>
                            <h1 class="hs1_title" data-aos="fade-up">
                               Providing Global Language Solutions
                            </h1>
                            <p class="hs1_subtitle" data-aos="fade-up">
                                Discover the ultimate solution for global communication! We offer expert translation
                                services that bridge language gaps and connect cultures. Whether you’re expanding
                                internationally or need precise local translations, our team ensures clarity, accuracy, and
                                seamless interactions across the globe.
                            </p>
                            <button class="btn btn_big_hs1"
                                onclick="window.location.href='#'">
                                Start Here
                                <div class="circ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15"
                                        viewBox="0 0 14 15" fill="none">
                                        <path d="M1 7.5H13M13 7.5L7 1.5M13 7.5L7 13.5" stroke="white" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="hs1_right">
                        <video class="bg-image d-lg-block d-md-block d-none" loop="" muted="" autoplay=""
                            style="object-fit: cover;">
                            <source src="{{ asset('frontend/Lingosphere/img/hs1_vid.mp4') }}" type="video/mp4">
                        </video>

                        <video class="bg-image d-lg-none d-md-none d-block" loop="" muted="" autoplay=""
                            style="object-fit: cover;">
                            <source src="{{ asset('frontend/Lingosphere/img/hs1_vid.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>



        <div class="home_sec2">

            <div class="home_floater">
                <div class="floater_inner">
                    <h1 class="floater_title" data-aos="fade-up">Accuracy</h1>
                    <p class="floater_subtitle" data-aos="fade-up">
                        Our translations are meticulously checked for precise and error-free results every time.
                    </p>
                </div>
                <div class="floater_inner">
                    <h1 class="floater_title" data-aos="fade-up">Reliability</h1>
                    <p class="floater_subtitle" data-aos="fade-up">
                        Benefit from our team's deep knowledge and specialised skills in various industries.
                    </p>
                </div>
                <div class="floater_inner">
                    <h1 class="floater_title" data-aos="fade-up">Efficiency</h1>
                    <p class="floater_subtitle" data-aos="fade-up">
                        Count on us for timely delivery and consistent quality you can trust.
                    </p>
                </div>
                <div class="floater_inner">
                    <h1 class="floater_title" data-aos="fade-up">Expertise</h1>
                    <p class="floater_subtitle" data-aos="fade-up">
                        Experience fast turnaround times with streamlined processes and practical solutions.
                    </p>
                </div>
            </div>
            <div>
                <h1 class="joinus3_tt" data-aos="fade-up">Translate with Us</h1>
                <p class="joinus3_pp" style="margin-bottom: 0px;" data-aos="fade-up">Translate with us to ensure precision,
                    cultural relevance, and timely delivery. Our expert team guarantees high-quality translations that
                    effectively convey your message across languages and borders.</p>
            </div>
            <div class="home_div_box">

                <div class="joinus_boxes">

                    <div class="top_join_box" data-aos="fade-up">
                        Legally compliant

                    </div>

                    <div class="bottom_join_box">

                        <img src="{{ asset('frontend/Lingosphere/img/home_icons1.svg') }}" alt="" class="img-fluid">

                        <p class="bottom_join_box_pp" data-aos="fade-up">Legally compliant translations ensure accuracy and
                            adherence to official standards.</p>

                    </div>

                </div>
                <div class="joinus_boxes">

                    <div class="top_join_box" data-aos="fade-up">
                        Budget-friendly
                    </div>

                    <div class="bottom_join_box">

                        <img src="{{ asset('frontend/Lingosphere/img/home_icons2.svg') }}" alt="" class="img-fluid">

                        <p class="bottom_join_box_pp" data-aos="fade-up">Cost-efficient solutions maximise value while
                            minimising expenses, delivering translations within your budget.</p>

                    </div>

                </div>
                <div class="joinus_boxes">

                    <div class="top_join_box" data-aos="fade-up">
                        High-quality
                    </div>

                    <div class="bottom_join_box">

                        <img src="{{ asset('frontend/Lingosphere/img/home_icons3.svg') }}" alt="" class="img-fluid">

                        <p class="bottom_join_box_pp" data-aos="fade-up">Our translations deliver accuracy and clarity,
                            ensuring your message resonates across all languages.</p>

                    </div>

                </div>

            </div>
        </div>


        <div class="home_sec3">


            <div class="left_home3">

            </div>

            <div class="right_home3">

                <img src="{{ asset('frontend/Lingosphere/img/sound1_ct.svg') }}" alt=""
                    class="img-fluid sound1_home mobile_none">
                <img src="{{ asset('frontend/Lingosphere/img/sound2_ct.svg') }}" alt=""
                    class="img-fluid sound2_home mobile_none">

                <div class="home_languages_main_div">

                    <div class="top_lang_div">
                        <h1 class="sec3ct_tt" data-aos="fade-up">Check Out Our Languages</h1>
                        <p class="sec5ct_pp" data-aos="fade-up">Our clients rave about our diverse language options, which
                            include Spanish, Chinese, French, German, and more. We ensure your message resonates perfectly
                            across languages, making global communication seamless and practical. Explore our extensive
                            language services and connect with the world effortlessly!</p>
                    </div>

                    <div class="middle_lang_div">

                        <div class="singlecol_lang">

                            <div class="languages_div_div">
                                Spanish

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt=""
                                    class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Arabic

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt=""
                                    class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                German
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt=""
                                    class="img-fluid blackcircle">
                            </div>

                        </div>

                        <div class="singlecol_lang">

                            <div class="languages_div_div">
                                Japanese

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt=""
                                    class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Italian

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt=""
                                    class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                Russian
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt=""
                                    class="img-fluid blackcircle">
                            </div>

                        </div>

                        <div class="singlecol_lang mobile_none">

                            <div class="languages_div_div">
                                Chinese

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt=""
                                    class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                French

                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt=""
                                    class="img-fluid blackcircle">
                            </div>

                            <div class="languages_div_div">
                                +Many More!
                                <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt=""
                                    class="img-fluid blackcircle">
                            </div>

                        </div>

                    </div>

                    <button class="btn green_btn forphone_100width"
                        onclick="window.location.href='#'">

                        <div class="mobile_none">
                            Start Today
                        </div>

                        <div class="desktop_none">
                            See All
                        </div>

                    </button>


                </div>

            </div>

        </div>

        <div class="sec3_au">

            <div class="top_sec3_au">
                <h1 class="sec3au_tt" style="margin-bottom: 0px;" data-aos="fade-up">
                    Easy Steps to Translations
                </h1>
            </div>

            <div class="container p-0">
                <div class="bottom_sec3_au">

                    <div class="per_greenbox">

                        <div class="inner_green_box">

                        </div>

                        <div class="topb_box">
                            Step 1
                        </div>
                        <div class="bottom_box" data-aos="fade-up">
                            Upload documents
                        </div>

                    </div>
                    <div class="per_greenbox">

                        <div class="inner_green_box">

                        </div>

                        <div class="topb_box">
                            Step 2
                        </div>
                        <div class="bottom_box" data-aos="fade-up">
                            Easy checkout
                        </div>

                    </div>
                    <div class="per_greenbox">

                        <div class="inner_green_box">

                        </div>

                        <div class="topb_box">
                            Step 3
                        </div>
                        <div class="bottom_box" data-aos="fade-up">
                            Receive translations
                        </div>

                    </div>

                </div>
            </div>
            @auth
                <button class="btn green_btn forphone_100width" onclick="window.location.href='{{ route('dashboard') }}'">
                    My Account
                </button>
            @else
                <button class="btn green_btn forphone_100width" onclick="window.location.href='{{ route('user.login') }}'">
                    Create an account
                </button>
            @endauth


        </div>

        <div class="home_sec5">


            <div class="left_home5">

                <img src="{{ asset('frontend/Lingosphere/img/sound3_ct.svg') }}" alt=""
                    class="img-fluid sound3_ct mobile_none">
                <img src="{{ asset('frontend/Lingosphere/img/sound4_ct.svg') }}" alt=""
                    class="img-fluid sound4_ct mobile_none">


                <div class="in_left_home5">

                    <div class="top_sec6_left">
                        <h1 class="sec3ct_tt" data-aos="fade-up">Popular Documents<br>with Our Customers</h1>
                        <p class="sec6ct_pp" data-aos="fade-up">Our customers translate a wide range of documents,
                            including legal contracts, tech manuals, medical records, and personal certificates. We ensure
                            every word hits the mark, delivering precision and clarity for all your essential needs. Let’s
                            make your documents cross languages!</p>
                    </div>


                    <div class="mobile_none">
                        <div class="middle_lang_div">



                            <div class="singlecol_lang">

                                <div class="languages_div_div" data-aos="fade-up">
                                    Financial documents

                                    <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt=""
                                        class="img-fluid blackcircle">
                                </div>

                                <div class="languages_div_div" data-aos="fade-up">
                                    Birth certificates


                                    <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt=""
                                        class="img-fluid blackcircle">
                                </div>



                            </div>

                            <div class="singlecol_lang mobile_none">


                                <div class="languages_div_div" data-aos="fade-up">
                                    Health records

                                    <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt=""
                                        class="img-fluid blackcircle">
                                </div>

                                <div class="languages_div_div" data-aos="fade-up">
                                    Bank statements
                                    <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt=""
                                        class="img-fluid blackcircle">
                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="desktop_none">
                        <div class="middle_lang_div">



                            <div class="singlecol_lang">

                                <div class="languages_div_div" data-aos="fade-up">
                                    Financial documents
                                    <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt=""
                                        class="img-fluid blackcircle">
                                </div>

                                <div class="languages_div_div" data-aos="fade-up">
                                    Birth certificates.

                                    <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt=""
                                        class="img-fluid blackcircle">
                                </div>


                                <div class="languages_div_div" data-aos="fade-up">
                                    Health records

                                    <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt=""
                                        class="img-fluid blackcircle">
                                </div>

                                <div class="languages_div_div" data-aos="fade-up">
                                    Bank statements
                                    <img src="{{ asset('frontend/Lingosphere/img/blackcircle.svg') }}" alt=""
                                        class="img-fluid blackcircle">
                                </div>



                            </div>


                        </div>
                    </div>


                    <button class="btn green_btn forphone_100width"
                        onclick="window.location.href='{{ route('aboutus') }}'">
                        See All
                    </button>



                </div>
            </div>

            <div class="right_home5">

            </div>

        </div>

        <div class="hs6">
            <div class="container">
                <h1 class="hs6_title" data-aos="fade-up">Benefits of Our Translations</h1>
                <div class="hs6_carousel">
                    <div class="owl-carousel owl-theme">

                        <div class="hs6_card">
                            <div class="hs6_card_img_frame">
                                <img src="{{ asset('frontend/Lingosphere/img/hs6_i1.png') }}" alt=""
                                    class="img-fluid hs6_card_img">
                            </div>
                            <div class="hs6_card_body">
                                <h1 class="hs6_card_title" data-aos="fade-up">Business Growth</h1>
                                <p class="hs6_card_subtitle" data-aos="fade-up">Accelerate your business growth with our
                                    expert translation services. Reach new markets, engage a global audience, and drive
                                    expansion by breaking down those barriers and communicating effectively across regions.
                                </p>
                            </div>
                        </div>


                        <div class="hs6_card">
                            <div class="hs6_card_img_frame">
                                <img src="{{ asset('frontend/Lingosphere/img/hs6_i2.png') }}" alt=""
                                    class="img-fluid hs6_card_img">
                            </div>
                            <div class="hs6_card_body">
                                <h1 class="hs6_card_title" data-aos="fade-up">International Reach</h1>
                                <p class="hs6_card_subtitle" data-aos="fade-up">Expand your business's footprint by
                                    bridging language gaps and connecting with international audiences. Our translations
                                    help you tap into new markets and grow your global presence effectively and seamlessly.
                                </p>
                            </div>
                        </div>


                        <div class="hs6_card">
                            <div class="hs6_card_img_frame">
                                <img src="{{ asset('frontend/Lingosphere/img/hs6_i3.png') }}" alt=""
                                    class="img-fluid hs6_card_img">
                            </div>
                            <div class="hs6_card_body">
                                <h1 class="hs6_card_title" data-aos="fade-up">Clear Communication</h1>
                                <p class="hs6_card_subtitle" data-aos="fade-up">Ensure your message is accurately conveyed
                                    across languages, avoiding misunderstandings and misinterpretations. Our precise
                                    translations create effective dialogue and strengthen relationships with your customers.
                                </p>
                            </div>
                        </div>


                        <div class="hs6_card">
                            <div class="hs6_card_img_frame">
                                <img src="{{ asset('frontend/Lingosphere/img/hs6_i4.png') }}" alt=""
                                    class="img-fluid hs6_card_img">
                            </div>
                            <div class="hs6_card_body">
                                <h1 class="hs6_card_title" data-aos="fade-up">Cultural Accuracy</h1>
                                <p class="hs6_card_subtitle" data-aos="fade-up">Benefit from translations that respect and
                                    reflect cultural nuances and context. We provide culturally relevant translations that
                                    resonate with your target audience, enhancing engagement.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <button class="btn green_btn forphone_100width mx-auto"
                    onclick="window.location.href='#'">
                    Explore all services
                </button>
            </div>
        </div>

        <div class="ct_sec3">
            <div>
                <img src="{{ asset('frontend/Lingosphere/img/home_last_mob.png') }}" alt=""
                    class="img-fluid desktop_none" style="width: 100%;">
            </div>

            <div class="in_ct_sec3">

                <div class="container p-0">
                    <div class="dv_sec1">
                        <div>
                            <h1 class="sec3ct_tt" data-aos="fade-up">Why Translate with Us</h1>
                            <p class="sec3ct_pp" data-aos="fade-up">Choose us for our commitment to excellence, expert
                                team, and personalised service. We deliver high-quality translations, meet deadlines, and
                                ensure client satisfaction. Our innovative approach and dedication make us the ideal partner
                                for all your language needs.</p>
                        </div>
                        @auth
                            <button class="btn green_btn forphone_100width"
                                onclick="window.location.href='{{ route('dashboard') }}'">
                                My Account
                            </button>
                        @else
                            <button class="btn green_btn forphone_100width"
                                onclick="window.location.href='{{ route('user.login') }}'">
                                Translate Today
                            </button>
                        @endauth

                    </div>
                </div>
                <img src="{{ asset('frontend/Lingosphere/img/home_last.png') }}" alt=""
                    class="img-fluid cut_boxes2 mobile_none">
            </div>

        </div>


    </section> --}}

    
    <style>
    .carousel_mob_int{
            display:flex;
            display:none;
        }
    @media only screen and (max-width: 600px) {
        .carousel_mob_int{
            display:flex !important;
            display:block
        }
    }
    </style>

    <section class="home_page">
        <div class="hs1">
            <div class="hs1_cutout_right"></div>
            <div class="hs1_cutout_left"></div>
            <div class="container p-0">
                <div class="hs1_main">
                    <div class="hs1_left">

                        <div class="hs1_vid_cut">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/hs1_vid_cut_top_right.png') }}" alt="" class="img-fluid mobile_none hs1_vid_cut_top_right">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/hs1_vid_cut_top_right_mobo.png') }}" alt="" class="img-fluid desktop_none hs1_vid_cut_top_right">

                            <div class="">
                                <video class="bg-image mobile_none" id="hs1_vid_desk" loop="" muted="" autoplay="" style="object-fit: cover;">
                                    <source src="" type="video/mp4">
                                </video>
                                <video class="bg-image desktop_none" id="hs1_vid_mobo" loop="" muted="" autoplay="" style="object-fit: cover;">
                                    <source src="" type="video/mp4">
                                </video>
                                
                            </div>

                            <div class="hs1_per_element_card">
                                <div class="hs1_element_card_top">
                                    <div class="hs1_element_card_pill">
                                        <p class="hs1_ele_crd_pill_txt"></p>
                                    </div>
                                </div>
                                <div class="hs1_element_card_bottom">
                                    <img src="" alt="" class="img-fluid hs1_element_card_image">
                                    <button class="btn btn_ark_arr">
                                        <img src="{{ asset('frontend/BrandSparkz/assets/img/ark_arr.png') }}" alt="" class="img-fluid arkarr">
                                    </button>
                                </div>
                            </div>

                            <div class="women_mask_text_div hpl1">
                                <div class="disc_div">
                                    <div class="outer_disc">
                                        <div class="inner_disc"></div>
                                    </div>
                                </div>
                                <div class="wm_text_div">
                                    <p class="hs1_wm_text">Two Factor Authentication</p>
                                </div>
                            </div>

                            <div class="women_mask_text_div hpl2">
                                <div class="disc_div">
                                    <div class="outer_disc">
                                        <div class="inner_disc"></div>
                                    </div>
                                </div>
                                <div class="wm_text_div">
                                    <p class="hs1_wm_text">Multi User Access</p>
                                </div>
                            </div>

                            <div class="women_mask_text_div hpl3">
                                <div class="disc_div">
                                    <div class="outer_disc">
                                        <div class="inner_disc"></div>
                                    </div>
                                </div>
                                <div class="wm_text_div">
                                    <p class="hs1_wm_text">A/B Testing</p>
                                </div>
                            </div>

                            <div class="mob_navigator_slider desktop_none carousel_mob_int" >
                                    
                                <button class="slider-btn left-btn_mob">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                        <path d="M5.98315 10.678L1.0001 5.69493L5.98315 0.711877" stroke="#3C3C3C" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>

                                <div class="hs1_slider_disc_div_mob">
                                    <div class="hs1_slide_disc_mob active">
                                        <div class="hs1_slide_disc_inner">
                                            
                                        </div>
                                    </div>
                                    <div class="hs1_slide_disc_mob">
                                        <div class="hs1_slide_disc_inner">
                                            
                                        </div>
                                    </div>
                                    <div class="hs1_slide_disc_mob">
                                        <div class="hs1_slide_disc_inner">
                                            
                                        </div>
                                    </div>
                                    <div class="hs1_slide_disc_mob">
                                        <div class="hs1_slide_disc_inner">
                                            
                                        </div>
                                    </div>
                                    <div class="hs1_slide_disc_mob">
                                        <div class="hs1_slide_disc_inner">
                                            
                                        </div>
                                    </div>
                                    <div class="hs1_slide_disc_mob">
                                        <div class="hs1_slide_disc_inner">
                                            
                                        </div>
                                    </div>
                                </div>

                                <button class="slider-btn right-btn_mob">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                        <path d="M0.983154 0.711914L5.96621 5.69496L0.983154 10.678" stroke="#3C3C3C" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>

                            <div class="mob_hs1_navitrix desktop_none carousel_mob_int" >
                                <div class="navitrix_outer">
                                    <div class="navitrix_inner">
                                        <p class="navitrix_text"></p>
                                    </div>
                                </div>
                                <div class="navitrix_center"></div>
                                <div class="navatrix_last">
                                    <button class="brn brn_mob_ark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                            <circle cx="14" cy="14" r="14" fill="white"/>
                                            <path d="M11.2771 11.7229L15.8314 11.7229M15.8314 11.7229L15.8314 16.2771M15.8314 11.7229L11.2771 16.2771" stroke="#3C3C3C" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                    </button>
                                </div>
                            </div>


                            <button class="btn btn_arr">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 1L23 12M23 12L12 23M23 12L1.00003 12" stroke="#3C3C3C" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>

                            <img src="{{ asset('frontend/BrandSparkz/assets/img/hs1_vid_cut_bottom_left.png') }}" alt="" class="img-fluid mobile_none hs1_vid_cut_bottom_left">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/hs1_vid_cut_bottom_left_mobo.png') }}" alt="" class="img-fluid desktop_none hs1_vid_cut_bottom_left">
                        </div>

                    </div>
                    <div class="hs1_right">
                        <div class="hs1_content">
                            <div class="hs1_pre_title_div">
                                <div class="hs1_pre_title_disc"></div>
                                <p class="hs1_pre_title">Digital Marketing</p>
                            </div>
                            <h1 class="hs1_title">You Bring the <span>Dream</span><br>
                                We Bring the <span>Spark</span></h1>
                            <p class="hs1_subtitle">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, feugiat laoreet vel, amet tristique dolor euismod sed diam. Consectetur porttitor diam mattis commodo sed elementum.
                            </p>

                            <div class="hs1_slider_div_main">
                                
                                <div class="hs1_slider_div">

                                    <div class="owl_img_div">
                                        <div class="owl_img_div_inner">
                                            <div class="owl_img_div_inner_img">
                                                <img src="{{ asset('frontend/BrandSparkz/assets/img/owl_seo.png') }}" alt="" class="img-fluid owl_image">
                                            </div>
                                            <div class="botom_trix">
                                                <p class="slide_btm_trix_txt">Search Engine Optimization</p>
                                                <div class="circ_btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none">
                                                        <circle cx="18" cy="18.5" r="18" fill="#F3F3F1"/>
                                                        <path d="M15.7346 16.4519L20.2889 16.4519M20.2889 16.4519L20.2889 21.0061M20.2889 16.4519L15.7346 21.0061" stroke="#3C3C3C" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl_img_div">
                                        <img src="{{ asset('frontend/BrandSparkz/assets/img/owl_ppc.png') }}" alt="" class="img-fluid owl_image">
                                    </div>
                                    <div class="owl_img_div">
                                        <img src="{{ asset('frontend/BrandSparkz/assets/img/owl_orm.png') }}" alt="" class="img-fluid owl_image">
                                    </div>
                                    <div class="owl_img_div">
                                        <img src="{{ asset('frontend/BrandSparkz/assets/img/owl_wdd.png') }}" alt="" class="img-fluid owl_image">
                                    </div>

                                    
                                </div>

                                <div class="hs1_slider_btn_div mobile_none" style="display: inline-flex;">
                                    <div class="">
                                        <button class="slider-btn left-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                                <path d="M5.98315 10.678L1.0001 5.69493L5.98315 0.711877" stroke="#3C3C3C" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                        <button class="slider-btn right-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                                <path d="M0.983154 0.711914L5.96621 5.69496L0.983154 10.678" stroke="#3C3C3C" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="hs1_slider_disc_div">
                                        <div class="hs1_slide_disc active">
                                            <div class="hs1_slide_disc_inner">
                                                
                                            </div>
                                        </div>
                                        <div class="hs1_slide_disc">
                                            <div class="hs1_slide_disc_inner">
                                                
                                            </div>
                                        </div>
                                        <div class="hs1_slide_disc">
                                            <div class="hs1_slide_disc_inner">
                                                
                                            </div>
                                        </div>
                                        <div class="hs1_slide_disc">
                                            <div class="hs1_slide_disc_inner">
                                                
                                            </div>
                                        </div>
                                        <div class="hs1_slide_disc">
                                            <div class="hs1_slide_disc_inner">
                                                
                                            </div>
                                        </div>
                                        <div class="hs1_slide_disc">
                                            <div class="hs1_slide_disc_inner">
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="index_pos_div">
                                        <p class="index_pos"><span></span>/06</p>
                                    </div>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs2">
            <div class="container">
                <div class="hs2_main">
                    <div class="hs2_mobo_top desktop_none">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/hs2_mobo1.png') }}" alt="" class="img-fluid desktop_none hs2_top_mobo_image">
                    </div>
                    <div class="hs2_left">
                        <div class="hs2_content">
                            <h1 class="hs2_title">The Difference?<br>
                                It's in the <span>Spark.</span></h1>
                            <p class="hs2_subtitle">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat dictum eget etiam metus, facilisi. Congue libero, nulla sem pulvinar et commodo. Sed velit ornare at arcu semper. Adipiscing volutpat ac egestas dignissim volutpat nec vel. Eget pellentesque metus, feugiat iaculis. Odio est tortor urna libero purus at. Vitae placerat dolor ultrices lectus tristique dignissim odio purus amet. Mauris eget habitant in.
                            </p>
                            <button class="btn btn_global" onclick="window.location.href='{{ route('aboutus') }}'">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern.png') }}" alt="" class="img-fluid btn_global_pattern">
                                <div class="btn_global_inner">
                                    <p class="cart_text">Read More</p>
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/arrow_logo.svg') }}" alt="" class="img-fluid cart_logo">
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="hs2_right">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/hs2_img.png') }}" alt="" class="img-fluid mobile_none hs2_right_image">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/hs2_mobo2.png') }}" alt="" class="img-fluid desktop_none hs2_right_image">
                    </div>
                </div>
            </div>
        </div>

        <div class="hs3">

        <img src="{{ asset('frontend/BrandSparkz/assets/img/cutter_top_right.png') }}" alt="" class="img-fluid mobile_none cutter_top_right">
        <img src="{{ asset('frontend/BrandSparkz/assets/img/cutter_bottom_left.png') }}" alt="" class="img-fluid mobile_none cutter_bottom_left">
            <div class="container p-0">
                <div class="hs3_title_box">
                    <h1 class="hs3_title">The <span>Sparkz</span> Menu</h1>
                    <p class="hs3_subtitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, feugiat laoreet vel, amet tristique dolor euismod sed diam. Consectetur porttitor diam mattis commodo sed elementum, ultricies.
                    </p>
                </div>

                <div class="hs3_card_box_main">
                    <div class="hs3_card_main">
                        <div class="hs3_card_left">
                            <div class="hs3_card_left_left">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_img.png') }}" alt="" class="img-fluid hs3_card_left_image">
                            </div>
                            <div class="hs3_card_left_right">
                                <h6 class="hs3_card_title">Search Engine Optimisation ( SEO )</h6>
                                <p class="hs3_card_subtitle">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui ac id et facilisi. Arcu accumsan 
                                </p>
                            </div>
                        </div>
                        <div class="hs3_card_center">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_intersect.png') }}" alt="" class="img-fluid mobile_none hs3_card_intersect">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_intersect_mob.png') }}" alt="" class="img-fluid desktop_none hs3_card_intersect">
                        </div>
                        <div class="hs3_card_right">
                            <button class="btn hs3_card_right_inner_orange" onclick="window.location.href='{{ route('seo') }}'">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/arrow_logo.svg') }}" alt="" class="img-fluid hs3_card_right_inner_arrow">
                            </button>
                        </div>
                    </div>
                    <div class="hs3_card_main">
                        <div class="hs3_card_left">
                            <div class="hs3_card_left_left">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_img2.png') }}" alt="" class="img-fluid hs3_card_left_image">
                            </div>
                            <div class="hs3_card_left_right">
                                <h6 class="hs3_card_title">Pay-Per-Click ( PPC )</h6>
                                <p class="hs3_card_subtitle">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui ac id et facilisi. Arcu accumsan 
                                </p>
                            </div>
                        </div>
                        <div class="hs3_card_center">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_intersect.png') }}" alt="" class="img-fluid mobile_none hs3_card_intersect">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_intersect_mob.png') }}" alt="" class="img-fluid desktop_none hs3_card_intersect">
                        </div>
                        <div class="hs3_card_right">
                            <button class="btn hs3_card_right_inner_orange" onclick="window.location.href='{{ route('ppc') }}'">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/arrow_logo.svg') }}" alt="" class="img-fluid hs3_card_right_inner_arrow">
                            </button>
                        </div>
                    </div>
                    <div class="hs3_card_main">
                        <div class="hs3_card_left">
                            <div class="hs3_card_left_left">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_img3.png') }}" alt="" class="img-fluid hs3_card_left_image">
                            </div>
                            <div class="hs3_card_left_right">
                                <h6 class="hs3_card_title">Online Reputation Management</h6>
                                <p class="hs3_card_subtitle">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui ac id et facilisi. Arcu accumsan 
                                </p>
                            </div>
                        </div>
                        <div class="hs3_card_center">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_intersect.png') }}" alt="" class="img-fluid mobile_none hs3_card_intersect">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_intersect_mob.png') }}" alt="" class="img-fluid desktop_none hs3_card_intersect">
                        </div>
                        <div class="hs3_card_right">
                            <button class="btn hs3_card_right_inner_orange" onclick="window.location.href='{{ route('orm') }}'">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/arrow_logo.svg') }}" alt="" class="img-fluid hs3_card_right_inner_arrow">
                            </button>
                        </div>
                    </div>
                    <div class="hs3_card_main">
                        <div class="hs3_card_left">
                            <div class="hs3_card_left_left">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_img4.png') }}" alt="" class="img-fluid hs3_card_left_image">
                            </div>
                            <div class="hs3_card_left_right">
                                <h6 class="hs3_card_title">Web Design and Web Development</h6>
                                <p class="hs3_card_subtitle">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui ac id et facilisi. Arcu accumsan 
                                </p>
                            </div>
                        </div>
                        <div class="hs3_card_center">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_intersect.png') }}" alt="" class="img-fluid mobile_none hs3_card_intersect">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_intersect_mob.png') }}" alt="" class="img-fluid desktop_none hs3_card_intersect">
                        </div>
                        <div class="hs3_card_right">
                            <button class="btn hs3_card_right_inner_orange" onclick="window.location.href='{{ route('wdd') }}'">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/arrow_logo.svg') }}" alt="" class="img-fluid hs3_card_right_inner_arrow">
                            </button>
                        </div>
                    </div>
                    <div class="hs3_card_main">
                        <div class="hs3_card_left">
                            <div class="hs3_card_left_left">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_img5.png') }}" alt="" class="img-fluid hs3_card_left_image">
                            </div>
                            <div class="hs3_card_left_right">
                                <h6 class="hs3_card_title">Email Marketing</h6>
                                <p class="hs3_card_subtitle">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui ac id et facilisi. Arcu accumsan 
                                </p>
                            </div>
                        </div>
                        <div class="hs3_card_center">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_intersect.png') }}" alt="" class="img-fluid mobile_none hs3_card_intersect">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_intersect_mob.png') }}" alt="" class="img-fluid desktop_none hs3_card_intersect">
                        </div>
                        <div class="hs3_card_right">
                            <button class="btn hs3_card_right_inner_orange" onclick="window.location.href='{{ route('em') }}'">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/arrow_logo.svg') }}" alt="" class="img-fluid hs3_card_right_inner_arrow">
                            </button>
                        </div>
                    </div>
                    <div class="hs3_card_main">
                        <div class="hs3_card_left">
                            <div class="hs3_card_left_left">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_img6.png') }}" alt="" class="img-fluid hs3_card_left_image">
                            </div>
                            <div class="hs3_card_left_right">
                                <h6 class="hs3_card_title">Social Media</h6>
                                <p class="hs3_card_subtitle">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui ac id et facilisi. Arcu accumsan 
                                </p>
                            </div>
                        </div>
                        <div class="hs3_card_center">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_intersect.png') }}" alt="" class="img-fluid mobile_none hs3_card_intersect">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_intersect_mob.png') }}" alt="" class="img-fluid desktop_none hs3_card_intersect">
                        </div>
                        <div class="hs3_card_right">
                            <button class="btn hs3_card_right_inner_orange" onclick="window.location.href='{{ route('social') }}'">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/arrow_logo.svg') }}" alt="" class="img-fluid hs3_card_right_inner_arrow">
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="hs4">
            <div class="container">
                <div class="hs4_title_box">
                    <h1 class="hs4_title">The <span>Brand Sparkz</span> Flow</h1>
                    <p class="hs4_subtitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, feugiat laoreet vel, amet tristique dolor euismod sed diam. Consectetur porttitor diam mattis commodo sed elementum, ultricies.
                    </p>
                </div>

                <div class="hs4_card_box_main">
                    <div class="hs4_full_card">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/hs4_cut_1.png') }}" alt="" class="img-fluid hs4_top_cut d-flex mr-auto">
                        <div class="hs4_card">
                            <div class="hs4_card_box">
                                <div class="hs4_card_box_top">
                                    <p class="hs4_card_number">01</p>
                                </div>
                                <h6 class="hs4_card_title">choose packages</h6>
                                <p class="hs4_card_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis phasellus condimentum feugiat dui ullamcorper tellus odio. Laoreet risus felis ultrices.</p>
                                <button class="btn btn_global mx-auto" onclick="window.location.href='{{ route('seo') }}'">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern.png') }}" alt="" class="img-fluid btn_global_pattern">
                                    <div class="btn_global_inner">
                                        <p class="cart_text">Explore the Sparkz Suite</p>
                                        <img src="{{ asset('frontend/BrandSparkz/assets/img/arrow_logo.svg') }}" alt="" class="img-fluid cart_logo">
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="hs4_full_card">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/hs4_cut_2.png') }}" alt="" class="img-fluid hs4_top_cut d-flex mx-auto">
                        <div class="hs4_card">
                            <div class="hs4_card_box">
                                <div class="hs4_card_box_top">
                                    <p class="hs4_card_number">02</p>
                                </div>
                                <h6 class="hs4_card_title">Schedule Appointment</h6>
                                <p class="hs4_card_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis phasellus condimentum feugiat dui ullamcorper tellus odio. Laoreet risus felis ultrices.</p>
                                <button class="btn btn_global mx-auto" onclick="window.location.href='{{ route('contactus') }}'">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern.png') }}" alt="" class="img-fluid btn_global_pattern">
                                    <div class="btn_global_inner">
                                        <p class="cart_text">Contact Our Team</p>
                                        <img src="{{ asset('frontend/BrandSparkz/assets/img/arrow_logo.svg') }}" alt="" class="img-fluid cart_logo">
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="hs4_full_card">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/hs4_cut_3.png') }}" alt="" class="img-fluid hs4_top_cut d-flex ms-auto">
                        <div class="hs4_card">
                            <div class="hs4_card_box">
                                <div class="hs4_card_box_top">
                                    <p class="hs4_card_number">03</p>
                                </div>
                                <h6 class="hs4_card_title">Grow together</h6>
                                <p class="hs4_card_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis phasellus condimentum feugiat dui ullamcorper tellus odio. Laoreet risus felis ultrices.</p>
                                <button class="btn btn_global mx-auto" onclick="window.location.href='{{ route('seo') }}'">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern.png') }}" alt="" class="img-fluid btn_global_pattern">
                                    <div class="btn_global_inner">
                                        <p class="cart_text">Browse Our Services</p>
                                        <img src="{{ asset('frontend/BrandSparkz/assets/img/arrow_logo.svg') }}" alt="" class="img-fluid cart_logo">
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hs5">
            <div class="container">
                <div class="hs5_inner">
                        <video class="mobile_none" loop="" muted="" autoplay="">
                            <source src="{{ asset('frontend/BrandSparkz/assets/img/hs5_desktop_video.mp4') }}" type="video/mp4">
                        </video>
                        
                        <video class="desktop_none" loop="" muted="" autoplay="">
                            <source src="{{ asset('frontend/BrandSparkz/assets/img/hs5_mobile_video.mp4') }}" type="video/mp4">
                        </video>
                </div>
            </div>
        </div>
    </section>
@endsection

<script src="{{ asset('frontend/BrandSparkz/assets/dist/owl-carousel/js/owl.carousel.js') }}"></script>
<!-- JS Link -->

<script src="{{ asset('frontend/BrandSparkz/assets/js/main.js') }}"></script>

@section('script')
<script>
    // Pass PHP variables to JavaScript
    const imagePaths = {
        owl_seo: "{{ asset('frontend/BrandSparkz/assets/img/owl_seo.png') }}",
        owl_ppc: "{{ asset('frontend/BrandSparkz/assets/img/owl_ppc.png') }}",
        owl_orm: "{{ asset('frontend/BrandSparkz/assets/img/owl_orm.png') }}",
        owl_wdd: "{{ asset('frontend/BrandSparkz/assets/img/owl_wdd.png') }}",
        owl_em: "{{ asset('frontend/BrandSparkz/assets/img/owl_em.png') }}",
        owl_smm: "{{ asset('frontend/BrandSparkz/assets/img/owl_smm.png') }}"
    };

    const hoverCardImages = {
        cut_seo: "{{ asset('frontend/BrandSparkz/assets/img/cut_seo.png') }}",
        cut_ppc: "{{ asset('frontend/BrandSparkz/assets/img/cut_ppc.png') }}",
        cut_orm: "{{ asset('frontend/BrandSparkz/assets/img/cut_orm.png') }}",
        cut_wdd: "{{ asset('frontend/BrandSparkz/assets/img/cut_wdd.png') }}",
        cut_em: "{{ asset('frontend/BrandSparkz/assets/img/cut_em.png') }}",
        cut_smm: "{{ asset('frontend/BrandSparkz/assets/img/cut_smm.png') }}"
    };

    const videos = {
        seo: "{{ asset('frontend/BrandSparkz/assets/img/hs1_vid_seo.mp4') }}",
        ppc: "{{ asset('frontend/BrandSparkz/assets/img/hs1_vid_ppc.mp4') }}",
        orm: "{{ asset('frontend/BrandSparkz/assets/img/hs1_vid_orm.mp4') }}",
        wdd: "{{ asset('frontend/BrandSparkz/assets/img/hs1_vid_wdd.mp4') }}",
        em: "{{ asset('frontend/BrandSparkz/assets/img/hs1_vid_em.mp4') }}",
        smm: "{{ asset('frontend/BrandSparkz/assets/img/hs1_vid_smm.mp4') }}"
    };

    const videosMob = {
        seo: "{{ asset('frontend/BrandSparkz/assets/img/hs1_vid_seo_mob.mp4') }}",
        ppc: "{{ asset('frontend/BrandSparkz/assets/img/hs1_vid_ppc_mob.mp4') }}",
        orm: "{{ asset('frontend/BrandSparkz/assets/img/hs1_vid_orm_mob.mp4') }}",
        wdd: "{{ asset('frontend/BrandSparkz/assets/img/hs1_vid_wdd_mob.mp4') }}",
        em: "{{ asset('frontend/BrandSparkz/assets/img/hs1_vid_em_mobo.mp4') }}",
        smm: "{{ asset('frontend/BrandSparkz/assets/img/hs1_vid_smm_mob.mp4') }}"
    };
</script>

<!-- Owl Carousel JS Links -->

@endsection
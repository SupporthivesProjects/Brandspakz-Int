@extends('frontend.layouts.app')

@section('content')    
    <style>
        .carousel_mob_int{
            display:flex;
            display:none;
        }
        .btn_header_link, .btn_header_drop {
            color: #3c3c3c !important;
        }
        .header_center_bar {
            background: #3c3c3c !important;
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
                                    <p class="hs1_wm_text" data-aos="fade-up">Two Factor Authentication</p>
                                </div>
                            </div>

                            <div class="women_mask_text_div hpl2">
                                <div class="disc_div">
                                    <div class="outer_disc">
                                        <div class="inner_disc"></div>
                                    </div>
                                </div>
                                <div class="wm_text_div">
                                    <p class="hs1_wm_text" data-aos="fade-up">Multi User Access</p>
                                </div>
                            </div>

                            <div class="women_mask_text_div hpl3">
                                <div class="disc_div">
                                    <div class="outer_disc">
                                        <div class="inner_disc"></div>
                                    </div>
                                </div>
                                <div class="wm_text_div">
                                    <p class="hs1_wm_text" data-aos="fade-up">A/B Testing</p>
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
                                <p class="hs1_pre_title" data-aos="fade-up">Digital Marketing</p>
                            </div>
                            <h1 class="hs1_title" data-aos="fade-up">You Bring the <span>Dream</span><br>
                                We Bring the <span>Spark</span></h1>
                            <p class="hs1_subtitle" data-aos="fade-up">
                                Let us ignite your business ambitions by giving your ideas the spark they deserve by connecting you with your ideal customer base for maximum impact. 
                            </p>

                            <div class="hs1_slider_div_main">
                                
                                <div class="hs1_slider_div">

                                    <div class="owl_img_div">
                                        <div class="owl_img_div_inner">
                                            <div class="owl_img_div_inner_img">
                                                <img src="{{ asset('frontend/BrandSparkz/assets/img/owl_seo.png') }}" alt="" class="img-fluid owl_image">
                                            </div>
                                            <div class="botom_trix">
                                                <p class="slide_btm_trix_txt" data-aos="fade-up">Search Engine Optimization</p>
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
                                    <div class="d-flex" style="gap: 18px;">
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
                                        <p class="index_pos" data-aos="fade-up"><span></span>/06</p>
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
                            <h1 class="hs2_title" data-aos="fade-up">The Difference?<br>
                                It's in the <span>Spark.</span></h1>
                            <p class="hs2_subtitle" data-aos="fade-up">
                                Here at Brand Sparkz we know to bring light and life to your business to propel it into the mainstream by connecting you with your target audience. Whether you’re a start-up looking for initial ignition, or a more established brand looking to re-ignite your online presence, we can create a tailored digital marketing plan for you. 
                            </p>
                            <button class="btn btn_global" onclick="window.location.href='{{ route('aboutus') }}'">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern.png') }}" alt="" class="img-fluid btn_global_pattern">
                                <div class="btn_global_inner">
                                    <p class="cart_text" data-aos="fade-up">Read More</p>
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
                    <h1 class="hs3_title" data-aos="fade-up">The <span>Sparkz</span> Menu</h1>
                    <p class="hs3_subtitle" data-aos="fade-up">
                        As a full-service agency offering a combination of compelling digital and content-led campaigns, we can find the right solution to ignite your business. 
                    </p>
                </div>

                <div class="hs3_card_box_main">
                    <div class="hs3_card_main">
                        <div class="hs3_card_left">
                            <div class="hs3_card_left_left">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/hs3_card_img.png') }}" alt="" class="img-fluid hs3_card_left_image">
                            </div>
                            <div class="hs3_card_left_right">
                                <h6 class="hs3_card_title" data-aos="fade-up">Search Engine Optimisation ( SEO )</h6>
                                <p class="hs3_card_subtitle" data-aos="fade-up">
                                    See your business shoot to the top of search engine results using our analytics-led SEO strategies. 
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
                                <h6 class="hs3_card_title" data-aos="fade-up">Pay-Per-Click ( PPC )</h6>
                                <p class="hs3_card_subtitle" data-aos="fade-up">
                                    Get an instant boost of traffic to your website for new products and launches using paid-ads. 
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
                                <h6 class="hs3_card_title" data-aos="fade-up">Online Reputation Management</h6>
                                <p class="hs3_card_subtitle" data-aos="fade-up">
                                    Send sparks flying online with a solid reputation for your brand letting your audience know your value.
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
                                <h6 class="hs3_card_title" data-aos="fade-up">Web Design and Web Development</h6>
                                <p class="hs3_card_subtitle" data-aos="fade-up">
                                    Showcase your value through an award-winning designed website which is sure to send sparks flying. 
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
                                <h6 class="hs3_card_title" data-aos="fade-up">Email Marketing</h6>
                                <p class="hs3_card_subtitle" data-aos="fade-up">
                                   Connect with new and existing customers through engaging and highly-clickable email marketing campaigns.
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
                                <h6 class="hs3_card_title" data-aos="fade-up">Social Media</h6>
                                <p class="hs3_card_subtitle" data-aos="fade-up">
                                    Keep the conversation and leads flowing through effective social media campaigns and content strategies. 
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
                    <h1 class="hs4_title" data-aos="fade-up">The <span>Brand Sparkz</span> Flow</h1>
                    <p class="hs4_subtitle" data-aos="fade-up">
                        Getting started with Brand Sparkz is easy, and we can have your business making all the right new leads and connections online in three simple steps. 
                    </p>
                </div>

                <div class="hs4_card_box_main">
                    <div class="hs4_full_card">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/hs4_cut_1.png') }}" alt="" class="img-fluid hs4_top_cut d-flex mr-auto">
                        <div class="hs4_card">
                            <div class="hs4_card_box">
                                <div class="hs4_card_box_top">
                                    <p class="hs4_card_number" data-aos="fade-up">01</p>
                                </div>
                                <h6 class="hs4_card_title" data-aos="fade-up">choose packages</h6>
                                <p class="hs4_card_subtitle" data-aos="fade-up">Let us help you choose the packages that are right for you which can be selected individually or combined for maximum effect. </p>
                                <button class="btn btn_global mx-auto" onclick="window.location.href='{{ route('seo') }}'">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern.png') }}" alt="" class="img-fluid btn_global_pattern">
                                    <div class="btn_global_inner">
                                        <p class="cart_text" data-aos="fade-up">Explore the Sparkz Suite</p>
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
                                    <p class="hs4_card_number" data-aos="fade-up">02</p>
                                </div>
                                <h6 class="hs4_card_title" data-aos="fade-up">Schedule Appointment</h6>
                                <p class="hs4_card_subtitle" data-aos="fade-up">Speak with a member of the team to discuss your unique needs and ambitions as a business in more detail. </p>
                                <button class="btn btn_global mx-auto" onclick="window.location.href='{{ route('contactus') }}'">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern.png') }}" alt="" class="img-fluid btn_global_pattern">
                                    <div class="btn_global_inner">
                                        <p class="cart_text" data-aos="fade-up">Contact Our Team</p>
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
                                    <p class="hs4_card_number" data-aos="fade-up">03</p>
                                </div>
                                <h6 class="hs4_card_title" data-aos="fade-up">Grow together</h6>
                                <p class="hs4_card_subtitle" data-aos="fade-up">Watch sparks fly as your campaigns come to life and ignite new interest from new and existing customers. </p>
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
        
        <section class="floater_section">
            <div class="line_div mobile_none">
    
            </div>
            <div class="grey_div mobile_none">
    
            </div>
    
            <div class="floater_div">
    
                <div class="inner_floater">
                    <div>
                        <h1 class="floater_div_tt" data-aos="fade-up">
                            We’re <span class="floater_div_tt_span">All In</span>, Are You?
                        </h1>
                        <p class="floater_div_pp" data-aos="fade-up">
                            If you want to ignite new interest in your business, we’re ready to get started. Register for an account today, and watch the sparks fly. 
                        </p>
    
                    </div>
    
                    <button class="btn btn_global2 extra_button" onclick="window.location.href='{{ route('contactus') }}'">
                       <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern2.png') }}" alt=""
                                class="img-fluid btn_global_pattern2">
                        <div class="btn_global_inner2 extra_button">
                            <p class="cart_text">Get started!</p>
                        </div>
                    </button>
                </div>
    
    
    
            </div>
    
        </section>
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
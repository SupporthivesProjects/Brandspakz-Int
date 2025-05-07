@extends('frontend.layouts.app')

@section('content')
    {{-- New Code Start --}}
    <section class="the_main_section">

        <section class="faq_1">

            <h1 class="faq_tt" data-aos="fade-up">Find Your Answer</h1>
            <p class="faq_pp" data-aos="fade-up">Everything you need to know about out products and billing.</p>

        </section>

        <section class="faq_2">
            <img src="{{ asset('frontend/BrandSparkz/assets/img/intersect_tt.png') }}" alt="" class="img-fluid intersect_tt mobile_none">
            <img src="{{ asset('frontend/BrandSparkz/assets/img/mobile_intersect.png') }}" alt="" class="img-fluid intersect_tt_mob desktop_none">


            <div class="container custom_padding_faq">

                <div class="in_faq">

                    <div class="left_main">
                        <div class="left_faq">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/faq_desktop_prop.png') }}" alt="" class="img-fluid faq_desktop_prop">
                            <div class="white_faq_bg">

                                <img src="{{ asset('frontend/BrandSparkz/assets/img/left_faq_in.png') }}" alt="" class="img-fluid also_img"
                                    style="margin-bottom: 18px;">
                                <h1 class="faq_left_tt" data-aos="fade-up">can’t find your<br class="desktop_none"> answer? <span class="faq_left_tt_span"><br class="mobile_none">Let’s fix
                                        that.</span></h1>
                                <p class="faq_left_pp"data-aos="fade-up">If you can’t find the answer to your query here, then please get in touch with a member of the team and someone will come back to you. </p>
                                <button class="btn btn_global" onclick="window.location.href='{{ route('contactus') }}'">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern.png') }}" alt=""
                                        class="img-fluid btn_global_pattern">
                                    <div class="btn_global_inner w-100">

                                        <p class="cart_text" data-aos="fade-up">Drop us a line</p>
                                        <img src="{{ asset('frontend/BrandSparkz/assets/img/up_right.svg') }}" alt="" class="img-fluid cart_logo">
                                    </div>
                                </button>

                            </div>

                        </div>
                    </div>


                    <div class="right_faq">

                        <div class="only_faq_pad">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How do I sign up?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                           You’ll need to register for an account with us online before you can book any of our digital marketing services. Your account will store a record and progress reports of all your active marketing campaigns. Registration is simple and can be completed online through the form. 
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How much does it cost?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            We have worked hard to make our prices as transparent and as clear as possible here at Brand Sparkz. We will be able to give you a fully detailed breakdown of the expected costs of your campaign once we have received and worked on your brief. 
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            How do I know what campaign is right for me?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            We will need to speak to you and discuss your individual goals and objectives as a business to help you decide which of our campaigns are right for you. It may be that a combination of strategies will be best for your business to ensure maximum results. 
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            What industries do you specialise in?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                           We specialise in a number of industries and work with a number of experts across different sectors, so we can always provide extra insight and deep understanding into your own unique target audience and needs to deliver campaigns specifically for your audience. 
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                            How do I speak with a member of the team? 
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            If you haven’t been able to find the answer of your question here and would like to speak with a member of the team to discuss our services and packages in more detail then please get in touch with us using the contact us page. 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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

                    <button class="btn btn_global2 extra_button" onclick="window.location.href='{{ route('user.login') }}'">
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

@section('script')


@endsection

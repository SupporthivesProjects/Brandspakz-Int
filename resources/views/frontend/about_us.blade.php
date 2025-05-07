@extends('frontend.layouts.app')

@section('content')
    
<section>

    <section class="sec1_s">
        <video class="bg-image d-lg-block d-md-block d-none" loop="" muted="" autoplay=""
            style="object-fit: cover;">
            <source src="{{ asset('frontend/BrandSparkz/assets/img/aboutus.mp4') }}" type="video/mp4">
        </video>
        <video class="bg-image d-lg-none d-md-none d-block" loop="" muted="" autoplay="" style="object-fit: cover;">
            <source src="{{ asset('frontend/BrandSparkz/assets/img/aboutus_mob.mp4') }}" type="video/mp4">
        </video>

        <div class="aboutus__sec1">
            <h1 class="main_tt" data-aos="fade-up">
                The Brains Behind <br class="mobile_none">the<span class="aboutus_span">
                    Brand Sparkz
                </span>
            </h1>
            <p class="main_pp" data-aos="fade-up">At Brand Sparkz we’re not just marketers – we’re your growth partners. We’re a team of creative strategists, data-driven thinkers, and digital experts who are passionate about igniting your business ambitions and making them grow. </p>

        </div>
    </section>


    <section class="for_bgonly">
        <section class="aboutus_2">
            <img src="{{ asset('frontend/BrandSparkz/assets/img/intersect_tt.png') }}" alt="" class="img-fluid intersect_tt mobile_none">
            <img src="{{ asset('frontend/BrandSparkz/assets/img/mobile_intersect.png') }}" alt="" class="img-fluid intersect_tt_mob desktop_none">

            <h1 class="about_tt" data-aos="fade-up">
                Our <span class="about_tt_span" >Spark</span> by<br class="desktop_none"> the Numbers
            </h1>
            <p class="about_pp" data-aos="fade-up">Everything we do here at Brand Sparkz is results driven and focused on ROI. From our first strategy session to ongoing optimisation, we are here to help grow your business, and not just your traffic. </p>
            <div class="container p-0">
                <div class="image_section">
                    <div class="img_1_shadow_wrapper">
                        <img class="img_1_shadow" src="{{ asset('frontend/BrandSparkz/assets/img/img_1_shadow.png') }}">
                        <div class="img_1">
                            <p class="image_tt mx-auto" data-aos="fade-up">Campaigns That Actually work</p>
                        </div>
                    </div>




                    <div class="img_2">
                        <p class="image_tt mx-auto" data-aos="fade-up">Support That Doesn’t Sleep</p>
                    </div>
                    <div class="img_3">
                        <p class="image_tt mx-auto" data-aos="fade-up">More Than 20 Digital Creators, One Mission</p>
                    </div>
                    <div class="img_4_shadow_wrapper">
                        <img class="img_4_shadow" src="{{ asset('frontend/BrandSparkz/assets/img/img_4_shadow.png') }}">
                        <div class="img_4">
                            <p class="image_tt mx-auto" data-aos="fade-up">Cross-Industry Knowledge</p>
                        </div>
                    </div>


                </div>

            </div>
        </section>

        <section class="aboutus_3">
            <div class="container custom_pad_about">
                <div class="aboutus3_maincrd">

                    <div class="aucrd_contentouter">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/aboutusprop.png') }}" alt="" class="img-fluid aboutusprop mobile_none">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/mobile_au_prop.png') }}" alt=""
                            class="img-fluid mobile_au_prop desktop_none">
                        <div class="aucrd_contentinner">
                            <h1 class="au_tt" data-aos="fade-up">
                                the Minds That Make <span class="au_tt_span">the Magic</span>
                            </h1>
                            <p  class="au_pp" data-aos="fade-up">Our team brings together specialists from every area of digital marketing, so your campaigns are cohesive, integrated, and always working together. Through transparent communication and regular reports, you’ll always have full visibility of our process and the success of your campaigns. 
                                <br>
                                <br>
                                We take time to understand your business, your goals, as well as your audience and use our creative and marketing expertise to craft strategies that fit around your brand and meet your ambitions. 
                                <br>
                                <br>
                                We’ve got a proven track record of helping start-ups, small businesses, as well as larger enterprise brands to build their online presence with scale and confidence. While we’re digital experts, we are a human-centred agency where we focus on building relationships as much as we do running campaigns. 
                                <br>
                                <br>
                                At Brand Sparkz we believe great marketing combines creativity with analytics, intuition with insight, and we bring that ethos to every project we take on. </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="desktop_none">

            <div class="only_mob">
                    <h1 class="only_mob_tt" data-aos="fade-up">
                        Turn Brand Potential Into <span class="only_mob_tt_span">Brand Power</span>
                    </h1>
                    <div class="per_section">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/icon1.png') }}" alt="" class="img-fluid icon_icon">
                        <div>
                            <h1 class="per_sec_tt" data-aos="fade-up">impact Over Noise</h1>
                            <p class="per_sec_pp" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo vitae massa integer lorem aliquam turpis fusce. Est arcu mi massa</p>
                        </div>
                    </div>
                    <div class="per_section">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/icon2.png') }}" alt="" class="img-fluid icon_icon">
                        <div>
                            <h1 class="per_sec_tt" data-aos="fade-up">impact Over Noise</h1>
                            <p class="per_sec_pp" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo vitae massa integer lorem aliquam turpis fusce. Est arcu mi massa</p>
                        </div>
                    </div>
                    <div class="per_section">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/icon3.png') }}" alt="" class="img-fluid icon_icon">
                        <div>
                            <h1 class="per_sec_tt" data-aos="fade-up">Built for Bold Brands</h1>
                            <p class="per_sec_pp" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo vitae massa integer lorem aliquam turpis fusce. Est arcu mi massa</p>
                        </div>
                    </div>
            </div>

        </section>

        <section class="aboutus_4">
            <h1 class="au_tt">
                The <span class="au_tt_span" data-aos="fade-up">Sparkz</span> Menu

            </h1>
            <p class="au_pp extra_widith" data-aos="fade-up">With a deep understanding of SEO, PPC, social media, web design, email marketing, and brand reputation we bring together the skills and experience needed to deliver measurable results. </p>
            <div class="container main_div_hoverpadding">

                <div class="in_hover">

                    <div class="serv_rw_1">
                        <div class="serv_c1 js_hv">
                            <a class=" card_btn" href="#" data-aos="fade-up">SEO</a>
                            <div class="serv_gree">
                                <h4 data-aos="fade-up">Progressive SEO </h4>
                                <p data-aos="fade-up">Ranking on search engines isn’t luck – it is carefully planned strategy. 
                                <span class="mobile_none">Our SEO services will help your website rise to the top and stay there. </span>
                                </p>
                                <button class="btn btn_global2 mx-auto" onclick="window.location.href='{{ route('seo') }}'">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern2.png') }}" alt=""
                                        class="img-fluid btn_global_pattern2">
                                    <div class="btn_global_inner2 on_phone">
                                        <h1 class="cart_text" data-aos="fade-up">Explore Service</h1>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="serv_c2 js_hv">
                            <a class=" card_btn" href="#" data-aos="fade-up">Pay-per-click</a>
                            <div class="serv_gree">
                                <h4 data-aos="fade-up">Progressive Pay-per-click </h4>
                                <p data-aos="fade-up">Get in front of the right customers at the right time with 
                                <span class="mobile_none">our PPC ads which are built for performance and return on investment. </span>
                                </p>
                                <button class="btn btn_global2 mx-auto" onclick="window.location.href='{{ route('ppc') }}'">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern2.png') }}" alt=""
                                        class="img-fluid btn_global_pattern2">
                                    <div class="btn_global_inner2 on_phone">
                                        <h1 class="cart_text" data-aos="fade-up">Explore Service</h1>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="serv_c3 js_hv">
                            <a class=" card_btn" href="#" data-aos="fade-up">ORM</a>
                            <div class="serv_gree">
                                <h4 data-aos="fade-up">Progressive ORM </h4>
                                <p data-aos="fade-up">Your online reputation is your digital currency – at Brand Sparkz 
                                <span class="mobile_none">we help you take control of the narrative and build lasting trust with your customer base. </span>
                                </p>
                                <button class="btn btn_global2 mx-auto" onclick="window.location.href='{{ route('orm') }}'">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern2.png') }}" alt=""
                                        class="img-fluid btn_global_pattern2">
                                    <div class="btn_global_inner2 on_phone">
                                        <h1 class="cart_text"data-aos="fade-up">Explore Service</h1>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="serv_rw_1">
                        <div class="serv_c4 js_hv">
                            <a class=" card_btn" href="#" data-aos="fade-up">UX/UI</a>
                            <div class="serv_gree">
                                <h4 data-aos="fade-up">Progressive UX/UI </h4>
                                <p data-aos="fade-up">Your website is your digital shop front, and at Brand Sparkz we 
                                <span class="mobile_none">make sure it looks amazing, works flawlessly, and continuously drives results. </span>
                                </p>
                                <button class="btn btn_global2 mx-auto" onclick="window.location.href='{{ route('wdd') }}'">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern2.png') }}" alt=""
                                        class="img-fluid btn_global_pattern2">
                                    <div class="btn_global_inner2 on_phone">
                                        <h1 class="cart_text" data-aos="fade-up">Explore Service</h1>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="serv_c5 js_hv">
                            <a class=" card_btn" href="#" data-aos="fade-up">Email Marketing</a>
                            <div class="serv_gree">
                                <h4 data-aos="fade-up">Progressive Email Marketing </h4>
                                <p data-aos="fade-up">Unlock the full potential of your business with our targeted, personalised, and results-
                                <span class="mobile_none">driven email marketing campaigns to ignite new interest and build new connections. </span>
                                </p>
                                <button class="btn btn_global2 mx-auto" onclick="window.location.href='{{ route('em') }}'">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern2.png') }}" alt=""
                                        class="img-fluid btn_global_pattern2">
                                    <div class="btn_global_inner2 on_phone">
                                        <h1 class="cart_text" data-aos="fade-up">Explore Service</h1>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="serv_c6 js_hv">
                            <a class=" card_btn" href="#" data-aos="fade-up">Social Media</a>
                            <div class="serv_gree">
                                <h4 data-aos="fade-up">Progressive Social Media </h4>
                                <p data-aos="fade-up">Harness the power of social media to connect, engage, and 
                                    
                                    <span class="mobile_none">grow your audience where they spend time the most – on social media channels. </span>
                                </p>
                                <button class="btn btn_global2 mx-auto" onclick="window.location.href='{{ route(name: 'social') }}'">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern2.png') }}" alt=""
                                        class="img-fluid btn_global_pattern2">
                                    <div class="btn_global_inner2 on_phone">
                                        <h1 class="cart_text" data-aos="fade-up">Explore Service</h1>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    </section>

    








    <section class="floater_section">
        <div class="line_div mobile_none">

        </div>
        <div class="grey_div mobile_none">

        </div>

        <div class="floater_div">

            <div class="inner_floater">
                <div>
                    <h1 class="floater_div_tt">
                        We’re <span class="floater_div_tt_span">All In</span>, Are You?
                    </h1>
                    <p class="floater_div_pp">
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

@section('scripts')

<script>
    const div = document.querySelector('.img_1');
    const img = document.querySelector('.img_1_shadow');

    // Function to sync image size with div's content box size
    function syncSize() {
        const rect = div.getBoundingClientRect();
        img.style.width = rect.width + 'px';
        img.style.height = rect.height + 'px';
    }

    // Set initial size
    syncSize();

    // Use ResizeObserver to track changes
    const observer = new ResizeObserver(() => {
        syncSize();
    });

    observer.observe(div);


    const div4 = document.querySelector('.img_4');
    const img4 = document.querySelector('.img_4_shadow');

    // Function to sync image size with div's content box size
    function syncSize4() {
        const rect = div4.getBoundingClientRect();
        img4.style.width = rect.width + 'px';
        img4.style.height = rect.height + 'px';
    }

    // Set initial size
    syncSize4();

    // Use ResizeObserver to track changes
    const observer4 = new ResizeObserver(() => {
        syncSize4();
    });

    observer4.observe(div4);
</script>

<script>
    function check_agree(form) {
        console.log(form.email.valid);
        if (form.fullname && form.email && form.message && form.terms.checked) {

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

@endsection
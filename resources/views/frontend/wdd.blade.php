@extends('frontend.layouts.app')
@section('content')

{{-- pushdynamics code start here--}}

<style>
    .ser_s1_inner {
        background: url("{{ asset ('frontend/PushDynamics/image/wd_s1.png') }}");
        background-size: cover;
        background-position: right top;
        background-repeat: no-repeat;
    }

    @media only screen and (max-width: 600px) {
        .ser_s1_inner {
            background: url("{{ asset ('frontend/PushDynamics/image/wd_s1_mobo.png') }}");
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
                <h6 class="ser_s1_pre_title">PACKAGE AND PRICING</h6>
                <h1 class="ser_s1_title">Web Design & Development</h1>
                <p class="ser_s1_subtitle">
                    Capture your audience's attention with a professionally designed and developed website. 
                </p>
                <button class="btn btn_global_m mo_mx_auto" onclick="document.getElementById('socialtable').scrollIntoView({ behavior: 'smooth' });">View Pricing</button>
            </div>
        </div>
    </div>
    <div class="ser_s2">
        <div class="container">
            <div class="ser_s2_frame">
                <div class="ser_s2_left">
                    <h6 class="ser_s2_pre_title">What is Web Design and Development?</h6>
                    <h1 class="ser_s2_title">
                      Web design and dev experts 
                    </h1>
                    <div class="ser_s2_bar"></div>
                    <p class="ser_s2_subtitle">
                        The Push Dynamics team of web design and development experts can build websites which will highlight your unique propositions as a business. Our team have years of experience in building websites for specific and niche markets. We will analyse your industry to build professional and relevant websites with ongoing site maintenance to make sure your brand always makes a positive first impression. 
                    </p>
                </div>
                <div class="ser_s2_right">
                    <h6 class="ser_s2_pre_title">Why is Web Design and Developmen Important?</h6>
                    <h1 class="ser_s2_title">
                      Custom web design solutions 
                    </h1>
                    <div class="ser_s2_bar"></div>
                    <p class="ser_s2_subtitle">
                        It takes around 0.5 seconds to capture your audience's attention and for them to form an opinion about your brand when they visit your website. With a professionally designed website which acts as the backbone of your business, you can create a unique online experience for your clients, and strengthen your brand's reputation in the highly competitive and saturated digital landscape.  
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="background_socio">
      <div class="sec2_socio">
          <div>
              <h1 class="title_tt">How Does it work</h1>
              <p class="title_pp">At Push Dynamics we take time to get to know you as a business to understand your individual objectives and costs, from which we develop bespoke digital marketing packages. 
</p>
          </div>

          <div class="container custom_padding">
              <div class="socio_crd_div">
                  <div class="socio_crd">
                      <img src="{{ asset ('frontend/PushDynamics/image/crd_image.png') }}" alt="" class="img-fluid crd_image">
                      <div class="crd_content">
                          <h1 class="crd_tt">CREATION</h1>
                          <p class="crd_pp">We specialise in creating winning campaigns for businesses of all sizes. 
</p>
                      </div>
                  </div>
  
                  <div class="socio_crd">
                      <img src="{{ asset ('frontend/PushDynamics/image/crd_image2.png') }}" alt="" class="img-fluid crd_image">
                      <div class="crd_content">
                          <h1 class="crd_tt">Communication 
</h1>
                          <p class="crd_pp">Communication and updating our clients is key to all our campaigns. 
</p>
                      </div>
                  </div>
  
                  <div class="socio_crd">
                      <img src="{{ asset ('frontend/PushDynamics/image/crd_image3.png') }}" alt="" class="img-fluid crd_image">
                      <div class="crd_content">
                          <h1 class="crd_tt">Development </h1>
                          <p class="crd_pp">We take time to develop tailor made solutions which will work for you. 
</p>
                      </div>
                  </div>
  
                  <div class="socio_crd">
                      <img src="{{ asset ('frontend/PushDynamics/image/crd_image4.png') }}" alt="" class="img-fluid crd_image">
                      <div class="crd_content">
                          <h1 class="crd_tt">Results </h1>
                          <p class="crd_pp">When you work with Push Dynamics, the results will speak for themselves. 
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
                          <p class="left_socio_pp">Included Features</p>
                          <h1 class="left_socio_tt" data-aos="fade-up">How web design and development helps you succeed 
</h1>
                      </div>
                      <p class="socio_sec3_pp" data-aos="fade-up">
                          Your website will support all your other digital marketing efforts, as it acts as your primary customer touchpoint. A responsive and custom website gives your clients a clear idea of your products, services, and values as a business. 
                      </p>
                  </div>
  
                  <div class="second_div_sec3">
                      <div class="green_crd">
                          <img src="{{ asset ('frontend/PushDynamics/image/greencrd_icon7.svg') }}" alt="" class="img-fluid">
                          <div>
                              <h1 class="green_crd_tt" data-aos="fade-up">Personalised Email</h1>
                              <p class="green_crd_pp" data-aos="fade-up">All our websites come with personalised web domains. 
</p>
                          </div>
                      </div>
                      <div class="green_crd">
                          <img src="{{ asset ('frontend/PushDynamics/image/greencrd_icon8.svg') }}" alt="" class="img-fluid">
                          <div>
                              <h1 class="green_crd_tt" data-aos="fade-up">SEO Website</h1>
                              <p class="green_crd_pp" data-aos="fade-up">Combined with SEO your website will get more clicks. 
</p>
                          </div>
                      </div>
                      <div class="green_crd">
                          <img src="{{ asset ('frontend/PushDynamics/image/greencrd_icon9.svg') }}" alt="" class="img-fluid">
                          <div>
                              <h1 class="green_crd_tt" data-aos="fade-up">SSL Certificate</h1>
                              <p class="green_crd_pp" data-aos="fade-up">Our advanced security measures keep your visitors safe. 
</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  @extends('frontend.layouts.app')
  @section('content')

  {{-- pushdynamics code start here--}}

  <style>
      .ser_s1_inner {
          background: url("{{ asset ('frontend/PushDynamics/image/wd_s1.png') }}");
          background-size: cover;
          background-position: right top;
          background-repeat: no-repeat;
      }

      @media only screen and (max-width: 600px) {
          .ser_s1_inner {
              background: url("{{ asset ('frontend/PushDynamics/image/wd_s1_mobo.png') }}");
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
                  <h6 class="ser_s1_pre_title">PACKAGE AND PRICING</h6>
                  <h1 class="ser_s1_title">Web Design & Development</h1>
                  <p class="ser_s1_subtitle">
                      Capture your audience's attention with a professionally designed and developed website. 
                  </p>
                  <button class="btn btn_global_m mo_mx_auto" onclick="document.getElementById('socialtable').scrollIntoView({ behavior: 'smooth' });">View Pricing</button>
              </div>
          </div>
      </div>
      <div class="ser_s2">
          <div class="container">
              <div class="ser_s2_frame">
                  <div class="ser_s2_left">
                      <h6 class="ser_s2_pre_title">What is Web Design and Development?</h6>
                      <h1 class="ser_s2_title">
                        Web design and dev experts 
                      </h1>
                      <div class="ser_s2_bar"></div>
                      <p class="ser_s2_subtitle">
                          The Push Dynamics team of web design and development experts can build websites which will highlight your unique propositions as a business. Our team have years of experience in building websites for specific and niche markets. We will analyse your industry to build professional and relevant websites with ongoing site maintenance to make sure your brand always makes a positive first impression. 
                      </p>
                  </div>
                  <div class="ser_s2_right">
                      <h6 class="ser_s2_pre_title">Why is Web Design and Developmen Important?</h6>
                      <h1 class="ser_s2_title">
                        Custom web design solutions 
                      </h1>
                      <div class="ser_s2_bar"></div>
                      <p class="ser_s2_subtitle">
                          It takes around 0.5 seconds to capture your audience's attention and for them to form an opinion about your brand when they visit your website. With a professionally designed website which acts as the backbone of your business, you can create a unique online experience for your clients, and strengthen your brand's reputation in the highly competitive and saturated digital landscape.  
                      </p>
                  </div>
              </div>
          </div>
      </div>
      <div class="background_socio">
        <div class="sec2_socio">
            <div>
                <h1 class="title_tt">How Does it work</h1>
                <p class="title_pp">At Push Dynamics we take time to get to know you as a business to understand your individual objectives and costs, from which we develop bespoke digital marketing packages. 
  </p>
            </div>

            <div class="container custom_padding">
                <div class="socio_crd_div">
                    <div class="socio_crd">
                        <img src="{{ asset ('frontend/PushDynamics/image/crd_image.png') }}" alt="" class="img-fluid crd_image">
                        <div class="crd_content">
                            <h1 class="crd_tt">CREATION</h1>
                            <p class="crd_pp">We specialise in creating winning campaigns for businesses of all sizes. 
  </p>
                        </div>
                    </div>
  
                    <div class="socio_crd">
                        <img src="{{ asset ('frontend/PushDynamics/image/crd_image2.png') }}" alt="" class="img-fluid crd_image">
                        <div class="crd_content">
                            <h1 class="crd_tt">Communication 
  </h1>
                            <p class="crd_pp">Communication and updating our clients is key to all our campaigns. 
  </p>
                        </div>
                    </div>
  
                    <div class="socio_crd">
                        <img src="{{ asset ('frontend/PushDynamics/image/crd_image3.png') }}" alt="" class="img-fluid crd_image">
                        <div class="crd_content">
                            <h1 class="crd_tt">Development </h1>
                            <p class="crd_pp">We take time to develop tailor made solutions which will work for you. 
  </p>
                        </div>
                    </div>
  
                    <div class="socio_crd">
                        <img src="{{ asset ('frontend/PushDynamics/image/crd_image4.png') }}" alt="" class="img-fluid crd_image">
                        <div class="crd_content">
                            <h1 class="crd_tt">Results </h1>
                            <p class="crd_pp">When you work with Push Dynamics, the results will speak for themselves. 
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
                            <p class="left_socio_pp">Included Features</p>
                            <h1 class="left_socio_tt" data-aos="fade-up">How web design and development helps you succeed 
  </h1>
                        </div>
                        <p class="socio_sec3_pp" data-aos="fade-up">
                            Your website will support all your other digital marketing efforts, as it acts as your primary customer touchpoint. A responsive and custom website gives your clients a clear idea of your products, services, and values as a business. 
                        </p>
                    </div>
  
                    <div class="second_div_sec3">
                        <div class="green_crd">
                            <img src="{{ asset ('frontend/PushDynamics/image/greencrd_icon7.svg') }}" alt="" class="img-fluid">
                            <div>
                                <h1 class="green_crd_tt" data-aos="fade-up">Personalised Email</h1>
                                <p class="green_crd_pp" data-aos="fade-up">All our websites come with personalised web domains. 
  </p>
                            </div>
                        </div>
                        <div class="green_crd">
                            <img src="{{ asset ('frontend/PushDynamics/image/greencrd_icon8.svg') }}" alt="" class="img-fluid">
                            <div>
                                <h1 class="green_crd_tt" data-aos="fade-up">SEO Website</h1>
                                <p class="green_crd_pp" data-aos="fade-up">Combined with SEO your website will get more clicks. 
  </p>
                            </div>
                        </div>
                        <div class="green_crd">
                            <img src="{{ asset ('frontend/PushDynamics/image/greencrd_icon9.svg') }}" alt="" class="img-fluid">
                            <div>
                                <h1 class="green_crd_tt" data-aos="fade-up">SSL Certificate</h1>
                                <p class="green_crd_pp" data-aos="fade-up">Our advanced security measures keep your visitors safe. 
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
                      <img src="{{ asset ('frontend/PushDynamics/image/sm_s5.png') }}" alt="" class="img-fluid ser_s5_left_mobo">
                  </div>
                  <div class="ser_s5_right">
                      <div class="ser_s5_content">
                          <div class="for_pad">
                              <h5 class="ser_s5_pre_title" data-aos="fade-up">Why Push Dynamics?</h5>
                              <h1 class="ser_s5_title" data-aos="fade-up">
                                Helping you make the right impression 
                              </h1>
                              <p class="ser_s5_subtitle" data-aos="fade-up">
                                  Ensure your clients can find and navigate your website with ease. It is worth investing in a responsive and well-designed website which will improve your brand's profitability and success rate. 
                              </p>
                          </div>
                          <div class="ser_s5_inner_content">
                              <div class="ser_s5_inner_row">
                                  <img src="{{ asset ('frontend/PushDynamics/image/green_tic.svg') }}" alt="" class="img-fluid" style="height: 24px;width: 24px;">
                                  <p class="ser_s5_inner_content_subtitle" data-aos="fade-up">Custom and bespoke design packages. 
  </p>
                              </div>
                              <div class="ser_s5_inner_row">
                                  <img src="{{ asset ('frontend/PushDynamics/image/green_tic.svg') }}" alt="" class="img-fluid" style="height: 24px;width: 24px;">
                                  <p class="ser_s5_inner_content_subtitle" data-aos="fade-up">Enhanced user experience. 
  </p>
                              </div>
                              <div class="ser_s5_inner_row">
                                  <img src="{{ asset ('frontend/PushDynamics/image/green_tic.svg') }}" alt="" class="img-fluid" style="height: 24px;width: 24px;">
                                  <p class="ser_s5_inner_content_subtitle" data-aos="fade-up">Increased conversion rates. 
  </p>
                              </div>
                          </div>
                          <button class="btn btn_global_m" onclick="window.location.href='{{ route('aboutus') }}'">Learn More</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="blk">
        <div class="social_s6" id="socialtable">
          <div class="social_c6 wdd_c6 container">
              <div class="social_s6titlebar">
                  <h2 class="social_s6title">Simple, transparent Pricing</h2>
                  <p class="social_s6subtitle" data-aos="fade-up">No contracts. No Surprise fees.</p>
              </div>
              <div class="social_s6line mobile_none"></div>
              <div class="social_tablebar w-100">
                  <div class="tab_btnbar">
                      <div class="nav-tabs-container position-relative">
                          <ul class="nav nav-pills service_tabbar" id="pills-tab" role="tablist">
                              <li class="nav-item col mb-0" role="presentation">
                                  <button class="active service_tabbtn w-100" id="pills-one-tab" data-bs-toggle="pill"
                                      data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one"
                                      aria-selected="true">1 Month</button>
                              </li>
                              <li class="nav-item col mb-0" role="presentation">
                                  <button class="service_tabbtn w-100" id="pills-three-tab" data-bs-toggle="pill"
                                      data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three"
                                      aria-selected="false">3 Months</button>
                              </li>
                              <li class="nav-item col mb-0" role="presentation">
                                  <button class="service_tabbtn w-100" id="pills-six-tab" data-bs-toggle="pill"
                                      data-bs-target="#pills-six" type="button" role="tab" aria-controls="pills-six"
                                      aria-selected="false">6 Months</button>
                              </li>
                              <li class="nav-item col mb-0" role="presentation">
                                  <button class="service_tabbtn w-100" id="pills-twelve-tab" data-bs-toggle="pill"
                                      data-bs-target="#pills-twelve" type="button" role="tab" aria-controls="pills-twelve"
                                      aria-selected="false">12 Months</button>
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
                          <div class="tab-pane fade show active service_contentmain" id="pills-one" role="tabpanel"
                              aria-labelledby="pills-one-tab">
                              <div class="service_tabcontent table-responsive">
                                  <table class="table table-borderless mb-0 service_table">
                                      <thead class="service_table_header">
                                          <tr class="align-middle">
                                              <th scope="col" class="text-center">
                                              </th>
                                              @foreach ($wddProducts['1_month'] as $product)
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
                                                      <button type="button" class="btn social_tablebtn" onclick="addToCart1Step({{ $product->id }})" style="cursor: pointer;">Add To Cart</button>
                                                  </div>
                                              </th>
                                              @endforeach
                                          </tr>
                                      </thead>
                                      <tbody class="service_table_body">
                                          <tr class="align-middle">
                                              <td>
                                                  <p class="service_bodytitle">Design and Build</p>
                                              </td>
                                              @foreach ($wddProducts['1_month'] as $key => $product)
                                              <td class="text-center">
                                                  <p class="service_bodytitle">{{ $key < 3 ? 'Wordpress' : 'Bespoke' }}</p>
                                              </td>
                                              @endforeach
                                          </tr>
                                          <tr class="align-middle">
                                              <td>
                                                  <p class="service_bodytitle">Number of Pages</p>
                                              </td>
                                              @foreach ($wddProducts['1_month'] as $key => $product)
                                              <td class="text-center">
                                                  <p class="service_bodytitle">
                                                      @if ($key == 0) 5
                                                      @elseif ($key == 1) 10
                                                      @elseif ($key == 2) 15
                                                      @elseif ($key == 3) 6
                                                      @else 20
                                                      @endif
                                                  </p>
                                              </td>
                                              @endforeach
                                          </tr>
                                          <tr class="align-middle">
                                              <td>
                                                  <p class="service_bodytitle">Search Engine optimisation</p>
                                              </td>
                                              @foreach ($wddProducts['1_month'] as $product)
                                              <td class="text-center">
                                                  <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                              </td>
                                              @endforeach
                                          </tr>
                                          <tr class="align-middle">
                                              <td>
                                                  <p class="service_bodytitle">Personalised Domain name</p>
                                              </td>
                                              @foreach ($wddProducts['1_month'] as $product)
                                              <td class="text-center">
                                                  <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                              </td>
                                              @endforeach
                                          </tr>
                                          <tr class="align-middle">
                                              <td>
                                                  <p class="service_bodytitle">personalised email address</p>
                                              </td>
                                              @foreach ($wddProducts['1_month'] as $key => $product)
                                              <td class="text-center">
                                                  <p class="service_bodytitle">
                                                      @if ($key == 0) 1
                                                      @elseif ($key == 1) 3
                                                      @else 5
                                                      @endif
                                                  </p>
                                              </td>
                                              @endforeach
                                          </tr>
                                          <tr class="align-middle">
                                              <td>
                                                  <p class="service_bodytitle">SSL Certificate (secure sockets layer)</p>
                                              </td>
                                              @foreach ($wddProducts['1_month'] as $product)
                                              <td class="text-center">
                                                  <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                              </td>
                                              @endforeach
                                          </tr>
                                          <tr class="align-middle">
                                              <td>
                                                  <p class="service_bodytitle">Support, 7 days a week</p>
                                              </td>
                                              @foreach ($wddProducts['1_month'] as $product)
                                              <td class="text-center">
                                                  <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                
                <form class="ser_s7_content_form" id="requestform1" action="{{ route('contactus.store') }}" method="post" enctype="multipart/form-data" onsubmit="return check_agree1(this);">
                    @csrf
                    <input type="hidden" name="from_page" form="requestform1" value="service">
                    <div class="ser_s7_form_elememt">
                        <p class="ser_s7_form_label">Username</p>
                        <input type="text" class="form-control input_global_m" id="fullname" name="fullname" form="requestform1" required>
                    </div>
                    <div class="ser_s7_form_elememt">
                        <p class="ser_s7_form_label">Email</p>
                        <input type="email" class="form-control input_global_m" id="email" name="email" form="requestform1" required>
                    </div>
                    <div class="ser_s7_form_elememt">
                        <p class="ser_s7_form_label">Phone</p>
                        <input type="tel" class="form-control input_global_m" id="phone" name="phone" form="requestform1" required>
                    </div>
                    <div class="ser_s7_form_elememt">
                        <p class="ser_s7_form_label">Upload Brief</p>
                        <input type="file" class="form-control input_global_m" id="document" name="document" form="requestform1" required>
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
                              <p class="login_strong">By ticking this box, you agree to the <a href="{{ route('termsandconditions') }}">Terms & Conditions</a> & <a href="{{ route('privacypolicy') }}">Privacy Policy.</a></p>
                            </div>
                        </div>
                        <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
                        <div class="h-captcha" form="requestform1" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"></div>
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
    document.querySelectorAll('.service_tabbtn').forEach((button, index) => {
        button.addEventListener('click', function() {
            document.querySelector('.progress-arrow').style.transform = `translateX(${index * 90}px)`;
        });
    });
</script>
@endsection



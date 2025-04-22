@extends('frontend.layouts.app')

@section('content')

{{-- pushdynamics code start here--}}

<style>
    .ser_s1_inner {
        background: url("{{ asset ('frontend/PushDynamics/image/em_s1.png') }}" );
        background-size: cover;
        background-position: right top;
        background-repeat: no-repeat;
    }

    @media only screen and (max-width: 600px) {
        .ser_s1_inner {
            background: url("{{ asset ('frontend/PushDynamics/image/em_s1_mobo.png') }}");
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
                <h1 class="ser_s1_title" data-aos="fade-up">Email Marketing</h1>
                <p class="ser_s1_subtitle" data-aos="fade-up">
                    Choose Push Dynamics to have your email campaigns stand out from the crowd. 
                </p>
                <button class="btn btn_global_m mo_mx_auto" onclick="document.getElementById('socialtable').scrollIntoView({ behavior: 'smooth' });" >View Pricing</button>
            </div>
        </div>
    </div>
    <div class="ser_s2">
        <div class="container">
            <div class="ser_s2_frame">
                <div class="ser_s2_left">
                    <h6 class="ser_s2_pre_title" data-aos="fade-up">What is Email Marketing?</h6>
                    <h1 class="ser_s2_title" data-aos="fade-up">
                      Get more clicks for your business 
                    </h1>
                    <div class="ser_s2_bar"></div>
                    <p class="ser_s2_subtitle" data-aos="fade-up">
                        Our email marketing services include personalised email newsletters which will ensure your campaigns don't end up in spam folders and encourage your client base to take desired actions by clicking through to your website. We will build subscriber lists, test campaigns ahead of delivery, and use effective content marketing and subject lines to make sure your emails get opened. 
                    </p>
                </div>
                <div class="ser_s2_right">
                    <h6 class="ser_s2_pre_title">Why is Email Marketing Important?</h6>
                    <h1 class="ser_s2_title" data-aos="fade-up">
                      Reach a wider audience 
                    </h1>
                    <div class="ser_s2_bar"></div>
                    <p class="ser_s2_subtitle"data-aos="fade-up">
                        With more than 3.9 billion people using email every day, there is no other online platform with as many daily users. You need to make sure you are leveraging the potential of email marketing in your business strategy. Use Push Dynamics to create your campaigns so you don't miss the opportunity to connect your brand with the right customers at the right moment. 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="background_socio">
       
      <div class="sec2_socio">
          <div>
              <h1 class="title_tt" data-aos="fade-up">How Does it work</h1>
              <p class="title_pp" data-aos="fade-up">At Push Dynamics we take time to get to know you as a business to understand your individual objectives and costs, from which we develop bespoke digital marketing packages. 
</p>
  
          </div>

          <div class="container custom_padding">
              <div class="socio_crd_div">
                  <div class="socio_crd">
                      <img src="{{ asset ('frontend/PushDynamics/image/crd_image.png') }}" alt="" class="img-fluid crd_image">
                      <div class="crd_content">
                          <h1 class="crd_tt">CREATION</h1>
                          <p class="crd_pp" data-aos="fade-up">We specialise in creating winning campaigns for businesses of all sizes. 
</p>
  
                      </div>
                  </div>
  
                  <div class="socio_crd">
                      <img src="{{ asset ('frontend/PushDynamics/image/crd_image2.png') }}" alt="" class="img-fluid crd_image">
                      <div class="crd_content">
                          <h1 class="crd_tt">Communication 
</h1>
                          <p class="crd_pp" data-aos="fade-up">Communication and updating our clients is key to all our campaigns. 
</p>
  
                      </div>
                  </div>
  
                  <div class="socio_crd">
                      <img src="{{ asset ('frontend/PushDynamics/image/crd_image3.png') }}" alt="" class="img-fluid crd_image">
                      <div class="crd_content">
                          <h1 class="crd_tt">Development </h1>
                          <p class="crd_pp" data-aos="fade-up">We take time to develop tailor made solutions which will work for you. 
</p>
  
                      </div>
                  </div>
  
                  <div class="socio_crd">
                      <img src="{{ asset ('frontend/PushDynamics/image/crd_image4.png') }}" alt="" class="img-fluid crd_image">
                      <div class="crd_content">
                          <h1 class="crd_tt">Results 
</h1>
                          <p class="crd_pp" data-aos="fade-up">When you work with Push Dynamics, the results will speak for themselves. 
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
                            <h1 class="left_socio_tt" data-aos="fade-up">How email marketing helps you succeed 
</h1>
                        </div>
                        <p class="socio_sec3_pp" data-aos="fade-up">
                            Our goal-driven email marketing services will build you email campaigns based around your personal business objectives. When it comes to generating and converting leads, email marketing is one of the most powerful digital marketing tools there is.  
                        </p>
                    </div>
    
                    <div class="second_div_sec3">
                        <div class="green_crd">
                            <img src="{{ asset ('frontend/PushDynamics/image/greencrd_icon4.svg') }}" alt="" class="img-fluid">
                            <div>
                                <h1 class="green_crd_tt">Mobile Optimisation</h1>
                                <p class="green_crd_pp" data-aos="fade-up">Our emails are optimised for mobile devices and smartphones. 
</p>
                            </div>
    
                        </div>
                        <div class="green_crd">
                            <img src="{{ asset ('frontend/PushDynamics/image/greencrd_icon5.svg') }}" alt="" class="img-fluid">
                            <div>
                                <h1 class="green_crd_tt">A/B Testing</h1>
                                <p class="green_crd_pp" data-aos="fade-up">A/B testing strategies ensure more emails get opened. 
</p>
                            </div>
    
                        </div>
                        <div class="green_crd">
                            <img src="{{ asset ('frontend/PushDynamics/image/greencrd_icon6.svg') }}" alt="" class="img-fluid">
                            <div>
                                <h1 class="green_crd_tt">Transactional Emails</h1>
                                <p class="green_crd_pp" data-aos="fade-up">Communicate with your customers throughout their transactions. 
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
                              State of the art email services 
                            </h1>
                            <p class="ser_s5_subtitle" data-aos="fade-up">
                                The widespread use and growing global relevance of emails means email marketing is more critical than ever before, and is not a strategy you can afford to miss out on. 
                            </p>
                        </div>
                        <div class="ser_s5_inner_content">
                            <div class="ser_s5_inner_row">
                                <img src="{{ asset ('frontend/PushDynamics/image/green_tic.svg') }}" alt="" class="img-fluid" style="height: 24px;width: 24px;">
                                <p class="ser_s5_inner_content_subtitle" data-aos="fade-up">Create increased brand recognition. 
</p>
                            </div>
                            <div class="ser_s5_inner_row">
                                <img src="{{ asset ('frontend/PushDynamics/image/green_tic.svg') }}" alt="" class="img-fluid" style="height: 24px;width: 24px;">
                                <p class="ser_s5_inner_content_subtitle" data-aos="fade-up">Send automated and personalised emails. 
</p>
                            </div>
                            <div class="ser_s5_inner_row">
                                <img src="{{ asset ('frontend/PushDynamics/image/green_tic.svg') }}" alt="" class="img-fluid" style="height: 24px;width: 24px;">
                                <p class="ser_s5_inner_content_subtitle" data-aos="fade-up">Reduce abandoned carts and sales. </p>
                            </div>
                        </div>
                        <button class="btn btn_global_m"  onclick="window.location.href='{{ route('aboutus') }}'">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blk" id="socialtable">
      <div class="social_s6">
        <div class="social_c6 em_c6 container">
            <div class="social_s6titlebar">
                <h2 class="social_s6title" data-aos="fade-up">Simple, transparent Pricing</h2>
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Two Factor Authentication</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Customizable template library</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Custom fields</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Drag-and-drop builder</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Signup forms</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Mobile optimization tools</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">A/B testing </p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Preference Center</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Worldview reporting</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">RSS (straightforward syndication)</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Transactional emails</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Campaign Tags</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Two Factor Authentication</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Customizable template library</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Custom fields</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Drag-and-drop builder</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Signup forms</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Mobile optimization tools</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">A/B testing </p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Preference Center</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Worldview reporting</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">RSS (straightforward syndication)</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Transactional emails</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Campaign Tags</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Two Factor Authentication</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Customizable template library</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Custom fields</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Drag-and-drop builder</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Signup forms</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Mobile optimization tools</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">A/B testing </p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Preference Center</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Worldview reporting</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">RSS (straightforward syndication)</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Transactional emails</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Campaign Tags</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Two Factor Authentication</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Customizable template library</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Custom fields</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Drag-and-drop builder</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Signup forms</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Mobile optimization tools</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">A/B testing </p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Preference Center</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Worldview reporting</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">RSS (straightforward syndication)</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Transactional emails</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Campaign Tags</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_cross.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset ('frontend/PushDynamics/image/service_tick.svg') }}">
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
            
            <form class="ser_s7_content_form" id="requestform" action="{{ route('contactus.store') }}" method="post" enctype="multipart/form-data" onsubmit="return check_agree(this);">
                @csrf
                <input type="hidden" name="from_page" form="requestform" value="service">
                <div class="ser_s7_form_elememt">
                    <p class="ser_s7_form_label">Username</p>
                    <input type="text" class="form-control input_global_m" id="fullname" name="fullname" form="requestform" required>
                </div>
                <div class="ser_s7_form_elememt">
                    <p class="ser_s7_form_label">Email</p>
                    <input type="email" class="form-control input_global_m" id="email" name="email" form="requestform" required>
                </div>
                <div class="ser_s7_form_elememt">
                    <p class="ser_s7_form_label">Phone</p>
                    <input type="tel" class="form-control input_global_m" id="phone" name="phone" form="requestform" required>
                </div>
                <div class="ser_s7_form_elememt">
                    <p class="ser_s7_form_label">Upload Brief</p>
                    <input type="file" class="form-control input_global_m" id="document" name="document" form="requestform" required>
                </div>
                <div class="ser_s7_form_elememt">
                    <p class="ser_s7_form_label">Additional Information</p>
                    <textarea class="form-control textarea_global_m" id="message" name="message" form="requestform" required></textarea>
                </div>
                <div class="ser_s7_form_elememt">
                    <p class="ser_s7_form_label">&nbsp;</p>
                    <div class="c-checkbox">
                        <div class="c-div">
                            <label class="d-flex justify-content-center justify-content-lg-start">
                                <input type="checkbox" id="terms" name="terms" form="requestform">
                                <label for="terms"></label>
                            </label>
                        </div>
                        <div class="c-text">
                            <p class="login_strong">By ticking this box, you agree to the <a href="{{ route('termsandconditions') }}">Terms & Conditions</a> & <a href="{{ route('privacypolicy') }}">Privacy Policy.</a></p>
                        </div>
                    </div>
                    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
                    <div class="h-captcha" form="requestform" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"></div>
                </div>
            </form>
            <button class="btn btn_global_m" type="submit" form="requestform">Submit Request</button>
        </div>
    </div>
</div>
</section>
@endsection

@section('script')
<script>
    function check_agree(form) {
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





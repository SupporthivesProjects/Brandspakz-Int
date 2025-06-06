@extends('frontend.layouts.app')

@section('content')

<style>
    header {
        background: var(--Secondary, #F3F3F1);
    }
    @media only screen and (max-width: 700px) {
        header {
            background: transparent;
        }
    }
    
    .btn_header_link, .btn_header_drop {
        color: #3c3c3c !important;
    }
</style>



<section class="register_page">
    <img src="{{ asset('frontend/BrandSparkz/assets/img/cutter_top_right.png') }}" alt="" class="img-fluid mobile_none cutter_top_right">
    <img src="{{ asset('frontend/BrandSparkz/assets/img/cutter_bottom_left.png') }}" alt="" class="img-fluid mobile_none cutter_bottom_left">
    <div class="contact_main_div">
        <img src="{{ asset('frontend/BrandSparkz/assets/img/cutter_pattern.png') }}" alt="" class="img-fluid desktop_none cutter_pattern">
        <div class="cutter_main_div_inner">
            <div class="cutter_main_div_inner_right_login">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">
                <h1 class="register_title">{{ __('Reset Password') }}</h1>

                <div class="contact_input_div">
                    <p class="register_input_title">Email</p>
                    <input type="email" id="email"class="form-control input_global  @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="contact_input_div">
                    <p class="register_input_title">Password </p>
                    <input id="password" type="password" class="form-control input_global @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="contact_input_div">
                    <p class="register_input_title"> Confirm Password </p>
                    <input type="text" class="form-control input_global" id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password">
                </div>


                

                <div class="contact_input_div">
                    <button type="submit" class="btn btn_global2 mx-auto" >
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern2.png') }}" alt="" class="img-fluid btn_global_pattern2">
                        <div class="btn_global_inner2">
                            
                            <p class="cart_text" >Reset Password</p>
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/arrow_logo.svg') }}" alt="" class="img-fluid cart_logo">
                        </div>
                    </button>
                </div>
            </form>  
            </div>
            
            
        </div>
    </div>
</section>


@endsection

@section('scripts')

<script>
      const logo = document.getElementById('header_logo');
      console.log(window.location.href)
      logo.src="{{ asset('frontend/BrandSparkz/assets/img/header_bg_dark_logo.svg') }}";
      
       const navbar = document.getElementById('header'); 
         navbar.classList.add('white_header'); 
        window.addEventListener('scroll', function () {
          const logochange = document.getElementById('header_logo');
             
        
          if (window.scrollY > 100) {
            
            logochange.src="{{ asset('frontend/BrandSparkz/assets/img/header_bg_dark_logo.svg') }}";
             //navbar.classList.add('white_header'); 
           } else {
             
             logochange.src="{{ asset('frontend/BrandSparkz/assets/img/header_bg_dark_logo.svg') }}";
              //navbar.classList.remove('white_header');  
          }
       });
</script>
@endsection


@extends('frontend.layouts.app')

<style>
    
    .btn_header_link, .btn_header_drop {
        color: #3c3c3c !important;
    }
</style>




@section('content')


<section class="main" style="height: 70vh;display: flex;
    justify-content: center;
    align-items: center;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 my-5">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-gradient-primary text-white py-3">
                        <h3 class="mb-0 font-weight-bold text-center">{{ __('Verify Your Email Address') }}</h3>
                    </div>

                    <div class="card-body p-5">
                        @if (session('resent'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        

                        
                        <div class="text-center">
                            <form method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-lg px-5 shadow-sm" style="background-color: #EE5921;">
                                    <i class="fa fa-paper-plane mr-2"></i>{{ __('Resend Verification Email') }}
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    
    .animated {
        animation-duration: 3s;
        animation-fill-mode: both;
        animation-iteration-count: infinite;
    }
    
    .pulse {
        animation-name: pulse;
    }
    
    .slower {
        animation-duration: 4s;
    }
    
    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
        }
    }
    
    .bg-gradient-primary {
        background-color: #EE5921;
    }
    
    .verification-info {
        border-left: 4px solid #4e73df;
    }
</style>



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


@extends('frontend.layouts.app')

@section('content')

@if(Auth::check())
    @php
        $user = Auth::user();
        //dump($user->id);
        $user_id = Auth::user()->id;
        //DB::enableQueryLog();
        $u2 = DB::table('last_billing_address')->where('user_id',$user_id)->orderBy('id','desc')->first();
        //$query = DB::getQueryLog();
        //$query = end($query);
        //dd($query);
        //dump($u2);
        if($u2){
            $user = $u2;
        }
         //dump($user);
    @endphp
@endif

{{--New Code Start--}}

<header class="deshbord-header">
    <div class="container">
        <ul class="deshbord-nav-bar nav align-content-center">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{ route('dashboard') }}">Account Details</a>
            </li>
            <div class="vl"></div>
            <li class="nav-item">
              <a class="nav-link active" href="#">Purchase History</a>
            </li>
            <div class="vl"></div>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </li>
          </ul>
    </div>
</header>
<section class="orderhistory-main-section">
    <div class=" container-custom orderhistory-bg">
       
        <div class="main-content-box" style="overflow-x:auto;">
            <p class="text-uppercase fs-54-36 fw-normal text-center mx-auto primary">
                Purchases </p>
                <p class="fx-20 fw-normal text-center mx-auto black-3C3 mw-557">Hello {{ Auth::user()->name }} (Not {{ Auth::user()->name }}? <span class="blue-01A" ><a href="{{ route('logout') }}">Logout</a></span>)</p>  
                <p class="fx-16 fw-normal text-center mx-auto black-3C3 mw-557">From your account dashboard you can vier your recent orders,
                    manage your billing addressed and edit your password and account details.</p> 
                    <div class="order-history-scroll-frame">
                    <div class="orderhistory-content-text ">
                        <p class="gilroy-medium primary fx-16 fw-normal orderhistory-package-list-title">Order <span class="orderhistory-package-list-title2" style="margin-left: 81px;">Date</span> <span class="orderhistory-package-list-title2">QTY Total</span>  </p>
                        @foreach ($orders as $key => $order)
                        <p class="gilroy-medium primary fx-16 fw-normal orderhistory-package-list"><span class="blue-005" >#{{ $order->code }}</span> <span>{{ date('d-m-Y', $order->date) }}</span></span> <span>X1</span> <span>{{ single_price($order->grand_total) }}</span> <span class="blue-087 ghost-btn-ani" onclick="show_purchase_history_details({{ $order->id }})" style="cursor:pointer;">View<span class="view-invoice ">Invoice<img class="image-arrow-up" src="{{ asset('frontend/BrandBeKnown/images/Arrow-up.svg') }}"
                            alt="icon"></span></span></p>
                        @endforeach    
                        <!-- <p class="gilroy-medium primary fx-16 fw-normal orderhistory-package-list"><span class="blue-005" >#123</span> <span>June<span>14,</span><span>2021</span></span> <span>X1</span> <span>£800</span> <span class="blue-087 ghost-btn-ani">View<span class="view-invoice ">Invoice<img class="image-arrow-up" src="./images/Arrow-up.svg"
                            alt="icon"></span></span></p>
                        <p class="gilroy-medium primary fx-16 fw-normal orderhistory-package-list"><span class="blue-005" >#123</span> <span>June<span>14,</span><span>2021</span></span> <span>X1</span> <span>£800</span> <span class="blue-087 ghost-btn-ani">View<span class="view-invoice ">Invoice<img class="image-arrow-up" src="./images/Arrow-up.svg"
                            alt="icon"></span></span></p>
                        <p class="gilroy-medium remove-bb primary fx-16 fw-normal orderhistory-package-list"><span class="blue-005" >#123</span> <span>June<span>14,</span><span>2021</span></span> <span>X1</span> <span>£800</span> <span class="blue-087 ghost-btn-ani">View<span class="view-invoice ">Invoice<img class="image-arrow-up" src="./images/Arrow-up.svg"
                            alt="icon"></span></span></p> -->
                    </div>
                    </div> 
                </div>
        </div>
    </div>
</section>
<div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
        <div class="modal-content position-relative">
            <div class="c-preloader">
                <i class="fa fa-spin fa-spinner"></i>
            </div>
            <div id="order-details-modal-body" style="background: #F6F7FB;">

            </div>
        </div>
    </div>
</div>

{{--New Code End--}}

@endsection
@section('script')
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

<script type="text/javascript">
    $('#order_details').on('hidden.bs.modal', function () {
        location.reload();
    })
</script>
@endsection

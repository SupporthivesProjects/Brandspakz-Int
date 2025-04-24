@extends('frontend.layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="error-template">
                <h1 class="display-1">404</h1>
                <h2>Page Not Found</h2>
                <div class="error-details my-4">
                    <p>Sorry, the page you are looking for could not be found.</p>
                    <p>It might have been removed, had its name changed, or is temporarily unavailable.</p>
                </div>
                <div class="error-actions mt-4">
                    <a href="{{ url('/') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-home me-2"></i>Go Home
                    </a>
                    <a href="{{ route('contactus') }}" class="btn btn-outline-secondary btn-lg ms-2">
                        <i class="fas fa-envelope me-2"></i>Contact Support
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Looking for something?</h3>
                    <p>Here are some helpful links:</p>
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="list-unstyled">
                                <li><a href="{{ route('home') }}"><i class="fas fa-angle-right me-2"></i>Home</a></li>
                                <li><a href="{{ route('aboutus') }}"><i class="fas fa-angle-right me-2"></i>About Us</a></li>
                                <li><a href="{{ route('services') }}"><i class="fas fa-angle-right me-2"></i>Services</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-unstyled">
                                <li><a href="{{ route('contactus') }}"><i class="fas fa-angle-right me-2"></i>Contact Us</a></li>
                                <li><a href="{{ route('user.login') }}"><i class="fas fa-angle-right me-2"></i>Login</a></li>
                                <li><a href="{{ route('user.registration') }}"><i class="fas fa-angle-right me-2"></i>Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .error-template {
        padding: 40px 15px;
    }
    .error-template .display-1 {
        font-size: 8rem;
        font-weight: 700;
        color: #dc3545;
    }
    .error-actions {
        margin-top: 15px;
        margin-bottom: 15px;
    }
    .error-actions .btn {
        margin-right: 10px;
    }
</style>
@endsection
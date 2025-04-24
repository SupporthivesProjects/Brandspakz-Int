@extends('frontend.layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="error-template">
                <h1 class="display-1">500</h1>
                <h2>Server Error</h2>
                <div class="error-details my-4">
                    <p>Sorry, something went wrong on our servers.</p>
                    <p>We're working to fix the issue as soon as possible.</p>
                </div>
                <div class="error-actions mt-4">
                    <a href="{{ url('/') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-home me-2"></i>Go Home
                    </a>
                    <a href="{{ route('contactus') }}" class="btn btn-outline-secondary btn-lg ms-2">
                        <i class="fas fa-envelope me-2"></i>Report Problem
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">What can you do?</h3>
                    <ul class="mt-3">
                        <li>Refresh the page</li>
                        <li>Try again in a few minutes</li>
                        <li>Clear your browser cache and cookies</li>
                        <li>Contact our support team if the problem persists</li>
                    </ul>
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
        color: #fd7e14;
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
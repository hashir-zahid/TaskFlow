@extends('layout.app')

@section('content')
<!-- Optional CDN for icons (Font Awesome) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

<style>
    .a{
        color:#1877F2;
    }
    .b{
        color:#1DA1F2;
    }
    .c{
        color:#8134AF;
    }
    .d{
        color:#0A66C2;
    }
</style>

<div class="contact-container">
    <h2>Contact Us</h2>
    <p>We're here to help! Reach out to us through any of the channels below.</p>

    <div class="contact-info">
        <div class="contact-item">
            <i class="fas fa-envelope"></i>
            <span>Email: support@taskmanager.com</span>
        </div>
        <div class="contact-item">
            <i class="fas fa-phone-alt"></i>
            <span>Phone: +1 (555) 123-4567</span>
        </div>
        <div class="contact-item">
            <i class="fas fa-map-marker-alt"></i>
            <span>Location: 123 Task St, Productivity City, PC 45678</span>
        </div>
    </div>

    <div class="social-media">
        <h3>Follow Us</h3>
        <div class="social-icons">
            <a href="#" class="a" title="Facebook"><i class="fab fa-facebook-square"></i></a>
            <a href="#" class="b" title="Twitter"><i class="fab fa-twitter-square"></i></a>
            <a href="#" class="c" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="d" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</div>
@endsection

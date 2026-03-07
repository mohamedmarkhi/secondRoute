<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('style/style.css') }}">
<title>Pricing | Markhi</title>
</head>

<body>

<!-- HEADER -->
<div id="stId">
        {{-- <a id="link" href='{{ route('homePage') }}'>⬅️</a> --}}
    <h1>Website Creation Pricing</h1>
</div>

<!-- NAV -->
<ul>
    <li><a href="./">Home</a></li>
    <li><a href="./pricing">Pricing</a></li>
    <li><a href="./contact">Contact</a></li>
    
</ul>

<!-- PRICING -->
<section class="pricing">

    <div class="card">
        <h2>Starter</h2>
        <p class="price">$99 <span>/ project</span></p>
        <ul class="features">
            <li> 1-Page Website</li>
            <li> Responsive Design</li>
            <li> Basic Animations</li>
            <li> Fast Delivery</li>
        </ul>
        <button>Get Started</button>
    </div>

    <div class="card featured">
        <h2>Professional</h2>
        <p class="price">$249 <span>/ project</span></p>
        <ul class="features">
            <li> Multi-Page Website</li>
            <li> Custom Animations</li>
            <li> SEO Friendly</li>
            <li> Contact Form</li>
        </ul>
        <button>Most Popular</button>
    </div>

    <div class="card">
        <h2>Premium</h2>
        <p class="price">$499 <span>/ project</span></p>
        <ul class="features">
            <li> Full Custom Design</li>
            <li> Advanced Interactions</li>
            <li> Performance Optimized</li>
            <li> Priority Support</li>
        </ul>
        <button>Go Premium</button>

        
    </div>


    {{-- <a href='{{ route('homePage', ['FM' => 'Pricing']  )}}'>home</a> --}}

    @if(request('FM')) 
    <p>i came from {{ request('FM') }}
    @endif
</section>

<Footer>
    <p>CopyWriting @2026</p>
</Footer>
</body>
</html>

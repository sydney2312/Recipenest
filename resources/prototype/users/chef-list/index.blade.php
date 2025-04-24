<!DOCTYPE html>
<html lang="zxx">

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold">Chef List</h1>

        @foreach ($chef_data as $chef)
            <div>{{ $chef->name }}</div>
        @endforeach
    </div>
@endsection

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yummy | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('template_default/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template_default/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template_default/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template_default/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template_default/css/style.css') }}" type="text/css">
</head>
<!-- Header Section Begin -->
<header class="header-section-other py-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h4 class="m-0">Navigation</h4>
            <ul class="d-flex list-unstyled m-0 gap-4">
                <li><a class="text-dark text-decoration-none" href="{{ route('home') }}">Home</a></li>
                <li><a class="text-dark text-decoration-none" href="{{ route('recipe.index') }}">Recipes</a></li>
                <li><a class="text-dark text-decoration-none" href="{{ route('chef.index') }}">Chefs</a></li>
                <li><a class="text-dark text-decoration-none" href="{{ route('recipe.create') }}">Create Recipe</a></li>
                <li><a class="text-dark text-decoration-none" href="{{ route('chef.create') }}">Create Chef</a></li>
            </ul>
        </div>
    </div>
</header>
<!-- Header Section End -->
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Hero Search Section Begin -->
    <div class="row">
        <div class="col-12">
            <div class="chef-list-header" style="background-color: #f8f9fa; padding: 50px 0; text-align: center;">
                <h1 style="font-size: 48px; font-weight: bold; color: #333333;">Meet Our Talented Chefs</h1>
                <p style="font-size: 20px; color: #555555; margin-top: 10px;">Explore the best culinary experts in the industry.</p>
            </div>
        </div>
    </div>
    <!-- Hero Search Section End -->

    <!-- About Me Section Begin -->
    <div class="container"> 
        <div class="row">
            <!-- Chef Cards Here (unchanged) -->
            <!-- ... your chef cards are here ... -->
        </div>

        <!-- Pagination -->
        <div class="pagination text-center">
            <a href="#">&laquo;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">&raquo;</a>
        </div>

        <!-- Testimonial Section -->
        <div class="testimonial-section text-center" style="background-color: #f8f9fa; padding: 50px 0; margin-top: 40px;">
            <h2>What Our Clients Say</h2>
            <div class="testimonial-carousel" style="max-width: 800px; margin: 0 auto;">
                <div class="testimonial-card" style="background: white; padding: 20px; margin: 10px; border-radius: 10px; box-shadow: 0px 4px 6px rgba(0,0,0,0.1);">
                    <p>"Amazing chefs with great specialties! Highly recommend."</p>
                    <h5>- Alex Johnson</h5>
                </div>
                <div class="testimonial-card" style="background: white; padding: 20px; margin: 10px; border-radius: 10px; box-shadow: 0px 4px 6px rgba(0,0,0,0.1);">
                    <p>"The fusion dishes by Anna Smith were incredible!"</p>
                    <h5>- Sarah Williams</h5>
                </div>
                <div class="testimonial-card" style="background: white; padding: 20px; margin: 10px; border-radius: 10px; box-shadow: 0px 4px 6px rgba(0,0,0,0.1);">
                    <p>"Lucas Reed’s vegan cuisine changed my perspective on plant-based food!"</p>
                    <h5>- Michael Brown</h5>
                </div>
            </div>
        </div>
    </div>

    <style>
        .chef-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .chef-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="fs-left">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="img/footer-logo.png" alt="">
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <form action="#" class="subscribe-form">
                        <h3>Subscribe to our newsletter</h3>
                        <input type="email" placeholder="Your e-mail">
                        <button type="submit">Subscribe</button>
                    </form>
                    <div class="social-links">
                        <a href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a>
                        <a href="#"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
                        <a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                        <a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                        <a href="#"><i class="fa fa-youtube"></i><span>Youtube</span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>&copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{ asset('template_default/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('template_default/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template_default/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('template_default/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('template_default/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('template_default/js/main.js') }}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="zxx">

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
    <link rel="stylesheet" href="{{asset('template_default/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('template_default/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('template_default/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('template_default/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('template_default/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->

<!-- Header Section Begin -->
<header class="header-section-other" style="padding: 20px 0;">
    <div class="container-fluid">
        <!-- Navigation Menu -->
        <div class="nav-menu" style="display: flex; justify-content: space-between; align-items: center;">
            <nav class="main-menu mobile-menu" style="flex-grow: 1;">
                <ul style="list-style: none; display: flex; margin: 0; padding: 0;">
                    <li class="active" style="margin-left: 30px;">
                        <a href="#" style="color: #333; font-size: 18px; font-weight: 500; text-transform: uppercase; transition: color 0.3s;">Home</a>
                    </li>
                    <li style="margin-left: 30px;">
                        <a href="#" style="color: #333; font-size: 18px; font-weight: 500; text-transform: uppercase; transition: color 0.3s;">Pages</a>
                        <ul class="sub-menu" style="list-style: none; padding-left: 20px; display: none;">
                            <li><a href="about-me.html" style="color: #333; padding: 10px 0;">About Me</a></li>
                            <li><a href="categories.html" style="color: #333; padding: 10px 0;">Categories</a></li>
                            <li><a href="recipe.html" style="color: #333; padding: 10px 0;">Recipe</a></li>
                            <li><a href="blog.html" style="color: #333; padding: 10px 0;">Blog</a></li>
                            <li><a href="contact.html" style="color: #333; padding: 10px 0;">Contact</a></li>
                        </ul>
                    </li>
                    <li style="margin-left: 30px;">
                        <a href="recipe.html" style="color: #333; font-size: 18px; font-weight: 500; text-transform: uppercase; transition: color 0.3s;">Recipes</a>
                    </li>
                    <li style="margin-left: 30px;">
                        <a href="categories.html" style="color: #333; font-size: 18px; font-weight: 500; text-transform: uppercase; transition: color 0.3s;">Best Of</a>
                    </li>
                    <li style="margin-left: 30px;">
                        <a href="contact.html" style="color: #333; font-size: 18px; font-weight: 500; text-transform: uppercase; transition: color 0.3s;">Contact</a>
                    </li>
                </ul>
            </nav>

            <!-- Search Icon -->
            <div class="nav-right search-switch" style="font-size: 20px; color: #333; transition: color 0.3s ease; margin-left: 30px;">
                <i class="fa fa-search"></i>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->

<style>
    /* Minimalist Style */
    header {
        background-color: transparent; /* No background color */
        box-shadow: none; /* Remove shadow for a clean look */
    }

    .nav-menu a {
        font-family: 'Roboto', sans-serif; /* Clean font */
        font-weight: 500;
        color: #333; /* Dark gray color for text */
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 15px 0;
        transition: color 0.3s ease, transform 0.3s ease;
        text-decoration: none; /* No underlines */
    }

    .nav-menu a:hover {
        color: #ff5722; /* Subtle hover effect */
        transform: translateY(-2px); /* Slight lift effect */
    }

    .sub-menu a {
        color: #333;
        padding: 12px 0;
        display: block;
        transition: color 0.3s ease;
    }

    .sub-menu a:hover {
        color: #ff5722; /* Accent color for sub-menu hover */
    }

    .nav-right {
        font-size: 20px;
        color: #333;
        transition: color 0.3s ease;
    }

    .nav-right:hover {
        color: #ff5722; /* Accent color for search icon */
    }

    .main-menu {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
    }

    .sub-menu {
        display: none;
        padding-left: 0;
    }

    .nav-menu li:hover .sub-menu {
        display: block;
    }
</style>



    <!-- Header End -->

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
    
                        <!-- TRYING SMTJHn -->
                        <div class="container"> 
    <div class="row">
        <!-- Chef Card 1 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="chef-card">
                <img src="{{ asset('template_default/img/chef-18.jpg') }}" alt="Chef Image" class="chef-img">
                <div class="chef-info text-center">
                    <h3>Luca Moretti</h3>
                    <p class="chef-title">Executive Chef</p>
                    <p class="chef-specialty" style="background-color:rgb(250, 128, 114); color:rgb(51, 51, 51);">Italian Cuisine</p>
                    <a href="#" class="chef-btn">View Profile</a>
                </div>
            </div>
        </div>


        <!-- Chef Card 2 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="chef-card">
                <img src="{{ asset('template_default/img/chef-12.jpg') }}" alt="Chef Image" class="chef-img">
                <div class="chef-info text-center">
                    <h3>John Smith </h3>
                    <p class="chef-title">Master Chef</p>
                    <p class="chef-specialty" style="background-color: #D35400; color: #ffffff;">Baked Goods</p>
                    <a href="#" class="chef-btn">View Profile</a>
                </div>
            </div>
        </div>

        <!-- Chef Card 3 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="chef-card">
                <img src="{{ asset('template_default/img/chef-22.jpg') }}" alt="Chef Image" class="chef-img">
                <div class="chef-info text-center">
                    <h3>Emily Davis</h3>
                    <p class="chef-title">Pastry Chef</p>
                    <p class="chef-specialty" style="background-color: #F5DEB3; color: #2d2d2d;">Sushi and Sashimi</p>
                    <a href="#" class="chef-btn">View Profile</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Chef Card 4 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="chef-card">
                <img src="{{ asset('template_default/img/chef-17.jpg') }}" alt="Chef Image" class="chef-img">
                <div class="chef-info text-center">
                    <h3>Sophia Laurent</h3>
                    <p class="chef-title">Seafood Expert</p>
                    <p class="chef-specialty" style="background-color: #009688; color: #ffffff;">Seafood Dishes</p>
                    <a href="#" class="chef-btn">View Profile</a>
                </div>
            </div>
        </div>

        <!-- Chef Card 5 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="chef-card">
                <img src="{{ asset('template_default/img/chef-19.jpg') }}" alt="Chef Image" class="chef-img">
                <div class="chef-info text-center">
                    <h3>Anna Smith</h3>
                    <p class="chef-title">Fusion Chef</p>
                    <p class="chef-specialty" style="background-color: #ff5722; color: #ffffff;">Fusion Cuisine</p>
                    <a href="#" class="chef-btn">View Profile</a>
                </div>
            </div>
        </div>

        <!-- Chef Card 6 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="chef-card">
                <img src="{{ asset('template_default/img/chef-20.jpg') }}" alt="Chef Image" class="chef-img">
                <div class="chef-info text-center">
                    <h3>Isabella Moreau</h3>
                    <p class="chef-title">Grill Master</p>
                    <p class="chef-specialty" style="background-color: #795548; color: #ffffff;">BBQ & Grilling</p>
                    <a href="#" class="chef-btn">View Profile</a>
                </div>
            </div>
        </div>
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




<!-- Chef Listing Section End -->


<
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis.</p>
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
                        

 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model -->
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
    <script src="{{ asset('template_default/js/jquery-3.3.1.min.js') }}" ></script>
    <script src="{{ asset('template_default/js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('template_default/js/jquery.slicknav.js') }}" ></script>
    <script src="{{ asset('template_default/js/jquery.nice-select.min.js') }}" ></script>
    <script src="{{ asset('template_default/js/mixitup.min.js') }}" ></script>
    <script src="{{ asset('template_default/js/main.js') }}" ></script>
</body>

</html>
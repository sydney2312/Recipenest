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
    <header class="header-section-other">
        <div class="container-fluid">
            <div class="logo">
                <a href="./index.html"><img src="img/little-logo.png" alt=""></a>
            </div>
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about-me.html">About Me</a></li>
                                <li><a href="categories.html">Categories</a></li>
                                <li><a href="recipe.html">Recipe</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="recipe.html">Recipes</a></li>
                        <li><a href="categories.html">Best Of</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <div class="nav-right search-switch">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->



    <!-- Hero Search Section Begin -->
<!-- Chef Profile Section Begin (replace Hero section) -->
<!-- Chef Profile Section Begin -->
<section class="about-me spad">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column (Chef Information) -->
            <div class="col-lg-6 col-md-12">
                <div class="about-left">
                    <!-- Chef Image -->
                    <img src="{{ asset('template_default/img/chef-18.jpg') }}" alt="Chef Image" class="img-fluid chef-img">
                </div>
            </div>

            <!-- Right Column (Chef Information and Social Links) -->
            <div class="col-lg-6 col-md-12">
                <div class="about-right">
                    <div class="about-title">
                        <!-- Chef's Name and Title -->
                        <h2>I'm Luca Moretti, <br />Executive Chef & Culinary Expert</h2>
                        <p> Cooking has always been more than just a profession for me it's a lifelong passion. With over a decade of experience in fine dining and international cuisine, I take pride in crafting dishes that not only delight the palate but also tell a story. My journey in the culinary world began in the heart of Italy, where I learned the art of balancing flavors and textures from the best mentors </p>

                        <p> As an Executive Chef, I specialize in modernizing classic recipes while maintaining their authenticity. My focus is on using fresh, high-quality ingredients to create memorable dining experiences. Whether it's experimenting with bold new flavors or perfecting timeless techniques, I believe that every dish should be an expression of creativity and craftsmanship.

Through my food blog, I hope to share my love for cooking, offer expert tips, and inspire others to explore the beauty of gastronomy. Whether you're a home cook or a fellow professional, I invite you to join me on this flavorful journey !

</p>
                    </div>

                    <!-- Social Icons Section -->
                    <div class="social-icons">
                        <h4>Connect with me</h4>
                        <ul class="social-list">
                            <li><a href="#" class="social-icon"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="social-icon"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-icon"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Chef Profile Section End -->

<!-- Chef Profile Section End -->


<style>
/* About Me Section Styles */
/* About Me Section Styles */
.about-me {
    padding: 60px 0;
    background-color: #f8f8f8;
}

.about-left {
    margin-bottom: 30px;
    text-align: center;
}

.chef-img {
    width: 100%;
    max-width: 400px; /* Set max width for the image */
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.about-title h2 {
    font-size: 32px;
    font-weight: 700;
    color: #333;
    margin-bottom: 20px;
}

.about-title p {
    font-size: 18px;
    line-height: 1.6;
    color: #666;
    margin-bottom: 20px;
}

.social-icons {
    text-align: left; /* Aligns the social media section with the text */
    margin-top: 20px; /* Reduced space for closer alignment */
}

.social-icons h4 {
    font-size: 24px;
    color: #333;
    margin-bottom: 15px; /* Adjusted for better spacing */
    font-weight: bold;
}

/* Social Media Icons (Left Aligned and Black) */
.social-list {
    list-style: none;
    padding-left: 0;
    margin: 0;
}

.social-list li {
    display: inline-block;
    margin-right: 15px;
    margin-bottom: 10px; /* Add space between icons */
}

.social-icon {
    font-size: 30px;
    color: #000; /* Black color */
    transition: color 0.3s ease;
}

.social-icon:hover {
    color: #ff5722; /* Accent color on hover */
}

/* Media Queries for Res


</style>
<!-- Chef Profile Section End -->


<!-- About Me Section Begin -->
<!-- Specialties Section Begin -->
<div class="specialties-section" style="padding: 80px 0; background-color: #f8f9fa; text-align: center;">
    <div class="container">
        <h2 style="font-size: 36px; font-weight: bold; color: #333; margin-bottom: 40px;">Chef's Specialties</h2>
        
        <div class="row">
            <!-- Specialty Card 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="specialty-card" style="background-color: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden;">
                    <img src="{{ asset('template_default/img/recipe-2.jpg') }}" alt="Specialty 1" style="width: 100%; height: auto; border-bottom: 2px solid #ddd;">
                    <div class="specialty-info" style="padding: 20px;">
                        <h3 style="font-size: 24px; font-weight: 500; color: #333;">Sushi & Sashimi</h3>
                        <p style="color: #555; font-size: 16px;">A Japanese delicacy with fresh, hand-prepared ingredients, served with a modern twist.</p>
                    </div>
                </div>
            </div>
            
            <!-- Specialty Card 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="specialty-card" style="background-color: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden;">
                    <img src="{{ asset('template_default/img/recipe-2.jpg') }}" alt="Specialty 2" style="width: 100%; height: auto; border-bottom: 2px solid #ddd;">
                    <div class="specialty-info" style="padding: 20px;">
                        <h3 style="font-size: 24px; font-weight: 500; color: #333;">Italian Cuisine</h3>
                        <p style="color: #555; font-size: 16px;">Handcrafted pasta, rich sauces, and traditional Italian flavors, made to perfection.</p>
                    </div>
                </div>
            </div>

            <!-- Specialty Card 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="specialty-card" style="background-color: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden;">
                    <img src="{{ asset('template_default/img/recipe-2.jpg') }}" alt="Specialty 3" style="width: 100%; height: auto; border-bottom: 2px solid #ddd;">
                    <div class="specialty-info" style="padding: 20px;">
                        <h3 style="font-size: 24px; font-weight: 500; color: #333;">Pastry & Baked Goods</h3>
                        <p style="color: #555; font-size: 16px;">Deliciously rich pastries and fresh-baked goods, the perfect balance of sweet and savory.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Specialties Section End -->



    <!-- Similar Recipe Section End -->

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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
     <script src="{{ asset('template_default/js/jquery-3.3.1.min.js') }}" ></script>
    <script src="{{ asset('template_default/js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('template_default/js/jquery.slicknav.js') }}" ></script>
    <script src="{{ asset('template_default/js/jquery.nice-select.min.js') }}" ></script>
    <script src="{{ asset('template_default/js/mixitup.min.js') }}" ></script>
    <script src="{{ asset('template_default/js/main.js') }}" ></script>
</body>

</html>
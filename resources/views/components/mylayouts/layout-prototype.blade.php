<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RecipeNest Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar-brand {
            font-weight: 600;
            font-size: 1.6rem;
            letter-spacing: 0.5px;
        }

        .nav-link {
            font-weight: 500;
        }

        .nav-link:hover {
            color: #6c63ff;
        }

        .hero {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1600&q=80') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 20px;
            text-align: center;
            border-radius: 8px;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 600;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .btn-cta {
            background-color: #6c63ff;
            color: white;
            font-weight: 500;
            border-radius: 30px;
            padding: 10px 25px;
            transition: 0.3s ease;
            text-decoration: none;
        }

        .btn-cta:hover {
            background-color: #574fe1;
            color: white;
        }

        .section-title {
            font-weight: 600;
            font-size: 2rem;
            color: #333;
            margin-bottom: 30px;
        }

        .category-icon {
            font-size: 2rem;
            color: #6c63ff;
            margin-bottom: 10px;
        }

        .testimonial {
            background-color: #f8f9fa;
            padding: 30px 0;
        }

        .testimonial p {
            font-style: italic;
            color: #555;
        }

        .testimonial .name {
            font-weight: 600;
        }

        /* Featured Recipe Images */
        .featured-recipe-1, .featured-recipe-2, .featured-recipe-3 {
            background-size: cover;
            background-position: center;
        }

        /* Card Style */
        .card {
            background-color: #fff;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
            text-align: center;
        }

        /* Featured Meals */
        .featured-meals .card {
            width: 100%;
            border: none;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .featured-meals .card img {
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Navbar User Info */
        .navbar-nav .nav-item.dropdown .nav-link {
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 500;
        }

        /* Positioned Login/Logout User Info */
        .user-info {
            font-weight: 500;
            padding-right: 20px;
        }

        .dropdown-menu {
            min-width: 150px;
        }

        /* Custom styling for the navbar */
        .navbar {
            padding: 10px 15px;
        }

        .nav-item {
            padding: 5px 10px;
        }

        /* Custom styling for the ingredient spotlight */
      /* Ingredient Section Base */
.ingredient-section {
    padding: 60px 20px;
    background: linear-gradient(to right, #fff0f0, #ffeaea);
    text-align: center;
    font-family: 'Segoe UI', sans-serif;
}

/* Header */
.ingredient-header h2 {
    font-size: 2.5em;
    color: #d63031;
    margin-bottom: 10px;
    letter-spacing: 1px;
}

.ingredient-header p {
    font-size: 1.3em;
    color: #555;
    margin-bottom: 30px;
}

/* Layout */
.ingredient-content {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 40px;
}

/* Image styling + hover animation */
.ingredient-image img {
    width: 300px;
    height: auto;
    border-radius: 16px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.ingredient-image img:hover {
    transform: scale(1.05);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
}


.ingredient-header h2:hover {
    text-shadow: 0 0 10px #ff7675;
}

/* Info Box */
.ingredient-info {
    max-width: 500px;
    text-align: left;
}

.ingredient-info h3 {
    font-size: 1.8em;
    color: #c0392b;
    margin-bottom: 15px;
}

/* Bullet List with hover */
.ingredient-info ul {
    list-style: none;
    padding: 0;
}

.ingredient-info li {
    font-size: 1.1em;
    margin-bottom: 12px;
    display: flex;
    align-items: flex-start;
    transition: color 0.3s ease, transform 0.3s ease;
}

.ingredient-info li:hover {
    color: #d63031;
    transform: translateX(5px);
}

.bullet {
    color: #e74c3c;
    font-weight: bold;
    margin-right: 10px;
    font-size: 1.2em;
}

    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">RecipeNest</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <!-- Home, Recipes, and Chefs links -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('recipes.index') }}">Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('chefs.index') }}">Chefs</a>
                    </li>
                </ul>
                <!-- Login as Peter Parker or User Info Section -->
                <ul class="navbar-nav">
                    @if(Auth::check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle user-info" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            </ul>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login as Peter Parker</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <div class="container">
        <div class="hero mb-5">
            <h1>Welcome to RecipeNest</h1>
            <p>Find your favorite chefs, explore mouthwatering recipes, and cook like a pro!</p>
            <a href="{{ route('recipes.index') }}" class="btn-cta">Start Exploring</a>
            
        </div>
    </div>

    <!-- FEATURED RECIPES SECTION -->
    <div class="container my-5 featured-meals">
        <h2 class="section-title">Featured Meals</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="{{ asset('template_default/img/sberry.jpg') }}" alt="Meal 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Strawberry Souffle Pancakes</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="{{ asset('template_default/img/pasta.jpg') }}" alt="Meal 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Creamy Shrimp Fettuccine</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="{{ asset('template_default/img/sg-1.jpg') }}" alt="Meal 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Mediterranean Kale & Bean Salad</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- FEATURED ING SECTION -->

<!-- INGREDIENT SPOTLIGHT -->

<section id="ingredient-spotlight" class="ingredient-section">
    <div class="ingredient-header">
        <h2>Ingredient Spotlight</h2>
        <p><strong>This Week:</strong> Juicy Strawberries</p>
    </div>
    <div class="ingredient-content">
        <div class="ingredient-image">
            <img src="{{ asset('template_default/img/Strawberry.jpg') }}" alt="Strawberry"  img alt="Strawberries">
        </div>
        <div class="ingredient-info">
            <h3>Why We Love Strawberries</h3>
            <ul>
                <li><span class="bullet">•</span> Naturally sweet and refreshing</li>
                <li><span class="bullet">•</span> High in antioxidants and vitamin C</li>
                <li><span class="bullet">•</span> Perfect for desserts, smoothies, and salads</li>
                <li><span class="bullet">•</span> Bright red color adds beauty to any dish</li>
            </ul>
        </div>
    </div>
</section>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>
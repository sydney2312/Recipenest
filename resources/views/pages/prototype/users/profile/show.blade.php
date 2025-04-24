<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef Profile | RecipeNest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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

<!-- Chef Profile Page Content -->
<div class="container mb-3">
    <a href="{{ route('chefs.index') }}" class="btn btn-light text-muted small px-3">← Back to Chef List</a>
</div>

<div class="container text-center mb-4">
    <h1 class="chef-profile-heading">Chef Profile</h1>
</div>

<div class="container mb-5">
    <div class="row align-items-center">
        <div class="col-md-4 text-center mb-3 mb-md-0">
            <div class="chef-img-wrapper-profile">
                <img src="{{ $chef->getImage() }}" alt="Chef Image" class="chef-img-profile">
            </div>
        </div>
        <div class="col-md-8">
            <p class="chef-description">
                <strong class="chef-name">{{ $chef->name }}</strong> is known for bringing a creative flair to the kitchen, combining classic techniques with modern flavors. This chef has a passion for culinary excellence and enjoys crafting dishes that are both comforting and exciting.
            </p>
        </div>
    </div>
</div>

<div class="container">
    <h2 class="section-title text-center mb-4">Featured Recipes</h2>
    <div class="row justify-content-center">
        @forelse ($chef->recipes as $recipe)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="recipe-card">
                    <div class="recipe-img-wrapper">
                        <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}" class="recipe-img">
                    </div>
                    <div class="recipe-info p-3 text-center">
                        <h4 class="recipe-title">{{ $recipe->title }}</h4>
                        <a href="{{ route('recipes.show', $recipe->id) }}" class="btn btn-outline-dark mt-2">View Recipe</a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-muted text-center">No recipes available for this chef yet.</p>
        @endforelse
    </div>
</div>

<style>
    .chef-profile-heading {
        font-size: 42px;
        font-weight: 800;
        font-family: 'Georgia', serif;
        color: #333;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .chef-img-wrapper-profile {
        width: 220px;
        height: 220px;
        border-radius: 50%;
        overflow: hidden;
        border: 5px solid #f0f0f0;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        margin: auto;
    }

    .chef-img-profile {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .chef-description {
        font-size: 18px;
        color: #444;
        line-height: 1.6;
    }

    .chef-name {
        font-weight: 800;
        font-size: 20px;
        color: #111;
        margin-right: 5px;
    }

    .section-title {
        font-size: 30px;
        font-weight: 600;
        color: #222;
        margin-top: 20px;
    }

    .recipe-card {
        border: 1px solid #eaeaea;
        border-radius: 10px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        background-color: #fff;
        transition: transform 0.2s ease;
    }

    .recipe-card:hover {
        transform: translateY(-5px);
    }

    .recipe-img-wrapper {
        width: 100%;
        height: 200px;
        overflow: hidden;
    }

    .recipe-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .recipe-title {
        font-size: 20px;
        font-weight: 600;
        color: #333;
        margin-bottom: 10px;
    }

    .btn-outline-dark {
        border-color: #333;
        color: #333;
        transition: 0.3s;
    }

    .btn-outline-dark:hover {
        background-color: #333;
        color: #fff;
    }

    .btn-light {
        background-color: #f9f9f9;
        border: 1px solid #ddd;
    }

    .btn-light:hover {
        background-color: #eee;
        color: #111;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
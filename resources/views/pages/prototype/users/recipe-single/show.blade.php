<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Details</title>
    <!-- Add Bootstrap CSS link here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <!-- RECIPE DETAILS SECTION -->
    <div class="recipe-single" style="max-width: 900px; margin: 40px auto; background: #fff; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); font-family: 'Segoe UI', sans-serif; color: #1d1d1f;">
        <div class="section-title" style="text-align: center; font-size: 28px; font-weight: 600; margin-bottom: 30px; color: #333; letter-spacing: 1px;">
            Recipe Details
        </div>
        
        <!-- Recipe Image -->
        <img src="{{ asset('storage/images/media/' . basename($recipe->image)) }}" alt="{{ $recipe->title }}" style="width: 100%; height: auto; border-radius: 16px; margin-bottom: 20px; object-fit: cover; max-height: 450px;">
        
        <!-- Recipe Meta Information -->
        <div class="recipe-meta" style="font-size: 15px; color: #555; margin-bottom: 30px; text-align: left; line-height: 1.6;">
            <strong>Recipe by:</strong> {{ $recipe->user->name }}<br>
            <strong>Cook Time:</strong> {{ $recipe->total_time }} {{ $recipe->total_time_unit }}<br>
            <strong>Published:</strong> {{ \Carbon\Carbon::parse($recipe->publish_date)->format('F j, Y') }}
        </div>

        <!-- Recipe Title -->
        <div class="recipe-title" style="text-align: center; font-size: 34px; font-weight: bold; color: #111; margin-bottom: 20px;">
            {{ $recipe->title }}
        </div>

        <!-- Recipe Short Description -->
        <p class="description" style="font-size: 17px; color: #444; margin-bottom: 30px; line-height: 1.6;">
            {{ $recipe->short_description }}
        </p>

        <!-- Ingredients Section -->
        <h3 style="font-size: 22px; margin-top: 30px; margin-bottom: 15px; color: #0071e3;">Ingredients</h3>
        <ul style="padding-left: 20px;">
            @foreach(explode("\n", $recipe->ingredients) as $ingredient)
                <li style="margin-bottom: 10px; font-size: 16px; color: #333;">{{ $ingredient }}</li>
            @endforeach
        </ul>

        <!-- Instructions Section -->
        <h3 style="font-size: 22px; margin-top: 30px; margin-bottom: 15px; color: #0071e3;">Instructions</h3>
        <ul style="padding-left: 20px;">
            @foreach(explode("\n", $recipe->instructions) as $step)
                <li style="margin-bottom: 10px; font-size: 16px; color: #333;">{{ $step }}</li>
            @endforeach
        </ul>

        <!-- Back to Recipes Button -->
        <a href="{{ route('recipes.index') }}" class="back-btn" style="display: inline-block; margin-top: 40px; padding: 12px 25px; background: #0071e3; color: white; border-radius: 8px; text-decoration: none; font-weight: 500; transition: background 0.3s ease;">
            Back to Recipes
        </a>
    </div>

    <!-- Add Bootstrap JS link here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
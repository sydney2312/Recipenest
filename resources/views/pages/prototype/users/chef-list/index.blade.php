<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meet Our Chefs - RecipeNest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fdfdfd;
            font-family: 'Segoe UI', sans-serif;
        }

        /* NAV BAR STYLING */
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .navbar-brand {
            font-weight: bold;
            color: #2c3e50;
        }

        .navbar-nav .nav-link {
            color: #2c3e50;
            font-weight: 500;
        }

        .navbar-nav .nav-link:hover {
            color: #007bff;
        }

        /* HEADER SECTION */
        .page-header {
            text-align: center;
            padding: 60px 0 30px;
        }

        .page-header h1 {
            font-size: 48px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .page-header p {
            font-size: 18px;
            color: #666;
            font-style: italic;
        }

        /* CHEF CARDS */
        .chef-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 35px 20px;
            box-shadow: 0 14px 35px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .chef-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.07);
        }

        .chef-img-wrapper {
            width: 150px;
            height: 150px;
            margin: 0 auto 20px;
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid #fff;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.06);
            transition: transform 0.4s ease;
        }

        .chef-card:hover .chef-img-wrapper {
            transform: scale(1.05);
        }

        .chef-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .chef-name {
            font-size: 1.6em;
            font-weight: 700;
            color: #2c3e50;
        }

        .chef-title,
        .chef-specialty {
            font-size: 1em;
            color: #666;
        }

        .chef-btn {
            display: inline-block;
            padding: 10px 25px;
            font-size: 0.9em;
            background-color: #2c3e50;
            color: #fff;
            border: none;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .chef-btn:hover {
            background-color: #1a252f;
        }
    </style>
</head>
<body>

    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">RecipeNest</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('recipes.index') }}">Recipes</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('chefs.index') }}">Chefs</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- PAGE HEADER -->
    <div class="page-header">
        <h1>Meet Our Chefs</h1>
        <p>The creative minds behind your favorite dishes</p>
    </div>

    <!-- CHEF LIST -->
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($chef_data as $data)
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="chef-card text-center">
                        <div class="chef-img-wrapper">
                            <img src="{{ $data->getImage() }}" alt="Chef Image" class="chef-img">
                        </div>
                        <h3 class="chef-name">{{ $data->name }}</h3>
                        <p class="chef-title">{{ $data->title }}</p>
                        <p class="chef-specialty">{{ $data->specialty }}</p>
                        <a href="{{ route('chefs.show', $data->id) }}" class="chef-btn">View Profile</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
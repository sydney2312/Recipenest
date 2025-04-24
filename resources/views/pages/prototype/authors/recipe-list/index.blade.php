@extends('layouts.app')

@section('content')
<style>
    .recipe-page {
        text-align: center;
        padding: 40px 20px;
        background: #f5f5f7;
        min-height: 100vh;
    }

    .recipe-page h1 {
        font-size: 40px;
        font-weight: 700;
        color: #e63946;
        margin-bottom: 40px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        position: relative;
    }

    .recipe-page h1::after {
        content: '';
        display: block;
        width: 60px;
        height: 4px;
        background: #e63946;
        margin: 10px auto 0;
        border-radius: 2px;
    }

    .search-bar {
        max-width: 500px;
        margin: 0 auto 40px;
        position: relative;
        display: flex;
    }

    .search-bar input {
        flex: 1;
        padding: 12px 20px;
        border: 2px solid #ccc;
        border-radius: 30px 0 0 30px;
        font-size: 16px;
        outline: none;
    }

    .search-bar button {
        padding: 0 20px;
        border: none;
        background: #0071e3;
        color: white;
        font-size: 16px;
        border-radius: 0 30px 30px 0;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .search-bar button:hover {
        background: #005bb5;
    }

    .recipe-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }

    .recipe-card {
        background: white;
        border-radius: 16px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        width: 300px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        animation: fadeInUp 0.5s ease-in-out;
    }

    .recipe-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }

    .recipe-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .recipe-card h3 {
        font-size: 22px;
        margin: 15px 20px 10px;
        color: #1d1d1f;
    }

    .recipe-card .description {
        margin: 0 20px 15px;
        color: #555;
        font-size: 14px;
    }

    .view-btn {
        margin: 0 20px 20px;
        padding: 10px 0;
        background-color: #0071e3;
        color: white;
        text-align: center;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 500;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .view-btn:hover {
        background-color: #005bb5;
        transform: scale(1.05);
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<div class="recipe-page">
    <h1>Recipe List</h1>

    <div class="search-bar">
        <input type="text" placeholder="Search for a recipe...">
        <button type="submit">Search</button>
    </div>

    <div class="recipe-grid">
        @forelse($recipe_data as $recipe)
            <div class="recipe-card">
                <img src="{{ asset('storage/images/media/' . basename($recipe->image)) }}" alt="{{ $recipe->title }}">
                <h3>{{ $recipe->title }}</h3>
                <p class="description">{{ $recipe->short_description }}</p>
                <a href="{{ route('recipes.show', $recipe->id) }}" class="view-btn">View Recipe</a>
            </div>
        @empty
            <p>No recipes found.</p>
        @endforelse
    </div>
</div>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe - Tomato Soup with Crispy Cheese Balls</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 85%;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
        }

        header {
            text-align: center;
            margin-bottom: 40px;
        }

        header h1 {
            font-size: 3rem;
            color: #FF6F61;
            font-family: 'Georgia', serif;
            margin-bottom: 15px;
        }

        header p {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 30px;
        }

        .recipe-image {
            display: block;
            margin: 0 auto;
            width: 40%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }

        .details div {
            width: 48%;
        }

        h2 {
            font-size: 2rem;
            color: #FF6F61;
            margin-bottom: 15px;
            font-family: 'Georgia', serif;
            text-transform: uppercase;
        }

        ul {
            list-style: none;
            padding-left: 0;
            margin-bottom: 20px;
        }

        ul li {
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 12px;
            position: relative;
        }

        ul li::before {
            content: "✔";
            position: absolute;
            left: 0;
            color: #FF6F61;
        }

        .instructions p {
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .time {
            background-color: #FF6F61;
            color: white;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 30px;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            font-size: 1rem;
            color: #777;
            padding: 20px;
            border-top: 1px solid #ddd;
        }

        footer p {
            font-family: 'Georgia', serif;
        }

        .cta-button {
            background-color: #FF6F61;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            text-align: center;
            text-decoration: none;
            font-size: 1.1rem;
            display: inline-block;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: #E55D50;
        }

    </style>
</head>
<body>

    <div class="container">
        <header>
            <h1>Tomato Soup with Crispy Cheese Balls</h1>
            <p>A comforting soup with a twist! This velvety tomato soup is paired with crispy mozzarella cheese balls for a delightful crunch in every bite.</p>
        </header>

        <img class="recipe-image" src="{{ asset('template_default/img/tomatosoup.jpg') }}" alt="Tomato Soup">

        <div class="details">
            <div>
                <h2>Prep Time</h2>
                <p>15 minutes</p>
            </div>
            <div>
                <h2>Cook Time</h2>
                <p>30 minutes</p>
            </div>
        </div>

        <div class="time">
            <p>Total Time: 45 minutes</p>
        </div>

        <div class="ingredients">
            <h2>Ingredients</h2>
            <ul>
                <li>4 large ripe tomatoes</li>
                <li>1 cup vegetable broth</li>
                <li>1/2 cup heavy cream</li>
                <li>1 medium onion, chopped</li>
                <li>2 cloves garlic, minced</li>
                <li>Salt and pepper, to taste</li>
                <li>2 cups shredded mozzarella cheese</li>
                <li>1 cup breadcrumbs</li>
                <li>1 egg, beaten</li>
            </ul>
        </div>

        <div class="instructions">
            <h2>Instructions</h2>
            <p>1. In a large pot, heat some olive oil and sauté onions and garlic until soft and fragrant.</p>
            <p>2. Add the chopped tomatoes and vegetable broth, bring to a boil, and simmer for 15 minutes.</p>
            <p>3. Using an immersion blender (or a regular blender), blend the soup until smooth.</p>
            <p>4. Stir in the heavy cream, salt, and pepper to taste. Let the soup simmer for 5 more minutes.</p>
            <p>5. In a bowl, combine shredded mozzarella, breadcrumbs, and the beaten egg. Form the mixture into small balls.</p>
            <p>6. Fry the cheese balls in hot oil until golden brown and crispy. Set them aside on a paper towel to drain excess oil.</p>
            <p>7. Serve the soup hot, topped with crispy cheese balls for an irresistible finish.</p>
        </div>

        <a href="contact.html" class="cta-button">Try this recipe & share your results!</a>
    </div>

    <footer>
        <p>&copy; 2025 Your Food Blog | All rights reserved | Follow us on <a href="https://instagram.com/yourfoodblog" target="_blank">Instagram</a></p>
    </footer>

</body>
</html>

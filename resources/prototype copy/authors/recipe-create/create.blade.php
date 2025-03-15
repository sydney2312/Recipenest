<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Form - Food Blog</title>

    <!-- Include TinyMCE from the CDN -->
    <script src="https://cdn.tiny.cloud/1/1xfhb82pe7eqivhyu8phkk40wub962ibcj0oaubnh4sqy7m6/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Add some CSS for styling -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #444;
        }

        input[type="text"], input[type="file"], select, textarea {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            color: #555;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
        }

        textarea {
            height: 150px;
            resize: vertical;
        }

        input[type="checkbox"] {
            transform: scale(1.2);
            margin-right: 10px;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: 0.4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: 0.4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        .form-actions {
            text-align: center;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            border: none;
        }

        .btn-success {
            background-color: #4CAF50;
            color: white;
        }

        .btn-danger {
            background-color: #f44336;
            color: white;
        }

        .btn:hover {
            opacity: 0.8;
        }

        .card {
            padding: 15px;
            background-color: #fafafa;
            border-radius: 8px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Sidebar styles */
        #sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: #FF8C00; /* Soft orange color */
            transition: transform 0.3s ease;
            padding-top: 20px;
            overflow: hidden;
        }

        #sidebar.collapsed {
            transform: translateX(-100%); /* Hide sidebar completely */
        }

        #sidebar ul {
            list-style: none;
            padding-left: 20px;
        }

        #sidebar ul li {
            padding: 20px 0;
            border-bottom: 1px solid #fff;
        }

        #sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
        }

        #sidebar ul li a:hover {
            color: #ffcc80; /* Slightly lighter orange */
        }

        /* Button to toggle sidebar */
        .toggle-btn {
            position: fixed;
            top: 20px;
            left: 250px;
            background-color: #FF8C00;
            color: white;
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            transition: left 0.3s ease;
        }

        .toggle-btn.collapsed {
            left: 0;
        }

        /* Main content styling */
        #main-content {
            margin-left: 250px;
            transition: margin-left 0.3s ease;
            padding: 20px;
        }

        #main-content.collapsed {
            margin-left: 0;
        }

    </style>
</head>
<body>

    <!-- Sidebar -->
    <div id="sidebar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Pages</a></li>
        </ul>
    </div>

    <!-- Button to collapse/expand the sidebar -->
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>

    <!-- Main Content -->
    <div id="main-content">
        <div class="container">
            <h1>Create Your Recipe</h1>
            <form action="/submit" method="POST" enctype="multipart/form-data">
                <!-- CSRF Token (You can replace this with your actual CSRF token in Blade) -->
                <input type="hidden" name="_token" value="your-csrf-token-here">

                <!-- Category -->
                <div class="form-group">
                    <label for="category">Category:</label>
                    <input type="text" class="form-control" id="category" name="category" value="Food">
                </div>

                <!-- Title -->
                <div class="form-group">
                    <label for="title">Recipe Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <!-- Short Description -->
                <div class="form-group">
                    <label for="short_description">Short Description:</label>
                    <textarea class="form-control" rows="5" name="short_description" id="short_description"></textarea>
                </div>

                <!-- Full Description -->
                <div class="form-group">
                    <label for="full_description">Full Description:</label>
                    <textarea id="full_description" name="full_description"></textarea>
                </div>

                <!-- Ingredients -->
                <div class="form-group">
                    <label for="ingredients">Ingredients:</label>
                    <textarea id="ingredients" name="ingredients"></textarea>
                </div>

                <!-- Instructions -->
                <div class="form-group">
                    <label for="instructions">Instructions:</label>
                    <textarea id="instructions" name="instructions"></textarea>
                </div>

                <!-- Image Upload -->
                <div class="form-group">
                    <label for="image">Recipe Image:</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>

                <!-- Total Time -->
                <div class="form-group">
                    <label for="total_time">Total Time (in minutes):</label>
                    <input type="text" class="form-control" name="total_time" id="total_time" value="1">
                </div>

                <!-- Total Time Unit -->
                <div class="form-group">
                    <label for="total_time_unit">Time Unit:</label>
                    <select name="total_time_unit" id="total_time_unit" class="form-control">
                        <option value="minutes">Minutes</option>
                        <option value="hours">Hours</option>
                    </select>
                </div>

                <!-- Featured Option -->
                <div class="card">
                    <p>Set as Featured</p>
                    <label class="switch">
                        <input type="checkbox" name="featured">
                        <span class="slider round"></span>
                    </label>
                </div>

                <!-- Public Option -->
                <div class="card">
                    <p>Public</p>
                    <label class="switch">
                        <input type="checkbox" name="public">
                        <span class="slider round"></span>
                    </label>
                </div>

                <!-- Submit Buttons -->
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Create Recipe</button>
                    <a class="btn btn-danger" href="/recipes">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Sidebar Toggle Script -->
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            var mainContent = document.getElementById('main-content');
            var toggleBtn = document.querySelector('.toggle-btn');

            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('collapsed');
            toggleBtn.classList.toggle('collapsed');
        }
    </script>

    <script>
        // Initialize TinyMCE
        tinymce.init({
            selector: 'textarea',  // Apply TinyMCE to all textareas
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>

</body>
</html>

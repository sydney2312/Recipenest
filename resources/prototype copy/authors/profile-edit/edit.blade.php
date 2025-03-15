<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

    <script src="https://cdn.tiny.cloud/1/1xfhb82pe7eqivhyu8phkk40wub962ibcj0oaubnh4sqy7m6/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        /* Sidebar styles */
        #sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: #FF8C00;
            transition: transform 0.3s ease;
            padding-top: 20px;
            overflow: hidden;
        }

        #sidebar.collapsed {
            transform: translateX(-100%);
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
            color: #ffcc80;
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

        /* Container Styling */
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

        /* Profile Image Styling */
        .profile-div {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .profile-edit-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #2196F3;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Form Fields */
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .form-group textarea {
            resize: vertical;
        }

        /* Button Styling */
        .form-group button {
            background-color: #2196F3;
            color: #fff;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .form-group button:hover {
            background-color: #1e88e5;
        }

        .form-group a {
            background-color: #f44336;
            color: #fff;
            padding: 12px 25px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            display: inline-block;
            text-align: center;
            width: 100%;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        .form-group a:hover {
            background-color: #d32f2f;
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
            <h1>Edit Profile</h1>

            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="profile-div text-center">
                    <img id="imgPreview" class="profile-edit-image" src="{{ asset('storage/images/profiles/default.jpg') }}" alt="Profile Image">
                </div>

                <div class="form-group">
                    <label for="profile">Profile Image:</label>
                    <input type="file" class="form-control" name="profile" id="image-input" onchange="previewImage(event)">
                </div>

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="">
                </div>

                <div class="form-group">
                    <label for="short_description">Bio:</label>
                    <textarea class="form-control" rows="5" name="short_description" id="short_description" minlength="1" maxlength="300"></textarea>
                </div>

                <div class="form-group">
                    <label for="full_description">Full Description:</label>
                    <textarea class="form-control" rows="15" name="full_description" id="full_description" minlength="1" maxlength="300"></textarea>
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" value="">
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="">
                </div>

                <div class="form-group">
                    <label for="birthday">Birthday:</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" value="">
                </div>

                <div class="form-group">
                    <label for="social_facebook">Facebook:</label>
                    <input type="text" class="form-control" id="social_facebook" name="social_facebook" value="">
                </div>

                <div class="form-group">
                    <label for="social_x">X (Twitter):</label>
                    <input type="text" class="form-control" id="social_x" name="social_x" value="">
                </div>

                <div class="form-group">
                    <label for="social_instagram">Instagram:</label>
                    <input type="text" class="form-control" id="social_instagram" name="social_instagram" value="">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a class="btn btn-danger" href="{{ route('authors.recipes.index') }}">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Sidebar Toggle Script
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            var mainContent = document.getElementById('main-content');
            var toggleBtn = document.querySelector('.toggle-btn');

            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('collapsed');
            toggleBtn.classList.toggle('collapsed');
        }

        // Preview image function
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function () {
                const output = document.getElementById('imgPreview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>
</html>

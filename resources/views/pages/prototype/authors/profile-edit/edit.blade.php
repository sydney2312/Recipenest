<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            margin: 0;
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 220px;
            background-color: #f8f9fa;
            padding-top: 30px;
            flex-shrink: 0;
            border-right: 1px solid #ddd;
            transition: transform 0.3s ease;
        }

        .sidebar a {
            display: block;
            padding: 15px 20px;
            color: #333;
            text-decoration: none;
            font-weight: 500;
        }

        .sidebar a:hover {
            background-color: #e2e6ea;
        }

        .sidebar-collapsed {
            transform: translateX(-100%);
        }

        .main-content {
            flex-grow: 1;
            padding: 30px;
            width: 100%;
        }

        .recipe-nest-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        #imgPreview {
            width: 300px;
            height: 300px;
            object-fit: cover;
        }

        .toggle-btn {
            background-color: #2c3e50;
            color: white;
            border: none;
            padding: 8px 12px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: absolute;
                z-index: 1000;
                height: 100vh;
            }

            .main-content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <div id="sidebar" class="sidebar">
        <a href="{{ route('homepage') }}">Home</a>
        <a href="{{ route('authors.recipes.index') }}">My Recipes</a>
        <a href="{{ route('authors.profile.edit', ['profile' => $chef->id]) }}">Edit Profile</a>
        <a href="{{ route('logout') }}">Logout</a>
    </div>

    <div class="main-content">
        <div class="recipe-nest-header">
            <span>RecipeNest</span>
            <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
        </div>

        <h1>Edit Profile</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('authors.profile.update', ['profile' => $chef->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="text-center mb-4">
                <img id="imgPreview" src="{{ $chef->getImage() }}" alt="Profile Image" class="img-fluid rounded-circle">
            </div>

            <div class="mb-3">
                <label for="profile" class="form-label">Profile Image:</label>
                <input type="file" class="form-control" name="profile" id="image-input">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $chef->name }}">
            </div>

            <div class="mb-3">
                <label for="short_description" class="form-label">Bio:</label>
                <textarea class="form-control" rows="5" name="short_description" id="short_description" minlength="1" maxlength="300">{{ $chef->short_description }}</textarea>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('authors.recipes.index') }}" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>

    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#short_description',
            menubar: false,
            toolbar: 'undo redo | bold italic underline | bullist numlist',
            height: 200
        });
    </script>

    <!-- Toggle Sidebar -->
    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('sidebar-collapsed');
        }

        document.getElementById('image-input').addEventListener('change', function (e) {
            const [file] = e.target.files;
            if (file) {
                document.getElementById('imgPreview').src = URL.createObjectURL(file);
            }
        });
    </script>

</body>
</html>
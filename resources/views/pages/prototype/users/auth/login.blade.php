<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="{{ asset('template_default/img/Recipienestlogo.png') }}" alt="Food App Logo">
        </div>
        <h2 style="margin-top: -10px;">Welcome Back!</h2>
        <p class="subtitle">Login to continue exploring delicious recipes.</p>
        <form id="loginForm" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            
            <button type="submit">Login</button>
            <p id="error-message" class="error">{{ session('error') }}</p>
            <p id="success-message" class="success" style="display: none;">You have logged in successfully!</p>
            <p class="signup-link">Don't have an account? <a href="#">Sign up</a></p>
        </form>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const button = document.querySelector('button');
            button.innerHTML = 'Logging in...';
            button.style.opacity = '0.7';
            setTimeout(() => {
                document.getElementById('success-message').style.display = 'block';
                button.innerHTML = 'Login';
                button.style.opacity = '1';
            }, 1500);
            setTimeout(() => {
                document.getElementById('success-message').style.display = 'none';
            }, 4000);
        });
    </script>
</body>
</html>

<style>
/* Add your CSS styles here */
body {
    font-family: 'Poppins', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: url('background.jpg') no-repeat center center/cover;
    margin: 0;
}

.login-container {
    background: rgba(255, 255, 255, 0.95);
    padding: 40px;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
    border-radius: 15px;
    width: 380px;
    text-align: center;
    animation: fadeIn 0.6s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

.logo img {
    width: 140px;
    margin-bottom: 20px;
}

h2 {
    color: #333;
    margin-bottom: 10px;
}

.subtitle {
    font-size: 14px;
    color: #777;
    margin-bottom: 20px;
}

.input-group {
    text-align: left;
    margin-bottom: 15px;
}

input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 16px;
    transition: all 0.3s ease-in-out;
}

input:focus {
    border-color: #ff6600;
    box-shadow: 0px 0px 8px rgba(255, 102, 0, 0.5);
    outline: none;
}

button {
    width: 100%;
    padding: 12px;
    background: #ff6600;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
    transition: all 0.3s;
}

button:hover {
    background: #e65c00;
    transform: scale(1.05);
}

.error {
    color: red;
    font-size: 14px;
    margin-top: 10px;
}

.success {
    color: green;
    font-size: 14px;
    margin-top: 10px;
    opacity: 0;
    animation: fadeInSuccess 0.5s forwards;
}

@keyframes fadeInSuccess {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
}

.signup-link {
    margin-top: 15px;
    font-size: 14px;
}

.signup-link a {
    color: #ff6600;
    text-decoration: none;
    font-weight: 600;
}

.signup-link a:hover {
    text-decoration: underline;
}
</style>

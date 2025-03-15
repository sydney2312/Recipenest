<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef Portfolio - Food Blog</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #F9F9F9;
            color: #333;
            line-height: 1.6;
        }

        /* Header */
        header {
            background-color: #FF8C00;
            color: #fff;
            text-align: center;
            padding: 60px 20px;
            position: relative;
        }

        header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2rem;
            font-weight: 300;
        }

        /* Navigation Bar */
        nav {
            display: flex;
            justify-content: center;
            background-color: #333;
            padding: 10px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            font-size: 1.2rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #FF8C00;
        }

        /* Main Section */
        .container {
            width: 90%;
            margin: 20px auto;
        }

        /* Profile Section */
        .profile {
            text-align: center;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        /* Added Image above "About Me" */
        .profile-image img {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 5px solid #FF8C00;
            object-fit: cover;
        }

        .profile h2 {
            font-size: 2rem;
            color: #FF8C00;
            margin-bottom: 10px;
        }

        .profile p {
            font-size: 1.2rem;
            font-weight: 300;
            color: #666;
            margin-bottom: 30px;
        }

        /* Experience Section */
        .experience {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .experience h2 {
            font-size: 2.5rem;
            color: #FF8C00;
            margin-bottom: 20px;
            text-align: center;
        }

        .experience ul {
            list-style: none;
            padding-left: 0;
        }

        .experience ul li {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        /* Gallery Section */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Contact Section */
        .contact {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .contact h2 {
            font-size: 2.5rem;
            color: #FF8C00;
            margin-bottom: 20px;
            text-align: center;
        }

        .contact form {
            display: flex;
            flex-direction: column;
        }

        .contact input,
        .contact textarea {
            padding: 12px;
            margin-bottom: 15px;
            font-size: 1.1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f7f7f7;
        }

        .contact button {
            background-color: #FF8C00;
            color: white;
            padding: 15px;
            font-size: 1.2rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact button:hover {
            background-color: #e57f00;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }

        footer a {
            color: #FF8C00;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>Hiroshi Tanaka</h1>
        <p>Passionate about creating mouth-watering dishes that tell a story.</p>
    </header>

    <!-- Navigation Bar -->
    <nav>
        <a href="#profile">Profile</a>
        <a href="#experience">Experience</a>
        <a href="#gallery">Gallery</a>
        <a href="#contact">Contact</a>
    </nav>

    <!-- Main Content -->
    <div class="container">

        <!-- Profile Section -->
        <section class="profile" id="profile">
            <!-- Image above "About Me" -->
            <div class="profile-image">
                <img src="{{ asset('template_default/img/chef-15.jpg') }}" alt="Chef John Doe">
            </div>
            <h2>About Me</h2>
            <p>I'm Chef Hiroshi Tanaka, I'm a passionate chef with over 10 years of experience, I specialize in blending traditional flavors with modern techniques. My mission is to create unforgettable dining experiences that leave a lasting impression, one dish at a time.</p>
        </section>

        <!-- Experience Section -->
        <section class="experience" id="experience">
            <h2>Professional Experience</h2>
            <ul>
                <li><strong>Executive Chef</strong> - La Trompette (2019-Present)</li>
                <li><strong>Sous Chef</strong> - Elite Bistro (2015-2019)</li>
                <li><strong>Line Cook</strong> - Ocean's Dine (2012-2015)</li>
            </ul>
        </section>

        <!-- Gallery Section -->
        <section class="gallery" id="gallery">
            <h2>Signature Dishes</h2>
            <div>
            <img src="{{ asset('template_default/img/sg-1.jpg') }}" alt="Signature Dish 2">

                <p>Chickpea bento bowl </p>
            </div>
            <div>
            <img src="{{ asset('template_default/img/sg-3.jpg') }}" alt="Signature Dish 2">

                <p>Haute Cuisine Sushi</p>
            </div>
            <div>
            <img src="{{ asset('template_default/img/sg-4.jpg') }}" alt="Signature Dish 2">

                <p>Tomato Bisque with Parmesan Polenta Balls</p>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact" id="contact">
            <h2>Contact Me</h2>
            <form action="submit_form.php" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </section>

    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Chef John Doe | All Rights Reserved | <a href="https://instagram.com/chefjohndoe" target="_blank">Instagram</a> | <a href="https://linkedin.com/in/chefjohndoe" target="_blank">LinkedIn</a></p>
    </footer>

</body>
</html>

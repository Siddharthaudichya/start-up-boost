<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/sections.css">
    <link rel="stylesheet" href="./css/section_hero.css">
    <link rel="stylesheet" href="./css/section_about_us.css">
    <link rel="stylesheet" href="./css/section_services.css">
    <link rel="stylesheet" href="./css/section_influencers.css">
    <link rel="stylesheet" href="./css/section_contact_us.css">
    <link rel="stylesheet" href="./css/footer.css">


    <title>StartUpBoost</title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
          
            <div class="logo">StartUpBoost</div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#influencers">Our Influencers</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>  
            <div class="auth-container">
                <a href="./login_Form.php" class="auth-button">Login</a>  
                <a href="./Registration.php" class="auth-button">Signup</a>
            </div>
        </div>
    </header>

    <div style="background-color: rgb(204,166,154);">

            <!-- Hero Section -->
            <section id="home" class="hero">
                <div class="container hero-container">
                    <h1>Boost Your Startup with Influencer Marketing!</h1>
                    <p>Brief description of services offered</p>
                    <a href="#get-started" class="cta-btn">Get Started</a>  
                </div>
            </section>

   
            <!-- About Us Section -->
            <section id="about" class="about">
                <div class="flex flex-row container gap-400 about-container">
                    <div class="txt">
                        <h2>About Us</h2>
                        <p>Brief introduction about StartUpBoost and its mission</p>
                        <p>Information about the team behind StartUpBoost</p>
                        <p>Testimonials from satisfied startups and influencers</p>
                    </div>
                    <div class="myimg">
                        <img class="section-wise-img" src="./images/about.jpg" alt="image">
                    </div>
                </div>
            </section>

            <!-- Services Section -->
            <section id="services" class="services">
                <div class="flex flex-row container gap-400 services-container">
                    <div class="myimg">
                        <img class="section-wise-img" src="./images/services.jpg" alt="image">
                    </div>
                    <div class="txt">
                        <h2>Services</h2>
                        <p>Explanation of services offered:</p>
                        <ul>
                            <li>Identifying suitable influencers for startups</li>
                            <li>Negotiating partnerships and collaborations</li>
                            <li>Creating influencer marketing campaigns</li>
                            <li>Tracking and analyzing campaign performance</li>
                        </ul>
                    </div>
                </div>
            </section>

   </div>

    <!-- Our Influencers Section -->
    <div style="background-color: rgb(252, 227, 115);">
    <section id="influencers" class="influencers">
        <div class="container influencers-container" >
            <h2>Our Influencers</h2>
            <p>Showcase of some featured influencers available for collaborations</p>
            <!-- Influencer profiles can be dynamically generated here -->
            <a href="#connect" class="cta-btn">Connect with Influencers</a>
        </div>
    </section>
    </div>

    <!-- Contact Us Section
    <section id="contact" class="contact">
        <div class="container contact-container">
            <h2>Contact Us</h2>
            <form action="#" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <button type="submit">Submit</button>
            </form>
            <div class="contact-info">
                <p>Email: info@startupboost.com</p>
                <p>Phone: +123-456-7890</p>
                <p>Address: 123 Startup Ave, City, Country</p>
            </div>
        </div>
    </section> -->

    <!-- Footer -->
    <footer>
        <div class="container footer-container">
            <ul>
                <li><a href="#privacy">Privacy Policy</a></li>
                <li><a href="#terms">Terms of Service</a></li>
            </ul>
            <div class="social-links">
                <a href="#facebook">Facebook</a>
                <a href="#twitter">Twitter</a>
                <a href="#instagram">Instagram</a>
            </div>
            <p>&copy; 2024 StartUpBoost. All rights reserved.</p>
        </div>
    </footer>

    <script src="./script/main.js"></script>
</body>

</html>
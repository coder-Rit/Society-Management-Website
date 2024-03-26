<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Feature images/apple-touch-icon.png">
    <link rel="stylesheet" href="contactus.css">
    <title>Contact Us</title>
</head>

<body>
    <div class="scroll-watcher"></div>
    <header id="header">
        <div class="logo">
            <img src="Background_images/Society Logo Main.jpeg" alt="">
            <h2 class="title">Dream Sankalp Co-op Society</h2>
        </div>
        <button id="start" type="button" onclick="window.location.href='login.php'">Get Started
        </button>
    </header>
    <nav class="navigation">
        <a class="links" href="homepage.php">Home</a>
        <div class="dropdown-menu">
            <button class="menu-btn" onclick="window.location.href='AboutUs.php'">About Us</button>
            <div class="menu-content">
                <a class="links-hidden" href="committee.php">Committee</a>
                <a class="links-hidden" href="gallery.php">Gallery</a>
                <a class="links-hidden" href="flatinfo.php">Flat Info</a>
            </div>
        </div>
        <div class="dropdown-menu">
            <button class="menu-btn" onclick="window.location.href='facility.php'">Facilities </button>
            <div class="menu-content">
                <a class="links-hidden" href="/Society Management Website/facility.php#security">Security</a>
                <a class="links-hidden" href="/Society Management Website/facility.php#parking">Parking</a>
                <a class="links-hidden" href="/Society Management Website/facility.php#power">Power Backup</a>
                <a class="links-hidden" href="/Society Management Website/facility.php#gym">Clubhouse</a>
                <a class="links-hidden" href="/Society Management Website/facility.php#water">Water Supply</a>
                <a class="links-hidden" href="/Society Management Website/facility.php#garden">Garden Surroundings</a>
                <a class="links-hidden" href="/Society Management Website/facility.php#kids">Kids Entertainment</a>
                <a class="links-hidden" href="/Society Management Website/facility.php#maintain">Maintenance</a>
                <a class="links-hidden" href="/Society Management Website/facility.php#cleaning">Housekeeping</a>
            </div>
        </div>
        <a class="links" href="blog.php">Circulars</a>
        <a class="links" href="contactus.php">Contact</a>
        <a class="links" href="FAQ.php">FAQ</a>
        <a class="links" href="payment.php">Payment</a>
    </nav>

    <h1 id="contact">Contact Us</h1>
    <main class="container">
        <div class="contact-container">
            <div class="contact-left">
                <h2 class="getintouch">Get in Touch</h2>
                <form action="https://api.web3forms.com/submit" method="POST">
                    <input type="hidden" name="access_key" value="884069be-2e0a-4102-81cc-ccdf0e356469">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Enter your Name" required name="name">

                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" placeholder="Enter your Phone Number" pattern="[0-9]{10}" required name="phone">

                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter your Email" required name="email">

                    <label for="message">Message</label>
                    <textarea id="message" placeholder="Your Message" style="resize: none;" name="message"></textarea>

                    <div class="button">
                        <button id="submit" type="submit">Submit</button>
                    </div>
                </form>
            </div>

            <div class="contact-right">
                <h2 id="reach">Reach Us</h2>
                <div class="info">
                    <p>Email : Dreamssankalp@gmail.com</p>
                    <p>Phone : +91 7745892255</p>
                    <p>Address: Dream Sankalp BJS college, Bakori Rd, Pune, Maharashtra 412207</p>
                </div>
            </div>
        </div>
    </main>


    <h1 id="map">Locate Us</h1>
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.6698262911736!2d74.00796753645965!3d18.58891843465503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c4a0745dd655%3A0x56669456b6a35005!2sHaveli%2C%20Maharashtra%20412207!5e0!3m2!1sen!2sin!4v1708790387214!5m2!1sen!2sin"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="map"></iframe>
    </div>
    <button type="button" onclick="window.location.href='#header'" id="upwards"><img src="Feature images/uparrow.png"
            alt=""></button>


    <footer>
        <div class="foot">
            <div class="left-section">
                <img src="Background_images/Dream Sankalp Co-op Society Logo.jpeg" alt="Footer Logo">
                <h1 class="heading1">Dream Sankalp Co-op Society</h1>
            </div>
            <div class="footer-content">
                <div class="useful-links">
                    <h2>Useful Links</h2>
                    <ul>
                        <li><a href="homepage.php">Home</a></li>
                        <li><a href="AboutUs.php">AboutUs</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                    </ul>
                </div>
                <div class="facility-links">
                    <h2>Our Facilities</h2>
                    <ul>
                        <li><a href="/Society Management Website/facility.php#parking">Parking</a></li>
                        <li><a href="/Society Management Website/facility.php#security">Security</a></li>
                        <li><a href="/Society Management Website/facility.php#gym">Clubhouse</a></li>
                        <li><a href="/Society Management Website/facility.php#maintain">Maintenance</a></li>
                        <li><a href="/Society Management Website/facility.php#cleaning">Housekeeping</a></li>
                        <li><a href="/Society Management Website/facility.php#water">Water Supply</a></li>
                    </ul>
                </div>
                <div class="address">
                    <div class="infos">
                        <p>Email : Dreamssankalp@gmail.com</p>
                        <p>Phone : +91 7745892255</p>
                        <p id="adr">Address: Dream Sankalp BJS college, Bakori Rd, Pune, Maharashtra 412207</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="copbut">
            <div class="copyright">
                <p>&copy; 2024 Fourise Software Solutions Pvt. Ltd.</p>
            </div>
            <div class="buttons">
                <button type="button"><img src="Feature images/instagram.png" alt=""></button>
                <button type="button"><img src="Feature images/facebook.png" alt=""></button>
                <button type="button"><img src="Feature images/twitter.png" alt=""></button>
            </div>
        </div>
    </footer>


</body>

</html>
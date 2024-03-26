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
    <link rel="stylesheet" href="homepage.css">
    <script src="scroller.js" defer></script>
    <title>Society Management</title>
</head>

<body>
    <div class="scroll-watcher"></div>
    <header id="header">
        <div class="logo">
            <img src="Background_images/Society Logo Main.jpeg" alt="">
            <h2 class="title">Dream Sankalp Co-op Society</h2>
        </div>
        <button id="start" type="button" onclick="window.location.href='login.php'">Get Started</button>
        <button id="start" type="button" onclick="window.location.href='logout.php'">Log Out</button>
    </header>
    <nav class="navigation">
        <a class="links" href="homepage.php">Home</a>
        <div class="dropdown-menu">
            <button class="menu-btn" onclick="window.location.href= 'AboutUs.php'">About Us </button>
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

    <div class="container">
        <div class="heroimg">
        </div>
        <div class="box">
            <h1>Embrace the future with Smart Society Management!!</h1>
            <div class="search">
                <input type="text" placeholder="Search Here!!!" name="search" />
                <button type="submit">
                    <img src="Background_images/search.png" alt="">
                </button>
            </div>
            <p>Dream Sankalp Co-op Society was build with a motive of bringing together different communities. Also to
                provide house for people who has office nearby. As the area is under development, it needed as many
                houses as possible. With this Vision in mind, we came across with the society in 2012 with over 500+
                houses.</p>
        </div>
    </div>

    <h2 id="features">Our Features</h2>
    <div class="features">
        <div class="feat feats">
            <img src="Feature images/6_E.png" alt="">
            <h2>Parking</h2>
            <p>Our designated parking zones ensure secure, hassle-free access with ample, well-lit spaces.</p>
        </div>
        <div class="feat">
            <img src="Feature images/8_E.png" alt="">
            <h2>Security</h2>
            <p>Vigilant guards and surveillance systems maintain safety through round-the-clock monitoring and
                cross-verification.
            </p>
        </div>
        <div class="feat">
            <img src="Feature images/7_E.png" alt="">
            <h2>Power Backup</h2>
            <p>Reliable backup systems guarantee uninterrupted electricity supply, ensuring continuity in essential
                areas.</p>
        </div>
        <div class="feat">
            <img src="Feature images/2_E.png" alt="">
            <h2>Clubhouse</h2>
            <p>A communal hub for members to engage, share ideas, and build connections.</p>
        </div>
        <div class="feat">
            <img src="Feature images/9_E.png" alt="">
            <h2>Water Supply</h2>
            <p>Our reliable infrastructure ensures consistent access to clean water, promoting sustainability.</p>
        </div>
        <div class="feat">
            <img src="Feature images/1_E.png" alt="">
            <h2>Garden Surroundings</h2>
            <p>Enjoy serene ambiance and lush greenery in our meticulously landscaped garden surroundings.
            </p>
        </div>
        <div class="feat">
            <img src="Feature images/4_E.png" alt="">
            <h2>Kids Entertainment</h2>
            <p>Supervised fun and interactive games create an enjoyable experience for children in our entertainment
                section.
            </p>
        </div>
        <div class="feat">
            <img src="Feature images/5_E.png" alt="">
            <h2>Maintenance</h2>
            <p>Efficient services and preventive measures maintain high standards in upkeep and prompt responses.
            </p>
        </div>
        <div class="feat feats">
            <img src="Feature images/3_E.png" alt="">
            <h2>Housekeeping</h2>
            <p>Spotless cleanliness and eco-friendly practices ensure a hygienic environment for residents' comfort.
            </p>
        </div>
    </div>

    <div class="about-img">
        <div class="imgabout">a</div>

        <div class="about">
            <h1>About Us</h1>
            <p>Dream Sankalp Co-op Society was build with a motive of bringing together different communities. Also to
                provide house for people who has office nearby. As the area is under development, it needed as many
                houses as possible. With this Vision in mind, we came across with the society in 2012 with over 500+
                houses.</p>
            <button type="button" onclick="window.location.href= 'AboutUs.html'">Learn More</button>
        </div>
    </div>

    <section class="infinite-scroll">
        <h1 id="tests">Testimonials</h1>
        <div class="scroller" data-duration="slow">
            <ul class="tag-list scroller__inner">
                <li class="slide" data-active>
                    <div class="tests">
                        <div class="img"><img src="Background_images/Shailesh Naikodi.jpeg" alt="Member 1">
                        </div>
                        <p>I've been using the Dream Sankalp website for the past six months, and it has truly
                            transformed the way our community operates. From seamless communication with neighbors to
                            easy bill payments and event planning, this platform has made living in our society more
                            convenient and connected. Kudos to the team for creating such a user-friendly and efficient
                            tool!
                            <br><br>
                            -Shailesh Naikodi
                        </p>
                    </div>
                </li>
                <li class="slide">
                    <div class="tests">
                        <div class="img"><img src="Background_images/Bhushan Choudary.jpeg" alt="Member 2">
                        </div>
                        <p>Managing our society used to be a logistical nightmare, but ever since we started using the
                            Dream Sankalp Society website, everything has become so much smoother. The features for
                            organizing meetings, sharing important documents, and tracking maintenance requests have
                            significantly improved our efficiency. This platform has become an invaluable asset for our
                            committee, making our responsibilities much more manageable.
                            <br><br>
                            -Bhushan Choudary
                        </p>
                    </div>
                </li>
                <li class="slide">
                    <div class="tests">
                        <div class="img"><img src="Background_images/Jayshree Borade.jpeg" alt="Member 3">
                        </div>
                        <p>Having volunteered on the committee for the past year, the Dream Sankalp Society website has
                            proven to be a game-changer. Coordinating meetings, disseminating important updates, and
                            collecting feedback have become so much more efficient. The platform's intuitive design has
                            made my role more enjoyable, allowing us to focus on improving our community instead of
                            getting bogged down by administrative tasks. A big thumbs up from a grateful committee
                            member!
                            <br><br>
                            -Jayshree Borade
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <button type="button" onclick="window.location.href='#header'" id="upwards"><img src="Feature images/uparrow.png" alt=""></button>
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
                    <div class="info">
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
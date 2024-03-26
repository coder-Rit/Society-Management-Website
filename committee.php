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
    <title>Committee Page</title>
    <link rel="stylesheet" href="committee.css">
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
            <button class="menu-btn" onclick="window.location.href='AboutUs.php'">About Us </button>
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
    <section class="parallax">
        <div class="parallax-image"></div>
    </section>


   <div class="container1">
        <div class="committee-members">
            <div class="committee-member">
                <div class="img"><a href="Background_images/Amarnath Dathge- Chairman.jpeg" target="_blank">
                    <img src = "Background_images/Amarnath Dathge- Chairman.jpeg" alt="Member 1" ></a></div>
                <h2>श्री. अमरनाथ पांडुरंग धाडगे</h2>
                <p>Chairman</p>
            </div>

            <div class="committee-member">
                <div class="img"><a href="Background_images/Pravin Lohote- Secretary.jpeg" target="_blank"> 
                <img src = "Background_images/Pravin Lohote- Secretary.jpeg" alt="Member 2"> </a></div>
                <h2>श्री. प्रविण गणपत लोहोटे</h2>
                <p>Secretary</p>
            </div>
          
            <div class="committee-member">
                <div class="img"><a href="Background_images/Namdev Raut- Treasurer.jpeg" target="_blank"> 
                    <img src = "Background_images/Namdev Raut- Treasurer.jpeg" alt="Member 3"> </a></div>
                <h2>श्री. नामदेव रंगनाथ राऊत</h2>
                <p>Treasurer</p>
            </div>
        </div>
    </div>
    <br> 
    <div class="container2">
        <div class="committee-members">
            <div class="committee-member">
                <div class="img"><a href=" Background_images/Abhimanyu.jpeg" target="_blank"> 
                    <img src = " Background_images/Abhimanyu.jpeg" alt="Member 10"> </a></div>
                <h2>श्री. अभिमन्यू चौधरी</h2>
                <p>Mentor</p>
            </div>
            <div class="committee-member">
                <div class="img"><a href="Background_images/Shailendra Shete- Deputy Chairman.jpeg" target="_blank"> 
                    <img src = "Background_images/Shailendra Shete- Deputy Chairman.jpeg" alt="Member 4"> </a></div>
                <h2>श्री. शैलेंद्र सुभाष शेटे</h2>
                <p>Deputy Chairman</p>
            </div>
           
            <div class="committee-member">
                <div class="img"><a href="Background_images/Sunil Deokule- Joint Secretary.jpeg" target="_blank"> 
                    <img src = "Background_images/Sunil Deokule- Joint Secretary.jpeg" alt="Member 6"> </a></div>
                <h2>श्री. सुनिल प्रल्हाद देवकुळे</h2>
                <p>Joint Secretary</p>
            </div>
        </div>
    </div>
    <br>
    <div class="container3">
        <div class="committee-members">
            <div class="committee-member">
                <div class="img"><a href="Background_images/Pramod Nikumbh- Joint Treasurer.jpeg" target="_blank"> 
                    <img src = "Background_images/Pramod Nikumbh- Joint Treasurer.jpeg" alt="Member 7"> </a></div>
                <h2>श्री. प्रमोद भारत निकुंभ</h2>
                <p>Joint Treasurer</p>
            </div>
            <div class="committee-member">
                <div class="img"><a href="Background_images/Bhushan Choudary.jpeg" target="_blank"> 
                    <img src = "Background_images/Bhushan Choudary.jpeg" alt="Member 8"> </a></div>
                <h2>श्री. भूषण शांताराम चौधरी</h2>
                <p>Member</p>
            </div>
           
            <div class="committee-member">
                <div class="img"><a href="  Background_images/Suresh Keru.jpeg" target="_blank"> 
                    <img src = "  Background_images/Suresh Keru.jpeg" alt="Member 9"> </a></div>
                <h2>श्री. इधाते सुरेश केरु</h2>
                <p>Member</p>
            </div>
        </div>
    </div>
    <div class="container4">
        <div class="committee-members">
            <div class="committee-member">
                <div class="img"><a href=" Background_images/Pavankumar Shrivastav.jpeg" target="_blank"> 
                    <img src = "Background_images/Pavankumar Shrivastav.jpeg" alt="Member 11"> </a></div>
                <h2>श्री. पवनकुमार श्रीवास्तव</h2>
                <p>Member</p>
            </div>
            <div class="committee-member">
                <div class="img img1"><a href="Background_images/Sunil Dube.jpeg" target="_blank"> 
                    <img src = "Background_images/Sunil Dube.jpeg" alt="Member 12"> </a></div>
                <h2>श्री. सुनिल गुलाबचंद दुबे</h2>
                <p>Member</p>
            </div>
           
            <div class="committee-member">
                <div class="img img2"><a href=" Background_images/Jay Shah.jpeg" target="_blank"> 
                    <img src = " Background_images/Jay Shah.jpeg" alt="Member 13"> </a></div>
                <h2>श्री. जय शाह</h2>
                <p>Member</p>
            </div>
        </div>
    </div>
    <div class="container5">
        <div class="committee-members">
            <div class="committee-member">
                <div class="img"><a href="Background_images/Ajit Armindan.jpeg" target="_blank"> 
                    <img src = "Background_images/Ajit Armindan.jpeg" alt="Member 14"> </a></div>
                <h2>श्री. अजित अरविंदन</h2>
                <p>Member</p>
            </div>
            <div class="committee-member">
                <div class="img img3"><a href="Background_images/Dadabhau Vaivahre.jpeg" target="_blank"> 
                    <img src = "Background_images/Dadabhau Vaivahre.jpeg" alt="Member 15"> </a></div>
                <h2>श्री. दादाभाऊ बबन व्यवहारे</h2>
                <p>Member</p>
            </div>
           
            <div class="committee-member">
                <div class="img"><a href=" Background_images/Vasant Chitarekar.jpeg" target="_blank"> 
                    <img src = " Background_images/Vasant Chitarekar.jpeg" alt="Member 14"> </a></div>
                <h2>श्री. वसंत बाबाजी चितळकर</h2>
                <p>Member</p>
            </div>
        </div>
    </div>

    
    <div class="container6">
        <div class="committee-members">
            <div class="committee-member">
                <div class="img"><a href="Background_images/Shailesh Naikodi.jpeg " target="_blank"> 
                    <img src = "Background_images/Shailesh Naikodi.jpeg" alt="Member 14"> </a></div>
                <h2>श्री. शैलेश नायकोडी</h2>
                <p>Member</p>
            </div>
            <div class="committee-member">
                <div class="img"><a href="Background_images/Sonali Choudary.jpeg" target="_blank"> 
                    <img src = "Background_images/Sonali Choudary.jpeg" alt="Member 14"> </a></div>
                <h2>सौ. सोनाली अभिमन्यू चौधरी</h2>
                <p>Member</p>
            </div>
            
            <div class="committee-member">
                <div class="img"><a href="Background_images/Jayshree Borade.jpeg" target="_blank"> 
                    <img src = "Background_images/Jayshree Borade.jpeg" alt="Member 14"> </a></div>
                <h2>सौ. जयश्री अशोक बोराडे</h2>
                <p>Member</p>
            </div>

        </div>
    </div> 
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

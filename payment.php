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
    <title>Payment</title>
    <link rel="stylesheet" href="payment.css">
</head>

<body>
    <div class="scroll-watcher"></div>
    <header id="header">
        <div class="logo">
            <img src="Background_images/Society Logo Main.jpeg" alt="">
            <h2 class="title">Dream Sankalp Co-op Society</h2>
        </div>
        <button id="start" type="button" onclick="window.location.href='login.php'">Get Started</button>
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
            <button class="menu-btn" onclick="window.location.href='facility.php'">Facilities</button>
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
        <div class="payment-box">
            <div class="payment-credentials">
                <h2>Payment Credentials</h2>
                <form>

                    <div class="input-row">
                        <label for="card-number">Card Holder Name:</label>
                        <input type="text" id="card-number" name="card-number" required>
                    </div>
                    <br>
                    <div class="input-row">
                        <label for="amount">Amount:</label>
                        <input type="number" id="amount" name="amount" required>
                    </div>
                    <br>
                    <div class="input-row">
                        <label for="card-number">Card Number:</label>
                        <input type="text" id="card-number" name="card-number" required>
                    </div>
                    <br>
                    <div class="input-row">
                        <label for="expiry">Expiry Date:</label>
                        <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>
                    </div>
                    <br>
                    <div class="input-row">
                        <label for="cvv">CVV:</label>
                        <input type="text" id="cvv" name="cvv" required>
                    </div>
                    <br>
                    <div class="input-row">
                        <button type="submit" class="my-button">Pay Now</button>
                    </div>
                </form>
            </div>
            <div class="bank-details">
                <h2>Bank Details</h2>
                <br>
                <p>Bank Name: XYZ Bank</p>
                <br>
                <p>Account Number: XXXXXXXX</p>
                <br>
                <p>IFSC Code: ABCD123456</p>
                <br>
                <p>Maintenance Fee: 500Rs</p>

                <br>

                <h3>Upload the Screenshot of Payment here</h3>
                
                <div class="uploader">
                    <input type="file" id="upload" accept="image/*" onchange="previewImage(event)">
                    <label for="upload" class="upload-btn">Choose Image</label>
                    <img id="preview" src="#" alt="Preview" />
                   
                </div>
               
            
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

  
   
    <script> 
    
        function previewImage(event) {
        const preview = document.getElementById('preview');
        const file = event.target.files[0];
        const reader = new FileReader();
    
        reader.onloadend = function() {
            preview.src = reader.result;
            preview.style.display = 'block';
        }
    
        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    }
    
        
        </script>
</body>

</html>

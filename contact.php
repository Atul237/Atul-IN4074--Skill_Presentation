<link rel="stylesheet" href="styles.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
         BloomInBowl
    </title>
    <link rel="icon" href="Logo.png" type="image/x-icon">
   
</head>
<body>

<!-- Navigation Bar -->
<header>
    <div class="logo">
        <img src="logobarline.png" alt="BloomInBowl Logo">
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="foryou.php">For You</a></li>
            <li><a href="popular.php">Popular</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
</header>


<section id="contact">
    <h3>Contact Us</h3>
    <div id="images-container">
        <img src="ss.jpg" alt="Left Image"> <!-- Replace with actual path -->
        <img src="www.jpg" alt="Right Image"> <!-- Replace with actual path -->
    </div>

    <div id="contact-form-container">
      
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="your Full Name"/>
            <input type="email" name="email" placeholder="Your E-Email"/>
            <textarea name="message" placeholder="Type Your Message Here................."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </div>
</section>

<!-- Thank You Popup -->
<div id="thank-you-popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closeThankYouPopup()">&times;</span>
        <p>Thank you for contacting us!</p>
    </div>
</div>

<script>
    // JavaScript for Thank You popup functionality
    function submitForm() {
        showThankYouPopup();
    }

    function showThankYouPopup() {
        document.getElementById('thank-you-popup').style.display = 'flex';
    }

    function closeThankYouPopup() {
        document.getElementById('thank-you-popup').style.display = 'none';
    }
</script>
<footer>
   <p>Follow Us On:</p>
    <div id="social-media">
        <a href="https://facebook.com" target="_blank"><img src="gb.png" alt="Facebook"></a> <!-- Replace with actual path -->
        <a href="https://twitter.com" target="_blank"><img src="teittwe.png" alt="Twitter"></a> <!-- Replace with actual path -->
        <a href="https://www.instagram.com/_pandit_atul_/" target="_blank"><img src="R.png" alt="Instagram"></a> <!-- Replace with actual path -->
    </div>
    <p>Made By Atul</p>
    <div class="youtube-video">
        <iframe width="400" height="200" src="https://www.youtube.com/embed/Rj_vssRaZlQ" frameborder="0" allowfullscreen></iframe>
    </div>
</footer>
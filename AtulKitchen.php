<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
         BloomInBowl
    </title>
<link rel="icon" href="Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <div class="logo">
        <img src="logobarline.png" alt="BloomInBowl Logo">
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="foryou.php">For You</a></li>
            <li><a href="popular.php"> World Popular</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
</header>
<section id="home">
    <div id="content">
        <img src="IMG_4583.JPG" alt="Image 1"> 
        <h3>Karah Parshad</h3>
        <p>One of the delicacies that is served in Gurudwara as a prasad is this super delicious halwa known as kada prashad. Its everybody’s favorite sweet. Kada Prasad or Atte ka Halwa is like an instant blessing & a reminder that no one will go empty handed from his Doorsteps. This kada parshad recipe is one of our childhood favourites. The taste of kada prashad we get in Gurudwaras is amazing because lots of prayers and love is behind the prashad. Its very easy to make and is made with very less ingredients but one should make it with pure heart and lots of love you will get the nearlly same taste and everyone is going to love it.</p>
    </div>

    <div id="content">
        <img src="Paneer-Butter-Masala-2000x1333.jpg" alt="Image 2"> 
        <h3>Paneer Butter Masala</h3>
        <p>This Paneer Butter Masala recipe is a rich and creamy dish of paneer (Indian cottage cheese) in a tomato, butter and cashew sauce that is known here as “makhani gravy.” The acidity of the tomatoes and the sweetness of the cream make for a velvety, nearly addictive sauce. Creamy Restaurant style Paneer Butter Masala is easy to make at home. This creamy curry is made with onion, tomatoes, cashews, cream and butter (of course!). t has a mild sweet taste and pairs beautifully with garlic naan or jeera rice.</p>
    </div>
    <div id="content">
        <img src="lumpia.jpg" alt="Image 2"> 
        <h3>Lumpia</h3>
        <p>Lumpia is Filipino spring rolls. They are similar to spring rolls you may find in Vietnamese cuisine. They use a crepe as a wrapper, though the crepe is very thin. You can fill your rolls with different Filipino ingredients, including dried fruits. The rolls are then deep-fried and served with vinegar. If you want a little sweetness with your rolls, you can dip them into banana ketchup. You can eat them alongside Chicharon, or you can have them by themselves. Make these amazing Spring Rolls for your next appetizer!</p>
    </div>
    </section>
<script>
   document.addEventListener('DOMContentLoaded', function () {
        const homeSection = document.getElementById('home');
        const contentItems = document.querySelectorAll('#home #content');

        window.addEventListener('scroll', function () {
            const scrollY = window.scrollY || window.pageYOffset;
            const isActive = scrollY >= homeSection.offsetTop;

            if (isActive) {
                homeSection.classList.add('active');
            } else {
                homeSection.classList.remove('active');
            }
        });
});
</script>
<div class="container">
    <div class="text">
        <h2>Why India Has Vast Food Varieties</h2>
        <p>
            India's rich culinary tapestry is a reflection of its diverse culture, history, and geography. The country's vast and varied landscape has given rise to a multitude of ingredients, spices, and cooking techniques. Each region boasts its unique dishes, influenced by local traditions, climate, and available produce. The blending of flavors, aromas, and textures in Indian cuisine is an art form that has been perfected over centuries. From the fiery curries of the north to the coconut-infused delicacies of the south, India's food offerings are a celebration of diversity and a testament to the country's vibrant heritage.
        </p>
    </div>
    <div class="image">
        <img src="INDIN.jpg" alt="Indian Food" style="width: 100%; border-radius: 8px;">
    </div>
</div>
 <h2>Best Around The Globe</h2>
    <div class="carousel-container">
        <div class="carousel">
           
            <img src="butter.jpg" alt="Carousel Image 1" onclick="showPopup('The curry was developed at the Moti Mahal restaurant in the Daryaganj neighbourhood of Old Delhi in the 1950s, after the Partition of India by Kundan Lal Jaggi and Kundan Lal Gujral, who were both Punjabi refugees from Peshawar. The curry was made by chance by mixing leftover tandoori chicken in a tomato gravy, rich in butter (makhan).')">
        
            <img src="Rajma.jpg" alt="Carousel Image 2" onclick="showPopup('This simple Indian dish consists of red beans (rajma) and cooked rice (chawal). Rajma is traditionally made with onions and tomato purée which acts as a gravy for the red beans. This dish makes for a complete vegetarian meal that is suitable for lunch or dinner. If desired, rajma chawal can be flavored with a variety of spices such as chili peppers, cinnamon, bay leaves, ginger, garlic, coriander, and cumin. Although the dish is quite simple to prepare, it takes some time because the beans are typically soaked overnight before the preparation.')">
            <img src="Kimchi.jpg" alt="Carousel Image 3" onclick="showPopup('Kimchi, a staple of Korean households for generations, has gained superstar status in the kitchen, and it’s easy to see why. With a complex flavor and a variety of uses, kimchi appeal is broad and deep. Made from vegetables, garlic, ginger, and fish sauce, it hits a range of flavors—sweet, sour, and spicy—and works as a condiment, an ingredient, a dip, and a side dish all on its own.')">
            <img src="sucai.jpg" alt="Carousel Image 4" onclick="showPopup('Jiangsu cuisine, also called Su cuisine, one of the eight Chinese cuisines with over 2,000 years’ history, is famous for its beautiful and delicate appearance and the fresh, umami, natural, mild and lightly sweet taste. Most of the Jiangsu cuisine dishes well preserve the original flavor of food materials.')">
            <img src="ginataang-halohalo.jpg" alt="Carousel Image 5" onclick="showPopup('Ginataang halo-halo is a classic Filipino dessert dish made of sweet potatoes, purple yam, taro, tapioca pearls, bilo bilo balls, langka strips and saba banana all stewed in a sweet and creamy coconut sauce. Whether eaten hot or cold, the ginataang halo halo will surely tickle the tastebuds of a sweet tooth. If you can’t decide for a sweet dessert, the ginataang halo halo will give you everything you want to sweetly conclude your meal!')">
            <img src="Plain-Dosa.jpg" alt="Carousel Image 6" onclick="showPopup('Dosa is a popular South Indian dish made from fermented batter consisting of rice and black gram (also known as urad dal). The batter is spread thin on a hot griddle or flat pan and cooked until crispy on one side, then flipped and cooked on the other side. The resulting thin, crepe-like pancake is usually served with a variety of chutneys, sambar (a lentil-based vegetable stew), and/or potato masala.')">
            <img src="R.jpg" alt="Carousel Image 6" onclick="showPopup(' Adobo Derived from the Spanish word adobar, or “to marinate,” adobo unites the many places that once fell under the Spanish Empire. But adobo is also an example of how separate cultures persisted and evolved despite the Spanish influence. The word adobo speaks to a shared history of Spanish occupation, but taste adobo from Mexico beside adobo from the Philippines and you’ll instantly witness how traditions diverged.')">
            </div>
    </div>
    <div class="carousel-btn carousel-left">&#9665;</div>
    <div class="carousel-btn" onclick="nextSlide()">&#9655;</div>
</section>
<div class="popup" id="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <p id="popup-description"></p>
    </div>
</div>
<script>

    let currentSlideIndex = 0;
    const carouselImages = document.querySelectorAll('.carousel img');
    const popup = document.getElementById('popup');
    const popupDescription = document.getElementById('popup-description');

    function nextSlide() {
        currentSlideIndex = (currentSlideIndex + 1) % carouselImages.length;
        updateCarousel();
    }

    function updateCarousel() {
        const transformValue = `translateX(-${currentSlideIndex * 100}%)`;
        carouselImages.forEach(img => {
            img.style.transform = transformValue;
        });
    }

    function showPopup(description) {
        popupDescription.textContent = description;
        popup.style.display = 'flex';
    }

    function closePopup() {
        popup.style.display = 'none';
    }
</script>
<!-- Popular Page -->
<section id="popular">
    <!-- Add blog content and images here -->
</section>

<!-- Contact Us Page -->
<section id="contact">
    <!-- Add contact form and images here -->
</section>
</div>
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
</body>
</html>

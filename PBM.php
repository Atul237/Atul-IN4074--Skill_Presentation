<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <style>
        /* Add your CSS styles here for product details */
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
            color: #333;
        }

        .product {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
        }

        .product-info {
            margin-bottom: 20px;
        }

        .product-info h2 {
            margin-top: 0;
        }

        .product-info p {
            margin-bottom: 10px;
        }

        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: center;
        }

        .rating > span {
            display: inline-block;
            position: relative;
            width: 1.1em;
            font-size: 30px;
            transition: transform 0.3s;
            cursor: pointer;
        }

        .rating > span:hover:before,
        .rating > span:hover ~ span:before {
            content: "\2605";
            position: absolute;
        }

        .recipe {
            margin-top: 20px;
        }

        .recipe h3 {
            margin-bottom: 10px;
        }

        .recipe p {
            margin-bottom: 5px;
        }

        .review-form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .review-form label {
            display: block;
            margin-bottom: 5px;
        }

        .review-form input[type="text"],
        .review-form input[type="email"],
        .review-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .review-form input[type="submit"] {
            background-color: #d9534f;
            color: #fff;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .review-form input[type="submit"]:hover {
            background-color: #c9302c;
        }

        .youtube-link {
            margin-top: 20px;
            text-align: left;
        }

        .youtube-link a {
            background-color: #ffc107;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .youtube-link a:hover {
            background-color: #ff9800;
        }
    </style>
</head>
<body>
    <div class="product">
        <div class="product-info">
            <h2>Lumpia</h2>
            <p>Lumpia is a Filipino version of spring rolls, typically filled with ground meat and vegetables.</p>
            <p><strong>Ingredients:</strong></p>
            <ul>
                <li>1 lb ground pork</li>
                <li>1 cup carrots, julienned</li>
                <li>1 cup cabbage, shredded</li>
                <li>2 cloves garlic, minced</li>
                <li>1 onion, finely chopped</li>
                <li>2 tablespoons soy sauce</li>
                <li>1 teaspoon ground black pepper</li>
                <li>Spring roll wrappers</li>
                <li>Oil for frying</li>
            </ul>

            <p><strong>Instructions:</strong></p>
            <ol>
                <li><strong>Prepare Filling:</strong> In a pan, sauté garlic and onions until fragrant. Add ground pork and cook until browned. Add carrots, cabbage, soy sauce, and ground black pepper. Stir well and cook until vegetables are tender. Let the filling cool.</li>
                <li><strong>Wrap Lumpia:</strong> Place a spoonful of the filling onto a spring roll wrapper. Fold the sides over the filling, then roll tightly. Seal the edge with water.</li>
                <li><strong>Fry Lumpia:</strong> Heat oil in a deep pan or fryer. Fry lumpia until golden brown and crispy, turning occasionally. Drain on paper towels to remove excess oil.</li>
                <li><strong>Serve:</strong> Serve lumpia hot with sweet chili sauce or vinegar dipping sauce.</li>
            </ol>
        </div>
        <div class="youtube-link">
        <a href="https://www.youtube.com/" target="_blank">Watch Lumpia Recipe Video</a>
        
    </div>
    
        <!-- Review Form -->
        <div class="review-form">
            <h3>Leave Your Review</h3>
            <form action="userinfoa.php" method="post">
            <input type="text" name="Name" placeholder="your Full Name"/>
            <input type="email" name="email" placeholder="Your E-Email"/>
            <textarea name="Comment" placeholder="Type Your Message Here................."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
        </div>
    </div>
    
    <!-- YouTube Link -->
    <div class="youtube-link">
    <a href="index.php" class="btn btn-primary mt-3">Back to Products</a>
    </div>

    <script>
        function setRating(rating) {
            var stars = document.querySelectorAll(".rating span");
            for (var i = 0; i < stars.length; i++) {
                if (i < rating) {
                    stars[i].textContent = "★";
                    stars[i].style.transform = "scale(1)";
                } else {
                    stars[i].textContent = "☆";
                    stars[i].style.transform = "scale(0)";
                }
            }
            document.getElementById("user-rating").setAttribute("data-rating", rating);
        }
    </script>
</body>
</html>

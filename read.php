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
            <h2>Paneer Butter Masala</h2>
            <p>Paneer butter masala is a rich and creamy dish made with paneer (Indian cottage cheese), tomato sauce, and a variety of aromatic spices.</p>
            <p><strong>Ingredients:</strong></p>
            <ul>
                <li>200g paneer (Indian cottage cheese), cubed</li>
                <li>2 large onions, finely chopped</li>
                <li>3 large tomatoes, pureed</li>
                <li>2-3 green chilies, slit lengthwise (adjust according to spice preference)</li>
                <li>1 tablespoon ginger-garlic paste</li>
                <li>1 teaspoon red chili powder</li>
                <li>1 teaspoon turmeric powder</li>
                <li>1 teaspoon garam masala</li>
                <li>1 teaspoon coriander powder</li>
                <li>1/2 cup fresh cream</li>
                <li>2 tablespoons butter</li>
                <li>1 tablespoon oil</li>
                <li>1 teaspoon sugar</li>
                <li>Salt to taste</li>
                <li>Fresh coriander leaves for garnishing</li>
            </ul>

            <p><strong>Instructions:</strong></p>
            <ol>
                <li><strong>Marinate Paneer:</strong> In a bowl, mix all the ingredients listed under 'For the Marinade' and add paneer cubes. Let it marinate for at least 30 minutes.</li>
                <li><strong>Fry Paneer:</strong> Heat oil in a pan, add marinated paneer cubes, and shallow fry until golden brown. Remove and set aside.</li>
                <li><strong>Prepare Gravy:</strong> In the same pan, add butter. Once melted, add chopped onions and green chilies. Sauté until onions turn golden brown.</li>
                <li><strong>Add Spices:</strong> Add ginger-garlic paste and sauté for a minute. Then add red chili powder, turmeric powder, coriander powder, and garam masala. Sauté for another minute.</li>
                <li><strong>Add Tomato Puree:</strong> Add tomato puree and cook until the oil separates from the masala. This may take around 10-15 minutes on medium heat.</li>
                <li><strong>Blend the Gravy:</strong> Once the masala is cooked, let it cool down a bit. Then blend it into a smooth paste using a blender or food processor.</li>
                <li><strong>Finish Cooking:</strong> Return the blended gravy to the pan. Add sugar and salt to taste. Stir well and let it simmer for a few minutes.</li>
                <li><strong>Add Paneer and Cream:</strong> Add fried paneer cubes to the gravy. Mix gently. Then add fresh cream and mix well.</li>
                <li><strong>Garnish and Serve:</strong> Garnish with fresh coriander leaves and a dollop of cream. Serve hot with naan, roti, or rice.</li>
            </ol>
        </div>
        <div class="youtube-link">
        <a href="https://youtu.be/U1LVDFwi8qI?feature=shared" target="_blank">Watch Paneer Butter Masala Recipe Video</a>
        
    </div>

        <!-- Review Form -->
        <div class="review-form">
            <h3>Leave Your Review</h3>
            <form action="#" method="post">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="rating">Your Rating:</label>
                <div class="rating" id="user-rating">
                <span onclick="setRating(1)">☆</span>
            <span onclick="setRating(2)">☆</span>
            <span onclick="setRating(3)">☆</span>
            <span onclick="setRating(4)">☆</span>
            <span onclick="setRating(5)">☆</span>
                </div>
                <label for="review">Your Review:</label>
                <textarea id="review" name="review" rows="4" required></textarea>
                <input type="submit" value="Submit Review">
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




        
    


           
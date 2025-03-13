    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clothing Store</title>
        <script src="https://kit.fontawesome.com/YOUR-FONT-AWESOME-CODE.js" crossorigin="anonymous"></script>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: Arial, sans-serif;
            }

            body {
                background-color: #f8f8f8;
            }

            /* Product Section */
            .product-section {
                max-width: 1200px;
                margin: 40px auto;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                gap: 20px;
            }

            .product-card {
                width: 250px;
                background: white;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 15px;
                text-align: center;
            }

            .product-card img {
                width: 100%;
                border-radius: 10px;
            }

            .product-card h4 {
                margin: 10px 0;
                font-size: 16px;
            }

            .product-card p {
                color: #888;
                font-size: 14px;
            }

            .product-card button {
                margin-top: 10px;
                padding: 8px;
                width: 100%;
                border: none;
                border-radius: 5px;
                background: #6C63FF;
                color: white;
                cursor: pointer;
                font-size: 14px;
            }

            /* Footer */
            footer {
                background: #222;
                color: #fff;
                padding: 40px 0;
                margin-top: 40px;
            }

            .footer-container {
                display: flex;
                justify-content: space-around;
                max-width: 1200px;
                margin: 0 auto;
                flex-wrap: wrap;
            }

            .footer-section {
                width: 22%;
            }

            .footer-section h3 {
                font-size: 16px;
                margin-bottom: 15px;
                font-weight: bold;
            }

            .footer-section ul {
                list-style: none;
            }

            .footer-section ul li {
                margin-bottom: 10px;
                cursor: pointer;
            }

            .footer-section p {
                font-size: 14px;
                line-height: 1.6;
            }

            .social-icons i {
                font-size: 20px;
                margin-right: 10px;
                cursor: pointer;
            }

            .footer-section input {
                width: 100%;
                padding: 8px;
                margin-bottom: 10px;
                border-radius: 5px;
                border: none;
                outline: none;
            }

            .footer-section button {
                width: 100%;
                padding: 10px;
                border: none;
                border-radius: 5px;
                background: #6C63FF;
                color: white;
                cursor: pointer;
                font-size: 14px;
            }

            .footer-bottom {
                text-align: center;
                margin-top: 20px;
                padding: 10px 0;
                border-top: 1px solid #444;
                font-size: 14px;
            }
        </style>
    </head>
    <body>

    <!-- Product Section -->
    <div class="product-section">
        <div class="product-card">
        <img src="{{ asset('jacket.png') }}" alt="Men's Jacket">

            
            <h4>Men's Jacket</h4>
            <p>$59.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
        <img src="{{ asset('women.png') }}" alt="Women's Dress">
            <h4>Women's Dress</h4>
            <p>$49.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
        <img src="{{ asset('shoe.png') }}" alt="Running Shoes">
            <h4>Running Shoes</h4>
            <p>$79.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
        <img src="{{ asset('shirt.png') }}" alt="T-Shirt">
            <h4>Casual T-Shirt</h4>
            <p>$19.99</p>
            <button>Add to Cart</button>
        </div>
    </div>


    </body>
    </html>

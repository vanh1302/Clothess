<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <script src="https://kit.fontawesome.com/YOUR-FONT-AWESOME-CODE.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        footer {
            background: #222;
            color: #fff;
            padding: 40px 0;
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

<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>CATEGORIES</h3>
            <ul>
                <li>Women</li>
                <li>Men</li>
                <li>Shoes</li>
                <li>Watches</li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>HELP</h3>
            <ul>
                <li>Track Order</li>
                <li>Returns</li>
                <li>Shipping</li>
                <li>FAQs</li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>GET IN TOUCH</h3>
            <p>35 ngõ 160 đường Hoàng Mai, phường Hoàng Văn Thụ, Hoàng Mai, Hà Nội Hotline: +84 936038283</p>
            <div class="social-icons">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest"></i>
            </div>
        </div>
        <div class="footer-section">
            <h3>NEWSLETTER</h3>
            <input type="email" placeholder="email@example.com">
            <button>SUBSCRIBE</button>
        </div>
    </div>
    <div class="footer-bottom">
        <p>ICON-PAY ICON-PAY ICON-PAY ICON-PAY</p>
        <p>Copyright ©2021 All rights reserved | Made with ❤️ by Colorlib & distributed by ThemeWagon</p>
    </div>
</footer>

</body>
</html>

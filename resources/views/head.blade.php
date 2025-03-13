<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .top-bar {
            background: black;
            color: white;
            padding: 10px 0;
            text-align: center;
            font-size: 14px;
        }
        .navbar {
            padding: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .hero {
            text-align: center;
            padding: 150px 0;
            background: linear-gradient(to bottom, white, #f8f9fa);
        }
        .shop-btn {
            background: blue;
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
        }
        .shop-btn:hover {
            background: darkblue;
        }
        .icon-links {
            display: flex;
            align-items: center;
        }
        .icon-links a {
            color: black;
            font-size: 20px;
            margin-left: 15px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="top-bar">Free shipping </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
                <div class="icon-links">
                    <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                    <a href="#"><i class="fa-solid fa-heart"></i></a>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="container">
    <div class="row align-items-center">
        <!-- Phần nội dung bên trái -->
        <div class="col-md-6">
            <div class="hero">
                <h5 class="text-muted">Sky Shop For Life</h5>
                <h1 class="fw-bold display-3">NEW SEASON</h1>
                <a href="#" class="shop-btn btn btn-primary mt-3">SHOP NOW</a>
            </div>
        </div>
        <!-- Phần hình ảnh bên phải -->
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/banner-02.jpg') }}" alt="Banner" class="hero-image">
        </div>
    </div>
</div>

<style>
.hero-image {
    width: 130%; /* Giảm kích thước xuống 80% của cột chứa */
    max-width: 620px; /* Giới hạn tối đa ảnh không quá lớn */
    height: 470px; /* Giữ tỷ lệ khung hình */
    object-fit: cover;
    border-radius: 10px; /* Bo góc nhẹ */
}
</style>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

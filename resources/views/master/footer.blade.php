<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Bán Truyện</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom CSS -->
    <style>
        body {
            padding-top: 60px; /* Đảm bảo nội dung không bị che khuất bởi thanh menu */
            font-family: Arial, sans-serif; /* Sử dụng font chữ Arial hoặc font chữ sans-serif */
            margin: 0; /* Loại bỏ margin mặc định của body */
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Thiết lập chiều cao tối thiểu bằng 100% chiều cao của màn hình */
        }
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            margin-top: auto; /* Footer sẽ tự động điều chỉnh để luôn ở dưới cùng */
            width: 100%; /* Đảm bảo chiều rộng của footer bằng với chiều rộng của màn hình */
            box-sizing: border-box; /* Đảm bảo padding và border được tính vào chiều rộng và chiều cao */
        }
        .footer p {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <!-- Navbar Bootstrap -->
        <!-- Bạn có thể thêm thanh menu ở đây -->
    </header>

    <div class="container">
        <!-- Nội dung của trang -->
    </div>

    <footer class="footer bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>Your website description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/">Trang chủ</a></li>
                        <li><a href="/sanpham">Sản phẩm</a></li>
                        <li><a href="/support">Support</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <address>
                        123 Main Street<br>
                        City, State, ZIP<br>
                        <i class="fas fa-phone"></i> (123) 456-7890<br>
                        <i class="fas fa-envelope"></i> info@example.com
                    </address>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS và các kịch bản cần thiết khác -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

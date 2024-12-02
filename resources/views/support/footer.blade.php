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
      padding-top: 60px;
      /* Đảm bảo nội dung không bị che khuất bởi thanh menu */
      font-family: Arial, sans-serif;
      /* Sử dụng font chữ Arial hoặc font chữ sans-serif */
      margin: 0;
      /* Loại bỏ margin mặc định của body */
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      /* Thiết lập chiều cao tối thiểu bằng 100% chiều cao của màn hình */
    }

    .footer {
      background-color: #343a40;
      color: #fff;
      padding: 20px 0;
      margin-top: auto;
      /* Footer sẽ tự động điều chỉnh để luôn ở dưới cùng */
      width: 100%;
      /* Đảm bảo chiều rộng của footer bằng với chiều rộng của màn hình */
      box-sizing: border-box;
      /* Đảm bảo padding và border được tính vào chiều rộng và chiều cao */
    }

    .footer p {
      margin-bottom: 0;
    }
  </style>
</head>

<body>
  <div class="footer">
    <footer class="text-center text-lg-start text-white" style="background-color: #929fba">
      <div class="container p-4 pb-0">
        <section class="">
          <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Company name</h6>
              <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                consectetur adipisicing elit.</p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
              <p><a class="text-white" href="/">Trang chủ</a></p>
              <p><a class="text-white" href="/sanpham">Tất cả loại truyện</a></p>
              <p><a class="text-white" href="/support">Liên hệ</a></p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
              <p><i class="fas fa-home mr-3"></i> Thành Phố Huế, NY 10012, US</p>
              <p><i class="fas fa-envelope mr-3"></i> mynamerot11@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 0366864016</p>
              <p><i class="fas fa-print mr-3"></i> + 0377972825</p>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>
              <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998"
                href="https://www.facebook.com" role="button"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="https://twitter.com"
                role="button"><i class="fab fa-twitter"></i></a>
              <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39"
                href="https://plus.google.com" role="button"><i class="fab fa-google"></i></a>
              <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac"
                href="https://www.instagram.com" role="button"><i class="fab fa-instagram"></i></a>
              <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca"
                href="https://www.linkedin.com" role="button"><i class="fab fa-linkedin-in"></i></a>
              <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="https://github.com"
                role="button"><i class="fab fa-github"></i></a>
            </div>
          </div>
        </section>
      </div>
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright: <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
    </footer>
  </div>

  <!-- Bootstrap JS và các kịch bản cần thiết khác -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
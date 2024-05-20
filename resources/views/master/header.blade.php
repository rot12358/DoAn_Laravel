<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">Trang chủ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/sanpham">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/support">Liên hệ</a>
                        </li>
                        <li class="nav-item dropdown">
                            @auth <!-- Kiểm tra xem người dùng đã đăng nhập hay chưa -->
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Thay đổi truyện</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('posts.create') }}">Thêm truyện</a></li>
                                    <li><a class="dropdown-item" href="{{ route('posts.index') }}">Chỉnh sửa truyện</a></li>
                                </ul>
                            @else <!-- Nếu chưa đăng nhập, không cho phép click vào phần "Thay đổi truyện" -->
                                <a class="nav-link disabled" href="#" aria-disabled="true">Thay đổi truyện</a>
                            @endauth
                        </li>
                        <li class="nav-item dropdown">
                            @auth <!-- Kiểm tra xem người dùng đã đăng nhập hay chưa -->
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Thay đổi danh mục</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('categories.create') }}">Thêm Danh Mục</a></li>
                                    <li><a class="dropdown-item" href="{{ route('categories.index') }}">Chỉnh sửa Danh Mục</a></li>
                                </ul>
                            @else <!-- Nếu chưa đăng nhập, không cho phép click vào phần "Thay đổi truyện" -->
                                <a class="nav-link disabled" href="#" aria-disabled="true">Thay đổi truyện</a>
                            @endauth
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                    @if(Auth::check())
                    @if (Route::has('logout'))
                        <li class="nav-item"><a class="nav-link" href="#">Hello {{Auth::user()->name}}</a></li>
                       
                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    @endif
                @else
                    @if (Route::has('login'))
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    @endif
                @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Phần ảnh dưới header -->
        <div class="header-image" style="height: 300px; background-image: url('{{ asset('images/truyen.jpg') }}'); background-size: cover; background-position: center;"></div>
    </header>

    <!-- Nội dung chính của trang -->
    <div class="container">
       
    </div>

    <!-- Bootstrap JS và các kịch bản cần thiết khác -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

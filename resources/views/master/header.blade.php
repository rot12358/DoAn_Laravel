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
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('images/logo.jpg.png') }}" alt="Logo" style="height: 80px; width: 100px;">
                    Trang chủ
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/sanpham">Tất cả loại truyện</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/support">Liên hệ</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @if(Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" href="#">Hello {{ Auth::user()->name }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Account
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">  
                                <li><a class="dropdown-item text-dark" href="{{ route('posts.index') }}">Tạo bài viết</a></li>
                                    <li><a class="dropdown-item text-dark" href="{{ route('posts.create') }}">Tạo bài viết</a></li>
                                    <li><a class="dropdown-item text-dark" href="{{ route('categories.create') }}">Tạo danh mục</a></li>
                                    <li><a class="dropdown-item text-dark" href="{{ route('categories.index') }}">Sửa danh mục</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST" class="dropdown-item text-dark">
                                            @csrf
                                            <button type="submit" class="btn btn-dark">Đăng xuất</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                            @endif
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Phần ảnh dưới header -->
    </header>

    <!-- Nội dung chính của trang -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap JS và các kịch bản cần thiết khác -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

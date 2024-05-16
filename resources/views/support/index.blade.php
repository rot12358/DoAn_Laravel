<!-- resources/views/support/index.blade.php -->
@extends('layouts.master')
@section('support')
    <title>Support</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px;
            font-family: Arial, sans-serif;
        }
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
        }
        .footer p {
            margin-bottom: 0;
        }
    </style>
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
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/support">Hỗ trợ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        <h1>Trang Hỗ Trợ</h1>
        <p>Đây là trang hỗ trợ của chúng tôi. Hãy liên hệ nếu bạn cần trợ giúp.</p>
        
        <form action="{{ route('support.send') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nhập họ và tên của bạn">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Nhập địa chỉ email của bạn">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại của bạn">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ của bạn">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Thông tin bạn muốn hỗ trợ</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Nhập thông tin bạn muốn hỗ trợ"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Gửi</button>
        </form>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

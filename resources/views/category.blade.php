@extends('master.master')

@section('content')
@foreach ($categories as $category)
<div class="container">
    <h1 class="text-center">{{ $category->theloaitruyen }}</h1>
    <div class="row">
        @foreach($category->posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <a href="{{ route('show.show',['id' => $post->id]) }}">
                    <div class="image-container">
                        <img src="{{ $post->anhgioithieu }}" alt="{{ $post->tentruyen }}" class="card-img-top img-fluid custom-image"> <!-- Thêm class custom-image -->
                    </div>
                </a>
                <div class="card-body">
                    <h5 class="card-title">Tên Truyện: {{ $post->tentruyen }}</h5>
                    <p class="card-text">Thể loại: {{ $post->theloai }}</p>
                    <!-- <p class="card-text">Giới thiệu: {{ $post->thongtingioithieu }}</p>
                    <p class="card-text">Giá: {{ $post->gia }}.000 VNĐ</p> -->
                    <p class="card-text">Tác giả: {{ $post->tacgia }}</p>
                    <p class="card-text">Nhà Xuất Bản: {{ $post->nxb }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endforeach
@endsection

@section('styles')
<style>
    .custom-image {
        width: 100%;
        height: 200px; /* Thiết lập chiều cao cố định cho tất cả các hình ảnh */
        object-fit: cover; /* Đảm bảo ảnh không bị méo khi căn chỉnh */
    }
</style>
@endsection

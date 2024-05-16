@extends('layouts.master')

@section('sanpham')
<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card">
            <a href="{{ route('show.show',['id' => $post->id]) }}">
                    <img src="{{ $post->anhgioithieu }}" alt="{{ $post->tentruyen }}" class="card-img-top img-fluid custom-img"> <!-- Thêm class custom-img -->
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
@endsection

@extends('master.master')

@section('sachtruyen')
@foreach ($categories as $category)
<div class="container">
    <h1 class="text-center title">{{ $category->theloaitruyen }}</h1>
    <div class="row">
        @foreach($category->posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <a href="{{ route('show.show',['id' => $post->id]) }}">
                    <div class="image-container">
                        <img src="{{ $post->anhgioithieu }}" alt="{{ $post->tentruyen }}" class="card-img-top img-fluid custom-image">
                    </div>
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $post->tentruyen }}</h5>
                    <p class="card-text">Thể loại: {{ $post->theloai }}</p>
                    <p class="card-text">Tác giả: {{ $post->tacgia }}</p>
                    <p class="card-text">Nhà Xuất Bản: {{ $post->nxb }}</p>
                    
                    <style>
                    .custom-link {
                        background-color: #ff7f50; /* Màu cam */
                        color: #fff; /* Màu chữ trắng */
                        border: 1px solid #ff7f50; /* Viền màu cam */
                    }
                    </style>
                    <a href="{{ route('show.show',['id' => $post->id]) }}" class="d-block text-center border p-2 custom-link">Xem thêm</a>
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
        height: 200px;
        object-fit: cover;
    }
</style>
@endsection

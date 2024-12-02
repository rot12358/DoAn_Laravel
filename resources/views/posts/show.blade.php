@extends('master.master')

@section('sanpham')
<div class="container">
    <div class="row g-3"> <!-- Khoảng cách giữa các sản phẩm -->
        @foreach($posts as $post)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3"> <!-- 4 sản phẩm mỗi hàng -->
                <div class="card h-100 d-flex flex-column"> <!-- Đồng đều chiều cao thẻ card -->
                    <a href="{{ route('show.show', ['id' => $post->id]) }}" class="text-decoration-none">
                        <div class="ratio ratio-4x3 overflow-hidden"> <!-- Tỉ lệ 4:3 cho ảnh -->
                            <img src="{{ $post->anhgioithieu }}" alt="{{ $post->tentruyen }}"
                                class="card-img-top img-fluid">
                        </div>
                    </a>
                    <div class="card-body d-flex flex-column"> <!-- Đồng đều chiều cao card-body -->
                        <h5 class="card-title text-truncate">Name: {{ $post->tentruyen }}</h5>
                        <p class="card-text text-truncate">Thể loại: {{ $post->theloai }}</p>
                        <p class="card-text text-truncate">Tác giả: {{ $post->tacgia }}</p>
                        <p class="card-text text-truncate">Nhà Xuất Bản: {{ $post->nxb }}</p>
                        <a href="{{ route('show.show', ['id' => $post->id]) }}"
                            class="btn btn-primary mt-auto text-center">Xem thêm</a> <!-- Đẩy nút xuống dưới -->
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
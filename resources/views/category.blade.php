@extends('master.master')

@section('sachtruyen')
<div class="section-stories-hot mb-3">
    <div class="container">
        <div class="row">
            <div class="head-title-global d-flex justify-content-between mb-2">
                <div class="col-6 col-md-4 col-lg-4 head-title-global__left d-flex align-items-center">
                    <h2 class="me-2 mb-0 border-bottom border-secondary pb-1">
                        <a href="#" class="d-block text-decoration-none text-dark fs-4 story-name"
                            title="Truyện Hot">Truyện Hot</a>
                    </h2>
                    <i class="fa-solid fa-fire-flame-curved"></i>
                </div>

                <div class="col-4 col-md-3 col-lg-2">
                    <select class="form-select select-stories-hot" aria-label="Truyện hot"
                        onchange="filterByCategory(this.value)">
                        <option value="all" selected>Tất cả</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->theloaitruyen }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
        </div>

        <div class="container">
            @foreach ($categories as $category)
                <h1 class="text-center title">{{ $category->theloaitruyen }}</h1>
                <div class="row g-3"> <!-- Khoảng cách giữa các sản phẩm -->
                    @foreach($category->posts->take(4) as $post)  <!-- Chỉ lấy 4 sản phẩm đầu tiên -->
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
            @endforeach
        </div>
    </div>
</div>

</div>
</div>
<style>
    .custom-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
</style>

@endsection
@section('scripts')
<!-- Liên kết file JavaScript -->
<script src="{{ asset('js/filterCategory.js') }}"></script>
@endsection
@section('styles')
@endsection
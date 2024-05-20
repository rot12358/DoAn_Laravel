@extends('layouts.master')
@section('edit')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật Truyện</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.update', $post->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="tentruyen" class="form-label">Tên truyện</label>
                            <input type="text" name="tentruyen" value="{{ $post->tentruyen }}" class="form-control" id="tentruyen">
                        </div>

                        <div class="mb-3">
                            <label for="anhgioithieu" class="form-label">Ảnh Giới thiệu</label>
                            <input type="text" name="anhgioithieu" value="{{ $post->anhgioithieu }}" class="form-control" id="anhgioithieu">
                        </div>

                        <div class="mb-3">
                            <label for="theloai" class="form-label">Thể loại</label>
                            <input type="text" name="theloai" value="{{ $post->theloai }}" class="form-control" id="theloai">
                        </div>

                        <div class="mb-3">
                            <label for="thongtingioithieu" class="form-label">Thông tin giới thiệu</label>
                            <input type="text" name="thongtingioithieu" value="{{ $post->thongtingioithieu }}" class="form-control" id="thongtingioithieu">
                        </div>

                        <div class="mb-3">
                            <label for="gia" class="form-label">Giá</label>
                            <input type="text" name="gia" value="{{ $post->gia }}" class="form-control" id="gia">
                        </div>

                        <div class="mb-3">
                            <label for="tacgia" class="form-label">Tác giả</label>
                            <input type="text" name="tacgia" value="{{ $post->tacgia }}" class="form-control" id="tacgia">
                        </div>

                        <div class="mb-3">
                            <label for="nxb" class="form-label">Nhà Xuất Bản</label>
                            <input type="text" name="nxb" value="{{ $post->nxb }}" class="form-control" id="nxb">
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Danh mục</label>
                            <select name="category_id" class="form-select" id="category">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->theloaitruyen }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-dark">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

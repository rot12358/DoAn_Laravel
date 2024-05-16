@extends('layouts.master')


@section('create')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm Truyện</div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Tên Truyện</label>
                            <input type="text" name="tentruyen" value="{{ old('tentruyen') }}" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Ảnh giới thiệu</label>
                            <input type="text" name="anhgioithieu" value="{{ old('anhgioithieu') }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Thể loại</label>
                            <input type="text" name="theloai" value="{{ old('theloai') }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Thông tin giới thiệu</label>
                            <input type="text" name="thongtingioithieu" value="{{ old('thongtingioithieu') }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Giá</label>
                            <input type="text" name="gia" value="{{ old('gia') }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Tác giả</label>
                            <input type="text" name="tacgia" value="{{ old('tacgia') }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Nhà Xuất Bản</label>
                            <input type="text" name="nxb" value="{{ old('nxb') }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>
                       
                        <div class="mb-3">
                    <label for="category" class="form-label">Danh mục</label>
                    <select name="category_id" class="form-select" id="category">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->theloaitruyen }}</option>
                        @endforeach
                    </select>
                </div>

                        <button type="submit" class="btn btn-dark">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
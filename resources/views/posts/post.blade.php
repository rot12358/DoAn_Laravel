@extends('layouts.master')

@section('content1')

                            <div class="tentruyen">
                                <a href="/">Quay lai</a>
                            <h5 class="card-title" style="margin:30px 0;">Tên Truyện: {{ $post->tentruyen }}</h5><div>
                            <p class="card-text" style="max-width: 1600px;display:flex;margin:10px 15px">{{ $post->thongtingioithieu }}</p>
                            <p class="card-text" style="max-width: 1600px;display:flex;">{{ $post->thongtingioithieu }}</p>
                            <p class="card-text" style="max-width: 1600px;display:flex;">{{ $post->thongtingioithieu }}</p>
                            <p class="card-text" style="max-width: 1600px;display:flex;">{{ $post->thongtingioithieu }}</p>
                            <p class="card-text text-end"><strong>Tác giả:</strong> {{ $post->tacgia }}</p> <!-- Sử dụng lớp text-end để căn chỉnh về bên phải -->
                            <p class="card-text text-end"> <!-- Tạo khoảng trống -->
                                <strong>Nhà Xuất Bản:</strong>
                                <span style="padding-right: 50px;">{{ $post->nxb }}</span>
                            </p>
                        



@endsection

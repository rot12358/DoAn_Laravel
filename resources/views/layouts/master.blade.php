<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    @include('layouts.header')
    @section('content1')
    @show
    @section('sanpham')
    @show
    @section('content')
    @show
    @section('support')
    @show
    @section('create')
    @show
    @section('edit')
    @show
   

    @include('master.footer')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
 

</head>
<body>
    @include('layouts.header')
    @section('sachtruyen')
    @show
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
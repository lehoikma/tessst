@extends('layout')
@section('content')
<style type="text/css">
    .con-tit{font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;}
    .item{margin-bottom: 20px;}
</style>
<body>
<div class="container">
    <div class="tt col-md-12"><h2>Bai Viet Noi Bat</h1></div>
    @foreach($new as $cc)


    <div class="item col-md-12">
        <div class="con-lef col-md-4">
            <div class="con-img"><img src="http://localhost/larave4.2//public/img/{{$cc->img_page}}" style="width:100%;"></div>
        </div>
        <div class="con-rig col-md-8">
            <div class="con-tit"> {{$cc->title_page}}</div>
            <div class="con-des">{{$cc->des_page}}</div>
        </div>
    </div>
    @endforeach
</div>
@stop
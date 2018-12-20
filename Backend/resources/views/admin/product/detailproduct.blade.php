@extends('admin.layouts.app')
@section('title','Xem chi tiết sản phẩm')
@section('css')
	<style type="text/css" media="screen">
    .black{
            background-color: rgba(0,0,0,0.5);
        }  
    </style>
@endsection
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Quản lí sản phẩm</a></li>
                    <li class="active">Chi tiết sản phẩm</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-8 col-md-8" style="margin: auto;">
                <aside class="profile-nav alt">
                    <section class="card">
                        <div class="card-header user-header alt bg-dark">
                            <div class="" style="text-align: center;">
                                <a href="#">
                                    <img class="" style="width:150px; height:150px; border-radius: none;" alt="" src="{{asset($product->product_image_total)}}">
                                </a>
                                <div class="media-body">
                                    <h2 class="text-light display-6">{{$product->product_name}}</h2>
                                    <p>Thông tin chi tiết</p>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item white">
                                <a href="#" style="color: #000;">Hãng<span class="pull-right">{{$product->brand->brand_name}}</span></a>
                            </li>
                            <li class="list-group-item black">
                                <a href="#" style="color: #000;">Tên<span class="pull-right">{{$product->product_name}}</span></a>
                            </li>
                            <li class="list-group-item white">
                                <a href="#" style="color: #000;">Mã<span class="pull-right">{{$product->product_code}}</span></a>
                            </li>
                            <li class="list-group-item black">
                                <a href="#" style="color: #000;">Giá<span class="pull-right">{{$product->product_price}}$</span></a>
                            </li>
                            <li class="list-group-item white">
                                <a href="#" style="color: #000;">Năm ra đời<span class="pull-right">{{$product->product_year_birth}}</span></a>
                            </li>
                            <li class="list-group-item black">
                                <a href="#" style="color: #000;">Sản xuất tại<span class="pull-right">{{$product->product_made_in}}</span></a>
                            </li>
                            <li class="list-group-item white">
                                <a href="#" style="color: #000;">Cân nặng<span class="pull-right">{{$product->product_weight}}</span></a>
                            </li>
                            <li class="list-group-item black">
                                <a href="#" style="color: #000;">Đế ngoài<span class="pull-right">{{$product->product_outsole}}</span></a>
                            </li>
                            <li class="list-group-item white">
                                <a href="#" style="color: #000;">Đế trong<span class="pull-right">{{$product->product_insole}}</span></a>
                            </li>
                            <li class="list-group-item black">
                                <a href="#" style="color: #000;">Mũi giày<span class="pull-right">{{$product->product_toe}}</span></a>
                            </li>
                            <li class="list-group-item white">
                                <a href="#" style="color: #000;">Lưỡi gà<span class="pull-right">{{$product->product_tongue}}</span></a>
                            </li>
                            <li class="list-group-item black">
                                <a href="#" style="color: #000;">Thân giày trước<span class="pull-right">{{$product->product_vamp}}</span></a>
                            </li>
                            <li class="list-group-item white">
                                <a href="#" style="color: #000;">Thân giày sau<span class="pull-right">{{$product->product_quater}}</span></a>
                            </li>
                            <li class="list-group-item black">
                                <a href="#" style="color: #000;">Mui giày<span class="pull-right">{{$product->product_lacing}}</span></a>
                            </li>
                            <li class="list-group-item white">
                                <a href="#" style="color: #000;">Cổ giày<span class="pull-right">{{$product->product_topline}}</span></a>
                            </li>
                            <li class="list-group-item black">
                                <a href="#" style="color: #000;">Giây dày<span class="pull-right">{{$product->product_shoelace}}</span></a>
                            </li>
                            <li class="list-group-item white">
                                <a href="#" style="color: #000;">Lớp lót<span class="pull-right">{{$product->product_lining}}</span></a>
                            </li>
                            <li class="list-group-item black">
                                <a href="#" style="color: #000;">Công nghệ<span class="pull-right">{{$product->product_technology}}</span></a>
                            </li>
                            <li class="list-group-item white">
                                <a href="#" style="color: #000;">Người đăng<span class="pull-right">{{$product->user->user_name}}</span></a>
                            </li>
                            <li class="list-group-item black">
                                <a href="#" style="color: #000;">Trạng thái<span class="pull-right">
                                @if($product->product_status == 1)
                                    Xuất hiện
                                @else
                                    Ẩn
                                @endif</span></a>
                            </li>
                        </ul>

                    </section>
                </aside>
            </div>
        </div><!-- .row -->
    </div><!-- .animated -->
</div><!-- .content -->




</div><!-- /#right-panel -->

<!-- Right Panel -->
@endsection
@section('js')
	<script src="{{asset('admin/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
@endsection
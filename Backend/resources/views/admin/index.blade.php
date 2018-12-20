@extends('admin.layouts.app')
@section('title','Dashboard')
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
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
   <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-1">
            <div class="card-body pb-0">
                <div class="dropdown float-right">
                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        <i class="fa fa-cog"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="dropdown-menu-content">
                            <a class="dropdown-item" href="{{route('get.Listbrand')}}">Xem</a>
                        </div>
                    </div>
                </div>
                <h4 class="mb-0">
                    <span class="count">{{$brands}}</span>
                </h4>
                <p class="text-light">Số lượng hãng</p>

                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <!-- <canvas id="widgetChart1"></canvas> -->
                </div>

            </div>

        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-2">
            <div class="card-body pb-0">
                <div class="dropdown float-right">
                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        <i class="fa fa-cog"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="dropdown-menu-content">
                            <a class="dropdown-item" href="{{route('get.Listproduct')}}">Xem</a>
                        </div>
                    </div>
                </div>
                <h4 class="mb-0">
                    <span class="count">{{$products}}</span>
                </h4>
                <p class="text-light">Số lượng sản phẩm</p>

                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <!-- <canvas id="widgetChart2"></canvas> -->
                </div>

            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-3">
            <div class="card-body pb-0">
                <div class="dropdown float-right">
                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        <i class="fa fa-cog"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="dropdown-menu-content">
                            <a class="dropdown-item" href="#">Xem</a>
                        </div>
                    </div>
                </div>
                <h4 class="mb-0">
                    <span class="count">1000</span>
                </h4>
                <p class="text-light">Số lần so sánh</p>

            </div>

                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <!-- <canvas id="widgetChart3"></canvas> -->
                </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-4">
            <div class="card-body pb-0">
                <div class="dropdown float-right">
                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        <i class="fa fa-cog"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="dropdown-menu-content">
                            <a class="dropdown-item" href="#">Xem</a>
                        </div>
                    </div>
                </div>
                <h4 class="mb-0">
                    <span class="count">1000</span>
                </h4>
                <p class="text-light">Số lần tư vấn</p>

                <div class="chart-wrapper px-3" style="height:70px;" height="70">
                    <!-- <canvas id="widgetChart4"></canvas> -->
                </div>

            </div>
        </div>
    </div>
</div> <!-- .content -->
</div><!-- /#right-panel -->

    <!-- Right Panel -->
@endsection
@extends('admin.layouts.app')
@section('title','Chỉnh sửa sản phẩm')
@section('css')
  <link rel="stylesheet" href="{{asset('admin/assets/scss/product.css')}}">
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
                    <li class="active">Chỉnh sửa sản phẩm</li>
                </ol>
            </div>
        </div>
    </div>
</div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
              <div class="col-lg-12" style="margin: auto;">
                <div class="card">
                    <div class="card-body">
                      <!-- Credit Card -->
                      <div id="pay-invoice">
                          <div class="card-body">
                              <div class="card-title">
                                  <h3 class="text-center">Chỉnh sửa sản phẩm</h3>
                              </div>
                              <div class="message-adduser" style="text-align: center;">
                                @if(session()->has('success'))
                                    <br/>
                                    <div class="alert alert-success text-center">
                                        {{ session('success') }}
                                    </div>
                                    {{session()->forget('success')}}
                                 @endif
                              </div>
                              <hr>
                              <form id="form-add-product" action="{{route('post.Editproduct',['id'=>$product->id])}}" method="post" novalidate="novalidate" enctype="multipart/form-data" accept-charset="utf-8">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                      <label for="cc-payment" class="control-label mb-1">Tên sản phẩm</label>
                                      <input id="cc-pament" name="product_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$product->product_name}}">
                                      @if(sizeof($errors) != 0)
                                        @if($errors)
                                          <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_name')}}</span>
                                        @endif
                                      @endif
                                    </div>
                                    <div class="form-group">
                                        <div class=""><label for="select" class=" control-label mb-1">Chọn Hãng</label></div>
<!--                                         <div class="col-12 col-md-12"> -->
                                          <select name="product_id_brand" id="select" class="form-control">
                                            @if(isset($brands))
                                              @foreach($brands as $brand)
                                                @if($product->brand->id == $brand->id)
                                                  <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                                @endif
                                              @endforeach
                                            @endif
                                            @if(isset($brands))
                                              @foreach($brands as $brand)
                                                @if($product->brand->id != $brand->id)
                                                  <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                                @endif
                                              @endforeach
                                            @endif
                                          </select>
                                          @if(sizeof($errors) != 0)
                                              @if($errors)
                                                <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_id_brand')}}</span>
                                              @endif
                                          @endif
<!--                                         </div> -->
                                      </div>
                                      <div class="form-group has-success col-md-12">
<!--                                         <div class="col-lg-6"> -->
                                            <label for="cc-name" class="control-label mb-1">Mã sản phẩm</label>
                                            <input  type="text" class="form-control cc-name valid" value="{{$product->product_code}}" name="product_code">
                                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            @if(sizeof($errors) != 0)
                                              @if($errors)
                                                <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_code')}}</span>
                                              @endif
                                            @endif
                                        <!-- </div> -->
                                        <!-- <div class="col-lg-6"> -->
                                            <label for="cc-number" class="control-label mb-1">Giá sản phẩm</label>
                                            <input  type="text" class="form-control cc-number identified visa" value="{{$product->product_price}}" name="product_price">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            @if(sizeof($errors) != 0)
                                              @if($errors)
                                                <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_price')}}</span>
                                              @endif
                                            @endif
                                        <!-- </div> -->
                                      </div>
                                      <div class="form-group col-md-12">
<!--                                         <div class="col-lg-6"> -->
                                            <label for="cc-number" class="control-label mb-1">Năm ra đời</label>
                                            <input type="date" class="form-control cc-number identified visa" value="{{$product->product_year_birth}}" name="product_year_birth">
                                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            @if(sizeof($errors) != 0)
                                              @if($errors)
                                                <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_year_birth')}}</span>
                                              @endif
                                            @endif
<!--                                         </div> -->
<!--                                         <div class="col-lg-6"> -->
                                          <label for="cc-number" class="control-label mb-1">Cân nặng</label>
                                          <input type="text" class="form-control cc-number identified visa" value="{{$product->product_weight}}" name="product_weight">
                                          <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                          @if(sizeof($errors) != 0)
                                              @if($errors)
                                                <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_weight')}}</span>
                                              @endif
                                          @endif
<!--                                         </div> -->
                                      </div>
                                      <div class="form-group" style="width: 100%">
                                        <label for="cc-number" class="control-label mb-1">Nơi sản xuất</label>
                                        <input type="text" class="form-control cc-number identified visa" value="{{$product->product_made_in}}" name="product_made_in">
                                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        @if(sizeof($errors) != 0)
                                            @if($errors)
                                              <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_made_in')}}</span>
                                            @endif
                                        @endif
                                      </div>
                                      <div class="form-group" style="width: 100%">
                                          <label for="cc-number" class="control-label mb-1">Đế ngoài</label>
                                          <input type="text" class="form-control cc-number identified visa" value="{{$product->product_outsole}}" name="product_outsole">
                                          <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                          @if(sizeof($errors) != 0)
                                              @if($errors)
                                                <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_outsole')}}</span>
                                              @endif
                                          @endif
                                      </div>
                                      <div class="form-group" style="width: 100%">
                                          <label for="cc-number" class="control-label mb-1">Đế trong</label>
                                          <input type="text" class="form-control cc-number identified visa" value="{{$product->product_insole}}" name="product_insole">
                                          <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                          @if(sizeof($errors) != 0)
                                              @if($errors)
                                                <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_insole')}}</span>
                                              @endif
                                          @endif
                                      </div>
                                      <div class="form-group" style="width: 100%">
                                          <label for="cc-number" class="control-label mb-1">Mũi giày</label>
                                          <input  type="text" class="form-control cc-number identified visa"  value="{{$product->product_toe}}" name="product_toe">
                                          <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true" ></span>
                                          @if(sizeof($errors) != 0)
                                              @if($errors)
                                                <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_toe')}}</span>
                                              @endif
                                          @endif
                                      </div>
                                      <div class="form-group" style="width: 100%">
                                          <label for="cc-number" class="control-label mb-1">Lưỡi gà</label>
                                          <input type="text" class="form-control cc-number identified visa" value="{{$product->product_tongue}}" name="product_tongue">
                                          <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                          @if(sizeof($errors) != 0)
                                              @if($errors)
                                                <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_tongue')}}</span>
                                              @endif
                                          @endif
                                      </div>
                                      <div class="form-group" style="width: 100%">
                                        <label for="cc-number" class="control-label mb-1">Thân giày sau</label>
                                        <input type="text" class="form-control cc-number identified visa" value="{{$product->product_quater}}" name="product_quater">
                                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        @if(sizeof($errors) != 0)
                                            @if($errors)
                                              <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_quater')}}</span>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group" style="width: 100%">
                                        <label for="cc-number" class="control-label mb-1">Thân giày trước</label>
                                        <input type="text" class="form-control cc-number identified visa" value="{{$product->product_vamp}}" name="product_vamp">
                                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                        @if(sizeof($errors) != 0)
                                            @if($errors)
                                              <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_vamp')}}</span>
                                            @endif
                                        @endif
                                    </div>
                                    <div class="form-group" style="width: 100%">
                                      <label for="cc-number" class="control-label mb-1">Mui giày</label>
                                      <input type="text" class="form-control cc-number identified visa" value="{{$product->product_lacing}}" name="product_lacing">
                                      <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                      @if(sizeof($errors) != 0)
                                          @if($errors)
                                            <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_lacing')}}</span>
                                          @endif
                                      @endif
                                  </div>
                                  <div class="form-group" style="width: 100%">
                                      <label for="cc-number" class="control-label mb-1">Cổ giày</label>
                                      <input type="text" class="form-control cc-number identified visa" value="{{$product->product_topline}}" name="product_topline">
                                      <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                      @if(sizeof($errors) != 0)
                                          @if($errors)
                                            <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_topline')}}</span>
                                          @endif
                                      @endif
                                  </div>
                                  <div class="form-group" style="width: 100%">
                                      <label for="cc-number" class="control-label mb-1">Giây dày</label>
                                      <input type="text" class="form-control cc-number identified visa" value="{{$product->product_shoelace}}" name="product_shoelace">
                                      <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                      @if(sizeof($errors) != 0)
                                          @if($errors)
                                            <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_shoelace')}}</span>
                                          @endif
                                      @endif
                                  </div>
                                  <div class="form-group" style="width: 100%">
                                      <label for="cc-number" class="control-label mb-1">Lớp lót</label>
                                      <input type="text" class="form-control cc-number identified visa" value="{{$product->product_lining}}" name="product_lining">
                                      <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                      @if(sizeof($errors) != 0)
                                          @if($errors)
                                            <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_lining')}}</span>
                                          @endif
                                      @endif
                                  </div>
                                  <div class="form-group" style="width: 100%">
                                      <label for="cc-number" class="control-label mb-1">Công nghệ</label>
                                      <input type="text" class="form-control cc-number identified visa" value="{{$product->product_technology}}" name="product_technology">
                                      <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                      @if(sizeof($errors) != 0)
                                          @if($errors)
                                            <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_technology')}}</span>
                                          @endif
                                      @endif
                                  </div>
                                  <div class="form-group" style="width: 100%">
                                      <div class="col col-md-4"><label for="select" class=" form-control-label">Chọn trạng thái</label></div>
                                      <div class="col-12 col-md-12">
                                        <select name="product_status" id="select" class="form-control">
                                          @if($product->product_status == 1)
                                            <option value="1">Xuất hiện</option>
                                            <option value="0">Ẩn</option>
                                          @else
                                            <option value="0">Ẩn</option>
                                            <option value="1">Xuất hiện</option>
                                          @endif
                                        </select>
                                      @if(sizeof($errors) != 0)
                                            @if($errors)
                                              <span class="text-danger" style="font-size: 9px;">{{$errors->first('product_status')}}</span>
                                            @endif
                                      @endif
                                      </div>
                                  </div>
                                  <div class="form-group" style="width: 100%">
                                    <div class="col col-md-4"><label for="file-multiple-input" class=" form-control-label">Ảnh tổng quan</label></div>
                                    <div class="col-12 col-md-8"><input type="file" id="file-multiple-input" name="product_image_total" multiple="" class="form-control-file"></div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <button id="" type="submit" class="btn btn-lg btn-info btn-block">
                                    <i class="fa fa-edit fa-lg"></i>&nbsp;
                                    <span id="payment-button-amount">Chỉnh sửa</span>
                                    <span id="payment-button-sending" style="display:none;">Quay lại</span>
                                  </button>
                                </div>
                              </form>
                              
                          </div>
                      </div>

                    </div>
                </div> <!-- .card -->

              </div><!--/.col-->

            </div>
        </div><!-- .animated -->
    </div><!-- .content -->


</div><!-- /#right-panel -->

<!-- Right Panel -->

@endsection
@section('js')
<script src="{{asset('admin/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
@endsection
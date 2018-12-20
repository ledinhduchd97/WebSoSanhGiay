@extends('admin.layouts.app')
@section('title','Chỉnh sửa hãng')
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
                    <li><a href="#">Quản lý hãng</a></li>
                    <li class="active">Chỉnh sửa hãng</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row" >
          <div class="col-lg-6" style="margin: auto;">
            <div class="card">
              <div class="card-header">
                <strong>Chỉnh sửa</strong>  Hãng
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
          		<div class="card-body card-block">
          			<form action="{{route('post.Editbrand',['id'=>$brand->id])}}" method="post" class="form-horizontal" enctype="multipart/form-data" accept-charset="utf-8" id="form-editbrand">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="hf-email" class="form-control-label">Tên hãng</label></div>
                        <div class="col-12 col-md-9">
                        	<input type="text" id="hf-email" name="brand_name" placeholder="Vui lòng nhập tên hãng" class="form-control" value="{{$brand->brand_name}}">
                        	<span class="help-block"></span>@if(sizeof($errors) != 0)
                          @if($errors)
                            <span class="text-danger" style="font-size: 9px;">{{$errors->first('brand_name')}}</span>
                          @endif
                        @endif</div>
                        
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Mã hãng</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="hf-password" name="brand_code" placeholder="Vui lòng nhập mã hãng" class="form-control" value="{{$brand->brand_code}}" ><span class="help-block"></span>@if(sizeof($errors) != 0)
                          @if($errors)
                            <span class="text-danger" style="font-size: 9px;">{{$errors->first('brand_code')}}</span>
                          @endif
                        @endif</div>
                        
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Icon</label></div>
                        <div class="col-12 col-md-9"><input type="file" name="brand_icon" placeholder="" class="form-control" value=""><span class="help-block"></span>@if(sizeof($errors) != 0)
                          @if($errors)
                            <span class="text-danger" style="font-size: 9px;">{{$errors->first('brand_icon')}}</span>
                          @endif
                        @endif</div>
                      </div>
                      <div class="row form-group">
                  		<div class="col col-md-3"><label for="hf-password" class=" form-control-label">Ảnh Icon cũ</label></div>
                			<img src="{{asset($brand->brand_icon)}}" alt="" style="margin: auto;">
             			</div>
                      <div class="row form-group">
                        <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Mô tả</label></div>
                        <div class="col-12 col-md-9">
                        <textarea name="brand_description" style="height: 100px; width: 100%;">{{$brand->brand_description}}
                        </textarea>
                        @if(sizeof($errors) != 0)
                          @if($errors)
                            <span class="text-danger" style="font-size: 9px;">{{$errors->first('brand_description')}}</span>
                          @endif
                        @endif
                        <span class="help-block"></span></div>
                        
                      </div>            
          			<div class="card-footer">
		                <button class="btn btn-primary btn-sm" id="btn-editbrand">
		                  <i class="fa fa-dot-circle-o"></i>  Chỉnh sửa
		                </button>
		                <button type="reset" class="btn btn-danger btn-sm">
		                  <a href="xemcachang.html" style="color: #fff;"><i class="fa fa-ban"></i>  Quay lại</a>
		                </button>
          			</div>
          		</form>
            </div>
          </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
@endsection
@section('js')
<script src="{{asset('admin/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
<!-- <script type="text/javascript">
var test = $(".text-alert").text();
  if(test == "")
  {
    $(".text-alert").css('display', 'block');
  }
$.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
  });
  $("#btn-editbrand").click(function(event) {
  		event.preventDefault();
        var data = new FormData(document.getElementById('form-editbrand'));
        $.ajax({
            url: "{{route('post.Editbrand',['id'=>$brand->id])}}", // gửi đến file upload.php 
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: 'post',
            success: function (data) {
                parseInt(data);
                    console.log(data);
                    if (data==1) {
                        $('.text-alert').html(`
                            <p style="color:green;">Chỉnh sửa thành công</p>
                          `);  
                    }
                    else
                    {
                      $('.text-alert').html(`
                          <p style="color:red;">Chỉnh sửa thất bại</p>
                        `);
                    }  
            }
        });
    });
</script> -->
@endsection
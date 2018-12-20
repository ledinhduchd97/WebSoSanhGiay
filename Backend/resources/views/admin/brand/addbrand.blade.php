@extends('admin.layouts.app')
@section('title','Thêm hãng')
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
                            <li class="active">Thêm mới</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="col-lg-6" style="margin: auto;">
                    <div class="card">
                      <div class="card-header">
                        <strong>Thêm mới</strong>   Hãng
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
                        <form action="{{route('post.Addbrand')}}" method="post" class="form-horizontal" enctype="multipart/form-data" accept-charset="utf-8" id="form-addbrand">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-email" class="form-control-label">Tên hãng</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-email" name="brand_name" placeholder="Vui lòng nhập tên hãng" class="form-control" ><span class="help-block"></span>@if(sizeof($errors) != 0)
                            @if($errors)
                              <span class="text-danger" style="font-size: 9px;">{{$errors->first('brand_name')}}</span>
                              @endif
                            @endif</div>
                            
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Mã hãng</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-password" name="brand_code" placeholder="Vui lòng nhập mã hãng" class="form-control"><span class="help-block"></span>@if(sizeof($errors) != 0)
                              @if($errors)
                                <span class="text-danger" style="font-size: 9px;">{{$errors->first('brand_code')}}</span>
                              @endif
                            @endif</div>
                            
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Icon</label></div>
                            <div class="col-12 col-md-9"><input type="file" name="brand_icon" placeholder="" class="form-control" value="ADI"><span class="help-block"></span>@if(sizeof($errors) != 0)
                              @if($errors)
                                <span class="text-danger" style="font-size: 9px;">{{$errors->first('brand_icon')}}</span>
                              @endif
                            @endif</div>
                            
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Mô tả</label></div>
                            <div class="col-12 col-md-9">
                            <textarea name="brand_description" style="height: 100px; width: 100%;">
                            </textarea>@if(sizeof($errors) != 0)
                              @if($errors)
                                <span class="text-danger" style="font-size: 9px;">{{$errors->first('brand_description')}}</span>
                              @endif
                            @endif
                            <span class="help-block"></span></div>
                            
                          </div>
                          <!-- <div class="row form-group">
                            <img src="images/logoadidas.jpg" alt="" style="margin: auto;">
                          </div> -->             
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm" id="btn-addbrand">
                          <i class="fa fa-dot-circle-o"></i>  Thêm mới
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i>  Reset</a>
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
<script src="{{asset('admin/assets/js/lib/data-table/datatables.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/jszip.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/datatables-init.js')}}"></script>


<!-- <script type="text/javascript">
    $(document).ready(function() {
      $('#bootstrap-data-table-export').DataTable();
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
      $("#btn-addbrand").click(function(event) {
            event.preventDefault();
            var data = new FormData(document.getElementById('form-addbrand'));
            $.ajax({
                url: '{{route('post.Addbrand')}}', // gửi đến file upload.php 
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
                                <p style="color:green;">Thêm hãng mới thành công</p>
                              `);  
                        }
                        else
                        {
                          $('.text-alert').html(`
                              <p style="color:red;">Thêm hãng mới thất bại</p>
                            `);
                        }  
                }
            });
        });
    } );
</script> -->
@endsection
@extends('admin.layouts.app')
@section('title','Danh sách user')
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
                            <li><a href="#">Quản lý user</a></li>
                            <li class="active">Chỉnh sửa</li>
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
                        <strong>Chỉnh sửa</strong>   User
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
                        <form action="{{route('post.Edituser',['id'=>$user->id])}}" method="post" class="form-horizontal" enctype="multipart/form-data" accept-charset="utf-8" id="form-addbrand">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-email" class="form-control-label">Tên User</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-email" name="user_name" value="{{$user->user_name}}" class="form-control" ><span class="help-block"></span>
                            @if(sizeof($errors) != 0)
                              @if($errors)
                                <br><span class="text-danger" style="font-size: 9px;">{{$errors->first('user_name')}}</span>
                              @endif
                            @endif
                          </div>  
                          </div>
                         <!--  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="hf-password" name="user_email" value="{{$user->user_email}}" class="form-control"><span class="help-block"></span>@if(sizeof($errors) != 0)
                              @if($errors)
                                <br><span class="text-danger">{{$errors->first('user_email')}}</span>
                              @endif
                            @endif</div>
                            
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="hf-password" value="{{$user->user_password}}" name="user_password" class="form-control"><span class="help-block"></span>@if(sizeof($errors) != 0)
                              @if($errors)
                                <br><span class="text-danger">{{$errors->first('user_password')}}</span>
                              @endif
                            @endif</div>
                            
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Nhập lại Password</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="hf-password" value="{{$user->user_password_cf}}" name="user_password_cf" class="form-control"><span class="help-block"></span>@if(sizeof($errors) != 0)
                              @if($errors)
                                <br><span class="text-danger">{{$errors->first('user_password_cf')}}</span>
                              @endif
                            @endif</div>
                            
                          </div> -->
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" control-label mb-1">Cấp bậc</label></div>
                            <div class="col col-md-9">
                              <select name="user_level" id="select" class="form-control">
                                    @if($user->user_level == 1)
                                    <option value="1">Admin</option>
                                    <option value="0">Nhân viên</option>
                                    @else
                                    <option value="0">Nhân viên</option>
                                    <option value="1">Admin</option>
                                    @endif
                              </select>
                              @if(sizeof($errors) != 0)
                                  @if($errors)
                                    <span class="text-danger">{{$errors->first('user_level')}}</span>
                                  @endif
                              @endif
                             </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" control-label mb-1">Trạng thái</label></div>
                            <div class="col col-md-9">
                              <select name="user_status" id="select" class="form-control">
                                    @if($user->user_status == 1)
                                    <option value="1">Hoạt động</option>
                                    <option value="0">Khóa</option>
                                    @else
                                    <option value="0">Khóa</option>
                                    <option value="1">Hoạt động</option>
                                    @endif
                              </select>
                              @if(sizeof($errors) != 0)
                                  @if($errors)
                                    <span class="text-danger">{{$errors->first('user_status')}}</span>
                                  @endif
                              @endif
                             </div>
                          </div>             
                      </div>
                      <div class="card-footer">
                        <button type="" class="btn btn-primary btn-sm" id="btn-addbrand">
                          <i class="fa fa-dot-circle-o"></i>  Chỉnh sửa
                        </button>
                        <a href="{{route('get.Listuser')}}" style="text-decoration: none; color: #fff;"><button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i>  Quay lại</a>
                        </button></a>
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


<script type="text/javascript">
    $(document).ready(function() {
      $('#bootstrap-data-table-export').DataTable();
    } );
</script>
@endsection
@extends('admin.layouts.app')
@section('title','Danh sách user')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('user/bootstrap/css/bootstrap.min.css')}}">
<style>
  a {text-decoration: none !important;}
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
                    <li><a href="#">Quản lí user</a></li>
                    <li class="active">Danh sách user</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Bảng danh sách user</strong>
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
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>Cấp bậc</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                <th>Tùy Chỉnh</th>
              </tr>
            </thead>
            <tbody>
            	@if(isset($users))
            		@foreach($users as $user)
                      <tr>
                        <td>{{$user->user_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>@if($user->user_level == 1)
								Admin
							@else
								Nhân viên
							@endif
                        </td>
                        <td>@if($user->user_status == 1)
								Hoạt động
							@else
								Khóa
							@endif</td>
                        <td>{{$user->created_at}}</td>
                        <td style="text-align: center;">                             
                        	<a href="{{route('get.Edituser',['id'=> $user->id])}}"><i class="fas fa-edit" style="color: green; font-size: 20px; margin-right: 15px;" title="Chỉnh sửa"></i></a>
                        	<a class="delete" href="#"
                                   delete="{{route('delete.User',['id' => $user->id])}}"
                                   data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-trash-alt" style="color: red; font-size: 20px;" title="Xóa"></i></a>
                        </td>              
                     </tr>
                     @endforeach
                @endif
            </tbody>
          </table>
                </div>
            </div>
        </div>


        </div>
    </div>
    <!-- .animated -->
    <!-- Modal Delete -->
    <div class="modal" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="form-delete" action="" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {{ method_field('DELETE') }}              
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc chắn muốn xóa tài khoản này ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3>Xóa tài khoản</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button id="btn-delete" type="submit" class="btn btn-primary">Đồng ý</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- .content -->


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
<script src="{{asset('user/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#bootstrap-data-table-export').DataTable();
    } );
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(".delete").click(function (event) {
            var link_delete = $(this).attr('delete');
            console.log(link_delete);
            $("#form-delete").attr('action', link_delete);
        });
    });
</script>
@endsection
@extends('admin.layouts.app')
@section('title','Danh sách hãng')
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
                    <li><a href="#">Quản lí hãng</a></li>
                    <li class="active">Danh sách hãng</li>
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
                    <strong class="card-title">Bảng danh sách hãng</strong>
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
                <th>Tên Hãng</th>
                <th>Mã Hãng</th>
                <th>Icon</th>
                <th>Người Đăng</th>
                <th>Tùy Chỉnh</th>
              </tr>
            </thead>
            <tbody>
                @if(isset($brands))
                    @foreach($brands as $brand)
                      <tr>
                        <td>{{$brand->brand_name}}</td>
                        <td>{{$brand->brand_code}}</td>
                        <td style="text-align: center;"><img src="{{asset($brand->brand_icon)}}" alt="" title="adidas" ></td>
                        <td>{{$brand->user->user_name}}</td>
                        <td style="text-align: center;">
                            	<a href="{{route('get.Editbrand',['id'=>$brand->id])}}"><i class="fas fa-edit" style="color: green; font-size: 20px; margin-right: 15px;" title="Chỉnh sửa"></i></a>
                            	<a class="delete" href="#"
                                   delete="{{route('delete.Brand',['id'=>$brand->id])}}"
                                   data-toggle="modal" data-target="#exampleModal2" style="background: none; border:none;"><i class="fas fa-trash-alt" style="color: red; font-size: 20px;" title="Xóa"></i></a>
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
    </div><!-- .animated -->
    <!-- Modal Delete -->
    <div class="modal" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="form-delete" action="" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {{ method_field('DELETE') }}              
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc chắn muốn xóa hãng này ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3>Xóa hãng</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button id="btn-delete" type="submit" class="btn btn-primary">Đồng ý</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal Delete -->
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
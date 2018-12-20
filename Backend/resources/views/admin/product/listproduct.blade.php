@extends('admin.layouts.app')
@section('title','Danh sách sản phẩm')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('admin/boostrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/scss/product.css')}}">
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
                <div class="page-header float-left">
                    <div class="page-title" style="margin-top: 25px;">
                        <a href="{{route('autosaving.Product')}}" ><button type="button" class="btn btn-success" >Lấy dữ liệu</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Quản lí sản phẩm</a></li>
                            <li class="active">Danh sách sản phẩm</li>
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
                            <strong class="card-title">Danh sách sản phẩm</strong>
                        </div>
                        <div class="search-product">
                            <form action="">
                                <div class="row form-group">
                                    <div class="col col-md-4"><label for="select" class=" form-control-label">Hãng :</label></div>
                                    <div class="col-12 col-md-6">
                                      <select name="brand" id="select" class="form-control">
                                        <option value="">Chọn hãng</option>
                                        @if(isset($brands))
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                            @endforeach
                                        @endif
                                      </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4"><label for="disabled-input" class=" form-control-label">Tên sản phẩm:</label></div>
                                    <div class="col-12 col-md-6"><input type="text" name="name_product" class="form-control"></div>
                                    <div class="col-12 col-md-2">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Lọc sản phẩm
                                        </button>
                                    </div>
                                </div>
                            </form>
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
                  <div class="row list-product">
                    @if(isset($products))
                        @foreach($products as $product)
                        <div class="col-2">
                                <div class="product">
                                <img src="{{asset($product->product_image_total)}}" alt="">
                                <div class="product-infor">
                                        <p class="name-product">{{$product->product_name}}</p>
                                        <!-- <p>{{$product->brand->brand_name}}</p> -->
                                        <p>$ {{$product->product_price}}</p>
                                </div>
                                <div class="action">
                                    <a href="{{route('get.Editproduct',['id'=>$product->id])}}" style="color: green; font-size: 20px;"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('get.Showproduct',['id'=>$product->id])}}"><i class="far fa-eye"></i></a> 
                                    <a class="delete" href="#"
                                   delete="{{route('delete.Product',['id'=>$product->id])}}"
                                   data-toggle="modal" data-target="#exampleModal2" style="background: none; border:none;">
                                        <i class="fas fa-trash-alt" style="color: red; font-size: 20px;" title="Xóa"></i>
                                    </a>
                                </div>
                                <div class="opcity">
                                </div>
                                </div>
                        </div>
                        @endforeach
                    @endif
                  </div>
                  <nav aria-label="..." style="float: right;">
                      <!-- <ul class="pagination">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                          <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul> -->
                      {{$products->links()}}
                    </nav>
                    <div class="clearfix"></div>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc chắn muốn xóa sản phẩm này ?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h3>Xóa sản phẩm</h3>
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
                
@endsection
@section('js')

<script src="{{asset('admin/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/datatables.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/datatables-init.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/jszip.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/boostrap/js/bootstrap.min.js')}}"></script>
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
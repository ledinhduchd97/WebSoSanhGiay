@extends('admin.layouts.app')
@section('title','Danh sách câu trả lời')
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
                            <li><a href="#">Quản lí tư vấn</a></li>
                            <li class="active">Danh sách câu trả lời</li>
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
                            <strong class="card-title">Danh sách câu trả lời</strong>
                        </div>
                        @if(session()->has('success'))
                            <br/>
                            <div class="alert alert-success text-center">
                                {{ session('success') }}
                            </div>
                            {{session()->forget('success')}}
                         @endif
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Câu trả lời</th>
                        <th>Tùy chỉnh</th> 
                      </tr>
                    </thead>
                    <tbody>
                    @if(isset($answers))
                        @foreach($answers as $answer)
                          <tr>
                            <td>{{$answer->answer_content}}</td>
                            <td style="text-align: center;">
                            <form action="{{route('delete.Answer',['id'=>$answer->id])}}" method="post">
                                {{ method_field('DELETE') }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <a href="{{route('get.Editanswer',['id'=>$answer->id])}}"><i class="fas fa-edit" style="color: green; font-size: 20px; margin-right: 15px;" title="Chỉnh sửa"></i></a>
                                <button type="submit" style="background: none; border:none;"><i class="fas fa-trash-alt" style="color: red; font-size: 20px;" title="Xóa"></i></button>
                            </form>
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
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
@endsection
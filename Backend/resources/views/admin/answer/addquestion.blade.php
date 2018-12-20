@extends('admin.layouts.app')
@section('title','Luyện tập chat bot')
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
                            <li class="active">Luyện tập trả lời câu hỏi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-xs-8 col-sm-8" style="margin: auto;">
                        <div class="card">
                            <div class="card-header">
                                <strong>Luyện tập</strong> <small>trả lời câu hỏi cho máy</small>
                            </div>
                            @if(Session::has('status'))
                                <p class="alert {{ Session::get('status') }}">{{ Session::get('status')}}</p>
                            @endif
                            <form action="{{route('post.Addquestion')}}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label class=" form-control-label">Đặt câu hỏi</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-question"></i></div>
                                            <input class="form-control" name="question">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Nhập câu trả lời mới cho máy</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-reply"></i></div>
                                            <input class="form-control" name="answer">
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Chọn câu trả lời đã có sẵn</strong>
                                        </div>
                                        <div class=" form-group card-body">
                                          <select data-placeholder="Chọn câu trả lời có sẵn" class="standardSelect" tabindex="1" name="answer_select">
                                            <option value=""></option>
                                            @if(isset($answers))
                                            @foreach($answers as $answer)
                                                <option value="{{$answer->answer_content}}">{{$answer->answer_content}}</option>
                                            @endforeach
                                            @endif
                                            
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-control">
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                  
                                                  <span id="payment-button-amount">Luyện tập</span>
                                                  <span id="payment-button-sending" style="display:none;">Sending…</span>
                                              </button>
                                    </div>                                        
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

@endsection
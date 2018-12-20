<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng nhập</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" href="apple-icon.png')}}">
    <link rel="shortcut icon" href="favicon.ico">
    
    <link rel="stylesheet" href="{{asset('admin/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/scss/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.js')}}delivr.net/html5shiv/3.7.3/html5shiv.min.js')}}"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="#">
                        <img class="align-content" src="{{asset('admin/images/shoe.png')}}" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>
                <div class="login-form">
                    @if(session()->has('fail'))
                        <br><span class="text-danger" style="font-size: 12px;">
                            {{ session('fail') }}
                        </span>
                            {{session()->forget('fail')}}
                      @endif
                    <form action="{{route('post.login')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group" style="margin-bottom: 10px;">
                            <!-- <label>Tài khoản</label> -->
                            <h5>Email</h5><br>
                            <input type="email" class="form-control" name="user_email">
                            @if(sizeof($errors) != 0)
                              @if($errors)
                                <span class="text-danger" style="font-size: 9px;">{{$errors->first('user_email')}}</span>
                              @endif
                            @endif
                        </div>
                        <div class="form-group">
                            <!-- <label>Mật khẩu</label> -->
                            <h5>Mật khẩu</h5><br>
                            <input type="password" class="form-control" style="margin-bottom: 10px;" name="password">
                            @if(sizeof($errors) != 0)
                              @if($errors)
                                <span class="text-danger" style="font-size: 9px;">{{$errors->first('password')}}</span>
                              @endif
                            @endif
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember">Ghi nhớ
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('admin/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/plugins.js')}}"></script>
    <script src="{{asset('admin/assets/js/main.js')}}"></script>


</body>
</html>

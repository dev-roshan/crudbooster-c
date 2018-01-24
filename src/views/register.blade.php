<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>{{trans("Register")}} : {{$appname}}</title>
    <meta name='generator' content='CRUDBooster.com'/>
    <meta name='robots' content='noindex,nofollow'/>
    <link rel="shortcut icon" href="{{ CRUDBooster::getSetting('favicon')?asset(CRUDBooster::getSetting('favicon')):asset('vendor/crudbooster/assets/logo_crudbooster.png') }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{asset('vendor/crudbooster/assets/adminlte/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{asset('vendor/crudbooster/assets/adminlte/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <link rel='stylesheet' href='{{asset("vendor/crudbooster/assets/css/main.css")}}'/>
    <link rel='stylesheet' href='{{asset("vendor/crudbooster/assets/css/main.css")}}'/>
    <style type="text/css">
      .login-page, .register-page {
          background: {{ CRUDBooster::getSetting("login_background_color")?:'#dddddd'}}
          color: {{ CRUDBooster::getSetting("login_font_color")?:'#ffffff' }} !important;
          background-repeat: no-repeat;
          background-position: center;
          background-size: cover;
      }
      .login-box, .register-box {
        margin: 2% auto;
      }
      .login-box-body {
        box-shadow: 0px 0px 50px rgba(0,0,0,0.8);
        background: rgba(255,255,255,0.9);
        color: {{ CRUDBooster::getSetting("login_font_color")?:'#666666' }} !important;
      }
      html,body {
        overflow: hidden;
      }
    </style>
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="{{url('/')}}">
         <img title='{!!(Session::get('appname') == 'CRUDBooster')?"<b>CRUD</b>Booster":CRUDBooster::getSetting('appname')!!}' src='{{ CRUDBooster::getSetting("logo")?asset(CRUDBooster::getSetting('logo')):asset('vendor/crudbooster/assets/logo.png') }}' style='max-width: 100%;max-height:170px'/>
        </a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">

       @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @else
            @if ( Session::get('message') != '' )
                <div class='alert alert-warning'>
                    {{ Session::get('message') }}
                </div>
            @endif
        @endif
    <?php
        $request = Session::get('request');
        $name = $request["name"];
        $email = $request["email"];
    ?>

        <p class="login-box-msg">{{trans("Fill up the form to register")}}</p>

        <form autocomplete='off' action="{{ route('postRegister') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group has-feedback">
            <input autocomplete='off' type="text" class="form-control" name='name' required placeholder="User Code" value="{{ $name }}" />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input autocomplete='off' type="text" class="form-control" name='email' required placeholder="Email" value="{{ $email }}" />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input autocomplete='off' type="password" class="form-control" name='password' required placeholder="Password" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input autocomplete='off' type="password" class="form-control" name='password_confirmation' required placeholder="Retype Password" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback" style="margin-bottom:10px">
            <!-- <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> I agree to the terms
                    </label>
                </div>
            </div> -->
            <!-- /.col -->
            <!-- <div class="col-xs-4"> -->
            <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat"><i class='fa fa-unlock'></i> {{trans("Register")}}</button>
            </div><!-- /.col -->

             <div class='row'>
            <div class='col-xs-12' align="center">

            <p style="padding:10px 0px 5px 0px">{{trans("Already a user?")}} <a href='{{route("getLogin")}}'>{{trans("crudbooster.click_here")}}</a></p>

            </div>
          </div>

        </div>
    </form>

        <br/>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="{{asset('vendor/crudbooster/assets/adminlte/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{asset('vendor/crudbooster/assets/adminlte/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

  </body>
</html>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:57:00 GMT -->
<head>
    
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Demo</title>
    <meta name="description" content="Metro Admin Template.">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->
    
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->
    
    <!-- start: CSS -->
      <link id="bootstrap-style" href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{asset('public/css/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{asset('public/css/style-responsive.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->
    
    <link rel="shortcut icon" href="{{URL::to('public/img/favicon.ico')}}">
    
            <style type="text/css">
            body { background: url(public/img/bg-login.jpg) !important; }
        </style>
</head>

<body>
        <div class="container-fluid-full">
        <div class="row-fluid">
                    
            <div class="row-fluid">
                <div class="login-box">
                    <div class="icons">
                        <a href="index.html"><i class="halflings-icon home"></i></a>
                        <a href="#"><i class="halflings-icon cog"></i></a>
                    </div>
                    <h2>Login to your account</h2>
                   <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <fieldset>
                            
                            <div class="input-prepend" title="Username">
                                <span class="add-on"><i class="halflings-icon user"></i></span>

                                 <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="clearfix"></div>

                            <div class="input-prepend" title="Password">
                                <span class="add-on"><i class="halflings-icon lock"></i></span>
                                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="clearfix"></div>
                            
                            <label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

                            <div class="button-login">  
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="clearfix"></div>
                    </form>
                    <hr>
                    <h3><a href="{{ route('password.request') }}">Forgot Password?</a></h3>
                    <p>
                       If you have new user registration <a href="{{ route('register') }}">click here</a> 
                    </p>    
                </div><!--/span-->
            </div><!--/row-->
            

    </div>
    
        </div>
 <script src="{{asset('piblic/js/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('piblic/js/jquery-migrate-1.0.0.min.js')}}"></script>
    
        <script src="{{asset('piblic/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
    
        <script src="{{asset('piblic/js/jquery.ui.touch-punch.js')}}"></script>
    
        <script src="{{asset('piblic/js/modernizr.js')}}"></script>
    
        <script src="{{asset('piblic/js/bootstrap.min.js')}}"></script>
    
        <script src="{{asset('piblic/js/jquery.cookie.js')}}"></script>
    
        <script src="{{asset('piblic/js/fullcalendar.min.js')}}"></script>
    
        <script src="{{asset('piblic/js/jquery.dataTables.min.j')}}"></script>

        <script src="js/excanvas.js"></script>
    <script src="js/jquery.flot.js"></script>
    <script src="js/jquery.flot.pie.js"></script>
    <script src="js/jquery.flot.stack.js"></script>
    <script src="js/jquery.flot.resize.min.js"></script>
    
        <script src="js/jquery.chosen.min.js"></script>
    
        <script src="js/jquery.uniform.min.js"></script>
        
        <script src="js/jquery.cleditor.min.js"></script>
    
        <script src="js/jquery.noty.js"></script>
    
        <script src="js/jquery.elfinder.min.js"></script>
    
        <script src="js/jquery.raty.min.js"></script>
    
        <script src="js/jquery.iphone.toggle.js"></script>
    
        <script src="js/jquery.uploadify-3.1.min.js"></script>
    
        <script src="js/jquery.gritter.min.js"></script>
    
        <script src="js/jquery.imagesloaded.js"></script>
    
        <script src="js/jquery.masonry.min.js"></script>
    
        <script src="js/jquery.knob.modified.js"></script>
    
        <script src="js/jquery.sparkline.min.js"></script>
    
        <script src="js/counter.js"></script>
    
        <script src="js/retina.js"></script>

        <script src="js/custom.js"></script>
</body>
</html>

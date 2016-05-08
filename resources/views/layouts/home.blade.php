<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lapak Ikan</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset("bower_components/AdminLTE/bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("bower_components/AdminLTE/plugins/daterangepicker/daterangepicker-bs3.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset("bower_components/AdminLTE/dist/css/skins/_all-skins.min.css")}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset("bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .content-wrapper{
            margin-top: 50px;
        }
        .cd-top {
            display: inline-block;
            height: 40px;
            width: 40px;
            position: fixed;
            bottom: 40px;
            right: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            /* image replacement properties */
            overflow: hidden;
            text-indent: 100%;
            white-space: nowrap;
            background: rgba(232, 98, 86, 0.8) url('{{asset("image/top.svg")}}') no-repeat center 50%;
            visibility: hidden;
            opacity: 0;
            -webkit-transition: opacity .3s 0s, visibility 0s .3s;
            -moz-transition: opacity .3s 0s, visibility 0s .3s;
            transition: opacity .3s 0s, visibility 0s .3s;
        }
        .cd-top.cd-is-visible, .cd-top.cd-fade-out, .no-touch .cd-top:hover {
            -webkit-transition: opacity .3s 0s, visibility 0s 0s;
            -moz-transition: opacity .3s 0s, visibility 0s 0s;
            transition: opacity .3s 0s, visibility 0s 0s;
        }
        .cd-top.cd-is-visible {
            /* the button becomes visible */
            visibility: visible;
            opacity: 1;
        }
        .cd-top.cd-fade-out {
            /* if the user keeps scrolling down, the button is out of focus and becomes less visible */
            opacity: .5;
        }
        .no-touch .cd-top:hover {
            background-color: #e86256;
            opacity: 1;
        }
        @media only screen and (min-width: 768px) {
            .cd-top {
                right: 20px;
                bottom: 20px;
            }
        }
        @media only screen and (min-width: 1024px) {
            .cd-top {
                height: 60px;
                width: 60px;
                right: 30px;
                bottom: 30px;
            }
        }
        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

        .rating { 
          border: none;
          float: left;
        }

        .rating > input { display: none; } 
        .rating > label:before { 
          margin: 5px;
          font-size: 1.25em;
          font-family: FontAwesome;
          display: inline-block;
          content: "\f005";
        }

        .rating > .half:before { 
          content: "\f089";
          position: absolute;
        }

        .rating > label { 
          color: #ddd; 
         float: right; 
        }

        /***** CSS Magic to Highlight Stars on Hover *****/

        .rating > input:checked ~ label, /* show gold star when clicked */
        .rating:not(:checked) > label:hover, /* hover current star */
        .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

        .rating > input:checked + label:hover, /* hover current star when changing rating */
        .rating > input:checked ~ label:hover,
        .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
        .rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
    </style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <header class="main-header">

        <nav class="navbar navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a href="{{url("/")}}" class="navbar-brand">Lapak<b>Ikan</b></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Pencarian -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <form role="form" method="POST" action="{{url('/')}}/listsearch"  class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="jenis_penjual" id="optionsRadios3" value="produsen" checked>
                                    Produsen
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="jenis_penjual" id="optionsRadios1" value="grosir" >
                                    Grosir
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="jenis_penjual" id="optionsRadios2" value="eceran">
                                    Eceran
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <select name="jenis_ikan" class="form-control">
                                <option value="all">Semua Jenis</option>
                                <option value="laut">Laut</option>
                                <option value="tawar">Tawar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="keyword" class="form-control" id="navbar-search-input" placeholder="Cari">
                            <button type="submit" style="height: 34px" class="btn btn-info btn-flat">Cari</button>
                        </div>
                    </form>
                </div>
                <?php
                // {{{ isset(Auth::user()->username) ? Auth::user()->name : Auth::user()->email }}}
                ?>

                        <!-- Login -->
                <div class="navbar-custom-menu">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                                <!-- Login -->
                        <div class="navbar-custom-menu">
                            <ul class="nav navbar-nav">
                                <!-- User Account: style can be found in dropdown.less -->
                                <li class="dropdown user user-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{asset("image/user1.png")}}" height="160px" width="160px" class="user-image" alt="User Image">
                                        <span class="hidden-xs">Login</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="user-header">
                                            <p>
                                                Login
                                            </p>
                                        </li>


                                        <!-- Menu Body -->
                                        <li class="user-body">
                                            <div class="row">
                                                <div class="col-xs-8 text-center">
                                                    <p>Sudah punya akun?</p>
                                                </div>
                                                <div class="col-xs-4 text-center">
                                                    <a href="{{ action("PostController@login") }}" class="btn btn-default btn-flat">Login</a>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </li>


                                        <!-- Menu Footer-->
                                        <li class="user-footer">
                                            <div class="col-xs-8 text-center">
                                                <p>Belum punya akun?</p>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="{{ action("PostController@register") }}" class="btn btn-default btn-flat">Register</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--   <li><a href="{{ url('/login') }}">Login</a></li>
                          <li><a href="{{ url('/register') }}">Register</a></li> -->
                        @else
                            <div class="navbar-custom-menu">
                                <ul class="nav navbar-nav">
                                    <!-- User Account: style can be found in dropdown.less -->
                                    <li><a href="{{url("/")}}/newpost">New Post</a></li>
                                    <li class="dropdown user user-menu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <img src="{{ Auth::user()->path_foto }}" height="160px" width="160px" class="user-image" alt="User Image">
                                            <span class="hidden-xs">{{ Auth::user()->username }}</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="user-header"><p> {{ Auth::user()->username }} </p>
                                                <img src="{{ Auth::user()->path_foto }}" height="300px" width="300px" class="center" alt="User Image">
                                            </li>

                                            <!-- Menu Body -->
                                            <li class="user-body">
                                                <div class="row">
                                                    <div class="col-xs-8 text-center">
                                                        <p>View Profile</p>
                                                    </div>
                                                    <div class="col-xs-4 text-center">
                                                        <a href="{{ action("HomeController@profile") }}" class="btn btn-default btn-flat">Profile</a>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                            </li>
                                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </ul>
                </div>

                <!-- Logout -->
                <div style="display:none" class="navbar-custom-menu" >
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-xs">Nama</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <p>
                                        Nama
                                    </p>
                                </li>

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- /.navbar-collapse -->
                <!-- Navbar Right Menu -->
                <!-- /.navbar-custom-menu -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>

    <!-- Main content -->
    @yield('content')

            <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="container">
            <strong>Copyright &copy; 2016 <a href="#">Lapak Ikan</a>.</strong> Manajemen Proyek Perangkat Lunak
        </div>
        <!-- /.container -->
    </footer>
</div>
<a href="#0" class="cd-top">Top</a>
<!-- jQuery 2.1.4 -->
<script src="{{asset("bower_components/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js")}}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset("bower_components/AdminLTE/bootstrap/js/bootstrap.min.js")}}"></script>
<!-- SlimScroll -->
<script src="{{asset("bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("bower_components/AdminLTE/plugins/fastclick/fastclick.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("bower_components/AdminLTE/dist/js/app.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("bower_components/AdminLTE/dist/js/demo.js")}}"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>

<script src="{{asset("bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js")}}"></script>

<script>
    $(function () {
        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        });
    });
</script>

<script>
    jQuery(document).ready(function($){
        // browser window scroll (in pixels) after which the "back to top" link is shown
        var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
                offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
                scroll_top_duration = 700,
        //grab the "back to top" link
                $back_to_top = $('.cd-top');

        //hide or show the "back to top" link
        $(window).scroll(function(){
            ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
            if( $(this).scrollTop() > offset_opacity ) {
                $back_to_top.addClass('cd-fade-out');
            }
        });

        //smooth scroll to top
        $back_to_top.on('click', function(event){
            event.preventDefault();
            $('body,html').animate({
                        scrollTop: 0 ,
                    }, scroll_top_duration
            );
        });

    });
</script>


</body>
</html>
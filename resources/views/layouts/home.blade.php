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
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <header class="main-header">
    
        <nav class="navbar navbar-static-top" role="navigation">
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
                            <option value="0">Jenis Ikan</option>
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
                                  <span class="hidden-xs">{{ Auth::user()->username }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header"><p> {{ Auth::user()->username }} </p></li>
                                  
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


</body>
</html>

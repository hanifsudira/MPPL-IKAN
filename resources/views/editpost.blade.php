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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset("bower_components/AdminLTE/dist/css/skins/_all-skins.min.css")}}">

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
                    <a href="#" class="navbar-brand">Lapak<b>Ikan</b></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

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
                                <a href="{{ action("HomeController@login") }}" class="btn btn-default btn-flat">Login</a>
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
                              <a href="{{ action("HomeController@register") }}" class="btn btn-default btn-flat">Register</a>
                            </div>
                          </li>
                        </ul>
                      </li>
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


                          <!-- Menu Body -->
<!--                           <li class="user-body">
                            <div class="row">
                              <div class="col-xs-4 text-center">
                                <a href="#">Followers</a>
                              </div>
                              <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                              </div>
                              <div class="col-xs-4 text-center">
                                <a href="#">Friends</a>
                              </div>
                            </div> -->
                            <!-- /.row -->
                          <!-- </li> -->


                          <!-- Menu Footer-->
                          <li class="user-footer">
                            <div class="pull-left">
                              <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                              <a href="{{ action("HomeController@profile") }}" class="btn btn-default btn-flat">Sign out</a>
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
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Pencarian
                </h1>
                <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" style="height: 50px" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Kategori
                            <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Laut</a></li>
                            <li><a href="#">Tawar</a></li>
                        </ul>
                    </div>
                    <!-- /btn-group -->
                    <input type="text" class="form-control" style="height: 50px">
                    <span class="input-group-btn">
                      <button type="button" style="height: 50px" class="btn btn-info btn-flat">Go!</button>
                    </span>
                </div>

            </section>

        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="container">
            <strong>Copyright &copy; 2016 <a href="#">Lapak Ikan</a>.</strong> Manajemen Proyek Perangkat Lunak
        </div>
        <!-- /.container -->
    </footer>
</div>
<!-- ./wrapper -->

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

<script>
    var data = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.5)",
                strokeColor: "rgba(220,220,220,0.8)",
                highlightFill: "rgba(220,220,220,0.75)",
                highlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.5)",
                strokeColor: "rgba(151,187,205,0.8)",
                highlightFill: "rgba(151,187,205,0.75)",
                highlightStroke: "rgba(151,187,205,1)",
                data: [28, 48, 40, 19, 86, 27, 90]
            }
        ]
    };
    var context = document.getElementById('bar-chart').getContext('2d');
    var clientsChart = new Chart(context).Bar(data);
</script>
</body>
</html>
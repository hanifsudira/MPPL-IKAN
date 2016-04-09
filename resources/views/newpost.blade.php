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
                    <a href="#" class="navbar-brand">Lapak<b>Ikan</b></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Pencarian -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                  <form class="navbar-form navbar-left" role="search">
                    <button type="button" style="height: 34px" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Kategori
                      <span class="fa fa-caret-down"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Laut</a></li>
                        <li><a href="#">Tawar</a></li>
                    </ul>
                    <div class="form-group">
                      <input type="text" class="form-control" id="navbar-search-input" placeholder="Cari">
                      <button type="button" style="height: 34px" class="btn btn-info btn-flat">Cari</button>
                    </div>
                  </form>
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
                    Post Baru
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">
              <div class="row">
                <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <h3 class="box-title">CK Editor
                        <small>Advanced and full of features</small>
                      </h3>
                      <!-- tools box -->
                      <div class="pull-right box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                          <i class="fa fa-times"></i></button>
                      </div>
                      <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                      <form>
                            <textarea id="editor1" name="editor1" rows="10" cols="80">
                                                    This is my textarea to be replaced with CKEditor.
                            </textarea>
                      </form>
                    </div>
                  </div>
                  <!-- /.box -->
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Bootstrap WYSIHTML5
                        <small>Simple and fast</small>
                      </h3>
                      <!-- tools box -->
                      <div class="pull-right box-tools">
                        <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                          <i class="fa fa-times"></i></button>
                      </div>
                      <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                      <form>
                        <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- ./row -->
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
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset("bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>


<script>
    $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
    });

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

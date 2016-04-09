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
                Profil
              </h1>
            </section>

            <!-- Main content -->
            <section class="content">

              <div class="row">
                <div class="col-md-3">

                  <!-- Profile Image -->
                  <div class="box box-primary">
                    <div class="box-body box-profile">
                      <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

                      <h3 class="profile-username text-center">Nama Lengkap</h3>

                      <p class="text-muted text-center">Username</p>

                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->

                  <!-- About Me Box -->
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">About Me</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <strong><i class="fa fa-user margin-r-5"></i> Email</strong>

                      <p class="text-muted">
                        About
                        Kelamin
                        dll
                      </p>

                      <hr>

                      <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>

                      <p class="text-muted">
                        E-mail
                      </p>

                      <hr>

                      <strong><i class="fa fa-mobile margin-r-5"></i> Kontak</strong>

                      <p class="text-muted">
                        Telpon
                      </p>

                      <hr>

                      <strong><i class="fa fa-map-marker margin-r-5"></i> Lokasi</strong>

                      <p class="text-muted">
                        Lokasi
                      </p>

                      <hr>

                      <strong><i class="fa fa-star margin-r-5"></i> Rating</strong>

                      <p>Rating</p>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                  <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                      <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
                      <li><a href="#settings" data-toggle="tab">Settings</a></li>
                      <li><a href="#moresettings" data-toggle="tab">More Settings</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                        <!-- Post -->
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                <span class="username">
                                  <a href="#">Jonathan Burke Jr.</a>
                                  <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                                </span>
                            <span class="description">Shared publicly - 7:30 PM today</span>
                          </div>
                          <!-- /.user-block -->
                          <p>
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like. Some people hate it and argue for
                            its demise, but others ignore the hate as they create awesome
                            tools to help create filler text for everyone from bacon lovers
                            to Charlie Sheen fans.
                          </p>
                          <ul class="list-inline">
                            <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                            <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                            </li>
                            <li class="pull-right">
                              <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                (5)</a></li>
                          </ul>

                          <input class="form-control input-sm" type="text" placeholder="Type a comment">
                        </div>
                        <!-- /.post -->

                      </div>
                      <!-- /.tab-pane -->
                      <div class="tab-pane" id="timeline">
                        <!-- The timeline -->
                        <ul class="timeline timeline-inverse">
                          <!-- timeline time label -->
                          <li class="time-label">
                                <span class="bg-red">
                                  10 Feb. 2014
                                </span>
                          </li>
                          <!-- /.timeline-label -->
                          <!-- timeline item -->
                          <li>
                            <i class="fa fa-envelope bg-blue"></i>

                            <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                              <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                              <div class="timeline-body">
                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                quora plaxo ideeli hulu weebly balihoo...
                              </div>
                              <div class="timeline-footer">
                                <a class="btn btn-primary btn-xs">Read more</a>
                                <a class="btn btn-danger btn-xs">Delete</a>
                              </div>
                            </div>
                          </li>
                          <!-- END timeline item -->
                          <!-- timeline item -->
                          <li>
                            <i class="fa fa-user bg-aqua"></i>

                            <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                              <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                              </h3>
                            </div>
                          </li>
                          <!-- END timeline item -->
                          <!-- timeline item -->
                          <li>
                            <i class="fa fa-comments bg-yellow"></i>

                            <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                              <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                              <div class="timeline-body">
                                Take me to your leader!
                                Switzerland is small and neutral!
                                We are more like Germany, ambitious and misunderstood!
                              </div>
                              <div class="timeline-footer">
                                <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                              </div>
                            </div>
                          </li>
                          <!-- END timeline item -->
                          <!-- timeline time label -->
                          <li class="time-label">
                                <span class="bg-green">
                                  3 Jan. 2014
                                </span>
                          </li>
                          <!-- /.timeline-label -->
                          <!-- timeline item -->
                          <li>
                            <i class="fa fa-camera bg-purple"></i>

                            <div class="timeline-item">
                              <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                              <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                              <div class="timeline-body">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                              </div>
                            </div>
                          </li>
                          <!-- END timeline item -->
                          <li>
                            <i class="fa fa-clock-o bg-gray"></i>
                          </li>
                        </ul>
                      </div>
                      <!-- /.tab-pane -->

                      <div class="tab-pane" id="settings">
                        <form class="form-horizontal">
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Nama Lengkap</label>

                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputName" placeholder="Nama Lengkap">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Kontak</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Kontak">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputExperience" class="col-sm-2 control-label">About</label>

                            <div class="col-sm-10">
                              <textarea class="form-control" id="inputExperience" placeholder="About"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->

                      <div class="tab-pane" id="moresettings">
                        <form class="form-horizontal">
                          <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Password Lama</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Password Lama">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Password Baru</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Password Baru">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div>
                  <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

            </section>
            <!-- /.content -->

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

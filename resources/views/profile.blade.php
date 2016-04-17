@extends('layouts.home')
@section('content')
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
                      <img class="profile-user-img img-responsive img-circle" src="bower_components/AdminLTE/dist/img/user4-128x128.jpg" alt="User profile picture">

                      <h3 class="profile-username text-center">{{ Auth::user()->name }} </h3>

                      <p class="text-muted text-center">{{ Auth::user()->username }}</p>

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
                      <strong><i class="fa fa-user margin-r-5"></i> Username</strong>

                      <p class="text-muted"> {{ Auth::user()->username }}</p>

                      <hr>

                      <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>

                      <p class="text-muted"> {{ Auth::user()->email }}</p>

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
                      <br>

                      <!-- <p>Rating</p> -->
                      <i class="fa fa-star margin-r-5"></i>
                      <i class="fa fa-star margin-r-5"></i>
                      <i class="fa fa-star margin-r-5"></i>
                      <i class="fa fa-star-o margin-r-5"></i>
                      <i class="fa fa-star-o margin-r-5"></i>
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
                            <img class="img-circle img-bordered-sm" src="bower_components\AdminLTE\dist\img\user1-128x128.jpg" alt="user image">
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
                          <div class="box-footer box-comments">
                            <div class="box-comment">
                              <!-- User image -->
                              <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                              <div class="comment-text">
                                    <span class="username">
                                      Maria Gonzales
                                      <span class="text-muted pull-right">8:03 PM Today</span>
                                    </span><!-- /.username -->
                                It is a long established fact that a reader will be distracted
                                by the readable content of a page when looking at its layout.
                              </div>
                              <!-- /.comment-text -->
                            </div>
                            <!-- /.box-comment -->
                            <div class="box-comment">
                              <!-- User image -->
                              <img class="img-circle img-sm" src="../dist/img/user5-128x128.jpg" alt="User Image">

                              <div class="comment-text">
                                    <span class="username">
                                      Nora Havisham
                                      <span class="text-muted pull-right">8:03 PM Today</span>
                                    </span><!-- /.username -->
                                The point of using Lorem Ipsum is that it has a more-or-less
                                normal distribution of letters, as opposed to using
                                'Content here, content here', making it look like readable English.
                              </div>
                              <!-- /.comment-text -->
                            </div>
                            <!-- /.box-comment -->
                          </div>
                          <div class="box-footer">
                            <form action="#" method="post">
                              <img class="img-responsive img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
                              <!-- .img-push is used to add margin to elements next to floating images -->
                              <div class="img-push">
                                <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                              </div>
                            </form>
                          </div>
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
                              <input type="text" class="form-control" id="inputName" placeholder="Nama Lengkap">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Kontak</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Kontak">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Tempat Lahir</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Tempat Lahir">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Tanggal Lahir</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="datepicker" placeholder="dd/mm/yyyy">
                            </div>
                          </div>
                          <!-- select -->
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Gender</label>
                              <div class="col-sm-10">
                              <select class="col-sm-2 control-label">
                                <option>Kosong</option>
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                              </select>
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

@endsection
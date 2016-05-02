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
                      <form role="form" method="POST" action="{{url('/')}}/editprofpic"  enctype='multipart/form-data'>
                          <img class="profile-user-img img-responsive img-circle" src="<?php echo Auth::user()->path_foto;?>"  alt="User profile picture" >
                          <h3 class="profile-username text-center">{{ Auth::user()->fullname }} </h3>
                          <p class="text-muted text-center">{{ Auth::user()->username }}</p>
                          <center><input name="gambar" type="file" id="exampleInputFile" required></center>
                          <p class="help-block" style="text-align:center;">Edit profile picture...</p>
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                      </form>
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
                      <li class="active"><a href="#activity" data-toggle="tab">History Post</a></li>
                      <li><a href="#settings" data-toggle="tab">Edit Akun</a></li>
                      <li><a href="#moresettings" data-toggle="tab">Ganti Password</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                        <!-- Post -->
                        <div class="post">
                          <div class="box-body">
                            @foreach ($post_list as $list)
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="<?php echo ($list->path_foto);?>" alt="<?php echo ($list->username);?> image">
                                <span class='username'>
                                  <a href="#"><?php echo ($list->fullname);?></a>
                                </span>
                                        <span class='description'>Shared publicly - <?php echo ($list->waktu);?></span>
                                    </div>
                                    <h4><a href="<?php echo url('/');echo "/posting/$list->id_posting";?>"><?php echo ($list->judul);?></a></h4>
                                    <p>
                                        <?php echo ($list->deskripsi);?>
                                    </p>
                                    <a class="btn btn-primary btn-xs">Read more</a>
                                </div>

                                @endforeach                        
                        </div>
                        </div>  
                        <!-- /.post -->

                      </div>
                      
                      <div class="tab-pane" id="settings">
                       <form class="form-horizontal" role="form" method="POST" action="{{url('/')}}/editprofile"  enctype='multipart/form-data'>
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Nama Lengkap</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="fullname" id="inputName" value="{{ Auth::user()->fullname }}" placeholder="Nama Lengkap">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                              <input type="email" class="form-control" name="email" id="inputName" value="{{ Auth::user()->email }}" placeholder="Kontak">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Tempat Lahir</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="tempat_lahir" id="inputName" value="{{ Auth::user()->tempat_lahir }}" placeholder="Tempat Lahir">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Tanggal Lahir</label>

                            <div class="col-sm-10">
                              <input type="date" class="form-control datepicker" data-date-format="yyyy-mm-dd"" name="tanggal_lahir" id="datepicker" value="{{ Auth::user()->tanggal_lahir }}" placeholder="yyyy-mm-dd">
                            </div>
                          </div>
                          <!-- select -->
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Gender</label>
                              <div class="col-sm-10">
                              <select class="form-control col-sm-2" name="jenis_kelamin" value="{{ Auth::user()->jenis_kelamin }}">
                                @if (Auth::user()->jenis_kelamin)
                                  <option value="{{ Auth::user()->jenis_kelamin }}">{{ Auth::user()->jenis_kelamin }}</option>
                                  @if(Auth::user()->jenis_kelamin=="Laki-laki")
                                    <option value="Perempuan">Perempuan</option>
                                  @else 
                                    <option value="Laki-laki">Laki-laki</option>
                                  @endif
                                @else 
                                  <option value="Kosong">Kosong </option>
                                  <option value="Laki-laki">Laki-laki</option>
                                  <option value="Perempuan">Perempuan</option>
                                @endif</select>
                            </div>
                          </div>
                          <!-- <div class="form-group">
                            <label for="inputExperience" class="col-sm-2 control-label">About</label>

                            <div class="col-sm-10">
                              <textarea class="form-control" id="inputExperience" placeholder="About"></textarea>
                            </div>
                          </div>
                           -->
                           <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Password</label>

                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="passwd" id="paswd"  placeholder="Enter Password">
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
                        <form class="form-horizontal" role="form" method="POST" action="{{url('/')}}/change_password"  enctype='multipart/form-data'>
                          <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label" >Email</label>

                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputEmail" value="{{ Auth::user()->email }}" placeholder="Email" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Password Lama</label>

                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="old_password" id="pass_l" placeholder="Password Lama">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Password Baru</label>

                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="password" id="pass_b"  placeholder="Password Baru">
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
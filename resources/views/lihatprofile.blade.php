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
                          <img class="profile-user-img img-responsive img-circle img-bordered-sm" src="<?php echo $listprofile->path_foto;?>"  alt="User profile picture" >
                          <h3 class="profile-username text-center">{{ $listprofile->fullname }} </h3>
                          <p class="text-muted text-center">{{ $listprofile->username }}</p>
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

                      <p class="text-muted"> {{ $listprofile->username }}</p>

                      <hr>

                      <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>

                      <p class="text-muted"> {{ $listprofile->email }}</p>

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
                        <?php
                        $rating = $listprofile->rating;
                        $arr_rating = explode("|", $rating);
                        $fix_rating=0;
                        $id_rating=0;
                        if($rating!=null && sizeof($arr_rating)>=1){
                            $flag=0;
                            foreach ($arr_rating as $value) {
                                list($id,$nilai) = explode(",", $value);
                                if(Auth::user()->id_user==(int)$id){
                                    $id_rating=(int)$nilai;
                                }

                                $fix_rating=$fix_rating+(float)$nilai;

                            }
                            $fix_rating=$fix_rating/(sizeof($arr_rating));

                        }

                        ?>
                      <strong><i class="fa fa-star margin-r-5"></i> Rating <span>{{$fix_rating}}</span></strong>
                      <br>
                        <form name="FinalAccept" method="POST" action="{{url('/')}}/rating">
                            <input name="id" value="{{$listprofile->id_user}}" type="hidden" />
                      <fieldset class="rating">
                        <input onclick="this.form.submit()" type="radio" id="star5" name="rating" value="5.0" <?php if($id_rating==5.0) echo "checked";?> /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input onclick="this.form.submit()" type="radio" id="star4half" name="rating" value="4.5" <?php if($id_rating==4.5) echo "checked";?> /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input onclick="this.form.submit()" type="radio" id="star4" name="rating" value="4.0" <?php if($id_rating==4.0) echo "checked";?> /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input onclick="this.form.submit()" type="radio" id="star3half" name="rating" value="3.5" <?php if($id_rating==3.5) echo "checked";?> /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input onclick="this.form.submit()" type="radio" id="star3" name="rating" value="3.0" <?php if($id_rating==3.0) echo "checked";?>/><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input onclick="this.form.submit()" type="radio" id="star2half" name="rating" value="2.5" <?php if($id_rating==2.5) echo "checked";?> /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input onclick="this.form.submit()" type="radio" id="star2" name="rating" value="2.0" <?php if($id_rating==2.0) echo "checked";?>/><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input onclick="this.form.submit()" type="radio" id="star1half" name="rating" value="1.5" <?php if($id_rating==1.5) echo "checked";?> /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input onclick="this.form.submit()" type="radio" id="star1" name="rating" value="1.0" <?php if($id_rating==1.0) echo "checked";?>/><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input onclick="this.form.submit()" type="radio" id="starhalf" name="rating" value="0.5" <?php if($id_rating==0.5) echo "checked";?>/><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                      </fieldset>
                        </form>

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
                                  <a href="<?php echo url('/');echo "/lihatprofile/$list->id_user";?>"><?php echo ($list->fullname);?></a>
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
                              <input type="text" class="form-control" name="fullname" id="inputName" value="{{ $listprofile->fullname }}" placeholder="Nama Lengkap">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                              <input type="email" class="form-control" name="email" id="inputName" value="{{ $listprofile->email }}" placeholder="Kontak">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Tempat Lahir</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="tempat_lahir" id="inputName" value="{{ $listprofile->tempat_lahir }}" placeholder="Tempat Lahir">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Tanggal Lahir</label>

                            <div class="col-sm-10">
                              <input type="date" class="form-control datepicker" data-date-format="yyyy-mm-dd"" name="tanggal_lahir" id="datepicker" value="{{ $listprofile->tanggal_lahir }}" placeholder="yyyy-mm-dd">
                            </div>
                          </div>
                          <!-- select -->
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Gender</label>
                              <div class="col-sm-10">
                              <select class="form-control col-sm-2" name="jenis_kelamin" value="{{ $listprofile->jenis_kelamin }}">
                                @if ($listprofile->jenis_kelamin)
                                  <option value="{{ $listprofile->jenis_kelamin }}">{{ $listprofile->jenis_kelamin }}</option>
                                  @if($listprofile->jenis_kelamin=="Laki-laki")
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
                              <input type="email" class="form-control" id="inputEmail" value="{{ $listprofile->email }}" placeholder="Email" disabled>
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
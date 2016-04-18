@extends('layouts.home')
@section('content')
<!-- Full Width Column -->
<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?php echo $listpost->judul; ?>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box box-info">
                <div class="box-body">
                    <!-- Post -->
                    <div class="post">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="<?php echo $listpost->path_foto; ?>" alt="user image">
                            <span class="username">
                              <a href="#"><?php echo $listpost->fullname; ?></a>
                              <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                            </span>
                            <span class="description">Shared publicly - <?php echo $listpost->waktu; ?></span>
                        </div>
                        <!-- /.user-block -->

                        <div class="row margin-bottom">
                            <div class="col-sm-6">
                                <img class="img-responsive" src="{{url("/")}}<?php echo $listpost->path_gambar;?>" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <h4>Jenis Ikan</h4>
                                <p><?php echo $listpost->jenis_ikan; ?></p>
                                <br>
                                <br>
                                <h4>Jenis Penjual</h4>
                                <p><?php echo $listpost->jenis_penjual; ?></p>
                                <br>
                                <br>
                                <h4>Harga/Kg</h4>
                                <p><?php echo $listpost->harga_kg; ?></p>
                            </div>
                            <!-- /.col -->
                        </div>

                        <!-- Deskripsi -->
                        <h4>Deskripsi<h4>
                        <p>
                            <?php echo $listpost->deskripsi; ?>
                        </p>

                        <!-- MAP -->
                        <div class="row margin-bottom">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-10" id="map" style="height: 300px">
                            </div>
                        </div>

                        <ul class="list-inline">
                            <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                            <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                            </li>
                            <li class="pull-right">
                                <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                    (5)</a></li>
                        </ul>
                                <div class="box-footer box-comments">
                                    @foreach ($listcomment as $list)
                                    <div class="box-comment">
                                        <!-- User image -->
                                        <img class="img-circle img-sm" src="<?php echo $list->path_foto; ?>" alt="User Image">

                                        <div class="comment-text">
                                  <span class="username">
                                    <?php echo $list->fullname; ?>
                                    <span class="text-muted pull-right"><?php echo $list->waktu; ?></span>
                                  </span><!-- /.username -->
                                            <?php echo $list->komentar; ?>
                                        </div>
                                        <!-- /.comment-text -->
                                    </div>
                                    <!-- /.box-comment -->
                                    @endforeach
                                </div>

                                <div class="box-footer">
                                    <form action="#" method="post">
                                        <img class="img-responsive img-circle img-sm" src="<?php if(Auth::check()!=false){echo Auth::user()->path_gambar;} ?>" alt="Alt Text">
                                        <!-- .img-push is used to add margin to elements next to floating images -->
                                        <div class="img-push">
                                            <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                                        </div>
                                    </form>
                                </div>

                    </div>
                    <!-- /.post -->
                </div>
            </div>
        </section>

    </div>
    <!-- /.container -->
</div>
<script>
function initMap() {
   <?php echo "var latt = $listpost->latitude " ?>;
    <?php echo "var long = $listpost->longtitude " ?>;

    var myLatLng = {lat:latt , lng: long};

  // Create a map object and specify the DOM element for display.
  var map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    scrollwheel: true,
    zoom: 12
  });

  // Create a marker and set its position.
  var marker = new google.maps.Marker({
    map: map,
    position: myLatLng,
    title: 'Tempatnya'
  });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpWqBlfb-qpurvKDYC6jTifM7UfaOHvVA&signed_in=true&callback=initMap"
        async defer>
</script>
@endsection
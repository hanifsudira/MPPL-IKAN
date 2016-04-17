@extends('layouts.home')
@section('content')
<!-- Full Width Column -->
<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Post . . .
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box box-info">
                <div class="box-body">
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

                        <div class="row margin-bottom">
                            <div class="col-sm-6">
                                <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <h4>Jenis Ikan</h4>
                                <p>IKAN</p>
                                <br>
                                <br>
                                <h4>Jenis Penjual</h4>
                                <p>PJ</p>
                                <br>
                                <br>
                                <h4>Harga/Kg</h4>
                                <p>2000</p>
                            </div>
                            <!-- /.col -->
                        </div>

                        <!-- Deskripsi -->
                        <h4>Deskripsi<h4>
                        <p>
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like. Some people hate it and argue for
                            its demise, but others ignore the hate as they create awesome
                            tools to help create filler text for everyone from bacon lovers
                            to Charlie Sheen fans.
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

                        <input class="form-control input-sm" type="text" placeholder="Type a comment">
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
  var myLatLng = {lat: -7.279539, lng: 112.797268};

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
    title: 'Hello World!'
  });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpWqBlfb-qpurvKDYC6jTifM7UfaOHvVA&signed_in=true&callback=initMap"
        async defer>
</script>
@endsection
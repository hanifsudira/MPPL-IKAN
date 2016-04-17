@extends('layouts.home')
@section('content')
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
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Post Ikan Baru</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="/submit_post"  enctype='multipart/form-data'>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputjudul">Judul Post</label>
                                    <input type="text" name="judul" class="form-control" id="exampleInputjudul" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" rows="3" style="resize: vertical;" placeholder="Enter ..." required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Input Gambar</label>
                                    <input name="gambar" type="file" id="exampleInputFile" required>
                                    <p class="help-block">Masukan Gambar Post</p>
                                </div>
                                <div class="form-group">
                                    <label >Kategori Ikan</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="inputkategori" id="optionsRadios1" value="tawar" checked>
                                            Tawar
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="inputkategori" id="optionsRadios2" value="laut">
                                            Laut
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label >Jenis Post</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="inputjenis" id="Radios1" value="produsen" checked>
                                            Produsen
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="inputjenis" id="Radios2" value="grosir">
                                            Grosir
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="inputjenis" id="Radios3" value="eceran">
                                            Eceran
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputjudul">Harga</label>
                                    <input type="number" name="harga_kg" class="form-control" id="harga" placeholder="" required>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label >Provinsi</label>
                                            <input type="text" id="provinsi" name="provinsi" required>
                                        </div>
                                        <div class="col-xs-3">
                                            <label >Kota</label>
                                            <input type="text" id="kota" name="kota" required>
                                        </div>
                                        <div class="col-xs-3">
                                            <label >Longtitude</label>
                                            <input type="text" id="long" name="longtitude" required>
                                        </div>
                                        <div class="col-xs-3">
                                            <label >Latitude</label>
                                            <input type="text" id="lat" name="latitude" required>
                                        </div>

                                    </div>
                                    <br>
                                    <center>
                                            <div id="dvMap" style="width:600px; height: 400px">
                                            </div>
                                    </center>

                                </div>


                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </div>
                        </form>
                    </div><!-- /.box -->
                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>

    </div>
    <!-- /.container -->
</div>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    var lat=0.0;
    var long=0.0;
    window.onload = function () {

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        }
        function showPosition(position) {
            lat=position.coords.latitude;
            console.log(lat);
            long=position.coords.longitude;
            console.log(long);
            out_map();
        }

    }

    function out_map(){
        var mapOptions = {
            center: new google.maps.LatLng(lat, long),
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var infoWindow = new google.maps.InfoWindow();
        var latlngbounds = new google.maps.LatLngBounds();
        var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
        google.maps.event.addListener(map, 'click', function (e) {
            var latlng = new google.maps.LatLng(e.latLng.lat(), e.latLng.lng());
            var geocoder = geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'latLng': latlng }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                        var address_ = results[1].formatted_address.split(",");
                        var len=address_.length;
                        document.getElementById("provinsi").value = address_[len-2];
                        document.getElementById("kota").value = address_[len-3];
                        document.getElementById("lat").value = e.latLng.lat();
                        document.getElementById("long").value = e.latLng.lng();
                    }
                }

            });
        });
    }
</script>


@endsection
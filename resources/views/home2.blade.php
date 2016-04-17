@extends('layouts.home')

@section('content')

    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
            <!-- Main content -->
            <section class="content">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <i class="fa fa-bar-chart-o"></i>
                        <h3 class="box-title">Harga Ikan Terkini</h3>
                    </div>
                    <div class="box-body">
                        <center><canvas id="grafik_ikan" style="height: 300px;"></canvas></center>
                    </div>
                    <!-- /.box-body-->
                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <i class="fa fa-newspaper-o"></i>
                        <h3 class="box-title">Berita</h3>
                    </div>
                    <div class="box-body">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php $count=0; ?>
                                @foreach ($post_hot as $list)
                                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $count;?>" class="<?php
                                    if($count==0){echo "active";}?>"></li>
                                    <?php $count++; ?>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                <?php $count=0;?>
                                @foreach ($post_hot as $list)
                                    <div class="item <?php if($count==0){echo "active";}?>">
                                        <img src="<?php echo ($list->path_gambar);?>" alt="<?php echo ($list->judul);
                                        ?>">

                                        <div class="carousel-caption">
                                            <?php
                                            echo ($list->judul);
                                            $count++;
                                            ?>
                                        </div>
                                    </div>
                                @endforeach                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="fa fa-angle-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="fa fa-angle-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <i class="fa fa-newspaper-o"></i>
                        <h3 class="box-title">New Post</h3>
                    </div>
                    <div class="box-body">
                        <div class="post">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                            <span class='username'>
                              <a href="#">Jonathan Burke Jr.</a>
                            </span>
                                <span class='description'>Shared publicly - 7:30 PM today</span>
                            </div>
                            <p>
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore the hate as they create awesome
                                tools to help create filler text for everyone from bacon lovers
                                to Charlie Sheen fans.
                            </p>
                            <a class="btn btn-primary btn-xs">Read more</a>
                        </div>
                        <div class="post">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                            <span class='username'>
                              <a href="#">Jonathan Burke Jr.</a>
                            </span>
                                <span class='description'>Shared publicly - 7:30 PM today</span>
                            </div>
                            <p>
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore the hate as they create awesome
                                tools to help create filler text for everyone from bacon lovers
                                to Charlie Sheen fans.
                            </p>
                            <a class="btn btn-primary btn-xs">Read more</a>
                        </div>
                    </div>

                </div>
                <!-- /.box -->
            </section>

            <!-- /.content -->
        </div>
        <!-- /.container -->
    </div>

<script src="{{asset("bower_components/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js")}}"></script>
<script>
    function setCookie(cname,cvalue,exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname+"="+cvalue+"; "+expires;
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    celuk();
    function celuk(){
        window.onload = function () {
            var ikan = getCookie("co_ikan");
            var harga = getCookie("co_harga");
            if (ikan == "" && harga == "") {
                $.ajax({
                    url: "http://localhost:8000/cek/harga",
                    type: "GET",
                    data: "",
                    success: function (response) {
                        harga = JSON.parse("[" + response + "]");
                        console.log(harga);
                        setCookie("co_harga", harga, 30);

                    },
                });
                $.ajax({
                    url: "http://localhost:8000/cek/ikan",
                    type: "GET",
                    data: "",
                    success: function (response) {
                        ikan = response.replace('["', '');
                        ikan = ikan.replace('"]', '');
                        ikan = ikan.split('","');
                        console.log(ikan);
                        setCookie("co_ikan", ikan, 30);
                        location.reload();

                    },
                });


            } else {
                harga = JSON.parse("[" + harga + "]");
                ikan = ikan.split(',');
            }


            var barChartData = {

                labels: ikan,

                datasets: [

                    {
                        fillColor: "rgba(91,192,222,0.5)",
                        strokeColor: "rgba(91,192,222,0.8)",
                        highlightFill: "rgba(91,192,222,0.75)",
                        highlightStroke: "rgba(91,192,222,1)",
                        data: harga
                    }
                ]

            }
            var ctx = document.getElementById("grafik_ikan").getContext("2d");
            window.myBar = new Chart(ctx).Bar(barChartData, {
                responsive: true
            });
        }
    }

</script>

@endsection

@extends('layouts.home')
@section('content')
        <!-- Full Width Column -->
    <div class="content-wrapper">

        <div class="container">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h4>Hasil Pencarian "yang dicari"</h4>
            </section>

            <section class="content">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <i class="fa fa-newspaper-o"></i>
                        <h3 class="box-title">Post</h3>
                    </div>

                    <div class="box-body">
                        <!-- Post -->
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
                        <!-- /.post -->
                    </div>
                </div>
            </section>
            <!-- /.content -->

        </div>
        <!-- /.container -->
    </div>
@endsection
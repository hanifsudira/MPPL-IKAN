@extends('layouts.home')
@section('content')
        <!-- Full Width Column -->
    <div class="content-wrapper">

        <div class="container">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h4>Hasil Pencarian "<?php echo $pencarian;?>"</h4>
            </section>

            <section class="content">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <i class="fa fa-newspaper-o"></i>
                        <h3 class="box-title">Post</h3>
                    </div>

                    <div class="box-body">
                        <!-- Post -->
                        @foreach ($post_list as $list)
                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="<?php echo ($list->path_foto);?>" alt="<?php echo ($list->username);?> image">
                            <span class='username'>
                              <a href="#"><?php echo ($list->fullname);?></a>
                            </span>
                                    <span class='description'>Shared publicly - <?php echo ($list->waktu);?></span>
                                </div>
                                <h4><a href="#"><?php echo ($list->judul);?></a></h4>
                                <p>
                                    <?php echo ($list->deskripsi);?>
                                </p>
                                <a class="btn btn-primary btn-xs">Read more</a>
                            </div>

                            @endforeach
                        <!-- /.post -->
                    </div>
                </div>
            </section>
            <!-- /.content -->

        </div>
        <!-- /.container -->
    </div>
@endsection
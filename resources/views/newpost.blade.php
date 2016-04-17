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
                        <form role="form" method="POST" action="/submit_post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputjudul">Judul Post</label>
                                    <input type="text" name="judul" class="form-control" id="exampleInputjudul" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" rows="3" style="resize: vertical;" placeholder="Enter ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Input Gambar</label>
                                    <input name="gambar" type="file" id="exampleInputFile">
                                    <p class="help-block">Masukan Gambar Post</p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Kategori Ikan</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                            Tawar
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                            Laut
                                        </label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Jenis Post</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                            Grosir
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                            Eceran
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Provinsi</label>
                                    <select class="form-control">
                                        <?php
                                            for($i=0;$i<34;$i++){
                                                echo "<option>option $i</option>";
                                            }
                                        ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputjudul">Kota</label>
                                    <input type="text" class="form-control" id="exampleInputjudul" placeholder="Surabaya">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputjudul">Langtitude & Longtitude</label>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <input type="text" placeholder="13123213" disabled>
                                        </div>
                                        <div class="col-xs-6">
                                            <input type="text" placeholder="312312312" disabled>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputjudul">Harga</label>
                                    <input type="number" class="form-control" id="exampleInputjudul" placeholder="">
                                </div>
                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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

@endsection
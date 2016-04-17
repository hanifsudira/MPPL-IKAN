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
                                    <label >Kategori Ikan</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="inputkategori" id="optionsRadios1" value="tawar">
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
                                            <input type="radio" name="inputjenis" id="Radios1" value="produsen">
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
                                    <label>Provinsi</label>
                                    <select name="provinsi" class="form-control">
                                        <?php
                                            for($i=0;$i<34;$i++){
                                                echo "<option value=".$i.">option $i</option>";
                                            }
                                        ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputjudul">Kota</label>
                                    <input name="kota" type="text" class="form-control" id="kota" placeholder="Surabaya">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputjudul">Langtitude & Longtitude</label>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <input type="text" name="longtitude" value="13123213" placeholder="13123213">
                                        </div>
                                        <div class="col-xs-6">
                                            <input type="text" name="latitude" value="13123213" placeholder="312312312">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputjudul">Harga</label>
                                    <input type="number" name="harga_kg" class="form-control" id="harga" placeholder="">
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

@endsection
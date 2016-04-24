@extends('layouts.home')
@section('content')
<!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Pencarian
                </h1>
                <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" style="height: 50px" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Kategori
                            <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Laut</a></li>
                            <li><a href="#">Tawar</a></li>
                        </ul>
                    </div>
                    <!-- /btn-group -->
                    <input type="text" class="form-control" style="height: 50px">
                    <span class="input-group-btn">
                      <button type="button" style="height: 50px" class="btn btn-info btn-flat">Go!</button>
                    </span>
                </div>

            </section>

        </div>
        <!-- /.container -->
    </div>
@endsection

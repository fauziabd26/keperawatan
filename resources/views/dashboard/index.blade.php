@extends('layouts.main')

@section('content')
<section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <a href="#"><h4>Total Pengguna</h4></a>
                  </div>
                  <div class="card-body">
                    <div class="count">{{$user}}</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <a href="mahasiswa"><h4>Total Mahasiswa</h4></a>
                  </div>
                  <div class="card-body">
                    <div class="count">{{$mahasiswa}}</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Data Barang</h4>
                  </div>
                  <div class="card-body">
                  <div class="count">{{$barang}}</div>
                  </div>
                </div>
              </div>
            </div>
<<<<<<< HEAD
=======
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-address-book"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Data Peminjaman</h4>
                  </div>
                  <div class="card-body">
                  <div class="count">{{$peminjaman}}</div>
                  </div>
                </div>
              </div>
            </div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-address-book"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Data Pengembalian</h4>
                  </div>
                  <div class="card-body">
                  <div class="count">0</div>
                  </div>
                </div>
              </div>
            </div>
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Laporan</h4>
                  </div>
                  <div class="card-body">
                    1,201
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        @stop
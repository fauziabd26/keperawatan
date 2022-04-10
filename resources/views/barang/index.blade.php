@extends('layouts.main')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Barang</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
            <div class="breadcrumb-item">Data Barang</div>
        </div>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col">
<<<<<<< HEAD
                        <a href="{{ route('tambah_barang') }}" class="btn btn-primary" title="Tambah" data-toggle="tooltip">
=======
                        <a href="#" class="btn btn-primary" title="Tambah" data-toggle="tooltip">
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
                            <i class="fas fa-plus mr-2"></i> Tambah Data Barang
                        </a>
                    </div>
                </div>
<<<<<<< HEAD
                @if (session('pesan'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success</strong> {{ session('pesan') }}.
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    @elseif (session('delete'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success</strong> {{ session('delete') }}.
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    @endif
=======
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead class="thead-dark" align="center">
                            <tr>
                                <th>NO</th>
                                <th>Nama Barang</th>
                                <th>stok</th>
                                <th>Kategori Barang</th>
                                <th>Satuan Barang</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <?php $no = 1;?>
<<<<<<< HEAD
                        @foreach($barang as $data)
                        <tr>
                            <td align="center">{{ $no++ }}</td>
                            <td align="center">{{ $data->name }}</td>
                            <td align="center">{{ $data->stok }}</td>
                            <td align="center">{{ $data->k_name }} </td>
                            <td align="center">{{ $data->s_name }}</td>
                            <td align="center">
                                <button type="button" class="btn btn-success btn-sm mr-2" data-toggle="modal" data-target="#modal-lihat-{{ $data->id }}"><i class="fa fa-eye"> Lihat</i></button>
                                <a href="/barang/edit/{{ $data->id }}" class="btn btn-warning btn-sm mr-2" title="Edit" data-toggle="tooltip"><i class="fa fa-pen" aria-hidden="true"> Edit</i></a>
                                <a href="/barang/delete{{ $data->id }}" class="btn btn-danger btn-sm mr-2" title="Hapus" data-toggle="tooltip" onclick="return confirm('Anda yakin mau menghapus {{ $data->name }} ?')"><i class="fa fa-trash" aria-hidden="true"> Hapus</i></a>
=======
                        @foreach($barang as $b)
                        <tr>
                            <td align="center">{{ $no++ }}</td>
                            <td align="center">{{ $b->name }}</td>
                            <td align="center">{{ $b->stok }}</td>
                            <td align="center">{{ $b->k_name }} </td>
                            <td align="center">{{ $b->s_name }}</td>
                            <td align="center">
                                <button class="btn btn-success btn-sm mr-2" data-toggle="modal" data-target="#modal-lihat"><i class="fa fa-eye" aria-hidden="true"> Lihat</i></button>
                                <a href="#" class="btn btn-warning btn-sm mr-2" title="Edit" data-toggle="tooltip"><i class="fa fa-pen" aria-hidden="true"> Edit</i></a>
                                <a href="#" class="btn btn-danger btn-sm mr-2" title="Hapus" data-toggle="tooltip" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="fa fa-trash" aria-hidden="true"> Hapus</i></a>
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<<<<<<< HEAD
@foreach ($barang as $data)
<!-- Modal Lihat -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal-lihat-{{ $data->id }}" class="modal fade">
=======
<!-- Modal Lihat -->
<?php if (!empty($barang)) { ?>
    <?php foreach ($barang as $b) : ?>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal-lihat" class="modal fade">
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Data Barang </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<<<<<<< HEAD
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">Kode Barang</div>
                                <div class="col-md-4 ms-auto">{{ $data->id }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">Nama Barang</div>
                                <div class="col-md-6 ms-auto">{{ $data->name }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">Stok Barang</div>
                                <div class="col-md-6 ms-auto">{{ $data->stok }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">Kategori Barang</div>
                                <div class="col-md-6 ms-auto">{{ $data->k_name }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">Satuan Barang</div>
                                <div class="col-md-6 ms-auto">{{ $data->s_name }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">Gambar Barang</div>
                                <div class="col-md-6 ms-auto"><img src="{{ url('img/barang/'.$data->file) }}" width="150px" alt=""></div>
                            </div>
                        </div>
=======
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Kode Barang      : <?= $b['id'] ?></p>
                        <p>Nama Barang      : <?= $b['name'] ?></p>
                        <p>stok             : <?= $b['stok'] ?></p>
                        <p>Kategori Barang  : <?= $b['k_name'] ?></p>
                        <p>Satuan Barang    : <?= $b['s_name'] ?></p>
                        <p>Gambar Barang    : <?= $b['file'] ?></p>
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
<!-- END Modal Lihat -->
@endforeach
=======
    <?php endforeach; ?>
<?php } ?>
<!-- END Modal Lihat -->

>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273

@stop
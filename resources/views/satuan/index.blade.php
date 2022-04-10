@extends('layouts.main')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Satuan</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
            <div class="breadcrumb-item">Data Satuan</div>
        </div>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col">
<<<<<<< HEAD
                        <a href="{{ route('tambah_satuan') }}" class="btn btn-primary" title="Tambah" data-toggle="tooltip">
=======
                        <a href="#" class="btn btn-primary" title="Tambah" data-toggle="tooltip">
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
                            <i class="fas fa-plus mr-2"></i> Tambah Data Satuan
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
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
                    <table id="example1" class="table table-bordered table-hover">
                        <thead class="thead-dark" align="center">
                            <tr>
                                <th>NO</th>
                                <th>Nama Satuan</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <?php $no = 1;?>
<<<<<<< HEAD
                        @foreach($satuan as $data)
                        <tr>
                            <td align="center">{{ $no++ }}</td>
                            <td align="center">{{ $data->name }}</td>
                            <td align="center">
                                <button class="btn btn-success btn-sm mr-2" data-toggle="modal" data-target="#modal-lihat-{{ $data->id }}"><i class="fa fa-eye" aria-hidden="true"> Lihat</i></button>
                                <a href="/satuan/edit/{{ $data->id }}" class="btn btn-warning btn-sm mr-2" title="Edit" data-toggle="tooltip"><i class="fa fa-pen" aria-hidden="true"> Edit</i></a>
                                <a href="/satuan/delete{{ $data->id }}" class="btn btn-danger btn-sm mr-2" title="Hapus" data-toggle="tooltip" onclick="return confirm('Anda yakin mau menghapus {{ $data->name }} ?')"><i class="fa fa-trash" aria-hidden="true"> Hapus</i></a>
=======
                        @foreach($satuan as $s)
                        <tr>
                            <td align="center">{{ $no++ }}</td>
                            <td align="center">{{ $s->name }}</td>
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
<!-- Modal Lihat -->
<<<<<<< HEAD
@if (!empty($satuan))
    @foreach ($satuan as $data)
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal-lihat-{{ $data->id }}" class="modal fade">
=======
<?php if (!empty($satuan)) { ?>
    <?php foreach ($satuan as $s) : ?>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal-lihat" class="modal fade">
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Data Satuan </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
<<<<<<< HEAD
                        <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4">Kode Satuan</div>
                                    <div class="col-md-4 ms-auto">{{ $data->id }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">Nama Satuan</div>
                                    <div class="col-md-6 ms-auto">{{ $data->name }}</div>
                                </div>
                        </div>
=======
                        <p>Nama Satuan      : <?= $s['name'] ?></p>
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
    @endforeach
@endif
<!-- END Modal Lihat -->

=======
    <?php endforeach; ?>
<?php } ?>
<!-- END Modal Lihat -->


>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
@stop
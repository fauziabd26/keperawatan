@extends('layouts.main')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Pengembalian</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
            <div class="breadcrumb-item">Data Pengembalian</div>
        </div>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col">
                        <a href="#" class="btn btn-primary" title="Tambah" data-toggle="tooltip">
                            <i class="fas fa-plus mr-2"></i> Tambah Data Pengembalian
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead class="thead-dark" align="center">
                            <tr>
                                <th>NO</th>
								<th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Nama Peminjam</th>
                                <th>Jumlah Peminjam</th>
                                <th>Tanggal Pengembalian</th>
								<th>Tanggal Peminjaman</th>
								<th>Waktu Peminjaman</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        
                        <tr>
                            <td align="center">-</td>
                            <td align="center">-</td>
                            <td align="center">-</td>
                            <td align="center">-</td>
                            <td align="center">-</td>
							<td align="center">-</td>
							<td align="center">-</td>
							<td align="center">-</td>
                            <td align="center">
                                <button class="btn btn-success btn-sm mr-2" data-toggle="modal" data-target="#modal-lihat"><i class="fa fa-eye" aria-hidden="true"> Lihat</i></button>
                                <a href="#" class="btn btn-warning btn-sm mr-2" title="Edit" data-toggle="tooltip"><i class="fa fa-pen" aria-hidden="true"> Edit</i></a>
                                <a href="#" class="btn btn-danger btn-sm mr-2" title="Hapus" data-toggle="tooltip" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="fa fa-trash" aria-hidden="true"> Hapus</i></a>
                            </td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal Lihat -->
<?php if (!empty($barang)) { ?>
    <?php foreach ($barang as $b) : ?>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal-lihat" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Data Barang </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php } ?>
<!-- END Modal Lihat -->


@stop
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
                        <a href="{{ route('tambah_barang') }}" class="btn btn-primary" title="Tambah" data-toggle="tooltip">
                            <i class="fas fa-plus mr-2"></i> Tambah Data Barang
                        </a>
                    </div>
                </div>
                @if (session('pesan'))
                swal({
                    icon: "success",
                    {{session('pesan')}}
                });
                @endif
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
                                <a href="#" class="btn btn-danger btn-sm mr-2" title="Hapus" data-toggle="tooltip" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="fa fa-trash" aria-hidden="true"> Hapus</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@foreach ($barang as $data)
<!-- Modal Lihat -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal-lihat-{{ $data->id }}" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Data Barang </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
<!-- END Modal Lihat -->
@endforeach

@stop
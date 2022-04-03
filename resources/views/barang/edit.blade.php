@extends('layouts.main')

@section('content')
<section class="section">
<div class="section-header">
        <h1>Edit Data Barang</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
            <div class="breadcrumb-item">Edit Data Barang</div>
        </div>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col">
                        <a href="{{ route('index_barang') }}" class="btn btn-primary" title="Back" data-toggle="tooltip">
                            <i class="fas fa-angle-left mr-2"></i> Kembali ke Data Barang
                        </a>
                    </div>
                </div>
                <form action="/barang/update/{{ $datas->id }}" method="POST" enctype="multipart/form-data">
                    @csrf    
                    <div class="row">
                        <div class="form-group col-6 col-md-3 col-lg-3">    
                            <label class="control-label" for="id">Kode Barang</label>
                            <input type="text" name="id" class="form-control" value="{{ $datas->id }}">
                            <div class="text-danger">
                               @error('id')
                                   {{ $message }}
                               @enderror
                            </div>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-3">    
                                <label class="control-label" for="name">Nama Barang</label>
                                <input type="text" name="name" class="form-control" value="{{ $datas->name }}">
                                <div class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6 col-md-3 col-lg-3">
                            <label class="control-label" for="stok">Stok Barang</label>
                            <input type="number" name="stok" class="form-control" value="{{ $datas->stok }}">
                            <div class="text-danger">
                               @error('stok')
                                   {{ $message }}
                               @enderror
                            </div>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-3">
                            <label class="control-label" for="k_name">Kategori Barang</label>
                            <select name="k_name" class="form-control">
                                <option disabled> Semua Kategori </option>
                                @foreach ($kategoris as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option> 
                                @endforeach
                            </select>
                            <div class="text-danger">
                               @error('kategori')
                                   {{ $message }}
                               @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6 col-md-3 col-lg-3">
                            <label class="control-label" for="s_name">Satuan Barang</label>
                            <select name="s_name" class="form-control">
                                <option disabled> Satuan Barang </option>
                                @foreach ($satuans as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option> 
                                @endforeach
                            </select>
                            <div class="text-danger">
                               @error('satuan')
                                   {{ $message }}
                               @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">

                            </div>
                            <div class="col-sm-6">
                                <div class="form-group col-6 col-md-3 col-lg-3">
                                    <label class="control-label" for="file">Gambar Barang</label>
                                    <input type="file" name="file" class="form-control" value="{{ $datas->$file }}">
                                        <div class="text-danger">
                                        @error('file')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
@stop
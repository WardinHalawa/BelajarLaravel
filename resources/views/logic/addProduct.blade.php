@extends('layouts.parentContent')

@section('content')
    
<div class="card">
    <div class="card-header bg-primary text-white">
        Tambah Produk
    </div>

    <div class="card-body">

        <form action="/product/simpan" method="POST">

            @csrf

            <div class="mb-3">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control">
            </div>

            <div class="mb-3">
                <label>Jenis Barang</label>
                <input type="text" name="jenis_barang" class="form-control">
            </div>

            <div class="mb-3">
                <label>Harga Barang</label>
                <input type="number" name="harga_barang" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">
                Simpan
            </button>

            <a href="/product" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>


@endsection
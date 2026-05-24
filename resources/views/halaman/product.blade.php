@extends('layouts.parentContent')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card mb-3 text-center p-2 bg-danger text-white">
                <h5>DAFTAR BARANG</h3>
            </div>
            <div class="alert alert-primary">
                <b>Nama Toko : </b>{{ $data_toko['nama_toko'] }}
                <br>
                <b>Alamat : </b>{{ $data_toko['alamat'] }}
                <br>
                <b>Tipe : </b>{{ $data_toko['type'] }}
                <br>
            </div>
            <a href="/product/tambah" type="button" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jenis Barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_produk as $item)
                        <tr>
                            <td>{{ $item->id_barang }}</td>
                            <td>{{ $item->nama_barang }}</td>
                            <td>{{ $item->jenis_barang }}</td>
                            <td>{{ $item->harga_barang }}</td>
                            <td>
                                <a href="/product/hapus/{{ $item->id_barang }}" class="btn btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    Hapus
                                </a>
                                <a href="/product/edit/{{ $item->id_barang }}" class="btn btn-warning">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

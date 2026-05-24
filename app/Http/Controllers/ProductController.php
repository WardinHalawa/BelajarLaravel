<?php

namespace App\Http\Controllers;

use App\Models\produks;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // FORM EDIT
    public function edit($id)
    {
        $produk = produks::find($id);

        return view('logic.editProduct', [
            'produk' => $produk
        ]);
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        produks::where('id_barang', $id)
            ->update([
                'nama_barang' => $request->nama_barang,
                'jenis_barang' => $request->jenis_barang,
                'harga_barang' => $request->harga_barang
            ]);

        return redirect('/product');
    }
    // HAPUS DATA
    public function hapus($id)
    {
        produks::where('id_barang', $id)->delete();

        return redirect('/product');
    }
    public function simpan(Request $request)
    {
        produks::create([
            'nama_barang' => $request->nama_barang,
            'jenis_barang' => $request->jenis_barang,
            'harga_barang' => $request->harga_barang
        ]);

        return redirect('/product');
    }
    public function getProduct()
    {
        $toko = [
            'nama_toko' => 'Market Virtual',
            'alamat' => 'Jl. Jamin Ginting',
            'type' => 'Elektronik'
        ];
        $produk = produks::get();

        return view('halaman.product', [
            'data_toko' => $toko,
            'data_produk' => $produk,
        ]);
    }
    public function input()
    {
        return view('logic.addProduct');
    }
}

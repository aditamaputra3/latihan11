<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\produk;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProdukController extends Controller
{
    public function index()
    {
        $data['produk'] = produk::join('kategori', 'produk.id_kategori', '=', 'kategori.id_kategori')
            ->select('produk.*', 'kategori.deskripsi')
            ->get();
        return view('Content.dashboard-produk', $data);
    }
    
    public function create(){
        $data['kategori'] = kategori::all();
        return view('Content.dashboard-tambah-produk', $data);
    }

    public function store(Request $request){
        $input = $request->all();
        produk::create($input);
        return redirect('dashboard-produk');
    }

    public function edit(Produk $produk)
    {
        $data['kategori'] = kategori::all();
        return view('Content.dashboard-edit-produk',compact('produk'),$data);
    }

    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        
        $produk->fill($request->post())->save();

        return redirect()->route('produk.index')->with('success','Company Has Been updated successfully');
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->route('produk.index')->with('success','Company has been deleted successfully');
    }

    public function print() {
        $data['produk'] = produk::join('kategori', 
        'produk.id_kategori', '=', 'kategori.id_kategori')
        ->select('produk.*', 'kategori.deskripsi')
        ->get();

        $pdf = PDF::loadView('Content.print-pdf', $data);
        return $pdf->stream();
    }
}

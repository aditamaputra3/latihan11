@extends('Layout.layout')

@section('content')
    @include('Component.navbar')
    <div class="container">
        <h1>Data Produk</h1>
        <td><a href="dashboard-tambah-produk" class="btn btn-primary">Tambah Data</a></td>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kategori Produk</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $pro)
                    <tr>
                        <td></td>
                        <td>{{ $pro->id_produk }}</td>
                        <td>{{ $pro->nama }}</td>
                        <td>{{ $pro->id_kategori }}</td>
                        <td>{{ $pro->deskripsi }}</td>
                        <td>
                            <form action="{{ route('produk.destroy', $pro->id_produk) }}" method="post">
                                <a class="btn btn-primary" href="{{ route('produk.edit',$pro->id_produk) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                      <button class="btn btn-danger" type="submit" onclick="return confirm('Hapus Data?')">
                            Delete</button>
                            </form>
                        </td>
                        <td><a href="{{'print-produk'}}" class="btn btn-warning">Print</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@extends('Layout.layout')

@section('content')
    @include('Component.navbar')
    <div class="container">
        <h1>Edit Data Produk</h1>

        <form action="{{ route('produk.update', $produk->id_produk) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Id Produk</label>
                <input type="text" class="form-control" placeholder="Id Produk" name="id_produk"
                    value="{{ $produk->id_produk }}" readonly>
            </div>
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{ $produk->nama }}">
            </div>
            <div class="form-group">
                <label>Kategori Produk</label>

                <select class="form-select" name="id_kategori" id="id_kategori" required>
                    @foreach ($kategori as $ktg)
                        <option value="{{ $ktg->id_kategori }}" @if ($ktg->id_kategori === $produk->id_kategori) selected @endif>
                            {{ $ktg->id_kategori }} {{ $ktg->deskripsi }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </form>
    </div>
@endsection

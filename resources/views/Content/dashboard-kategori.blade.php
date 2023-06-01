@extends('Layout.layout')

@section('content')

@include('Component.navbar')

<div class="container">
    <h1>Data Produk</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Produk</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>K001</td>
                <td>Pakaian Manusia</td>
                <td><button class="btn btn-primary"> Edit</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>P002</td>
                <td>Baju Baru</td>
                <td><button class="btn btn-primary"> Edit</button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>P001</td>
                <td>Xenia</td>
                <td>K003</td>
                <td><button class="btn btn-primary"> Edit</button></td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3"></h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('barang.create') }}" class="btn btn-secondary">Add Barang</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 table table-success table-striped">
                <thead >
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Satuan</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $barang)
                        <tr>
                            <td>{{ $barang->kode_barang}}</td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->harga_barang }}</td>
                            <td>{{ $barang->deskripsi_barang }}</td>
                            <td>{{ $barang->satuan->nama_satuan }}</td>
                            <td>@include('barang.action')</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

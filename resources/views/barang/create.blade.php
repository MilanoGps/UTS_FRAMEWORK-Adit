@extends('layouts.app')
@section('content')
    <div class="container-sm my-5">
        <form action="{{ route('barang.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="row justify-content-center">
                    <div class="p-5 bg-light rounded-3 border col-xl-6">
                        <div class="mb-3 text-center">
                            <h4>Input Barang</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="kode_barang" class="form-label">Kode Barang</label>
                                <input class="form-control @error('kode_barang') is-invalid @enderror" type="text"
                                    name="kode_barang" id="kode_barang" value="{{ old('kode_barang') }}"
                                    placeholder="Enter Kode Barang">
                                @error('kode_barang')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nama_barang" class="form-label">Nama Barang</label>
                                <input class="form-control @error('nama_barang') is-invalid @enderror" type="text"
                                    name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}"
                                    placeholder="Enter Nama Barang">
                                @error('nama_barang')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="harga_barang" class="form-label">Harga</label>
                                <input class="form-control @error('harga_barang') is-invalid @enderror" type="text"
                                    name="harga_barang" id="harga_barang" value="{{ old('harga_barang') }}" placeholder="Enter Harga">
                                @error('harga_barang')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="deskripsi_barang" class="form-label">Deskrispsi</label>
                                <input class="form-control @error('deskripsi_barang') is-invalid @enderror" type="text" name="deskripsi_barang"
                                    id="deskripsi_barang" value="{{ old('deskripsi_barang') }}" placeholder="Enter Deskripsi">
                                @error('deskripsi_barang')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="satuan" class="formlabel">Satuan</label>
                                <select name="satuan" id="satuan" class="formselect">
                                    @foreach ($satuan as $satuan)
                                        <option value="{{ $satuan->id }}"
                                            {{ old('satuan') == $satuan->id ? 'selected' : '' }}>
                                            {{  $satuan->nama_satuan }}</option>
                                    @endforeach
                                </select>
                                @error('satuan')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="{{ route('barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                        class="bi-arrow-left-circle me-2"></i>
                                    Cancel</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                    Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

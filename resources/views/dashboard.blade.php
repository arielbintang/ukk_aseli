<!-- resources/views/dashboard.blade.php -->

@extends('layouts')

@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Barang</h5>
                    <p class="card-text">Kelola data barang</p>
                    <a href="{{ route('barang.index') }}" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Kategori</h5>
                    <p class="card-text">Kelola data kategori</p>
                    <a href="{{ route('kategori.index') }}" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Barang Masuk</h5>
                    <p class="card-text">Kelola data barang masuk</p>
                    <a href="{{ route('barangmasuk.index') }}" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Barang Keluar</h5>
                    <p class="card-text">Kelola data barang keluar</p>
                    <a href="{{ route('barangkeluar.index') }}" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Results Section -->
    @if(isset($barangs) || isset($kategoris))
    <div class="row mt-4">
        @if(!$barangs->isEmpty())
        <div class="col-md-6">
            <h3>Hasil Pencarian Barang</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Merk</th>
                            <th>Deskripsi</th>
                            <th>Stok</th>
                            <th>Kategori</th>
                            <th style="width: 15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($barangs as $index => $barang)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $barang->merk }}</td>
                            <td>{{ $barang->seri }}</td>
                            <td>{{ $barang->stok }}</td>
                            <td>{{ $barang->kategori->deskripsi  }}</td>
                            <td class="text-center">
                            <a href="{{ route('barang.show', $barang->id) }}" class="btn btn-sm btn-dark"><i class="fa fa-eye"></i></a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        @if(!$kategoris->isEmpty())
        <div class="col-md-6">
            <h3>Hasil Pencarian Kategori</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Deskripsi</th>
                        <th>Kode</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategoris as $kategori)
                        <tr>
                        <td>{{ $kategori->id }}</td>
                        <td>{{ $kategori->deskripsi }}</td>
                        <td>{{ $kategori->kategori }}</td>
                        <td class="text-center">
                        <a href="{{ route('kategori.show', $kategori->id) }}" class="btn btn-info btn-sm">Detail</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
    @endif
</div>
@endsection
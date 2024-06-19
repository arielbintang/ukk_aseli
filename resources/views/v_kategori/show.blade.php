@extends('layouts')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detail Kategori</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <td>{{ $rsetKategori->id }}</td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td>{{ $rsetKategori->deskripsi }}</td>
                            </tr>
                            <tr>
                                <th>Kategori</th>
                                <td>
                                    @if($rsetKategori->kategori == 'M')
                                        Modal (Barang Modal)
                                    @elseif($rsetKategori->kategori == 'A')
                                        Alat
                                    @elseif($rsetKategori->kategori == 'BHP')
                                        Bahan Habis Pakai
                                    @else
                                        Bahan Tidak Habis Pakai
                                    @endif
                                </td>
                            </tr>
                        </table>
                        <a href="{{ route('kategori.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('title', 'Data Barang')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold">Data Barang</h2>
    <p class="text-muted">Daftar seluruh persediaan barang StokCerdas.</p>
</div>

<div class="card p-3">
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Stok Minimum</th>
                    <th>Harga</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $barang['nama'] }}</td>
                    <td>{{ $barang['kategori'] }}</td>
                    <td>{{ $barang['stok'] }}</td>
                    <td>{{ $barang['minimum'] }}</td>
                    <td>Rp {{ number_format($barang['harga'], 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('barang.detail', $barang['id']) }}"
                           class="btn btn-sm btn-primary">Lihat</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
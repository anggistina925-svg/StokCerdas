@extends('layouts.app')

@section('title', 'Detail Barang')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold">Detail Barang</h2>
    <p class="text-muted">Informasi lengkap persediaan barang.</p>
</div>

<div class="card p-4">
    <h4 class="fw-bold mb-3">{{ $barang['nama'] }}</h4>

    <table class="table">
        <tr>
            <th width="35%">ID Barang</th>
            <td>{{ $barang['id'] }}</td>
        </tr>
        <tr>
            <th>Nama Barang</th>
            <td>{{ $barang['nama'] }}</td>
        </tr>
        <tr>
            <th>Kategori</th>
            <td>{{ $barang['kategori'] }}</td>
        </tr>
        <tr>
            <th>Jumlah Stok</th>
            <td>{{ $barang['stok'] }}</td>
        </tr>
        <tr>
            <th>Stok Minimum</th>
            <td>{{ $barang['minimum'] }}</td>
        </tr>
        <tr>
            <th>Harga Barang</th>
            <td>Rp {{ number_format($barang['harga'], 0, ',', '.') }}</td>
        </tr>
    </table>

    <a href="{{ route('barang.index') }}" class="btn btn-secondary">
        Kembali ke Daftar Barang
    </a>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Panduan')

@section('content')
<div class="card p-4">
    <h2 class="fw-bold">Panduan Penggunaan</h2>

    <h5 class="mt-3">1. Beranda</h5>
    <p>Menampilkan ringkasan informasi persediaan barang.</p>

    <h5>2. Data Barang</h5>
    <p>Menampilkan daftar barang beserta kategori, stok, dan harga.</p>

    <h5>3. Kategori</h5>
    <p>Menampilkan pengelompokan barang berdasarkan kategori.</p>

    <h5>4. Analisis Stok</h5>
    <p>Menampilkan kondisi stok dan rekomendasi pengadaan barang.</p>

    <h5>5. Detail Barang</h5>
    <p>Menampilkan informasi lengkap dari barang yang dipilih.</p>
</div>
@endsection

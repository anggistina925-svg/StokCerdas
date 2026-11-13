@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold">Dashboard StokCerdas</h2>
    <p class="text-muted">Selamat datang di Sistem Informasi Analisis Persediaan Barang.</p>
</div>

<div class="row g-3">
    <div class="col-md-4">
        <div class="card p-4">
            <h6 class="text-muted">Total Jenis Barang</h6>
            <h2 class="fw-bold text-primary">{{ $jumlahBarang }}</h2>
            <p class="mb-0">Barang terdaftar</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4">
            <h6 class="text-muted">Kategori Barang</h6>
            <h2 class="fw-bold text-success">{{ $jumlahKategori }}</h2>
            <p class="mb-0">Kategori tersedia</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4">
            <h6 class="text-muted">Barang Perlu Diperhatikan</h6>
            <h2 class="fw-bold text-danger">{{ $stokMenipis }}</h2>
            <p class="mb-0">Stok mencapai atau di bawah minimum</p>
        </div>
    </div>
</div>

<div class="card p-4 mt-4">
    <h4>Selamat Datang!</h4>
    <p>
        StokCerdas membantu pengguna memantau persediaan barang,
        mengetahui kondisi stok, serta memberikan rekomendasi
        pengadaan barang berdasarkan kebutuhan.
    </p>
    <a href="{{ route('barang.index') }}" class="btn btn-primary">
        Lihat Data Barang
    </a>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Kategori Barang')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold">Kategori Barang</h2>
    <p class="text-muted">Daftar kategori dan jumlah persediaan barang.</p>
</div>

<div class="row g-3">
    @foreach ($kategori as $item)
    <div class="col-md-4">
        <div class="card p-4">
            <h4 class="fw-bold text-primary">{{ $item['nama'] }}</h4>
            <p class="mb-2">Jumlah jenis barang: {{ $item['jumlah_barang'] }}</p>
            <h5>Total stok: {{ $item['total_stok'] }}</h5>
        </div>
    </div>
    @endforeach
</div>

<div class="mt-4">
    <a href="{{ route('barang.index') }}" class="btn btn-primary">
        Lihat Semua Barang
    </a>
</div>
@endsection

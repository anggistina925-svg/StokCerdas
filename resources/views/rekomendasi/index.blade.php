@extends('layouts.app')

@section('title', 'Rekomendasi Pengadaan')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold">Rekomendasi Pengadaan Barang</h2>
    <p class="text-muted">
        Daftar barang yang perlu dibeli berdasarkan target persediaan.
    </p>
</div>

<div class="card p-3">
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Stok Saat Ini</th>
                    <th>Target Stok</th>
                    <th>Jumlah Pengadaan</th>
                    <th>Prioritas</th>
                    <th>Estimasi Biaya</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rekomendasi as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['stok'] }}</td>
                    <td>{{ $item['target'] }}</td>
                    <td>{{ $item['kebutuhan'] }}</td>
                    <td>
                        @if ($item['prioritas'] == 'Tinggi')
                            <span class="badge bg-danger">Tinggi</span>
                        @elseif ($item['prioritas'] == 'Sedang')
                            <span class="badge bg-warning text-dark">Sedang</span>
                        @else
                            <span class="badge bg-success">Rendah</span>
                        @endif
                    </td>
                    <td>
                        Rp {{ number_format($item['total_biaya'], 0, ',', '.') }}
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">
                        Tidak ada barang yang perlu dibeli.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

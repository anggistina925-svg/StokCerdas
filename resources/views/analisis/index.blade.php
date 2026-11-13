@extends('layouts.app')

@section('title', 'Analisis Stok')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold">Analisis Stok Barang</h2>
    <p class="text-muted">Hasil perhitungan persediaan dan kebutuhan pengadaan barang.</p>
</div>

<div class="card p-3">
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Stok Awal</th>
                    <th>Barang Masuk</th>
                    <th>Barang Keluar</th>
                    <th>Stok Akhir</th>
                    <th>Status</th>
                    <th>Kebutuhan</th>
                    <th>Prioritas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($analisis as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['stok_awal'] }}</td>
                    <td>{{ $item['barang_masuk'] }}</td>
                    <td>{{ $item['barang_keluar'] }}</td>
                    <td>{{ $item['stok'] }}</td>
                    <td>
                        @if ($item['status'] == 'Aman')
                            <span class="badge bg-success">Aman</span>
                        @elseif ($item['status'] == 'Menipis')
                            <span class="badge bg-warning text-dark">Menipis</span>
                        @elseif ($item['status'] == 'Habis')
                            <span class="badge bg-danger">Habis</span>
                        @else
                            <span class="badge bg-secondary">Data Tidak Valid</span>
                        @endif
                    </td>
                    <td>{{ $item['kebutuhan'] }}</td>
                    <td>{{ $item['prioritas'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AnalisisStokController;

Route::get('/', function () {
    $barangs = BarangController::dataBarang();

    $jumlahBarang = count($barangs);
    $jumlahKategori = collect($barangs)->pluck('kategori')->unique()->count();

    $stokMenipis = 0;

    foreach ($barangs as $barang) {
        $stok = $barang['stok_awal']
            + $barang['barang_masuk']
            - $barang['barang_keluar'];

        if ($stok <= $barang['minimum']) {
            $stokMenipis++;
        }
    }

    return view('dashboard', compact(
        'jumlahBarang',
        'jumlahKategori',
        'stokMenipis'
    ));
})->name('beranda');

Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');

Route::get('/barang/{id}', function ($id) {
    $barangs = BarangController::dataBarang();
    $barang = collect($barangs)->firstWhere('id', $id);

    abort_if(!$barang, 404);

    $barang['stok'] = $barang['stok_awal']
        + $barang['barang_masuk']
        - $barang['barang_keluar'];

    return view('barang.detail', compact('barang'));
})->name('barang.detail');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');

Route::get('/analisis', [AnalisisStokController::class, 'index'])->name('analisis.index');

Route::get('/rekomendasi', [AnalisisStokController::class, 'rekomendasi'])->name('rekomendasi.index');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/panduan', function () {
    return view('panduan');
})->name('panduan');

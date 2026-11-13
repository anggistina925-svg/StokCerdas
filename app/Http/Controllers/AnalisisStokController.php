<?php

namespace App\Http\Controllers;

class AnalisisStokController extends Controller
{
    // Halaman analisis stok barang
    public function index()
    {
        $barangs = BarangController::dataBarang();
        $analisis = [];

        foreach ($barangs as $barang) {

            // Menghitung stok akhir
            $stokAkhir = $barang['stok_awal']
                + $barang['barang_masuk']
                - $barang['barang_keluar'];

            // Memeriksa validitas data
            $valid = $barang['stok_awal'] >= 0
                && $barang['barang_masuk'] >= 0
                && $barang['barang_keluar'] >= 0
                && $barang['barang_keluar'] <=
                    ($barang['stok_awal'] + $barang['barang_masuk'])
                && $barang['minimum'] >= 0
                && $barang['target'] >= $barang['minimum']
                && $barang['harga'] >= 0;

            // Menentukan status dan prioritas
            if (!$valid) {
                $status = 'Data Tidak Valid';
                $kebutuhan = 0;
                $prioritas = 'Periksa Data';
            } else {
                if ($stokAkhir == 0) {
                    $status = 'Habis';
                    $prioritas = 'Tinggi';
                } elseif ($stokAkhir < $barang['minimum']) {
                    $status = 'Menipis';
                    $prioritas = 'Sedang';
                } else {
                    $status = 'Aman';
                    $prioritas = 'Rendah';
                }

                // Menghitung kebutuhan pengadaan
                $kebutuhan = max(0, $barang['target'] - $stokAkhir);
            }

            $analisis[] = [
                'nama' => $barang['nama'],
                'stok_awal' => $barang['stok_awal'],
                'barang_masuk' => $barang['barang_masuk'],
                'barang_keluar' => $barang['barang_keluar'],
                'stok' => $stokAkhir,
                'minimum' => $barang['minimum'],
                'target' => $barang['target'],
                'status' => $status,
                'kebutuhan' => $kebutuhan,
                'prioritas' => $prioritas,
            ];
        }

        return view('analisis.index', compact('analisis'));
    }

    // Halaman rekomendasi pengadaan barang
    public function rekomendasi()
    {
        $barangs = BarangController::dataBarang();
        $rekomendasi = [];

        foreach ($barangs as $barang) {

            $stokAkhir = $barang['stok_awal']
                + $barang['barang_masuk']
                - $barang['barang_keluar'];

            $valid = $barang['stok_awal'] >= 0
                && $barang['barang_masuk'] >= 0
                && $barang['barang_keluar'] >= 0
                && $barang['barang_keluar'] <=
                    ($barang['stok_awal'] + $barang['barang_masuk'])
                && $barang['minimum'] >= 0
                && $barang['target'] >= $barang['minimum']
                && $barang['harga'] >= 0;

            // Data tidak valid tidak dimasukkan ke rekomendasi
            if (!$valid) {
                continue;
            }

            $kebutuhan = max(0, $barang['target'] - $stokAkhir);

            if ($stokAkhir == 0) {
                $prioritas = 'Tinggi';
            } elseif ($stokAkhir < $barang['minimum']) {
                $prioritas = 'Sedang';
            } else {
                $prioritas = 'Rendah';
            }

            if ($kebutuhan > 0) {
                $rekomendasi[] = [
                    'nama' => $barang['nama'],
                    'stok' => $stokAkhir,
                    'target' => $barang['target'],
                    'kebutuhan' => $kebutuhan,
                    'prioritas' => $prioritas,
                    'total_biaya' => $kebutuhan * $barang['harga'],
                ];
            }
        }

        // Mengurutkan berdasarkan prioritas
        usort($rekomendasi, function ($a, $b) {
            $urutan = [
                'Tinggi' => 1,
                'Sedang' => 2,
                'Rendah' => 3,
            ];

            return $urutan[$a['prioritas']] <=> $urutan[$b['prioritas']];
        });

        return view('rekomendasi.index', compact('rekomendasi'));
    }
}

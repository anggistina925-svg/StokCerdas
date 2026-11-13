<?php

namespace App\Http\Controllers;

class KategoriController extends Controller
{
    public function index()
    {
        $barangs = BarangController::dataBarang();

        foreach ($barangs as &$barang) {
            $barang['stok'] = $barang['stok_awal']
                + $barang['barang_masuk']
                - $barang['barang_keluar'];
        }
        unset($barang);

        $kategori = collect($barangs)
            ->groupBy('kategori')
            ->map(function ($items, $nama) {
                return [
                    'nama' => $nama,
                    'jumlah_barang' => $items->count(),
                    'total_stok' => $items->sum('stok'),
                ];
            })
            ->values();

        return view('kategori.index', compact('kategori'));
    }
}

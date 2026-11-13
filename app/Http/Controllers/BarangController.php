<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public static function dataBarang(): array
    {
        return [
            ['id'=>1, 'nama'=>'Laptop ASUS', 'kategori'=>'Elektronik', 'stok_awal'=>10, 'barang_masuk'=>5, 'barang_keluar'=>3, 'target'=>15, 'minimum'=>5, 'harga'=>7500000],
            ['id'=>2, 'nama'=>'Mouse Logitech', 'kategori'=>'Elektronik', 'stok_awal'=>8, 'barang_masuk'=>2, 'barang_keluar'=>6, 'target'=>15, 'minimum'=>10, 'harga'=>150000],
            ['id'=>3, 'nama'=>'Keyboard', 'kategori'=>'Elektronik', 'stok_awal'=>12, 'barang_masuk'=>5, 'barang_keluar'=>2, 'target'=>15, 'minimum'=>5, 'harga'=>250000],
            ['id'=>4, 'nama'=>'Monitor LED', 'kategori'=>'Elektronik', 'stok_awal'=>5, 'barang_masuk'=>0, 'barang_keluar'=>2, 'target'=>10, 'minimum'=>5, 'harga'=>1800000],
            ['id'=>5, 'nama'=>'Flashdisk 32GB', 'kategori'=>'Elektronik', 'stok_awal'=>20, 'barang_masuk'=>5, 'barang_keluar'=>5, 'target'=>20, 'minimum'=>8, 'harga'=>75000],

            ['id'=>6, 'nama'=>'Smart TV Samsung', 'kategori'=>'Audio Visual', 'stok_awal'=>3, 'barang_masuk'=>1, 'barang_keluar'=>1, 'target'=>5, 'minimum'=>2, 'harga'=>6500000],
            ['id'=>9, 'nama'=>'Kamera Canon', 'kategori'=>'Elektronik', 'stok_awal'=>3, 'barang_masuk'=>1, 'barang_keluar'=>1, 'target'=>6, 'minimum'=>2, 'harga'=>5500000],
            ['id'=>8, 'nama'=>'Speaker', 'kategori'=>'Elektronik', 'stok_awal'=>6, 'barang_masuk'=>2, 'barang_keluar'=>3, 'target'=>10, 'minimum'=>4, 'harga'=>750000],
            ['id'=>6, 'nama'=>'Proyektor', 'kategori'=>'Elektronik', 'stok_awal'=>4, 'barang_masuk'=>1, 'barang_keluar'=>2, 'target'=>8, 'minimum'=>3, 'harga'=>4500000],
            ['id'=>10, 'nama'=>'Printer Epson', 'kategori'=>'Elektronik', 'stok_awal'=>4, 'barang_masuk'=>1, 'barang_keluar'=>2, 'target'=>8, 'minimum'=>3, 'harga'=>2500000],

            ['id'=>11, 'nama'=>'Kursi Kantor', 'kategori'=>'Perabotan', 'stok_awal'=>8, 'barang_masuk'=>2, 'barang_keluar'=>4, 'target'=>10, 'minimum'=>3, 'harga'=>650000],
            ['id'=>12, 'nama'=>'Meja Kerja', 'kategori'=>'Perabotan', 'stok_awal'=>5, 'barang_masuk'=>0, 'barang_keluar'=>3, 'target'=>10, 'minimum'=>5, 'harga'=>1200000],
            ['id'=>13, 'nama'=>'Lemari Arsip', 'kategori'=>'Perabotan', 'stok_awal'=>8, 'barang_masuk'=>2, 'barang_keluar'=>2, 'target'=>10, 'minimum'=>3, 'harga'=>1500000],
            ['id'=>14, 'nama'=>'Rak Buku', 'kategori'=>'Perabotan', 'stok_awal'=>6, 'barang_masuk'=>0, 'barang_keluar'=>2, 'target'=>10, 'minimum'=>6, 'harga'=>850000],
            ['id'=>15, 'nama'=>'Komputer', 'kategori'=>'Elektronik', 'stok_awal'=>5, 'barang_masuk'=>1, 'barang_keluar'=>2, 'target'=>8, 'minimum'=>3, 'harga'=>6500000],
        ];
    }

    public function index()
    {
        $barangs = self::dataBarang();

        foreach ($barangs as &$barang) {
            $barang['stok'] = $barang['stok_awal']
                + $barang['barang_masuk']
                - $barang['barang_keluar'];
        }
        unset($barang);

        return view('barang.index', compact('barangs'));
    }
}

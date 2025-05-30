<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function simpan(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'telepon' => 'required|string|max:20',
            'alamat' => 'required|string|max:255',
            'jenis_barang' => 'required|string',
            'deskripsi' => 'nullable|string|max:1000',
        ]);
        // Kembali ke halaman form dengan pesan sukses
        return back()->with('success', 'Terima kasih! Donasi Anda telah kami terima.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class KontakController extends Controller
{
    public function kirimPesan(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required|string|max:100',
        'email' => 'required|email',
        'pesan' => 'required|string|max:1000',
    ]);

    // Simpan ke database (opsional)
    // Pesan::create($validated);

    return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
}

}

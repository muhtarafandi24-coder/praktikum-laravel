<?php

namespace App\Http\Controllers;

use App\Models\OutgoingLetter;

class SuratKeluarController extends Controller
{
    // Menampilkan daftar surat keluar
    public function index()
    {
        $suratKeluar = OutgoingLetter::all();

        return view('surat-keluar.index', [
            'suratKeluar' => $suratKeluar,
        ]);
    }

    // Menampilkan detail surat keluar berdasarkan ID
    public function show($id)
    {
        $surat = OutgoingLetter::find($id);

        // Jika surat tidak ditemukan
        if (!$surat) {
            abort(404, 'Surat keluar tidak ditemukan.');
        }

        return view('surat-keluar.show', [
            'surat' => $surat,
        ]);
    }
}
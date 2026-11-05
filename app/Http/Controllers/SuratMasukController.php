<?php

namespace App\Http\Controllers;

use App\Models\IncomingLetter;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index()
    {
        $incomingLetters = IncomingLetter::orderBy('id', 'asc')->get();

        return view('surat-masuk.index', compact('incomingLetters'));
    }

    public function create()
    {
        return view('surat-masuk.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nomor_surat' => 'required|string|max:225',
            'tanggal'     => 'required|date',
            'pengirim'    => 'required|string|max:225',
            'perihal'     => 'required|string|max:225',
            'keterangan'  => 'nullable|string',
        ]);

        IncomingLetter::create($validate);

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Surat berhasil ditambahkan.');
    }

    public function show($id)
    {
        $surat = IncomingLetter::findOrFail($id);

        return view('surat-masuk.show', compact('surat'));
    }

    public function edit($id)
    {
        $surat = IncomingLetter::findOrFail($id);

        return view('surat-masuk.edit', compact('surat'));
    }

    public function update(Request $request, $id)
    {
        $surat = IncomingLetter::findOrFail($id);

        $validate = $request->validate([
            'nomor_surat' => 'required|string|max:225',
            'tanggal'     => 'required|date',
            'pengirim'    => 'required|string|max:225',
            'perihal'     => 'required|string|max:225',
            'keterangan'  => 'nullable|string',
        ]);

        $surat->update($validate);

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Surat berhasil diperbaharui.');
    }

    public function destroy($id)
    {
        $surat = IncomingLetter::findOrFail($id);

        $surat->delete();

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Surat berhasil dihapus.');
    }
}
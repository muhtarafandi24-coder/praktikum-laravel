@extends('layouts.app')

@section('title', 'Surat Keluar')

@section('content')
    
<h1>Daftar Surat Keluar</h1>

<a href="{{ route('surat-keluar.create') }}">+ Tambah Surat Keluar</a>

<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Surat</th>
            <th>Tanggal</th>
            <th>Tujuan</th>
            <th>Perihal</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($suratKeluar as $surat)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $surat->nomor_surat }}</td>
                <td>{{ $surat->tanggal }}</td>
                <td>{{ $surat->tujuan }}</td>
                <td>{{ $surat->perihal }}</td>

                <td style="white-space: nowrap;">
                    <a href="{{ route('surat-keluar.show', ['id' => $surat->id]) }}">Detail</a>

                    <a href="{{ route('surat-keluar.edit', ['id' => $surat->id]) }}">Edit</a>

                    <form action="{{ route('surat-keluar.destroy', ['id' => $surat->id]) }}"
                          method="POST"
                          style="display: inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                onclick="return confirm('Hapus surat ini?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>

        @empty
            <tr>
                <td colspan="6">Belum ada data surat keluar.</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection

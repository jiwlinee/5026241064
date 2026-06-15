@extends('template')
@section('title', 'Kode Soal mypegawai')
@section('konten')

    <h2>Daftar MyPegawai</h2>

    <a href="{{ route('mypegawai.create') }}" class="btn btn-primary">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
    <tr class="bg-primary text-white">
        <th>Kode Pegawai</th>
        <th>Nama Lengkap</th>
        <th>Divisi</th>
        <th>Departemen</th>
        <th>Aksi</th>
    </tr>
    @forelse($mypegawai as $item)
    <tr>
        <td>{{ $item->kodepegawai }}</td>
        <td>{{ $item->namalengkap }}</td>
        <td>{{ $item->divisi ?? '-' }}</td>
        <td>{{ $item->departemen ?? '-' }}</td>
        <td>
            <a href="{{ route('mypegawai.view', $item->kodepegawai) }}" class="btn btn-secondary btn-sm">View</a>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="5" class="text-center">Belum ada data pegawai.</td>
    </tr>
    @endforelse
</table>
@endsection

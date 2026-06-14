@extends('template')
@section('title', 'Daftar Nilai Kuliah')
@section('konten')

    <h2>Daftar Nilai Kuliah</h2>

    <a href="{{ route('nilaikuliah.create') }}" class="btn btn-primary">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr class="bg-primary text-white">
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>

        @forelse($nilaikuliah as $item)
            @php
                // Menghitung Bobot (NilaiAngka x SKS)
                $bobot = $item->NilaiAngka * $item->SKS;

                // Konversi Nilai Angka ke Nilai Huruf sesuai soal
                $na = $item->NilaiAngka;
                if ($na <= 40) {
                    $nilaiHuruf = 'D';
                } elseif ($na >= 41 && $na <= 60) {
                    $nilaiHuruf = 'C';
                } elseif ($na >= 61 && $na <= 80) {
                    $nilaiHuruf = 'B';
                } else {
                    // Asumsi nilai >= 81
                    $nilaiHuruf = 'A';
                }
            @endphp
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->NRP }}</td>
                <td>{{ $item->NilaiAngka }}</td>
                <td>{{ $item->SKS }}</td>
                <td>{{ $nilaiHuruf }}</td>
                <td>{{ $bobot }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada data nilai kuliah.</td>
            </tr>
        @endforelse
    </table>
@endsection

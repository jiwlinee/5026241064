@extends('template')
@section('title', 'Daftar Lipstick')
@section('konten')

    <h2>Daftar Lipstick</h2>

    <a href="{{ route('lipstick.create') }}" class="btn btn-primary">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr class="bg-primary text-white">
            <th>Kode Lipstick</th>
            <th>Merk Lipstick</th>
            <th>Stock Lipstick</th>
            <th>Tersedia</th>
            <th>Aksi</th>
        </tr>

        @forelse($lipstick as $item)
            <tr>
                <td>{{ $item->kodelipstick }}</td>
                <td>{{ $item->merklipstick }}</td>
                <td>{{ $item->stocklipstick }}</td>
                <td>
                    @if ($item->tersedia == 'Y')
                        <span class="badge bg-success">Ya</span>
                    @else
                        <span class="badge bg-danger">Tidak</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('lipstick.edit', $item->kodelipstick) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('lipstick.destroy', $item->kodelipstick) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">Belum ada data lipstick.</td>
            </tr>
        @endforelse
    </table>
@endsection

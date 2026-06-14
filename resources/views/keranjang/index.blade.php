@extends('template')
@section('title', 'Daftar Keranjang Belanja')
@section('konten')

    <h2>Daftar Keranjang Belanja</h2>

    <a href="{{ route('keranjang.create') }}" class="btn btn-primary">Beli</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr class="bg-primary text-white">
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        @forelse($keranjang as $item)
            @php
                // Menghitung Total Belanja (Jumlah x Harga) secara otomatis
                $total = $item->Jumlah * $item->Harga;
            @endphp
            <tr>
                <td>{{ $item->ID }}</td>
                <td>{{ $item->KodeBarang }}</td>
                <td>{{ $item->Jumlah }}</td>

                <td>Rp {{ number_format($item->Harga, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($total, 0, ',', '.') }}</td>

                <td>
                    <form action="{{ route('keranjang.destroy', $item->ID) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Apakah Anda yakin ingin membatalkan transaksi ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Batal</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada data belanja.</td>
            </tr>
        @endforelse
    </table>
@endsection

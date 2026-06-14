@extends('template')
@section('title', 'Tambah Data Belanja')
@section('konten')

    <a href="{{ route('keranjang.index') }}" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Pembelian Barang Baru
        </div>

        <div class="card-body">
            <form action="{{ route('keranjang.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="KodeBarang" id="KodeBarang" class="form-control"
                            placeholder="Masukkan angka kode barang" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
                    <div class="col-sm-10">
                        <input type="number" name="Jumlah" id="Jumlah" class="form-control"
                            placeholder="Masukkan jumlah item" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Harga" class="col-sm-2 col-form-label">Harga per Item</label>
                    <div class="col-sm-10">
                        <input type="number" name="Harga" id="Harga" class="form-control"
                            placeholder="Masukkan harga barang" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Beli" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection

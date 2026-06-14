@extends('template')
@section('title', 'Tambah Data Lipstick')
@section('konten')

    <a href="{{ route('lipstick.index') }}" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Lipstick
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('lipstick.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf

                <div class="row mb-3">
                    <label for="merklipstick" class="col-sm-2 col-form-label">Merk Lipstick</label>
                    <div class="col-sm-10">
                        <input type="text" name="merklipstick" id="merklipstick" class="form-control" maxlength="30"
                            value="{{ old('merklipstick') }}" placeholder="Masukkan Merk Lipstick">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stocklipstick" class="col-sm-2 col-form-label">Stock Lipstick</label>
                    <div class="col-sm-10">
                        <input type="number" name="stocklipstick" id="stocklipstick" class="form-control" min="0"
                            value="{{ old('stocklipstick') }}" placeholder="Masukkan jumlah stock">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-select">
                            <option value="">-- Pilih --</option>
                            <option value="Y" {{ old('tersedia') == 'Y' ? 'selected' : '' }}>Ya</option>
                            <option value="N" {{ old('tersedia') == 'N' ? 'selected' : '' }}>Tidak</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function validasiForm() {
            let merklipstick = document.getElementById('merklipstick').value.trim();
            let stocklipstick = document.getElementById('stocklipstick').value.trim();
            let tersedia = document.getElementById('tersedia').value;

            if (merklipstick === '') {
                Swal.fire({
                    title: "Kesalahan!",
                    text: "Merk Lipstick wajib diisi",
                    icon: "error"
                });
                return false;
            }
            if (stocklipstick === '') {
                Swal.fire({
                    title: "Kesalahan!",
                    text: "Stock Lipstick wajib diisi",
                    icon: "error"
                });
                return false;
            }
            if (tersedia === '') {
                Swal.fire({
                    title: "Kesalahan!",
                    text: "Tersedia wajib dipilih",
                    icon: "error"
                });
                return false;
            }
            return true;
        }
    </script>
@endsection

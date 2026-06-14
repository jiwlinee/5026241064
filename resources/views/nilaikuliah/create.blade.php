@extends('template')
@section('title', 'Tambah Data Nilai Kuliah')
@section('konten')

    <a href="{{ route('nilaikuliah.index') }}" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Nilai Kuliah
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

            <form action="{{ route('nilaikuliah.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf

                <div class="row mb-3">
                    <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" name="NRP" id="NRP" class="form-control" maxlength="6"
                            value="{{ old('NRP') }}" placeholder="Masukkan NRP">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="NilaiAngka" class="col-sm-2 col-form-label">Nilai Angka</label>
                    <div class="col-sm-10">
                        <input type="text" name="NilaiAngka" id="NilaiAngka" class="form-control"
                            value="{{ old('NilaiAngka') }}" placeholder="Masukkan Nilai Angka">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="SKS" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                        <input type="text" name="SKS" id="SKS" class="form-control" value="{{ old('SKS') }}"
                            placeholder="Masukkan Jumlah SKS">
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
            let nrp = document.getElementById('NRP').value.trim();
            let nilaiAngka = document.getElementById('NilaiAngka').value.trim();
            let sks = document.getElementById('SKS').value.trim();

            // Validasi NRP
            if (nrp === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "NRP wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (nrp.length > 6) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "NRP maksimal 6 karakter",
                    icon: "error"
                });
                return false;
            }

            // Validasi Nilai Angka
            if (nilaiAngka === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nilai Angka wajib diisi",
                    icon: "error"
                });
                return false;
            }

            // Validasi SKS
            if (sks === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "SKS wajib diisi",
                    icon: "error"
                });
                return false;
            }

            // Validasi tambahan: Pastikan Nilai Angka dan SKS adalah angka
            if (isNaN(nilaiAngka) || isNaN(sks)) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nilai Angka dan SKS harus berupa angka numerik",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection

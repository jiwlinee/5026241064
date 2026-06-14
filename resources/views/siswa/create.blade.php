@extends('template')
@section('title', 'Tambah Data Siswa')
@section('konten')

    <a href="{{ route('siswa.index') }}" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Siswa
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

            <form action="{{ route('siswa.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf

                <div class="row mb-3">
                    <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" name="NRP" id="NRP" class="form-control" maxlength="10"
                            value="{{ old('NRP') }}" placeholder="Masukkan NRP">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="Nama" id="Nama" class="form-control" maxlength="20"
                            value="{{ old('Nama') }}" placeholder="Masukkan Nama Siswa">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" name="Kelas" id="Kelas" class="form-control" maxlength="5"
                            value="{{ old('Kelas') }}" placeholder="Masukkan Kelas">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="TanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" name="TanggalLahir" id="TanggalLahir" class="form-control"
                            value="{{ old('TanggalLahir') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>

    <script>
        function validasiForm() {
            let nrp = document.getElementById('NRP').value.trim();
            let nama = document.getElementById('Nama').value.trim();
            let kelas = document.getElementById('Kelas').value.trim();
            let tanggal = document.getElementById('TanggalLahir').value;

            if (nrp === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "NRP wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (nrp.length > 10) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "NRP maksimal 10 karakter",
                    icon: "error"
                });
                return false;
            }

            if (nama === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (nama.length > 20) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama maksimal 20 karakter",
                    icon: "error"
                });
                return false;
            }

            if (kelas === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kelas wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (kelas.length > 5) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kelas maksimal 5 karakter",
                    icon: "error"
                });
                return false;
            }

            if (tanggal === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Tanggal lahir wajib diisi",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection

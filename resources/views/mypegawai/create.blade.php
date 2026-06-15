@extends('template')
@section('title', 'Kode soal mypegawai')
@section('konten')

    <a href="{{ route('mypegawai.index') }}" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data MyPegawai
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

            <form action="{{ route('mypegawai.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf

                <!-- Kode Pegawai -->
                <div class="row mb-3">
                    <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-10">
                        <input type="text" name="kodepegawai" id="kodepegawai" class="form-control" maxlength="9" value="{{ old('kodepegawai') }}" placeholder="Masukkan Kode Pegawai" required>
                    </div>
                </div>

                <!-- Nama Lengkap -->
                <div class="row mb-3">
                    <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="namalengkap" id="namalengkap" class="form-control" maxlength="50" value="{{ old('namalengkap') }}" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                </div>

                <!-- Divisi -->
                <div class="row mb-3">
                    <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" name="divisi" id="divisi" class="form-control" maxlength="5" value="{{ old('divisi') }}" placeholder="Masukkan Kode Divisi">
                    </div>
                </div>

                <!-- Departemen -->
                <div class="row mb-3">
                    <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                    <div class="col-sm-10">
                        <input type="text" name="departemen" id="departemen" class="form-control" maxlength="10" value="{{ old('departemen') }}" placeholder="Masukkan Departemen">
                    </div>
                </div>

                <!-- Tombol Simpan -->
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
            // Mengambil data dari input form
            let kodepegawai = document.getElementById('kodepegawai').value.trim();
            let namalengkap = document.getElementById('namalengkap').value.trim();

            // Validasi Kode Pegawai wajib diisi
            if (kodepegawai === '') {
                Swal.fire({
                    title: "Kesalahan!",
                    text: "Kode Pegawai wajib diisi",
                    icon: "error"
                });
                return false;
            }

            // Validasi panjang Kode Pegawai tidak boleh lebih 9 karakter
            if (kodepegawai.length > 9) {
                Swal.fire({
                    title: "Kesalahan!",
                    text: "Kode Pegawai maksimal 9 karakter",
                    icon: "error"
                });
                return false;
            }

            // Validasi Nama Lengkap wajib diisi
            if (namalengkap === '') {
                Swal.fire({
                    title: "Kesalahan!",
                    text: "Nama Lengkap wajib diisi",
                    icon: "error"
                });
                return false;
            }

            // Form lolos pengecekan dan siap dikirim
            return true;
        }
    </script>
@endsection

@extends('template')
@section('title', 'Kode soal mypegawai')
@section('konten')

    <a href="{{ route('mypegawai.index') }}" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Detail Data MyPegawai
        </div>

        <div class="card-body">
            <!-- Horizontal Form (Readonly) -->
            <form>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label fw-bold">Kode Pegawai</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext"
                            value="{{ $mypegawai->kodepegawai }}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label fw-bold">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext"
                            value="{{ $mypegawai->namalengkap }}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label fw-bold">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext"
                            value="{{ $mypegawai->divisi ?? '-' }}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label fw-bold">Departemen</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext"
                            value="{{ $mypegawai->departemen ?? '-' }}" readonly>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

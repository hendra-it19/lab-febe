@extends('dashboard.layouts.main')

@section('content')
    <div class="row card pb-4">
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <h3>Update Data {{ $mahasiswa->nama }}</h1>
                </div>
                <div class="col d-flex justify-content-end">
                </div>
            </div>
        </div>
        <hr class="my-3">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6">
                    <form action="{{ route('mahasiswa.update',$mahasiswa->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="nim" class="form-label">Nim</label>
                            <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror"
                                id="nim" value="{{ old('nim', $mahasiswa->nim) }}">
                            @error('nim')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control  @error('nama') is-invalid @enderror"
                                id="nama" value="{{ old('nama', $mahasiswa->nama) }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select id="kelas" name="kelas"
                                class="form-control  @error('kelas') is-invalid @enderror">
                                <option value="">Pilih Kelas Anda</option>
                                <option value="A" {{ ($mahasiswa->Kelas == 'A') ? 'selected' : '' }}>A</option>
                                <option value="B" {{ ($mahasiswa->Kelas == 'B') ? 'selected' : '' }}>B</option>
                                <option value="C" {{ ($mahasiswa->Kelas == 'C') ? 'selected' : '' }}>C</option>
                                <option value="D" {{ ($mahasiswa->Kelas == 'D') ? 'selected' : '' }}>D</option>
                                <option value="E" {{ ($mahasiswa->Kelas == 'E') ? 'selected' : '' }}>E</option>
                            </select>
                            @error('kelas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="{{ url('/mahasiswa') }}" class="btn btn-danger">Batal</a>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

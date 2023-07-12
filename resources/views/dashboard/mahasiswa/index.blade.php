@extends('dashboard.layouts.main')

@section('content')
    <div class="row card">
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <h3>Data Mahasiswa</h1>
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
        <hr class="my-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-light">
                        <thead>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Kelas</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($getMahasiswa as $mahasiswa)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $mahasiswa->nama }}</td>
                                    <td>{{ $mahasiswa->nim }}</td>
                                    <td>{{ $mahasiswa->Kelas }}</td>
                                    <td>
                                        <a href="{{ route('mahasiswa.edit',$mahasiswa->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="#" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

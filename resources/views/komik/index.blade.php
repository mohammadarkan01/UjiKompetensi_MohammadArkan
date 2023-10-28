@extends('layouts.master')

@section('title', 'Data Komik')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <a href="{{ route('home') }}" class="btn btn-warning mb-2">Home</a>
            <a href="{{ route('komik.create') }}" class="btn btn-success mb-2">Tambah Data Komik</a>

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="card shadow">
                <div class="card-header">Data Komik</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Komik</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Genre Komik</th>
                                    <th>Volume Komik</th>
                                    <th>Tahun Terbit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($komik as $komik)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $komik->judul_komik }}</td>
                                        <td>{{ $komik->penulis }}</td>
                                        <td>{{ $komik->penerbit }}</td>
                                        <td>{{ $komik->genre_komik }}</td>
                                        <td>{{ $komik->volume_komik }}</td>
                                        <td>{{ $komik->tahun_terbit }}</td>
                                        <td>
                                            <a href="{{ route('komik.edit', $komik->id) }}" class="btn btn-sm btn-info">Edit</a>
                                            <a href="{{ route('komik.show', $komik->id) }}" class="btn btn-sm btn-primary">Detail</a>
                                            <form action="{{ route('komik.destroy', $komik->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

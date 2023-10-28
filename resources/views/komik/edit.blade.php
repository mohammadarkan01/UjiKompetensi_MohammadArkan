@extends('layouts.master')

@section('title', 'Ubah Data')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <a href="{{ route('komik.index') }}" class="btn btn-primary mb-2">Kembali</a>
            <div class="card detail shadow">
                <div class="card-header">Data Komik</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{ route('komik.update', $komik->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3 text-center">
                                <img src="{{ asset($komik->cover_komik) }}" alt="{{ asset($komik->cover_komik) }}" class="img-preview img-fluid">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Judul Komik</label>
                                <input type="text" name="judul_komik" class="form-control @error('judul_komik') is-invalid @enderror" value="{{ $komik->judul_komik }}">

                                @error('judul_komik')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Penulis</label>
                                <input type="text" name="penulis" class="form-control @error('penulis') is-invalid @enderror" value="{{ $komik->penulis }}">

                                @error('penulis')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Penerbit</label>
                                <input type="text" name="penerbit" class="form-control @error('penerbit') is-invalid @enderror" value="{{ $komik->penerbit }}">

                                @error('penerbit')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Genre Komik</label>
                                <select name="genre_komik" class="custom-select @error('genre_komik') is-invalid @enderror">
                                    <option selected disabled>-- Pilih Genre --</option>
                                    <option value="Action" {{ $komik->genre_komik == 'Action' ? 'selected' : '' }}>Action</option>
                                    <option value="Fantasy" {{ $komik->genre_komik == 'Fantasy' ? 'selected' : '' }}>Fantasy</option>
                                    <option value="Adventure" {{ $komik->genre_komik == 'Adventure' ? 'selected' : '' }}>Adventure</option>
                                </select>

                                @error('genre_komik')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Volume Komik</label>
                                <input type="text" name="volume_komik" class="form-control @error('volume_komik') is-invalid @enderror" value="{{ $komik->volume_komik }}">

                                @error('volume_komik')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tahun Terbit</label>
                                <input type="date" name="tahun_terbit" class="form-control @error('tahun_terbit') is-invalid @enderror" value="{{ $komik->tahun_terbit }}">

                                @error('tahun_terbit')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Sinopsis</label>
                                <textarea class="form-control @error('sinopsis') is-invalid @enderror" name="sinopsis" id="exampleFormControlTextarea1" rows="5">{{ $komik->sinopsis }}</textarea>

                                @error('sinopsis')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <span class="form-label">Update Cover Komik</span>

                            <div class="input-group mt-2">
                                <input type="file" id="sampul" name="cover_komik" class="custom-file-input @error('cover_komik') is-invalid @enderror" onchange="previewImage()">
                                <label class="custom-file-label">Choose file...</label>

                                @error('cover_komik')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <hr>
                            <button type="submit" class="btn btn-danger btn-block">Ubah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

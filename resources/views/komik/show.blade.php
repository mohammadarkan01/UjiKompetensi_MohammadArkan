@extends('layouts.master')

@section('title', 'Detail Komik')

@section('content')

    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center w-full">
            <div class="card detail shadow max-w-4xl">
                <div class="card-header">Data Komik</div>
                <div class="card-body">
                    <form action="{{ route('komik.show', $komik->id) }}" method="POST">
                        @csrf

                        <div class="row py-3">
                            <div class="col-6">
                                <div class="d-flex">
                                    <img src="{{ asset($komik->cover_komik) }}" alt="{{ asset($komik->cover_komik) }}" class="img-fluid">
                                </div>
                            </div>

                            <div class="col-6 d-flex align-items-center">
                                <div class="p-2">
                                    <div class="mb-3">
                                        <label class="form-label">Judul Komik</label>
                                        <p>{{ $komik->judul_komik }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Penulis</label>
                                        <p>{{ $komik->penulis }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Penerbit</label>
                                        <p>{{ $komik->penerbit }}</p>
                                    </div>
                                    <div>
                                        <label class="form-label">Genre Komik</label>
                                        <p>{{ $komik->genre_komik }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row py-2">
                            <div class="col-6">
                                <div>
                                    <label class="form-label">Volume Komik</label>
                                    <p>{{ $komik->volume_komik }}</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <label class="form-label">Tahun Terbit</label>
                                    <p>{{ $komik->tahun_terbit }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="text-justify">
                            <label class="form-label">Sinopsis</label>
                            <p>{!! $komik->sinopsis !!}</p>
                        </div>

                        <hr>
                        <a href="{{ route('komik.index') }}" class="btn btn-danger btn-block">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

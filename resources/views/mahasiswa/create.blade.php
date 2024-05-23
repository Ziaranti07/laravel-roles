@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Add New Mahasiswa
                </div>
                <div class="float-end">
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('mahasiswa.index') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="NIM" class="col-md-4 col-form-label text-md-end text-start">
                            NIM
                        </label>
                        <div class="col-md-6">
                            <input class="form-control @error('NIM') is-invalid @enderror" id="NIM" name="NIM" value="{{ old('NIM') }}">
                            @if ($errors->has('NIM'))
                            <span class="text-danger">
                                {{ $errors->first('NIM') }}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-md-4 col-form-label text-md-end text-start">
                            Nama
                        </label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" />
                            @if ($errors->has('nama'))
                            <span class="text-danger">
                                {{ $errors->first('nama') }}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jurusan" class="col-md-4 col-form-label text-md-end text-start">
                            Jurusan
                        </label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{ old('jurusan') }}" />
                            @if ($errors->has('jurusan'))
                            <span class="text-danger">
                                {{ $errors->first('jurusan') }}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="prodi" class="col-md-4 col-form-label text-md-end text-start">
                            Prodi
                        </label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('prodi') is-invalid @enderror" id="prodi" name="prodi" value="{{ old('prodi') }}" />
                            @if ($errors->has('prodi'))
                            <span class="text-danger">
                                {{ $errors->first('prodi') }}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-md-4 col-form-label text-md-end text-start">
                            Alamat
                        </label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat">
                            {{ old('alamat') }}
                            </textarea>
                            @if ($errors->has('alamat'))
                            <span class="text-danger">
                                {{ $errors->first('alamat') }}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ttl" class="col-md-4 col-form-label text-md-end text-start">
                            Tempat, Tanggal Lahir
                        </label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="{{ old('ttl') }}" />
                            @if ($errors->has('ttl'))
                            <span class="text-danger">
                                {{ $errors->first('ttl') }}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_hp" class="col-md-4 col-form-label text-md-end text-start">
                            No. HP
                        </label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" />
                            @if ($errors->has('no_hp'))
                            <span class="text-danger">
                                {{ $errors->first('no_hp') }}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Mahasiswa">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
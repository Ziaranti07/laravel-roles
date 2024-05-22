@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Product Information
                </div>
                <div class="float-end">
                    <a href="{{ route('mahasiswas.index') }}" class="btn
btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <label for="NIM" class="col-md-4 col-form-label
text-md-end text-start"><strong>NIM:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $mahasiswa->NIM }}
                    </div>
                </div>
                <div class="row">
                    <label for="nama" class="col-md-4 col-form-label
text-md-end text-start"><strong>Nama:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $mahasiswa->nama }}
                    </div>
                </div>
                <div class="row">
                    <label for="jurusan" class="col-md-4 col-form-label
text-md-end text-start"><strong>Jurusan:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $mahasiswa->jurusan }}
                    </div>
                </div>
                <div class="row">
                    <label for="prodi" class="col-md-4 col-form-label
text-md-end text-start"><strong>Prodi:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $mahasiswa->prodi }}
                    </div>
                </div>
                <div class="row">
                    <label for="alamat" class="col-md-4 col-form-label
text-md-end text-start"><strong>alamat:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $mahasiswa->alamat }}
                    </div>
                </div>
                <div class="row">
                    <label for="ttl" class="col-md-4 col-form-label
text-md-end text-start"><strong>Tempat, Tanggal Lahir:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $mahasiswa->ttl }}
                    </div>
                </div>
                <div class="row">
                    <label for="no_hp" class="col-md-4 col-form-label
text-md-end text-start"><strong>Nomor Handphone:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $mahasiswa->no_hp }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
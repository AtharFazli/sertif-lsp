@extends('dashboard.layout.master')

@section('index')

    @if ($errors->any())
        @foreach ($errors->all() as $item)
            <div class="alert alert-danger">
                <li>{{ $item }}</li>

            </div>
        @endforeach
    @endif
    <form action="{{ route('sertif.update', $sertif->id) }}" method="post" enctype="multipart/form-data">
        @method('PATCH')
        @csrf

        <div class="mb-3">
            <label for="ceo" class="form-label">CEO Codely</label>
            <input value="{{ $sertif->ceo }}" name="ceo" type="text" class="form-control" id="ceo"
                placeholder="name@example.com">
        </div>

        <div class="row">

            <div class="mb-3 col-md-6">
                <label for="nama_pengajar" class="form-label">Nama Pengajar</label>
                <input value="{{ $sertif->nama_pengajar }}" name="nama_pengajar" type="text" class="form-control"
                    id="nama_pengajar" placeholder="name@example.com">
            </div>
            <div class="mb-3 col-md-6">
                <label for="instansi_pengajar" class="form-label">Instansi Pengajar</label>
                <input value="{{ $sertif->instansi_pengajar }}" name="instansi_pengajar" type="text" class="form-control"
                    id="instansi_pengajar" placeholder="name@example.com">
            </div>

        </div>

        <div class="row">

            <div class="mb-3 col-md-6">
                <label for="tempat" class="form-label">Tempat</label>
                <input value="{{ $sertif->tempat }}" name="tempat" type="text" class="form-control" id="tempat"
                    placeholder="name@example.com">
            </div>
            <div class="mb-3 col-md-6">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input value="{{ $sertif->tanggal }}" name="tanggal" type="date" class="form-control" id="tanggal"
                    placeholder="name@example.com">
            </div>

        </div>

        <div class="row">

            <div class="mb-3 col-md-6">
                <label for="ttd_pimpinan" class="form-label">TTD Pimpinan</label>
                <input value="{{ $sertif->ttd_pimpinan }}" name="ttd_pimpinan" type="file" class="form-control"
                    id="ttd_pimpinan" placeholder="name@example.com">
                @if ($sertif->ttd_pimpinan)
                    <img width="25%" src="{{ asset($sertif->ttd_pimpinan) }}" alt="">
                @endif
            </div>
            <div class="mb-3 col-md-6">
                <label for="ttd_pengajar" class="form-label">TTD Pengajar</label>
                <input value="{{ $sertif->ttd_pengajar }}" name="ttd_pengajar" type="file" class="form-control"
                    id="ttd_pengajar" placeholder="name@example.com">
                @if ($sertif->ttd_pengajar)
                    <img width="25%" src="{{ asset($sertif->ttd_pengajar) }}" alt="">
                @endif
            </div>

        </div>
        <hr>

        <div class="row mb-5">
            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="desain" id="desain1"
                    @if ($sertif->desain == 1)
                    @checked(true)
                    @endif
                    >
                    <label class="form-check-label" for="desain1">
                        <img class="mb-3 d-block" width="75%" src="{{ asset('sertif/sertif1.png') }}" alt="sertif1">
                        Desain 1
                    </label>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" value="2" type="radio" name="desain" id="desain2"
                    @if ($sertif->desain == 2)
                    @checked(true)
                    @endif
                    >
                    <label class="form-check-label" for="desain2">
                        <img class="mb-3 d-block" width="75%" src="{{ asset('sertif/sertif2.png') }}" alt="sertif2">
                        Desain 2
                    </label>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" value="3" type="radio" name="desain" id="desain3"
                    @if ($sertif->desain == 3)
                    @checked(true)
                    @endif
                    >
                    <label class="form-check-label" for="desain3">
                        <img class="mb-3 d-block" width="75%" src="{{ asset('sertif/sertif3.png') }}" alt="sertif3">
                        Desain 3
                    </label>
                </div>
            </div>
            </div>

            <div class="mb-3">
                <a href="{{ route('peserta.index') }}" class="btn btn-outline-danger">Batal</a>
                <button type="submit" class="btn btn-outline-primary">Simpan</button>

            </div>

    </form>
@endsection

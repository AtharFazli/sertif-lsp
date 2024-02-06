@extends('dashboard.layout.master')

@section('index')

<h5>Tambah Peserta</h5>
    <form action="{{ route('peserta.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Peserta</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Athar">
        </div>
        <div class="mb-3">
            <label for="tema_pelatihan" class="form-label">Tema Pelatihan</label>
            <input type="text" name="tema_pelatihan" class="form-control" id="tema_pelatihan"
                placeholder="Laravel">
        </div>

        <a href="{{ route('peserta.index') }}" class="btn btn-outline-danger">Batal</a>
        <button type="submit" class="btn btn-outline-primary">Tambah</button>
    </form>
@endsection

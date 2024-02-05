@extends('dashboard.layout.master')

@section('index')
    <a href="{{ route('peserta.create') }}" class="btn btn-primary mb-3">Tambah Peserta</a>

    <h5>List Data Peserta</h5>

    <table class="table" id="datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No. Sertifikat</th>
                <th>Tema Pelatihan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pesertas as $peserta)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $peserta->nama }}</td>
                    <td>{{ $peserta->no_sertif }}</td>
                    <td>{{ $peserta->tema_pelatihan }}</td>
                    <td>
                        <form action="{{ route('peserta.destroy', $peserta->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <a href="{{ route('peserta.show', $peserta->id) }}" class="btn btn-info">Info</a>
                            <a href="{{ route('peserta.edit', $peserta->id) }}" class="btn btn-warning">Edit</a>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

 
        <script src="https://cdn.datatables.net/v/bs5/dt-1.13.8/r-2.5.0/datatables.min.js"></script>
    <script>
        $(function() {
            $("#datatable").DataTable({
                dom: "fltp"
            });
        })
    </script>
@endpush

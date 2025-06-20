@extends('template')

@section('content')

    <h3 class="text-center">Data Karyawan</h3>


	<form action="/eas/cari" method="GET" class="form-inline">
        <label class="form-label">Cari Data karyawan : </label>
		<input type="text" name="cari" placeholder="Cari karyawan .." class="form-control" >
		<input type="submit" value="CARI" class="btn btn-primary" >
	</form>
    <br />

    <table class="table table-striped">
        <tr>
            <th>NIP</th>
            <th>Nama Lengkap</th>
            <th>Pangkat</th>
            <th>Gaji</th>
            <th></th>
        </tr>
        @foreach ($newkaryawan as $n)
            <tr>
                <td>{{ $n->NIP }}</td>
                <td>{{ strtoupper($n->nama) }}</td>
                <td>{{ $n->pangkat }}</td>
                <td>Rp {{ number_format($n->gaji, 0, ',', '.')  }}</td>
                <td>
                    <a href="/eas/hapus/{{ $n->NIP }}"class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
        <a href="/eas/tambah" class="btn btn-info mb-5"> + Tambah Data</a>

@endsection

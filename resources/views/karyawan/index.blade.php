@extends('template')

@section('content')

    <h3 class="text-center">Data Karyawan</h3>


	<form action="/karyawan/cari" method="GET" class="form-inline">
        <label class="form-label">Cari Data karyawan : </label>
		<input type="text" name="cari" placeholder="Cari Merk karyawan .." class="form-control" >
		<input type="submit" value="CARI" class="btn btn-primary" >
	</form>
    <br />

    <table class="table table-striped">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th></th>
        </tr>
        @foreach ($karyawan as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td>{{ strtoupper($k->namalengkap) }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ strtolower($k->departemen) }}</td>
                <td>
                    <a href="/karyawan/hapus/{{ $k->kodepegawai }}"class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{( $karyawan->links() )}} <!-- hanya bisa dipakai dengan paginate , saat get() harus dihapus -->
        <a href="/karyawan/tambah" class="btn btn-info mb-5"> + Tambah Data</a>

@endsection

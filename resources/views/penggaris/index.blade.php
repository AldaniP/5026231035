@extends('template')

@section('content')

    <h3>Data penggaris</h3>

    <a href="/penggaris/tambah" class="btn btn-info"> + Tambah penggaris Baru</a>


	<form action="/penggaris/cari" method="GET" class="form-inline">
        <label class="form-label">Cari Data penggaris : </label>
		<input type="text" name="cari" placeholder="Cari Merk Penggaris .." class="form-control" >
		<input type="submit" value="CARI" class="btn btn-primary" >
	</form>
    <br />

    <table class="table table-striped">
        <tr>
            <th>Merk</th>
            <th>Harga</th>
            <th>Ketersediaan</th>
            <th>Berat (gram)</th>
            <th>Opsi</th>
        </tr>
        @foreach ($penggaris as $p)
            <tr>
                <td>{{ $p->merkpenggaris }}</td>
                <td>Rp {{ number_format($p->hargapenggaris, 0)  }}</td>
                <td>{{ $p->tersedia ? "Tersedia" : "Kosong"}}</td>
                <td>{{ $p->berat }}</td>
                <td>
                    <a href="/penggaris/edit/{{ $p->ID }}"class="btn btn-success">Edit</a>
                    <a href="/penggaris/hapus/{{ $p->ID }}"class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{( $penggaris->links() )}} <!-- hanya bisa dipakai dengan paginate , saat get() harus dihapus -->

@endsection

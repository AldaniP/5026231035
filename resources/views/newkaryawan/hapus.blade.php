@extends('template')

@section('content')
    <h3>Edit penggaris</h3>

    <a href="/penggaris"> Kembali</a>

    <br />
    <br />

    @foreach ($newkaryawan as $n)
        <form action="/newkaryawan/hapus" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $n->NIP }}"> <br />
            NIP <input type="text" required="required" name="NIP" value="{{ $n->NIP }}"> <br />
            Nama <input type="text" required="required" name="jabatan" value="{{ $n->nama }}"> <br />
            Jabatan <input type="number" required="required" name="jabatan" value="{{ $n->jabatan }}"> <br />
            Gaji
            <textarea required="required" name="alamat">{{ $n->gaji }}</textarea> <br />
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach

@endsection

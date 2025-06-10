@extends('template')

@section('content')

    <h3>Data penggaris</h3>

    <a href="/penggaris"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke penggaris/store untuk dilakukan routing --}}
    <form action="/penggaris/store" method="post">
        {{ csrf_field() }}
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Merk </label>
            </div>
            <div class="col-6">
                <input type="text" name="merkpenggaris" required="required" class="form-control">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Harga (Rp) </label>
            </div>
            <div class="col-6">
                <input type="number" name="hargapenggaris" required="required" class="form-control">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Tersedia </label>
            </div>
            <div class="col-6">
                <input type="radio" name="tersedia" required="required" value="1"> Tersedia
                <input type="radio" name="tersedia" required="required" value="0"> Kosong
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Berat (gram) </label>
            </div>
            <div class="col-6">
                <input type="number" name="berat" required="required" class="form-control" step="0.01">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection

@extends('template')

@section('content')
    <h3>Edit penggaris</h3>

    <a href="/penggaris"> Kembali</a>

    <br />
    <br />

    @foreach ($penggaris as $p)
        <form action="/penggaris/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="ID" value="{{ $p->ID }}"> <br />
    <div class="row p-1 mb-1">
        <div class="col-2">
            <label class="control-label">Merk </label>
        </div>
        <div class="col-6">
            <input type="text" required="required" name="merkpenggaris" value="{{ $p->merkpenggaris }}">
        </div>
    </div>

    <div class="row p-1 mb-1">
        <div class="col-2">
            <label class="control-label">Harga (Rp) </label>
        </div>
        <div class="col-6">
            <input type="number" required="required" name="hargapenggaris" value="{{ $p->hargapenggaris }}">
        </div>
    </div>

    <div class="row p-1 mb-1">
        <div class="col-2">
            <label class="control-label">Tersedia </label>
        </div>
        <div class="col-6">
            <input type="radio" required="required" name="tersedia" value="1" {{ ($p->tersedia ?? false) == true ? 'checked' : '' }}> Tersedia
            <input type="radio" required="required" name="tersedia" value="0" {{ ($p->tersedia ?? true) == false ? 'checked' : '' }}> Kosong
        </div>
    </div>

    <div class="row p-1 mb-1">
        <div class="col-2">
            <label class="control-label">Berat (gram) </label>
        </div>
        <div class="col-6">
            <input type="number" name="berat" required="required" class="form-control" step="0.01" value="{{ $p->berat }}">
        </div>
    </div>

    <input type="submit" value="Simpan Data" class="btn btn-success">
</form>


    @endforeach

@endsection

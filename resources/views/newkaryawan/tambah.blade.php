@extends('template')

@section('content')

    <h3>Data karyawan</h3>

    <a href="/eas"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke karyawan/store untuk dilakukan routing --}}
    <form action="/eas/store" method="post">
        {{ csrf_field() }}
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">NIP </label>
            </div>
            <div class="col-6">
                <input type="text" name="NIP" required="required" class="form-control" maxlength="9">
            </div>
        </div>


        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Nama </label>
            </div>
            <div class="col-6">
                <input type="text" name="nama" required="required" class="form-control" maxlength="50">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Pangkat </label>
            </div>
            <div class="col-6">
                <input type="text" name="pangkat" required="required" class="form-control" maxlength="15">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Gaji </label>
            </div>
            <div class="col-6">
                <input type="text" name="gaji" required="required" class="form-control">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection

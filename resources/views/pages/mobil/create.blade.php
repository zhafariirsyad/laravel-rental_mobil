@extends('templates.temp')

@section('title','Mobil')
@section('h_title','Mobil')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Mobil</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('car.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nama Mobil</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
                <label for="">Merk Mobil</label>
                <input type="text" class="form-control" name="merk">
            </div>
            <div class="form-group">
                <label for="">Plat Nomor Mobil</label>
                <input type="text" class="form-control" name="plat_no">
            </div>
            <div class="form-group">
                <label for="">Warna Mobil</label>
                <input type="text" class="form-control" name="warna">
            </div>
            <div class="form-group">
                <label for="">Tahun Mobil</label>
                <input type="text" class="form-control" name="tahun">
            </div>
            <div class="form-group">
                <label for="">Status Mobil</label>
                <select name="status" id="" class="form-control">
                    <option value="0">Tersedia</option>
                    <option value="1">Di Rental</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>


@endsection

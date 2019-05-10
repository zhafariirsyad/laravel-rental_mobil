@extends('templates.temp')

@section('title','Mobil')
@section('card_title','Edit Mobil')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Mobil</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('car.update',$car) }}" method="post">
            @csrf @method('patch')
            <div class="form-group">
                <label for="">Nama Mobil</label>
                <input type="text" class="form-control" name="nama" value="{{ $car->nama }}">
            </div>
            <div class="form-group">
                <label for="">Merk Mobil</label>
                <input type="text" class="form-control" name="merk" value="{{ $car->merk }}">
            </div>
            <div class="form-group">
                <label for="">Plat Nomor Mobil</label>
                <input type="text" class="form-control" name="plat_no" value="{{ $car->plat_no }}">
            </div>
            <div class="form-group">
                <label for="">Warna Mobil</label>
                <input type="text" class="form-control" name="warna" value="{{ $car->warna }}">
            </div>
            <div class="form-group">
                <label for="">Tahun Mobil</label>
                <input type="text" class="form-control" name="tahun" value="{{ $car->tahun }}">
            </div>
            <div class="form-group">
                <label for="">Status Mobil</label>
                <select name="status" id="" class="form-control">
                    @if($car->status == 0)
                        <option value="0" selected>Tersedia</option>
                        <option value="1">Di Rental</option>
                    @else
                    <option value="0">Tersedia</option>
                    <option value="1" selected>Di Rental</option>
                    @endif
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>


@endsection

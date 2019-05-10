@extends('templates.temp')

@section('title','Kostumer')
@section('h_title','Kostumer')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Kostumer</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('costumer.update',$edit) }}" method="post">
            @csrf @method('patch')
            <div class="form-group">
                <label for="">Nama Kostumer</label>
                <input type="text" class="form-control" name="nama" value="{{ $edit->nama }}">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <textarea name="alamat" id="" cols="10" rows="5" class="form-control">{{ $edit->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <select name="jk" id="" class="form-control">
                    @if($edit->jk == "L")
                        <option value="L" selected>Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    @else
                        <option value="L">Laki-Laki</option>
                        <option value="P" selected>Perempuan</option>
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label for="">No.Telp</label>
                <input type="text" class="form-control" name="no_telp" value="{{ $edit->no_telp }}">
            </div>
            <div class="form-group">
                <label for="">No.KTP</label>
                <input type="text" class="form-control" name="no_ktp" value="{{ $edit->no_ktp }}">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>


@endsection

@extends('templates.temp')

@section('title','Transaksi')
@section('h_title','Transaksi')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Transaksi</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('trans.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nama Kostumer</label>
                <select name="kostumer_id" id="" class="form-control">
                    @foreach($cost as $c)
                        <option value="{{ $c->id }}">{{ $c->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Mobil</label>
                <select name="mobil_id" id="" class="form-control">
                    @foreach($car as $c)
                        <option value="{{ $c->id }}">{{ $c->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Tanggal Pinjam</label>
                <input type="date" name="tgl_pinjam" class="form-control" id="" value="{{ date('Y-m-d') }}" disabled>
            </div>
            <div class="form-group">
                <label for="">Tanggal Kembali</label>
                <input type="date" name="tgl_kembali" class="form-control" id="" value="{{ date('Y-m-d') }}">
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="text" class="form-control" name="harga">
            </div>
            <div class="form-group">
                <label for="">Harga Denda / Hari</label>
                <input type="text" class="form-control" name="denda">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>


@endsection

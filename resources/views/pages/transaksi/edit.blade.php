@extends('templates.temp')

@section('title','Transaksi')
@section('h_title','Transaksi')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Selesaikan Transaksi</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('trans.update',$edit) }}" method="post">
            @csrf @method('patch')
            <div class="form-group">
                <label for="">Nama Kostumer</label>
                <input type="hidden" name="kostumer_id" value="{{ $edit->kostumer_id }}">
                <input type="text" name="kostumer" value="{{ $edit->costumer->nama }}" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="">Mobil</label>
                <input type="hidden" name="mobil_id" id="" value="{{ $edit->mobil_id }}">
                <input type="text" name="mobil" value="{{ $edit->car->nama }}" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="">Tanggal Pinjam</label>
                <input type="text" name="borrow_date" class="form-control" id="" value="{{ substr($edit->tgl_pinjam,0,10) }}" readonly>
            </div>
            <div class="form-group">
                <label for="">Tanggal Kembali</label>
                <input type="text" name="back_date" class="form-control" id="" value="{{ substr($edit->tgl_kembali,0,10) }}" readonly>
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="text" class="form-control" name="price" value="{{ $edit->harga }}" readonly id="harga">
            </div>
            <div class="form-group">
                <label for="">Denda</label>
                <input type="text" class="form-control" name="punishment" value="{{ $edit->denda }}" readonly id="denda">
            </div>
            {{-- <div class="form-group">
                <label for="">Bayar</label>
                <input type="text" class="form-control" name="bayar" value="0" id="bayar">
            </div>
            <div class="form-group">
                <label for="">Kembalian</label>
                <input type="text" class="form-control" name="back" id="kembalian" disabled>
            </div> --}}
            <div class="form-group">
                <label for="">Tanggal Dikembalikan</label>
                <input type="date" class="form-control" name="tgl_dikembalikan" value="{{ date('Y-m-d') }}">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection

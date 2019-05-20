@extends('templates.temp')

@section('title','Transaksi')
@section('h_title','Transaksi')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Selesaikan Transaksi</h6>
    </div>
    <div class="card-body">
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <form action="{{ route('trans.bayar',$data) }}" method="post">
        @csrf @method('patch')

            <div class="form-group">
                <label for="">Total yang harus Bayar</label>
                @if(strtotime($data->tgl_dikembalikan) <= strtotime($data->tgl_kembali))
                    <input type="text" class="form-control" name="punishment" value="{{ $data->harga }}" readonly id="total">
                @else
                    <input type="text" class="form-control" name="punishment" value="{{ $data->harga + $data->total_denda }}" readonly id="total">
                @endif
            </div>
            <div class="form-group">
                <label for="">Bayar</label>
                <input type="text" class="form-control" name="bayar" value="0" id="pay">
            </div>
            <div class="form-group">
                <label for="">Kembalian</label>
                <input type="text" class="form-control" name="bayarr" id="kembalian" readonly>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Bayar</button>
            </div>

        </form>
    </div>
</div>
@endsection
@extends('templates.temp')

@section('title','Transaksi')
@section('h_title','Transaksi')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Transaksi</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('trans.create') }}" class="btn btn-info"><i class="fas fa-fw fa-plus"> </i>Lakukan Transaksi</a>
        <br><br>
        @if(session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <br><br><br>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kostumer</th>
                        <th>Mobil</th>
                        <th>Tanggal Rental</th>
                        <th>Tanggal Kembali</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $datas)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $datas->costumer->nama }}</td>
                            <td>{{ $datas->car->nama }}</td>
                            <td>{{ substr($datas->tgl_pinjam,0,10) }}</td>
                            <td>{{ substr($datas->tgl_kembali,0,10) }}</td>
                            <td>
                                <div class="btn-group">
                                    @if($datas->tgl_dikembalikan == (null))
                                        <a href="{{ route('trans.edit',$datas) }}" class="btn btn-sm btn-success">Transaksi Selesai</a>
                                        <a href="{{ route('trans.show',$datas) }}" class="btn btn-sm btn-info">Detail</a>
                                    @else
                                        <a href="{{ route('trans.show',$datas) }}" class="btn btn-sm btn-info">Detail</a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

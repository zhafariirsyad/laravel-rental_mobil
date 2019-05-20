@extends('templates.temp')

@section('title','Detail Transaksi')
@section('h_title','Detail Transaksi')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('trans.index') }}" class="btn btn-warning">Kembali</a>
    </div>
    <div class="card-body">
		<table class="table">
			<tr>
				<td>Nama Kostumer</td>
				<td>:</td>
				<td>{{ $show->costumer->nama }}</td>
			</tr>
			<tr>
				<td>Mobil</td>
				<td>:</td>
				<td>{{ $show->car->nama }}</td>
			</tr>
			<tr>
				<td>Tanggal Pinjam</td>
				<td>:</td>
				<td>{{ $show->tgl_pinjam }}</td>
			</tr>
			<tr>
				<td>Tanggal Kembali</td>
				<td>:</td>
				<td>{{ $show->tgl_kembali }}</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td>{{ $show->harga }}</td>
			</tr>
			<tr>
				<td>Denda Harian</td>
				<td>:</td>
				<td>{{ $show->denda }}</td>
			</tr>
			<tr>
				<td>Bayar</td>
				<td>:</td>
				<td>{{ $show->bayar }}</td>
			</tr>
			<tr>
				<td>Kembalian</td>
				<td>:</td>
				<td>{{ $show->kembalian }}</td>
			</tr>
			<tr>
				<td>Tanggal Dikembalikan</td>
				<td>:</td>
				<td>{{ $show->tgl_dikembalikan }}</td>
			</tr>
		</table>
	</div>
</div>		

@endsection
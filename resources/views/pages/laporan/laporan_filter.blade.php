<style>
	.tgl{
		float: left;
	}
	.op{
		float: right;
	}
</style>
<h1 align="center">Laporan Per Tanggal</h1>
<hr>
<p class="tgl">Tanggal : {{ date('D').','.date('d-m-Y') }}</p>
<p class="op">Operator : {{ Auth::user()->name }}</p>

<table border="1" cellspacing="0" cellpadding="10" width="100%">
	<thead>
		<tr>
			<th>No</th>
			<th>Kostumer</th>
			<th>Mobil</th>
			<th>Tgl Pinjam</th>
			<th>Tgl Kembali</th>
			<th>Harga</th>
			<th>Bayar</th>
			<th>Kembalian</th>
			<th>Tgl Transaksi</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $datas)
			<tr>
				<td>{{ $loop->index + 1 }}</td>
				<td>{{ $datas->costumer->nama }}</td>
				<td>{{ $datas->car->nama }}</td>
				<td>{{ $datas->tgl_pinjam }}</td>
				<td>{{ $datas->tgl_kembali }}</td>
				<td>{{ $datas->harga }}</td>
				<td>{{ $datas->bayar }}</td>
				<td>{{ $datas->kembalian }}</td>
				<td>{{ $datas->tgl_transaksi }}</td>
			</tr>
		@endforeach
	</tbody>
</table>
<script>
	window.print()
</script>
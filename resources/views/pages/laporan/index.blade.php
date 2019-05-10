@extends('templates.temp')

@section('h_title','Laporan')
@section('card_title','Laporan')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
    	<div class="row">
    		<div class="col-md-12">
    			<form action="{{ route('laporan.search') }}" method="post">
    				@csrf
	    			<div class="col-md-4">
	    				<input type="date" class="form-control" name="dari">
	    				<br>
	    				<input type="date" class="form-control" name="sampai">
	    				<br>
	    				<button class="btn btn-info">Cari</button>
	    			</div>
    			</form>
    		</div>
    	</div>
    </div>
</div>    

@endsection
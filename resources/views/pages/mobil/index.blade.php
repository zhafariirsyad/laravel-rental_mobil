@extends('templates.temp')

@section('title','Mobil')
@section('h_title','Mobil')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Mobil</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('car.create') }}" class="btn btn-info"><i class="fas fa-fw fa-plus"> </i>Tambah Data</a>
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
                        <th>Nama</th>
                        <th>Merk Mobil</th>
                        <th>Plat Nomor</th>
                        <th>Warna</th>
                        <th>Tahun</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mobil as $cars)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $cars->nama }}</td>
                            <td>{{ $cars->merk }}</td>
                            <td>{{ $cars->plat_no }}</td>
                            <td>{{ $cars->warna }}</td>
                            <td>{{ $cars->tahun }}</td>
                            <td>
                                @if($cars->status == 0)
                                    <p>Tersedia</p>
                                @else
                                    <p>Di Rental</p>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('car.edit',$cars) }}" class="btn btn-success"><i class="fas fa-fw fa-edit"></i></a>
                                    <a href="{{ route('car.destroy',$cars) }}" class="btn btn-danger btn-delete"><i class="fas fa-fw fa-trash"></i></a>
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

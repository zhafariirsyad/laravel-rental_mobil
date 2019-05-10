@extends('templates.temp')

@section('title','Kostumer')
@section('h_title','Kostumer')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Kostumer</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('costumer.create') }}" class="btn btn-info"><i class="fas fa-fw fa-plus"> </i>Tambah Data</a>
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
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>No.Telp</th>
                        <th>No.KTP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cost as $data)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>
                                @if($data->jk == "L")
                                    <p>Laki-Laki</p>
                                @else
                                    <p>Perempuan</p>
                                @endif
                            </td>
                            <td>{{ $data->no_telp }}</td>
                            <td>{{ $data->no_ktp }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('costumer.edit',$data) }}" class="btn btn-success"><i class="fas fa-fw fa-edit"></i></a>
                                    <a href="{{ route('costumer.destroy',$data) }}" class="btn btn-danger btn-delete"><i class="fas fa-fw fa-trash"></i></a>
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

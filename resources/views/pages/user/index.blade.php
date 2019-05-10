@extends('templates.temp')

@section('title','User')
@section('h_title','User')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('user.create') }}" class="btn btn-info"><i class="fas fa-fw fa-plus"> </i>Tambah Data</a>
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
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $datas)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $datas->name }}</td>
                            <td>{{ $datas->email }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('user.edit',$datas) }}" class="btn btn-success"><i class="fas fa-fw fa-edit"></i></a>
                                    <a href="{{ route('user.destroy',$datas) }}" class="btn btn-danger btn-delete"><i class="fas fa-fw fa-trash"></i></a>
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

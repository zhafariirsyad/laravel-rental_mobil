@extends('templates.temp')

@section('title','User')
@section('h_title','User')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('user.update',$edit) }}" method="post">
            @csrf @method('patch')
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="name" value="{{ $edit->name }}">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" id="" value="{{ $edit->email }}">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" value="{{ $edit->password }}">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>


@endsection

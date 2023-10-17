@extends('layout.master')
@section('judul')
    Halaman Edit
@endsection
@section('content')
    <form action="/cast/{{$cast->id}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" value="{{$cast->nama}}" class="form-control">
        </div>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Umur</label>
            <input type="integer" name="umur" value="{{$cast->umur}}" class="form-control">
        </div>
        @error('umur')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Bio</label>
            <textarea name="bio" class="form-control" id="" cols="30" rows="10">{{$cast->bio}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

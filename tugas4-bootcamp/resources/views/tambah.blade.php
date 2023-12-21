@extends('layouts.app')
@section ('title','Tambah')
@section ('acTambah', 'active')

@section('navbar')
@parent 
@endsection

@section ('content')

<h4 class="text-center">TAMBAH DATA GAMES</h4>

<form action="{{ route('games.create') }}" method="post">
    @csrf
    <div class="form-group mt-4">
        <label for="nama_game">Nama Game:</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi:</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-success">Tambah</button>
</form>

@endsection



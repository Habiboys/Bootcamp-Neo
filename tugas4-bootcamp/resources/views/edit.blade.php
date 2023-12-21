@extends('layouts.app')
@section ('title','Tambah')

@section('navbar')
@parent 
@endsection

@section ('content')
<h3>Edit Data Game</h3>

<form action="{{route('games.update', $game->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group mt-4">
        <label for="nama_game">Nama Game:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $game->nama }}" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi:</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>{{ $game->deskripsi }}</textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
</form>

@endsection



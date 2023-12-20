@extends('layouts.app')
@section ('title','Tambah')

@section('navbar')
@parent 
@endsection

@section ('content')
<h2>Tambah Data Game</h2>

<form action="" method="post">
    <div class="form-group">
        <label for="nama_game">Nama Game:</label>
        <input type="text" class="form-control" id="nama_game" name="nama_game" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi:</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-success">Tambah</button>
</form>

<br>
<a href="index.php" class="btn btn-primary">Kembali ke Daftar Game</a>
@endsection



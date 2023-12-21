@extends('layouts.app')
@section ('title','Habibie Shop')
@section ('acHome', 'active')

@section('navbar')
@parent 
@endsection

@section ('content')
 @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<h4 class="text-center">DAFTAR GAMES</h4>
    <table class="table mt-4">
        <tr class="table-light">
            <th scope="col">ID</th>
            <th scope="col">Nama Game</td>
            <th scope="col">Deskripsi</td>
            <th scope="col">Aksi</td>
        </tr>

        @foreach ($games as $g)
            <tr>
                <td><?= $g["id"] ?></td>
                <td><?= $g["nama"] ?></td>
                <td><?= $g["deskripsi"] ?></td>
                <td>
                    <a href="{{ route('edit', $g->id) }}" class="btn btn-warning">Edit</a>
                    
                    <a href="{{ route ('delete', $g->id)}}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
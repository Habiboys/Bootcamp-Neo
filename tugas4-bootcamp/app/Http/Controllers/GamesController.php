<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function tambah()
    {
        return view('tambah');
    }

    public function about()
    {
        return view('about');
    }

    public function home()
    {
        $games = Games::all();
        return view('home', compact('games'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $data = [
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi')
        ];
        Games::create($data);

        return redirect()->route('home')->with('success', 'Artikel Berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $game = Games::find($id);
        return view('edit', compact('game'));
    }

    public function delete($id)
    {
        Games::destroy($id);
        return redirect()->route('home')->with('success', 'Data berhasil dihapus');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $game = Games::find($id);
        
        $game->update([
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect()->route('home')->with('success', 'Data berhasil diperbarui!');
    }
}

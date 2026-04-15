<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    public function create()
    {
        return view('films.create');
    }

    public function store(Request $request)
    {
        Film::create($request->all());
        return redirect('/films');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $film = Film::findOrFail($id);
        return view('films.edit', compact('film'));
    }

    public function update(Request $request, string $id)
    {
        $film = Film::findOrFail($id);
        $film->update($request->all());
        return redirect('/films');
    }

    public function destroy(string $id)
    {
        $film = Film::findOrFail($id);
        $film->delete();
        return redirect('/films');
    }
}
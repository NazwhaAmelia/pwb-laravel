<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexx()
    {
        //
        $genres = DB::table('genres')->get();
        return view('genre.indexx', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //validasi data inputan data wajib diisi
        $request->validate([
            'name' => 'required|min:5',

        ]);

        //queri buat save data
        $query = DB::table('genres')->insert([
            'name' => $request['name'],
        ]);
        //jika data disimpan maka di redirect ke halaman index
        return redirect()->route('genre.indexx')->with(['success' => 'Data Berhasil ditambahkan']);;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $genre = DB::table('genres')->where('id', $id)->first();
        return view('genre.update', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required|min:5',
        ]);

        //query buat update data
        $query = DB::table('genres')
            ->where('id', $id)
            ->update([
                'name' => $request['name'],
            ]);
            return redirect()->route('genre.indexx')->with(['succes' => 'Data berhasil di ubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        //
        $query = DB::table('genres')
            ->where('id', $id)
            ->delete();
            return redirect()->route('genre.indexx');
    }
}

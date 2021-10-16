<?php

namespace App\Http\Controllers;

use App\models\genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPUnit\TextUI\XmlConfiguration\UpdateSchemaLocationTo93;

class genreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = genre::all();
        return view('pages.frontend.genre.index')->with([
            'genres' => $genres
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.frontend.genre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kd_genre' => 'required|string',
            'nm_genre' => 'required|string',
        ]);

        if($validator->fails()){
            return redirect()
                ->route('genre.create')
                ->withErrors($validator)
                ->withInput();
        }else{
            $datagenre = $request->all();

            genre::create($datagenre);
            return redirect()->route('genre.index')->with('success', 'Data berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = genre::findorfail($id);
        return view('pages.frontend.genre.edit')->with([
            'genre' => $genre
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newdata = $request->all();

        $datagenre = genre::findorfail($id);
        $datagenre->Update($newdata);

        return redirect()->route('genre.index')->with('success', 'Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datagenre = genre::findorfail($id);
        $datagenre->delete();
        return redirect()->route('genre.index')->with('success', 'Data berhasil dihapus');
    }
}

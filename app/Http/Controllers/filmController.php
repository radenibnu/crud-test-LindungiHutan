<?php

namespace App\Http\Controllers;

use App\models\film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class filmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = film::all();
        return view('pages.frontend.film.index')->with([
            'films' => $films
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.frontend.film.create');
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
            'kd_film' => 'required|string',
            'nm_film' => 'required|string',
            'genre' => 'required|string',
            'artis' => 'required|string',
            'produser' => 'required|string',
            'pendapatan' => 'required|string',
            'nominasi' => 'required|integer'
        ]);

        if($validator->fails()){
            return redirect()
                ->route('film.create')
                ->withErrors($validator)
                ->withInput();
        }else{
            $dataartis = $request->all();

            film::create($dataartis);
            return redirect()->route('film.index')->with('success', 'Data berhasil ditambahkan');
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
        $film = film::findorfail($id);
        return view('pages.frontend.film.edit')->with([
            'film' => $film
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

        $datafilm = film::findorfail($id);
        $datafilm->update($newdata);

        return redirect()->route('film.index')->with('success', 'Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datafilm = film::findorfail($id);
        $datafilm->delete();
        return redirect()->route('film.index')->with(
        'success', 'Data Berhasil dihapus');
    }
}

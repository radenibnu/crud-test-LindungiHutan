<?php

namespace App\Http\Controllers;

use App\models\artis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class artisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artis = artis::all();
        return view('pages.frontend.artis.index')->with([
            'artis' => $artis
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.frontend.artis.create');
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
            'kd_artis' => 'required|string',
            'nm_artis' => 'required|string',
            'jk' => 'required|string',
            'bayaran' => 'required|integer',
            'award' => 'required|integer',
            'negara' => 'required|string'
        ]);

        if($validator->fails()){
            return redirect()
                ->route('artis.create')
                ->withErrors($validator)
                ->withInput();
        }else{
            $dataartis = $request->all();

            artis::create($dataartis);
            return redirect()->route('artis.index')->with('success', 'Data berhasil ditambahkan');
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
        $artis = artis::findorfail($id);
        return view('pages.frontend.artis.edit')->with([
            'artis' => $artis
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

        $dataartis = artis::findorfail($id);
        $dataartis->update($newdata);

        return redirect()->route('artis.index')->with('success', 'Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataartis = artis::findorfail($id);
        $dataartis->delete();
        return redirect()->route('artis.index')->with(
        'success', 'Data Berhasil dihapus');
    }
}

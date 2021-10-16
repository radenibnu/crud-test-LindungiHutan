<?php

namespace App\Http\Controllers;

use App\models\negara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class negaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $negaras = negara::all();
        return view('pages.frontend.negara.index')->with([
            'negaras' => $negaras
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.frontend.negara.create');
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
            'kd_negara' => 'required|string',
            'nm_negara' => 'required|string',
        ]);

        if($validator->fails()){
            return redirect()
                ->route('negara.create')
                ->withErrors($validator)
                ->withInput();
        }else{
            $datanegara = $request->all();

            negara::create($datanegara);
            return redirect()->route('negara.index')->with('success', 'Data berhasil ditambahkan');
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
        $negara = negara::findorfail($id);
        return view('pages.frontend.negara.edit')->with([
            'negara' => $negara
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

        $datanegara = negara::findorfail($id);
        $datanegara->update($newdata);

        return redirect()->route('negara.index')->with('success', 'Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datanegara = negara::findorfail($id);
        $datanegara->delete();
        return redirect()->route('negara.index')->with(
        'success', 'Data Berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use App\models\produser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class produserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produsers = produser::all();
        return view('pages.frontend.produser.index')->with([
            'produsers' => $produsers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.frontend.produser.create');   
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
            'kd_produser' => 'required|string',
            'nm_produser' => 'required|string',
            'international' => 'required|string'
        ]);

        if($validator->fails()){
            return redirect()
                ->route('produser.create')
                ->withErrors($validator)
                ->withInput();
        }else{
            $dataproduser = $request->all();

            produser::create($dataproduser);
            return redirect()->route('produser.index')->with('success', 'Data berhasil ditambahkan');
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
        $produser = produser::findorfail($id);
        return view('pages.frontend.produser.edit')->with([
            'produser' => $produser
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

        $dataproduser = produser::findorfail($id);
        $dataproduser->update($newdata);

        return redirect()->route('produser.index')->with('success', 'Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataproduser = produser::findorfail($id);
        $dataproduser->delete();
        return redirect()->route('produser.index')->with(
        'success', 'Data Berhasil dihapus');
    }
}

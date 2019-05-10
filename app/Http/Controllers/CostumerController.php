<?php

namespace App\Http\Controllers;

use App\Costumer;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.kostumer.index',[
            'cost' => Costumer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kostumer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'no_telp' => 'required',
            'no_ktp' => 'required',
        ]);

        Costumer::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'no_telp' => $request->no_telp,
            'no_ktp' => $request->no_ktp,
        ]);

        return redirect()->route('costumer.index')->with('message','Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Costumer  $costumer
     * @return \Illuminate\Http\Response
     */
    public function show(Costumer $costumer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Costumer  $costumer
     * @return \Illuminate\Http\Response
     */
    public function edit(Costumer $costumer)
    {
        return view('pages.kostumer.edit',[
            'edit' => $costumer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Costumer  $costumer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Costumer $costumer)
    {
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'no_telp' => 'required',
            'no_ktp' => 'required',
        ]);

        $costumer->update($request->all());

        return redirect()->route('costumer.index')->with('message','Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Costumer  $costumer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Costumer $costumer)
    {
        $costumer->delete();

        return back()->with('message', 'Success');
    }
}

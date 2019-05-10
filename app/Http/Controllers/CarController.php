<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.mobil.index',[
            'mobil' => Car::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.mobil.create');
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
            'merk' => 'required',
            'tahun' => 'required',
            'warna' => 'required',
            'plat_no' => 'required',
        ]);

        Car::create([
            'nama' => $request->nama,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            'warna' => $request->warna,
            'plat_no' => $request->plat_no,
            'status' => $request->status
        ]);

        return redirect()->route('car.index')->with('message','Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('pages.mobil.edit',[
            'car' => $car
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $this->validate($request,[
            'nama' => 'required',
            'merk' => 'required',
            'tahun' => 'required',
            'warna' => 'required',
            'plat_no' => 'required',
        ]);

        $car->update($request->all());
        return redirect()->route('car.index')->with('message', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();

        return back()->with('message', 'Success');
    }
}

<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Car;
use Carbon\Carbon;
use App\Costumer;
use Auth;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.transaksi.index',[
            'data' => Transaction::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.transaksi.create',[
            'cost' => Costumer::all(),
            'car' => Car::where('status','0')->get()
        ]);
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
            'tgl_kembali' => 'required',
            'harga' => 'required',
        ]);

        // Transaction::create([
        //     'user_id' => Auth::user()->id,
        //     'kostumer_id' => $request->kostumer_id,
        //     'mobil_id' => $request->mobil_id,
        //     'tgl_pinjam' => Carbon::now(),
        //     'tgl_kembali' => $request->tgl_kembali,
        //     'harga' => $request->harga,
        //     'tgl_transaksi' => date('Y-m-d')
        // ]);
        $trans = new Transaction($request->all());
        $trans->user_id = Auth::user()->id;
        $trans->tgl_pinjam = Carbon::now();
        $trans->tgl_transaksi = Carbon::now();
        $trans->save();
        $id = $trans->mobil_id;
        Car::find($id)->update(['status'=>'1']);

        return redirect()->route('trans.index')->with('message','Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show($transaction)
    {
        $show = Transaction::find($transaction);
        return view('pages.transaksi.detail',[
            'show' => $show
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit($transaction)
    {
        $edit = Transaction::find($transaction);
        return view('pages.transaksi.edit',[
            'edit' => $edit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $transaction)
    {
        $trans = Transaction::find($transaction);
        $trans->bayar = $request->bayar;
        $kembalian = ($trans->bayar - $trans->harga);
        $trans->kembalian = $kembalian;
        $trans->status = 1;
        $trans->tgl_dikembalikan = Carbon::now();
        $trans->save();

        $id = $trans->mobil_id;
        Car::find($id)->update(['status'=>'0']);

        return redirect()->route('trans.index')->with('message','Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}

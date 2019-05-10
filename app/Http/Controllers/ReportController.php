<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class ReportController extends Controller
{
    public function index()
    {
    	return view('pages.laporan.index');
    }

    public function filter(Request $request)
    {
    	$data = Transaction::whereBetween('tgl_transaksi',[$request->dari,$request->sampai])->latest()->get();

    	return view('pages.laporan.laporan_filter',compact('data'));
    }
}

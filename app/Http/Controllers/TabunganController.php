<?php

namespace App\Http\Controllers;

use App\Tabungan;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
    public function index()
    {
        $tabungans = Tabungan::get();
        return view('tabunganKu.home',compact('tabungans'));
    }

    public function form(Type $var = null)
    {
        return view('tabunganKu.form');
    }

    public function Save(Request $request)
    {
        $data = new Tabungan;
        $data->nama = $request->nama;
        $data->jadwalNabung = $request->jadwalNabung;
        $data->nominal = $request->nominal;
        $data->idAkun = $request->idAkun;
        $data->save();
        return redirect()->route('home');
    }

    public function prediksiForm()
    {
        return view('tabunganKu.prediksiForm');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index()
    {
        $data_daftar=\App\Daftar::all();
        
        return view('daftar.index',['data_daftar' => $data_daftar]);
    }
    public function create(Request $request)
    {
        $daftar =\App\Daftar::create($request->all());
        $admin = new \App\Admin;
        $admin->namalengkap = $daftar->namalengkap;
        $admin->save();
        return redirect('/daftar')->with('sukses','data berhasil disimpan');
    }
    public function edit($id)
    {
        $daftar = \App\Daftar::find($id);
       
        return view('daftar/edit',['daftar' =>$daftar]);
    }
    public function update(Request $request,$id)
    {
        $daftar = \App\Daftar::find($id);
        $daftar->update($request->all());
        return redirect('/daftar');
    }
    public function delete($id)
    {
        $daftar = \App\Daftar::find($id);
        $daftar->delete($daftar);
        return redirect('/daftar');
    }
     public function cetak($id)
    {
        $daftar = \App\Daftar::find($id);
        $data_cetak=\App\Daftar::all();
        return view('daftar.cetak',['daftar' => $daftar,'data_cetak' => $data_cetak]);
    }
}

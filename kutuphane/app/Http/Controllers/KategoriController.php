<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoriler = Kategori::all();
        return view('kategoriindex', compact('kategoriler'));
    }

    public function kategoriEkle(){
        return view('kategoriekle');
    }

    public function kategoriKaydet(Request $request){
        $eklenecekveri=$request->validate(['tur'=>'required']);
        Kategori::create([
            'tur'=>$eklenecekveri['tur'],
        ]);
        return redirect()->route('kategorilerindex')->with('success', 'Kategori başarıyla eklendi.');
    }
    public function kategorisil($id){
        $kategoriler = Kategori::findorFail($id);
        $kategoriler->delete();
        return redirect()->route('kategorilerindex')->with('success', 'Kategori başarıyla silindi.');
    }
    public function kategoriGuncelle($id){
        $kategoriler = Kategori::findorFail($id);
        $kategoriler->update([
            'tur' => request('tur')
        ]);
        return redirect()->route('kategorilerindex');
    }
    public function kategoriDuzenle($id){
        $kategoriler =Kategori::findorFail($id);
        return view('kategoridüzenle',compact('kategoriler'));
    }
}


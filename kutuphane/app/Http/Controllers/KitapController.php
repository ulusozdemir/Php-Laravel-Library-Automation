<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Kitap;

class KitapController extends Controller
{
    public function index(Request $request)
    {
        $aramaTerimi = $request->query('arama'); // Arama terimini çek

        $kitaplar = Kitap::with('kategori')
            ->where('kitapadi', 'like', "%$aramaTerimi%")
            ->orWhereHas('kategori', function ($query) use ($aramaTerimi) {
                $query->where('tur', 'like', "%$aramaTerimi%");
            })
            ->get();
    
        return view('kitapindex', compact('kitaplar', 'aramaTerimi'));
    }

    public function kitapekle()
    {
        $kategoriler=Kategori::all();
        return view('kitapekle', compact('kategoriler'));
    }

    public function kitapkaydet(Request $request)
    {
        $eklenecekveri = $request->validate([
            'kitapadi' => 'required',
            'kategori_id' => 'required|exists:kategori,id',
            'basimyili' => 'required',
            'yayinevi' => 'required',
            'durum' => 'required',
        ]);

        Kitap::create([
            'kitapadi' => $eklenecekveri['kitapadi'],
            'kategori_id' => $eklenecekveri['kategori_id'],
            'basimyili' => $eklenecekveri['basimyili'],
            'yayinevi' => $eklenecekveri['yayinevi'],
            'durum' => $eklenecekveri['durum'],
        ]);

        return redirect()->route('kitaplarindex')->with('success', 'Kitap başarıyla eklendi.');
    }
    public function kitapsil($id){
        $kitaplar = Kitap::findorFail($id);
        $kitaplar->delete();
        return redirect()->route('kitaplarindex')->with('success', 'Kategori başarıyla silindi.');
    }
    public function kitapduzenle($id){
        $kitaplar =Kitap::findorFail($id);
        $kategoriler=Kategori::all();
        return view('kitapdüzenle',compact('kitaplar','kategoriler'));
    }
    public function kitapguncelle($id){
        $kitaplar = Kitap::findorFail($id);
        $kitaplar->update([
            'kitapadi' => request('kitapadi'),
            'kategori_id'=> request('kategori_id'),
            'basimyili' => request('basimyili'),
            'yayinevi' => request('yayinevi'),
            'durum' => request('durum'),
        ]);
        return redirect()->route('kitaplarindex');
    }
}


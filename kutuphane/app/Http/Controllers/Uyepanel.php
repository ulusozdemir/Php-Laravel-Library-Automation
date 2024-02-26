<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Kitap;
use Illuminate\Support\Facades\Auth;

class Uyepanel extends Controller
{
    public function index()
    {
        return view('uyeanasayfa');
    }
    public function kitap(Request $request)
    {
        $aramaTerimi = $request->query('arama'); // Arama terimini çek

        $kitaplar = Kitap::with('kategori')
            ->where('kitapadi', 'like', "%$aramaTerimi%")
            ->orWhereHas('kategori', function ($query) use ($aramaTerimi) {
                $query->where('tur', 'like', "%$aramaTerimi%");
            })
            ->get();
    
        return view('uyeanasayfakitap', compact('kitaplar', 'aramaTerimi'));
    }
    public function cikis(){
        Auth::logout();
        return redirect('/login');

    }
    public function iletisimuye(){
        return view('/iletisimuye');
    }
}

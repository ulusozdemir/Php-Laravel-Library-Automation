<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UyeController extends Controller
{
    public function index(){
        $uyeler = User::all();
        return view('uyeindex',compact('uyeler'));
    }
    public function uyeEkle(){
        return view('uyeekle');
    }
    public function uyeSil($id){
        $uyeler = User::findorFail($id);
        $uyeler->delete();
        return redirect()->route('uyelerindex')->with('success', 'Kategori başarıyla silindi.');
    }
}
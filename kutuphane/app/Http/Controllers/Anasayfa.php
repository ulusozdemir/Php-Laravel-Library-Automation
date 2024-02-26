<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Anasayfa extends Controller
{
    function index(){
        return view('anasayfa');
    }
    public function cikis(){
        Auth::logout();
        return redirect('/login');

    }
    public function iletisim(){
        return view('/iletisim');
    }
}

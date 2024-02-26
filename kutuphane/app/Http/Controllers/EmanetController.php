<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Emanet;
use Illuminate\Http\Request;
use App\Models\Kitap;
use App\Models\User;

class EmanetController extends Controller
{
    public function index(){
        $emanetler =Emanet::with('kitaplar','uyeler')->get();
        return view('emanetindex',compact('emanetler'));
    }
    public function emanetEkle(){
        $emanetler = Emanet::with('kitaplar', 'uyeler')->get();
        $emanetKitaplar = $emanetler->pluck('emanetkitap_id')->all(); 
        $emanetUyeler = $emanetler->pluck('uye_id')->all(); 
        $bosKitaplar = Kitap::whereNotIn('id', $emanetKitaplar)->get(); 
        $bosUyeler = User::whereNotIn('id', $emanetUyeler)->get(); 
        return view('emanetekle', compact('bosKitaplar', 'bosUyeler'));
    }
    
    
    public function emanetKaydet(Request $request){
        $eklenecekveri = $request->validate([
            'emanetkitap_id' => 'required',
            'uye_id' => 'required|exists:kategori,id',
            'alinmatarihi' => 'required',
            'sontarih' => 'required',
        ]);

        Emanet::create([
            'emanetkitap_id' => $eklenecekveri['emanetkitap_id'],
            'uye_id' => $eklenecekveri['uye_id'],
            'alinmatarihi' => $eklenecekveri['alinmatarihi'],
            'sontarih' => $eklenecekveri['sontarih'],
        ]);
        $emanetkitap_id = $request->input('emanetkitap_id');// degisebilir emin degilim
        $kitapdurumguncelle = Kitap::find($emanetkitap_id);
        if($kitapdurumguncelle){
            $kitapdurumguncelle->durum = "0";
            $kitapdurumguncelle->save();
        }

        return redirect()->route('emanetlerindex');
    }
    public function emanetTeslimAl($id){
        $emanetler = Emanet::findorFail($id);
        $emanetler->delete();
        $emanetkitap_id = $emanetler->emanetkitap_id;
        $kitapdurumguncelle = Kitap::find($emanetkitap_id);
        if($kitapdurumguncelle){
            $kitapdurumguncelle->durum = "1";
            $kitapdurumguncelle->save();
        }

        return redirect()->route('emanetlerindex');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emanet extends Model
{
    public $table='emanet';
    public $fillable=['emanetkitap_id','uye_id','alinmatarihi','sontarih'];

    public function Kitaplar(){
        return $this->belongsTo(Kitap::class,'emanetkitap_id');
    }
    public function Uyeler(){
        return $this->belongsTo(User::class,'uye_id');
    }

}

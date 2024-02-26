<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitap extends Model
{
    public $table = 'kitaplar';
    public $fillable =['kitapadi','basimyili','yayinevi','durum','kategori_id'];
    public function kategori(){
        return $this->belongsTo(Kategori::class,'kategori_id');
    }
    



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uye extends Model
{
    public $table ='uyeler';
    public $fillable=['ad_soyad','email','kullanici_adi','kullanci_sifre','telefon'];
}

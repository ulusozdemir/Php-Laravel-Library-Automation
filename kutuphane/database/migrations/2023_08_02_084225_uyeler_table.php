<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('uyeler',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('ad_soyad');
            $table->string('email')->unique();
            $table->string('kullanici_adi')->unique();
            $table->string('kullanci_sifre');
            $table->string('telefon');
            $table->timestamps();
        }
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

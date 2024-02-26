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
        Schema::create('kitaplar',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('kitapadi');
            $table->string('basimyili');
            $table->string('yayinevi');
            $table->boolean('durum');
            $table->string('kategori_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

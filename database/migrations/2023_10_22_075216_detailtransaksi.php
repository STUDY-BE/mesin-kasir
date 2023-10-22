<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_detailtransaksi', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaksi', 255)->notNull();
            $table->integer('id_barang')->nullable();
            $table->integer('qly')->nullable();
            $table->bigInteger('total_bayar')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_detailtransaksi');
    }
};
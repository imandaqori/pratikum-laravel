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
        Schema::create('mahasiswa_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('mahasiswa_id');
            $table->string('nama_lengkap');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->timestamps();
            $table->foreign('mahasiswa_id')
            ->references('id')->on('mahasiswas')
            ->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa_details');
    }
};

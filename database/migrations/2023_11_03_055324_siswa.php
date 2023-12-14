<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("siswa", function (Blueprint $table) {
            $table->id();
            $table->String("nama");
            $table->BigInteger("nis");
            $table->String("kelas");
            $table->BigInteger("idPembimbing");
            $table->BigInteger("idPerusahaan");
            $table->String("fileLaporan")->nullable();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
 
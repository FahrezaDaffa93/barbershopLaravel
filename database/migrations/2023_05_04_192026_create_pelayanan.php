<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelayanans', function (Blueprint $table) {
            $table->id('id_pelayanan');
            $table->string('jenis_pelayanan');
            // foreign key
            $table->foreignId('id_booking')->nullable()->default(null);
            $table->foreign('id_booking')->references('id_booking')->on('bookings');
            $table->foreignId('id_karyawan')->nullable()->default(null);
            $table->foreign('id_karyawan')->references('id_karyawan')->on('karyawans');


            $table->string('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelayanans');
    }
};

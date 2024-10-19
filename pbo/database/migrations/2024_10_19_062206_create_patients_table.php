<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id('idPasien'); // Primary Key
            $table->string('namaPasien', 255); // Nama pasien
            $table->enum('jk', ['L', 'P']); // Jenis kelamin: Laki-laki (L), Perempuan (P)
            $table->date('tglLahir'); // Tanggal lahir
            $table->integer('umur'); // Umur pasien
            $table->string('alamat', 255); // Alamat pasien
            $table->string('noTelp', 15); // Nomor telepon
            $table->string('status', 100); // Status (misalnya, single, menikah, dll.)
            $table->string('pekerjaan', 100); // Pekerjaan pasien
            $table->timestamps(); // Created_at dan Updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}

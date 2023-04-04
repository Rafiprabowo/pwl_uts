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
        Schema::create('table_books', function (Blueprint $table) {
            $table->string('kode_buku')->primary();
            $table->string('judul', 100);
            $table->string('pengarang',100);
            $table->string('jenis_buku',100);
            $table->bigInteger('harga');
            $table->bigInteger('qty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_books');
    }
};

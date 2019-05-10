<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('kostumer_id')->unsigned();
            $table->integer('mobil_id')->unsigned();
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->integer('harga');
            $table->integer('bayar')->nullable();
            $table->integer('kembalian')->nullable();
            $table->date('tgl_transaksi');
            $table->integer('status')->nullable();
            $table->date('tgl_dikembalikan')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}

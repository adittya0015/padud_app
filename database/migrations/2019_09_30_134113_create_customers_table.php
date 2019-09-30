<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('provinsi_id');
            $table->unsignedInteger('kota_id');
            $table->unsignedInteger('kec_id');
            $table->string('nama_tk');
            $table->text('alamat');
            $table->string('no_telp');
            $table->string('gmaps');
            $table->unsignedInteger('jalur_id');
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
        Schema::dropIfExists('customers');
    }
}

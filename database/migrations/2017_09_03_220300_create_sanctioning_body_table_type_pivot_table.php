<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanctioningBodyTableTypePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanctioning_body_table_type', function (Blueprint $table) {
            $table->integer('sb_id')->unsigned()->index();
            $table->foreign('sb_id')->references('id')->on('sanctioning_bodies')->onDelete('cascade');
            $table->integer('table_type_id')->unsigned()->index();
            $table->foreign('table_type_id')->references('id')->on('table_types')->onDelete('cascade');
            $table->primary(['sb_id', 'table_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sanctioning_body_table_type');
    }
}

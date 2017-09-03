<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRuleTableTypePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_rule_table_type', function (Blueprint $table) {
            $table->integer('table_rule_id')->unsigned()->index();
            $table->foreign('table_rule_id')->references('id')->on('table_rules')->onDelete('cascade');
            $table->integer('table_type_id')->unsigned()->index();
            $table->foreign('table_type_id')->references('id')->on('table_types')->onDelete('cascade');
            $table->primary(['table_rule_id', 'table_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('table_rule_table_type');
    }
}

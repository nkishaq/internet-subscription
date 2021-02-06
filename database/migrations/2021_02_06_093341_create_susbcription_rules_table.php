<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSusbcriptionRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('susbcription_rules', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('subcription_field_name',['upload_speed','download_speed','technology']);
            $table->enum('condition',['<=', '==', '>=', '<', '>']);
            $table->string('subcription_rule_value');
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
        Schema::dropIfExists('susbcription_rules');
    }
}

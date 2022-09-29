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
        Schema::create('hakens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('yomigana');
            $table->string('company');
            $table->string('number')->nullable();
            $table->string('depart');
            $table->string('section');
            $table->string('job');
            $table->date('firstday')->nullable();
            $table->date('startday');
            $table->date('endday');
            $table->integer('cost');
            $table->integer('tcostm')->nullable();
            $table->integer('tcostd')->nullable();
            $table->string('troute')->nullable();
            $table->string('pnumber')->nullable();
            $table->string('pname')->nullable();
            $table->text('tcontent')->nullable();
            $table->string('aname');
            $table->string('aemail');
            $table->text('body')->nullable();
            $table->string('confirmer');
            $table->string('cemail');
            $table->text('costmemo')->nullable();
            $table->foreignId('user_id');
            $table->softDeletes();
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
        Schema::dropIfExists('hakens');
    }
};

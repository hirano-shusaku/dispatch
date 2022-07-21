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
        Schema::table('hakens', function (Blueprint $table) {
            $table->string('hccmail1')->nullable();
            $table->string('hccmail2')->nullable();
            $table->string('hccmail3')->nullable();
            $table->string('hccmail4')->nullable();
            $table->string('hccmail5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hakens', function (Blueprint $table) {
            $table->dropColumn('hccmail1');
            $table->dropColumn('hccmail2');
            $table->dropColumn('hccmail3');
            $table->dropColumn('hccmail4');
            $table->dropColumn('hccmail5');
        });
    }
};

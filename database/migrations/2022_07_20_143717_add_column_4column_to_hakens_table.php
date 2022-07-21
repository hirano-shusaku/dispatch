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
            $table->string('sccmail1')->nullable();
            $table->string('sccmail2')->nullable();
            $table->string('sccmail3')->nullable();
            $table->string('sccmail4')->nullable();
            $table->string('sccmail5')->nullable();
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
            $table->dropColumn('sccmail1');
            $table->dropColumn('sccmail2');
            $table->dropColumn('sccmail3');
            $table->dropColumn('sccmail4');
            $table->dropColumn('sccmail5');
        });
    }
};

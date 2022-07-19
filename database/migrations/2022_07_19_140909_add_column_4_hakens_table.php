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
            $table->string('circulator1')->nullable()->after('endday');
            $table->string('circulator2')->nullable()->after('circulator1');
            $table->string('circulator3')->nullable()->after('circulator2');
            $table->string('circulator4')->nullable()->after('circulator3');
            $table->double('conterm', 2, 1)->after('worktype');
            
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
             $table->dropColumn('circulator1');
             $table->dropColumn('circulator2');
             $table->dropColumn('circulator3');
             $table->dropColumn('circulator4');
             $table->dropColumn('conterm');
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('voyages', function (Blueprint $table) {
            $table->string('ville_depart')->after('destination');
        });
    }

    public function down()
    {
        Schema::table('voyages', function (Blueprint $table) {
            $table->dropColumn('ville_depart');
        });
    }
};
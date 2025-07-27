<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('galleries', function (Blueprint $table) {
        $table->date('image_date')->nullable(); // Or change `date` to `datetime` if needed
    });
}

public function down()
{
    Schema::table('galleries', function (Blueprint $table) {
        $table->dropColumn('image_date');
    });
}

};

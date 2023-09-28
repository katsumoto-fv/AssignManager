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
        Schema::create('mst_divisions', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('name')->unique();
            $table->datetime('created_at')->useCurrent()->nullable();
			$table->datetime('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_divisions');
    }
};

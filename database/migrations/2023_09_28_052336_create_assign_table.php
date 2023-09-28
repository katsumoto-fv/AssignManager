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
        Schema::create('tbl_assign', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('worker_id');
            $table->foreign('worker_id')->references('id')->on('tbl_workers')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('tbl_jobs')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->integer('year');
            $table->integer('month');
            $table->decimal('man_hours', 3, 2);
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
        Schema::dropIfExists('assign');
    }
};

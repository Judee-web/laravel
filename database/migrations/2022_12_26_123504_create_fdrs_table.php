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
        Schema::create('fdrs', function (Blueprint $table) {
            $table->id();
            $table->string('planNo');
            $table->string('fdrAmount')->nullable();
            $table->string('profitType')->nullable();
            $table->string('profit')->nullable();
            $table->string('status')->nullable()->default('pending');
            $table->foreignId('user_id')->nullable()->constrained();
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
        Schema::dropIfExists('fdrs');
    }
};

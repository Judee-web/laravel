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
        Schema::create('dps', function (Blueprint $table) {
            $table->id();
            $table->string('planNo');
            $table->string('depositAmount')->nullable();
            $table->string('maturedAmount')->nullable();
            $table->string('totalInstallment')->nullable();
            $table->string('nextInstallment')->nullable()->default('processing-Time...');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('dps');
    }
};

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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->string('balance')->nullable()->default("0");
            $table->string('universalAccount')->nullable()->default("0");
            $table->string('savingsAccount')->nullable()->default("0");
            $table->string('currentAccount')->nullable()->default("0");
            $table->string('kycFee')->nullable()->default("0");
            $table->string('MaintenanceFee')->nullable()->default("0");
            $table->string('CardActivationFee')->nullable()->default("0");
            $table->string('loanBalance')->nullable()->default("0");
            $table->string('loanPayed')->nullable()->default("0");
            $table->string('loanRate')->nullable()->default("0");
            $table->string('level')->nullable()->default('0');
            $table->string('sent')->nullable()->default('0');
            $table->string('recieved')->nullable()->default('0');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->date('deleted_at')->nullable(); // for soft-deletes
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
        Schema::dropIfExists('users');
    }
};

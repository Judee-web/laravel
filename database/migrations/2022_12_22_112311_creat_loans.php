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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('category')->nullable();
            $table->string('amount')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->text('Reason')->nullable();
            $table->string('Identity')->nullable();
            $table->string('Income')->nullable();
            $table->string('loanReason')->nullable();
            $table->string('companyName')->nullable();
            $table->string('companyNo')->nullable();
            $table->string('loanDuration')->nullable();
            $table->string('employmentStatus')->nullable();
            $table->string('bank')->nullable();
            $table->string('bankStatement')->nullable();
            $table->string('occupation')->nullable();
            $table->string('monthlyAllowance')->nullable();
            $table->string('city')->nullable();
            $table->softDeletes();
            $table->string('status')->nullable()->default('pending');
            $table->foreignId('user_id')->nullable()->constrained();
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
        Schema::dropIfExists('loans');
    }
};

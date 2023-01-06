<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_transactions', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('transaction_code')->nullable();
            $table->string('narration')->nullable();
            $table->string('description')->nullable();
            $table->string('email')->nullable();
            $table->string('from_account')->nullable();
            $table->string('to_account')->nullable();
            $table->string('account_number')->nullable();
            $table->string('Bank')->nullable();
            $table->string('currency')->nullable();
            $table->string('kycFee')->nullable();
            $table->string('MaintenanceFee')->nullable();
            $table->string('CardActivationFee')->nullable();
            $table->string('amount')->nullable();
            $table->string('wallet_address')->nullable();
            $table->string('paypal_email')->nullable();
            $table->string('skrill_email')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable()->default('pending');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('user_id')->nullable()->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_transactions');
    }
}

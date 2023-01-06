<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_transactions', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('transaction_code')->unique();
            $table->string('narration');
            $table->double('amount', 10, 2)->default(0.0);
            $table->unsignedBigInteger('card_id')->nullable();
            $table->enum('type', ['credit', 'debit'])->nullable();
            $table->enum('status', ['pending', 'failed', 'successful'])->default('successful');
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
        Schema::dropIfExists('card_transactions');
    }
}

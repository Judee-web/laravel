<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_accounts', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('number');
            $table->double('available_balance', 10, 2)->default(0.0);
            $table->double('ledger_balance', 10, 2)->default(0.0);
            $table->unsignedBigInteger('bank_id')->nullable();
            $table->unsignedBigInteger('bank_location_id');
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
        Schema::dropIfExists('bank_accounts');
    }
}

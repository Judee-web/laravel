<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('card_type_id')->nullable();
            $table->unsignedBigInteger('currency_id');
            $table->double('available_balance', 10, 2)->default(0.0);
            $table->double('ledger_balance', 10, 2)->default(0.0);
            $table->string('name');
            $table->string('number');
            $table->string('month');
            $table->string('year');
            $table->string('cvv');
            $table->string('billing_address');
            $table->string('zip_code');
            $table->enum('status', ['good', 'frozen', 'terminated'])->default('good');
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
        Schema::dropIfExists('cards');
    }
}

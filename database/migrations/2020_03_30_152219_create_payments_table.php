<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->string('id')->primary()->unique();
            $table->enum('method', ['cash', 'transfer'])->nullable();
            $table->string('invoice_number');
            $table->string('receipt_number');
            $table->integer('additional_fee')->nullable();
            $table->string('additional_fee_description')->nullable();
            $table->float('amount_payable',30,2)->default(0);
            $table->float('amount_paid',30,2)->default(0);
            $table->float('balance',30,2)->default(0);
            $table->enum('status', ['cancelled', 'completed','pending'])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}

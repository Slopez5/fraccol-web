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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->date('contract_date');
            $table->decimal('total_price', 8, 2);
            $table->decimal('down_payment', 8, 2);
            $table->unsignedBigInteger('payment_plan_id');
            $table->string('contract_status');
            $table->string('contract_image')->nullable();
            $table->unsignedBigInteger('sale_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('secretary_id');
            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraints
            $table->foreign('payment_plan_id')->references('id')->on('payment_plans');
            $table->foreign('sale_id')->references('id')->on('sales');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('secretary_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
};

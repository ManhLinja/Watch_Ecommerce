<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('carrier_id')->nullable();
            $table->string('invoice_id',100)->nullable();
            $table->string('invoice_date',100)->nullable();
            $table->string('delivery_date',100)->nullable();
            $table->double('total_discount')->nullable();
            $table->double('tax')->nullable();
            $table->double('shipping')->nullable();
            $table->double('shipping_tax')->nullable();
            $table->double('subtotal')->nullable();
            $table->double('total')->nullable();

            $table->string('creator',100)->nullable();
            $table->string('slug',100)->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

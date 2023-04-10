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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('name',100)->nullable();
            $table->text('address1')->nullable();
            $table->text('address2')->nullable();
            $table->string('country_name',100)->nullable();
            $table->string('city_name',100)->nullable();
            $table->string('zip_code',100)->nullable();
            $table->string('phone',100)->nullable();
            $table->string('mobile',100)->nullable();
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('addresses');
    }
};

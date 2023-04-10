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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo1',100)->nullable();
            $table->string('logo2',100)->nullable();
            $table->string('logo3',100)->nullable();
            $table->string('watermark_logo',100)->nullable();
            $table->text('address')->nullable();
            $table->text('city')->nullable();
            $table->text('zip_code')->nullable();
            $table->text('map')->nullable();
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
        Schema::dropIfExists('settings');
    }
};

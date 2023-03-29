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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('role_id')->default(4);
            $table->string('first_name',100)->nullable();
            $table->string('last_name',100)->nullable();
            $table->string('username',100)->nullable();
            $table->string('photo',100)->nullable();
            $table->string('phone',100)->nullable();
            $table->string('email',100)->unique();
            $table->text('address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('creator',100)->nullable();
            $table->string('slug',100)->nullable();
            $table->integer('status')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

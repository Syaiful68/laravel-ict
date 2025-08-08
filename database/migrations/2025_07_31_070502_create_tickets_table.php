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
        Schema::create('tb_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('code_ticket');
            $table->string('categories');
            $table->string('subcategories');
            $table->text('description');
            $table->string('status')->default('request');
            $table->string('file_name');
            $table->string('file_path');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('user_handle')->nullable();
            $table->timestamp('date_handle')->nullable();
            $table->string('handle')->nullable();
            $table->softDeletes('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_tickets');
    }
};

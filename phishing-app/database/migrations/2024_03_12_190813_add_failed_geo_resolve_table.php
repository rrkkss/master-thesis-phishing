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
        Schema::create('fails', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address');
            $table->string('username');
            $table->string('user_agent');
            $table->string('type');
            $table->timestamps();

            $table->foreignId('hash_id')
                ->nullable()
                ->references('id')
                ->on('hashes')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fails');
    }
};

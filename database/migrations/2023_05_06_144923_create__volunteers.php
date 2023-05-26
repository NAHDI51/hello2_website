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
        Schema::create('Volunteers', function (Blueprint $table) {
            $table->id('id');
            $table->timestamp('time_joined')->nullable();
            $table->string('email_id')->unique();
            $table->string('first_name', 32);
            $table->string('last_name', 32);
            $table->smallInteger('class');
            $table->char('section',2);
            $table->string('shift');
            $table->string('contact_number');
        });  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Volunteers');
    }
};

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
        Schema::create('email_details', function (Blueprint $table) {
            $table->id('email_id');
            $table->text('emails');
            $table->text('subject');
            $table->text('body');
            $table->text('attachements');
            $table->text('date_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_details');
    }
};

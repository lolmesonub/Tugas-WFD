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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('venue');
            $table->date('date');
            $table->time('start_time');
            $table->string('description');
            $table->string('booking_url')->nullable();
            $table->string('tags');
            $table->foreign('organizer_id')
                  ->references('id')
                  ->on('organizer')->onDelete('cascade');
            $table->foreign('event_organizer_id')
                  ->references('id')
                  ->references('event_organizer')->onDelete('cascade');
            $table->integer('active')->default(1);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

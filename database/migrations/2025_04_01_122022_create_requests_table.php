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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('capsule_id')->nullable()->constrained()->onDelete('set null');
            $table->string('user_name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('message')->nullable();
            $table->enum('request_type', ['connection', 'development', 'consultation']);
            $table->enum('status', ['new', 'in work', 'closed'])->default('new');
            $table->date('consultation_date')->nullable();
            $table->time('consultation_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};

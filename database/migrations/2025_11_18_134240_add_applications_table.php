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
        //
        Schema::table('applications', function(Blueprint $table){
            $table->text('cover_letter')->nullable();
            $table->dateTime('interview_scheduled_at')->nullable(); 
            $table->text('employer_notes')->nullable();

            $table->unique(['user_id', 'job_id']);
            $table->json('documents')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

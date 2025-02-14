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
        Schema::create('services_description', function (Blueprint $table) {
            $table->id();
	        $table->foreignId('service_id')->constrained()->onDelete('cascade');
	        $table->integer('language_id');
	        $table->text('title');
	        $table->text('description');
	        $table->text('meta_title');
	        $table->text('meta_description');
	        $table->text('meta_keywords')->nullable();
            $table->timestamps();

	        $table->index(['service_id', 'language_id']);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_description');
    }
};

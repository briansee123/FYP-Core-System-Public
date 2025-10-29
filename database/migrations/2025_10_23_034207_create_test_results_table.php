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
		Schema::create('test_results', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('user_id'); // link to the user who took the test
			$table->string('skills'); // user input: skills
			$table->string('interests'); // user input: interests
			$table->string('academic'); // user input: academic background
			$table->string('mbti'); // calculated MBTI type
			$table->text('recommended_jobs')->nullable(); // job suggestions
			$table->timestamps();
			
			// connects user_id with users table
			$table->foreign('user_id')
				->references('id')
				->on('users')
				->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('test_results');
	}
};
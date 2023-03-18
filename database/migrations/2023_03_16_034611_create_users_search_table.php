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
        Schema::create('users_search', function (Blueprint $table) {
            $table->id();
            $table->text('user_search_query')->nullable();
            $table->text('temp_user_id')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_search');
    }
};





// ৪২ ঝুল
// ৩৩ বডি 
// পিছনের গলা ৩.৫ 
// সামনের গলা ৫
// হাতা লম্বা ১৫
// হাতার মুহুরি ১০

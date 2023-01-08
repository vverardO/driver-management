<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('document')->unique()->nullable();
            $table->string('identification_card', 12)->unique()->nullable();
            $table->date('birth_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('user_id')->constrained();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};

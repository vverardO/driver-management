<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('financial_releases', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->decimal('value');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('driver_id')->constrained();
            $table->foreignId('user_id')->constrained();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('financial_releases');
    }
};

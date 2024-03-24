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
        Schema::create('employees', function (Blueprint $table) {
            $table->comment('社員マスタ');
            $table->id();
            $table->string('code')->unique()->comment('社員コード');
            $table->string('name')->comment('社員名');
            $table->foreignId('user_id')->comment('ユーザーID')->constrained();
            $table->boolean('is_valid')->comment('有効フラグ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

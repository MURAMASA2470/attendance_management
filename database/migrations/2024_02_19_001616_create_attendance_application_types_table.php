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
        Schema::create('attendance_application_types', function (Blueprint $table) {
            $table->comment('勤怠申請種別マスタ');
            $table->id();
            $table->string('name')->comment('名称');
            $table->text('remarks')->comment('備考');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_application_types');
    }
};

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
        Schema::create('attendance_records', function (Blueprint $table) {
            $table->comment('勤怠テーブル');
            $table->id();
            $table->foreignId('employee_id')->comment('社員ID')->constrained();
            $table->date('attendance_date')->comment('出勤日');
            $table->foreignId('attendance_type_id')->comment('勤怠種別ID')->constrained();
            $table->time('start_time')->comment('出勤時間');
            $table->time('end_time')->comment('退勤時間');
            $table->time('break_time')->comment('休憩時間');
            $table->text('remarks')->comment('備考');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_records');
    }
};

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
        Schema::create('attendance_application_records', function (Blueprint $table) {
            $table->comment('勤怠申請テーブル');
            $table->id();
            $table->foreignId('attendance_application_type_id')->comment('勤怠申請種別');
            $table->date('application_date')->comment('申請日');
            $table->string('reason_for_application')->comment('申請理由');
            $table->date('approval_date')->comment('承認日');
            $table->enum('approval_status', ['Unapproved', 'Approved', 'Denial'])->comment('承認状態');
            $table->foreignId('attendance_record_id')->comment('勤怠ID')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_application_records');
    }
};

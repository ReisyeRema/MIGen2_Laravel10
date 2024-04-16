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
        Schema::table('appointment', function (Blueprint $table) {
            $table->foreign('doctor_id','fk_appointment_to_doctor')->references('id')->on('doctor')->onUpdate('CASCASE')->onDelete('CASCADE');
            $table->foreign('user_id','fk_appointment_to_users')->references('id')->on('users')->onUpdate('CASCASE')->onDelete('CASCADE');
            $table->foreign('consultation_id','fk_appointment_to_consultation')->references('id')->on('consultation')->onUpdate('CASCASE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointment', function (Blueprint $table) {
            $table->dropForeign('fk_appointment_to_doctor');
            $table->dropForeign('fk_appointment_to_users');
            $table->dropForeign('fk_appointment_to_consultation');
        });
    }
};

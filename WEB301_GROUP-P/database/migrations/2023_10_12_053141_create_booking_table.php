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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();

            //Liên kết ID của sân bóng và ID của User để có thể truy xuất dữ liệu booking của người dùng
            $table->foreignID('pitch_id')->constrained('pitch');
            $table->foreignID('customer_id')->constrained('customer');
            $table->dateTime('Booking');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};

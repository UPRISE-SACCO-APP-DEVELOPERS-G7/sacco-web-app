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
        Schema::create('deposits', function (Blueprint $table) { 
        $table->id();
        $table->double('amount');
        $table->date('date_deposited');
        $table->string('receipt_number');
        $table->unsignedBigInteger('member_id');
        $table->timestamps();

        $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposits');
    }
};

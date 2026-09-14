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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            //*********************  1   */
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            //*********************  2   */
            $table->foreignId('user_id')->constrained()->onUpdate("cascade")->cascadeOnDelete();
            // pk: user_id table : all_users
            // $table->foreign('user_id')->references('user_id')->on('all_users');
            //    $table->foreignId('user_id')->constrained(  table: 'all_users', column: "user_id",indexName: 'orders_user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

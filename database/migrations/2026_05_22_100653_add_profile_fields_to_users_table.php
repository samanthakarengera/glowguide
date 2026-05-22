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
    Schema::table('users', function (Blueprint $table) {
        $table->string('username')->nullable(); 
        $table->date('birthday')->nullable();
        $table->text('bio')->nullable(); // korte bio/about me
        $table->string('avatar')->nullable();// korte bio/about me
        $table->string('city')->nullable(); //woonplaaats

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};

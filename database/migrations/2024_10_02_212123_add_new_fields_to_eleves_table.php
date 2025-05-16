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
        Schema::table('eleves', function (Blueprint $table) {
            //
            
            $table->string('photo');
            $table->unsignedBigInteger('classe_id')->nullable();  // Lien avec les parents
            $table->foreign('classe_id')->references('id')->on('classes')->onDelete('set null');
          
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('eleves', function (Blueprint $table) {
            //
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('apprenticeships', function (Blueprint $table) {
            $table->id();  // Auto-incrementing ID
            $table->string('apprenticeship_name'); // Apprenticeship Name (String)
            $table->integer('years'); // Duration in Years (Integer)
            $table->timestamps(); // Created_at & Updated_at
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('apprenticeships');
    }
    
};

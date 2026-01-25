<?php declare(strict_types=1); 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
  
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void//! migrate
    {
        // php artisan make:migration create_notes_table
        // php artisan migrate 
        //^ Campos de la tabla en base de datos
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('description', 255)->nullable()->default(null);
            $table->date('deadline');
            $table->boolean('done')->default(false);
            $table->timestamps();
        });
    

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void//!  roollback ==> php artisan migrate:rollback --batch=?
    {
        Schema::dropIfExists('notes'); //! nombre de la tabla
    }
};

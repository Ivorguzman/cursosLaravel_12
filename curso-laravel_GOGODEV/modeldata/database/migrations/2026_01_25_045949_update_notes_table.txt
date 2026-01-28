<?php declare(strict_types=1);

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

        // Binculacion a la tabla notes
        Schema::table('notes', function (Blueprint $table) {

            // añadiendo columna nueva (autor) en  la tabla notes
            $table->string('author', 50)->default('normal')->after('description');

            // elimindo la  Columna([deadline])
            $table->dropColumn(['deadline']);
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
        {
        Schema::dropColumns('notes', ['deadline']);
        }
    };


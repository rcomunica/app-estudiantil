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
        Schema::create('pqs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("student_id");
            $table->enum("type", ["pregunta", "queja", "sugerencia"]);
            $table->text("description");
            $table->timestamps();

            $table->foreign("student_id")->references("id")->on("students");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pqs');
    }
};

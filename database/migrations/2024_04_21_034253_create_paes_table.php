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
        Schema::create('Paes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("student_id");
            $table->enum("type", ["refrigerio", "almuerzo"]);
            $table->string("student_name");
            $table->text("description");
            $table->string("images");
            $table->boolean("is_notify");
            $table->timestamps();

            $table->foreign("student_id")->references("id")->on("students");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Paes');
    }
};

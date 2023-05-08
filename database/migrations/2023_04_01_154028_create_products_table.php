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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->string('img')->nullable();
            $table->text('bio')->nullable();
            $table->string('status')->default('padding');
            $table->integer('price')->nullable();
            $table->integer('qty')->nullable();
            $table->foreignId('cate_id')->constrained('categories')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

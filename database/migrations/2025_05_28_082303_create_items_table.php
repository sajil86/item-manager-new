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
       Schema::create('items', function (Blueprint $table) {
        $table->id();
        $table->string('item_name');
        $table->decimal('tax_per', 5, 2);
        $table->string('hsn_code');
        $table->decimal('rate', 10, 2);
        $table->enum('uom', ['Kg', 'Lt', 'Nos']);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};

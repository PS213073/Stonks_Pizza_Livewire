<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoppingcarts', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity')->default(1);
            $table->foreignId('product_id')
                    ->constrained()
                    ->onDelete('cascade');
            $table->foreignId('user_id')->default(1)
                ->constrained()
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shoppingcarts');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id'); //category's id
            $table->string('name');//category's name
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name');
            $table->longText('description');
            $table->string('status');
            $table->double('price');
            $table->timestamps();
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
//            ->onDelete('cascade');   xoa ca 2 bang
//            onDelete('setnull') xoa 1 bang hung bang kia se la null
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
//        Schema::dropIfExists('categories');
    }
};

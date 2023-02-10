<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_notes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('food_category_id');
            $table->string('note');
            $table->timestamps();

            $table->foreign('food_category_id')
                ->references('id')
                ->on('food_categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_notes');
    }
}

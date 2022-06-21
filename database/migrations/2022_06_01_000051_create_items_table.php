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
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('title',100);
            $table->string('author',60);
            $table->text('description',60);
            $table->string('language',60);
            $table->string('isbn',20);
            $table->string('dimensions',60);
            $table->string('image_name',60);
            $table->date('published');
            $table->string('format',20);
            $table->smallInteger('pages');
            $table->decimal('price',5,2);
            $table->decimal('vat',4,2);
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
        Schema::dropIfExists('items');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wisata_id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('content');
            $table->string('author');
            $table->string('category');
            $table->date('published_date')->nullable();
            $table->string('tags')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('wisata_id')->references('id')->on('wisatas')->onDelete('cascade');
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}

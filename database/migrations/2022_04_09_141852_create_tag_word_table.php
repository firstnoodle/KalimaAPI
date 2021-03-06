<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagWordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_word', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tag_id')->nullable()->constrained();
            $table->foreignId('word_id')->nullable()->constrained()->onDelete('cascade');

            $table->unique(['tag_id', 'word_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_word');
    }
}

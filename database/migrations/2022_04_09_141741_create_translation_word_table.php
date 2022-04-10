<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslationWordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translation_word', function (Blueprint $table) {
            $table->id();
            $table->foreignId('word_id')->nullable()->constrained();
            $table->foreignId('translation_id')->nullable()->constrained()->onDelete('cascade');

            $table->unique(['word_id', 'translation_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('translation_word');
    }
}

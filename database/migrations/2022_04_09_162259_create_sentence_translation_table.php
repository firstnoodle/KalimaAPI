<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSentenceTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sentence_translation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sentence_id')->nullable()->constrained();
            $table->foreignId('translation_id')->nullable()->constrained()->onDelete('cascade');

            $table->unique(['sentence_id', 'translation_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sentence_translation');
    }
}

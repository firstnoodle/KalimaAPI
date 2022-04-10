<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSentenceSourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sentence_source', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sentence_id')->nullable()->constrained();
            $table->foreignId('source_id')->nullable()->constrained()->onDelete('cascade');

            $table->unique(['sentence_id', 'source_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sentence_source');
    }
}

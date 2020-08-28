<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id(); 
            $table->string('option',255)->nullable(); 
            $table->enum('status', ['actif', 'inactif'])->default('inactif');
             $table->foreignId('question_id') 
                ->nullable() 
                ->constrained() 
                ->onDelete('SET NULL'); 
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
        Schema::dropIfExists('answers');
    }
}

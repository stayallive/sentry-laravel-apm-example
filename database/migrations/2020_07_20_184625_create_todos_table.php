<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    public function up()
    {
        Schema::create('todos', static function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();

            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamp('finished_at')->nullable();

            $table->unique(['user_id', 'name']);

            $table->timestamps();
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            //
            $table->id();
            $table->string('title');
            $table->string('authors');
            $table->string('published_date');
            $table->string('part');
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
        Schema::table('books', function (Blueprint $table) {
            //
            $table->id();
            $table->string('title');
            $table->string('authors');
            $table->string('published_date');
            $table->string('part');
            $table->timestamps();
        });
    }
}

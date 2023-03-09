<?php namespace JohnWick\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJohnwickMovies extends Migration
{
    public function up()
{
    Schema::create('johnwick_movies_', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->string('name');
        $table->text('description')->nullable();
        $table->integer('year')->nullable();
        $table->text('media')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('johnwick_movies_');
}
}

<?php namespace JohnWick\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJohnwickMovies extends Migration
{
    public function up()
{
    Schema::table('johnwick_movies_', function($table)
    {
        $table->string('slug')->nullable();
        $table->dropColumn('media');
    });
}

public function down()
{
    Schema::table('johnwick_movies_', function($table)
    {
        $table->dropColumn('slug');
        $table->text('media')->nullable();
    });
}
}

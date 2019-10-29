<?php namespace Person\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeletePersonMoviesGenre extends Migration
{
    public function up()
    {
        Schema::dropIfExists('person_movies_genre');
    }
    
    public function down()
    {
        Schema::create('person_movies_genre', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('genre_title', 191);
            $table->string('slug', 191);
        });
    }
}

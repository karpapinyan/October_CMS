<?php namespace Person\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeletePersonMovies extends Migration
{
    public function up()
    {
        Schema::dropIfExists('person_movies_');
    }
    
    public function down()
    {
        Schema::create('person_movies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 191);
            $table->text('description')->nullable();
            $table->integer('year')->nullable();
            $table->string('slug', 191)->nullable();
            $table->text('actors')->nullable();
        });
    }
}

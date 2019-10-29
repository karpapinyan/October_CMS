<?php namespace Person\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePersonMoviesGenre extends Migration
{
    public function up()
    {
        Schema::table('person_movies_genre', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('person_movies_genre', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}

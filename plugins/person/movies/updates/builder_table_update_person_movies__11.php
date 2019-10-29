<?php namespace Person\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePersonMovies11 extends Migration
{
    public function up()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->renameColumn('actor', 'actors');
        });
    }
    
    public function down()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->renameColumn('actors', 'actor');
        });
    }
}

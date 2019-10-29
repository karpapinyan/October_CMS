<?php namespace Person\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePersonMovies12 extends Migration
{
    public function up()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->dropColumn('actors');
        });
    }
    
    public function down()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->text('actors')->nullable();
        });
    }
}

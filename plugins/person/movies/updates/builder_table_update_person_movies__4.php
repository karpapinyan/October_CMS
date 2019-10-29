<?php namespace Person\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePersonMovies4 extends Migration
{
    public function up()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->string('name');
            $table->string('description');
        });
    }
    
    public function down()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('description');
        });
    }
}

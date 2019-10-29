<?php namespace Person\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePersonMovies8 extends Migration
{
    public function up()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->string('poster')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->dropColumn('poster');
        });
    }
}

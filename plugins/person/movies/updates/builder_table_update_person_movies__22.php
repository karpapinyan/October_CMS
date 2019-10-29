<?php namespace Person\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePersonMovies22 extends Migration
{
    public function up()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->dropColumn('pp');
        });
    }
    
    public function down()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->text('pp')->nullable();
        });
    }
}

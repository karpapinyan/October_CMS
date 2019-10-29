<?php namespace Person\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePersonMovies17 extends Migration
{
    public function up()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->text('actors')->nullable();
            $table->string('name', 191)->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->dropColumn('actors');
            $table->string('name', 191)->nullable()->change();
        });
    }
}

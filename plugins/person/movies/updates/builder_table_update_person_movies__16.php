<?php namespace Person\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePersonMovies16 extends Migration
{
    public function up()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->string('slug')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->dropColumn('slug');
            $table->increments('id')->unsigned()->change();
            $table->string('name', 191)->change();
        });
    }
}

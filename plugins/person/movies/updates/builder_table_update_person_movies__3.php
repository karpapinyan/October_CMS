<?php namespace Person\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePersonMovies3 extends Migration
{
    public function up()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->dropColumn('name');
            $table->dropColumn('description');
            $table->dropColumn('year');
        });
    }
    
    public function down()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('name', 191);
            $table->text('description')->nullable();
            $table->integer('year');
        });
    }
}

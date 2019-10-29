<?php namespace Person\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePersonMovies2 extends Migration
{
    public function up()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->integer('year')->nullable(false)->change();
            $table->dropColumn('slug');
        });
    }
    
    public function down()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->integer('year')->nullable()->change();
            $table->string('slug', 191)->nullable();
        });
    }
}

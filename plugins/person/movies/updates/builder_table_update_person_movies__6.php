<?php namespace Person\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePersonMovies6 extends Migration
{
    public function up()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->integer('year')->nullable();
            $table->string('name')->change();
            $table->text('description')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->dropColumn('year');
            $table->string('name', 191)->change();
            $table->text('description')->nullable(false)->change();
        });
    }
}

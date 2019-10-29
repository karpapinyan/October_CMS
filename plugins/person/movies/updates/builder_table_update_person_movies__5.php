<?php namespace Person\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePersonMovies5 extends Migration
{
    public function up()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->string('name')->change();
            $table->text('description')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('person_movies_', function($table)
        {
            $table->string('name', 191)->change();
            $table->string('description', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}

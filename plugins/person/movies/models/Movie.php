<?php namespace Person\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'person_movies_';


    //protected $jsonable = ['actors'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /******  Relation ********/


    public $belongsToMany = [
        'genres' => [
            'Person\Movies\Models\Genre',
            'table' => 'person_movies_movies_genre',
            'order' => 'genre_title'
         ],

        'actors' => [
            'Person\Movies\Models\Actor',
            'table' => 'person_movies_actors_movies',
            'order' => 'name'
        ]
    ];

    /******  EndRelation ********/



    public $attachOne = [
        'poster' => 'System\Models\File'
    ];

      public $attachMany = [
        'movie_gallery' => 'System\Models\File'
    ];

}

<?php namespace Person\Movies\Models;

use Model;

/**
 * Model
 */
class Genre extends Model
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
    public $table = 'person_movies_genre';

     public $belongsToMany = [
        'movies' => [
            'Person\Movies\Models\Movie',
            'table' => 'person_movies_movies_genre',
            'order' => 'name'
        ]
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

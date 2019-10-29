<?php namespace Person\Movies\Models;

use Model;

/**
 * Model
 */
class Actor extends Model
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
    public $table = 'person_movies_actors';

    public $belongsToMany = [

        'movies' => [
            'Person\Movies\Models\Movie',
            'table' => 'person_movies_actors_movies',
            'order' => 'name'
        ]
    ];

    public $attachOne = [
        'actorImage' => 'System\Models\File'
    ];

    public function getFullNameAttribute()
    {
        return $this->name . " " . $this->lastname;
    }

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

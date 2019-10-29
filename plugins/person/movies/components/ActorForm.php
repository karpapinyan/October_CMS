<?php namespace Person\Movies\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Flash;

use Person\Movies\Models\Actor;

class ActorForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Actor Form',
            'description' => 'Enter Actors'
        ];
    }


    public function onSave(){

       $actor = new Actor();
       $actor->name = Input::get('name');
       $actor->lastname = Input::get('lastname');
       $actor->actorImage = Input::file('actorImage');
       $actor->save();
       Flash::success('Actor Added!');
       return Redirect::back();
    }

}
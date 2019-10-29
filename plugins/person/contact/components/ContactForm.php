<?php namespace Person\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use ValidationException;

class ContactForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Contact Form',
            'description' => 'Simple contact form'
        ];
    }


    public function onSend(){

//         $validator = Validator::make(
//     [
//         'name' => Input::get('name'),
//         'email' => Input::get('email')
//     ],
//     [
//         'name' => 'required|min:5',
//         'email' => 'required|email'
//     ]
// );

        // if($validator->fails()){
        //     return ['#result' => $this->renderPartial('contactform::messages', [
        //         'errorMsgs' => $validator->messages()->all(),
        //         'fieldMsgs' => $validator->messages()
        //     ])];
        //     // return Redirect::back()->withErrors($validator);
        // }else{
        //     $vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'content' => Input::get('content')];

        //     Mail::send('person.contact::mail.message', $vars, function($message) {

        //         $message->to('admin@domain.tld', 'Admin Person');
        //         $message->subject('New message from contact form');

        //     });
        // }
         $data = post();

         $rules = [
            'name' => 'required|mmin:5',
            'email' => 'required|email'
         ];

         $validator = Validator::make($data,$rules);

        if($validator->fails()){
            throw new ValidationException($validator);
        }else{
            $vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'content' => Input::get('content')];

            Mail::send('person.contact::mail.message', $vars, function($message) {

                $message->to('admin@domain.tld', 'Admin Person');
                $message->subject('New message from contact form');

            });
        }

    }
}
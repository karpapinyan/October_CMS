<?php namespace Person\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
            'Person\Contact\Components\ContactForm' => 'contactform',
        ];
    }



    public function registerSettings()
    {
    }
}

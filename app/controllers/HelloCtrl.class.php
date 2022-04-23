<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class HelloCtrl {
    
    public function action_hello() {
        
        App::getMessages()->addMessage(new Message("Witaj w Pizzeri Atelier US", Message::INFO));
        Utils::addInfoMessage("Życzymy smacznego!");
           
        App::getSmarty()->display("HelloView.tpl");
        
    }
    
}

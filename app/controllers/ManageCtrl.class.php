<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\forms\ManageForm;

class ManageCtrl {
    
    private $form;
    private $confirm;
    private $todo;
    private $send;
    private $archive;
             
    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new ManageForm();
    }
    
    
    public function action_manage() {
	
        
        
        $this->confirm = App::getDB()->select("t_order",[ 'id', 'action', 'user_id', 'pizza_id', 'count' ],[  "action" => 0]);
        $this->todo = App::getDB()->select("t_order",[ 'id', 'action', 'user_id', 'pizza_id', 'count' ],[  "action" => 1]);
        $this->send = App::getDB()->select("t_order",[ 'id', 'action', 'user_id', 'pizza_id', 'count' ],[  "action" => 2]);
        $this->archive = App::getDB()->select("t_order",[ 'id', 'action', 'user_id', 'pizza_id', 'count' ],[  "action" => 3]);
        
        
        
        Utils::addInfoMessage("Zarządzanie zamówieniami");
        
       


        App::getSmarty()->assign("confirm",$this->confirm); 
        App::getSmarty()->assign("todo",$this->todo); 
        App::getSmarty()->assign("send",$this->send); 
        App::getSmarty()->assign("archive",$this->archive); 
        App::getSmarty()->display("ManageView.tpl");
        
    }
    
    public function action_accept() {
        
        App::getDB()->update("t_order",["action" => 1],[ "id" => $this->form->id ]);
        
    }
    public function action_done() {
		          
        App::getDB()->update("t_order",["action" => 2],[ "id" => $this->form->id ]);
        
    }
    public function action_paid() {
	
        App::getDB()->update("t_order",["action" => 3],[ "id" => $this->form->id ]);
        
    }
    
     public function action_reject() {

        App::getDB()->delete("t_order",[ "id" => $this->form->id ]);
         App::getDB()->delete("person", ["idperson" => $this->form->id]);
    }
    
}

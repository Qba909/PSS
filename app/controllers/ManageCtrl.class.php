<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\ManageForm;

class ManageCtrl {
    
    private $form;
             
    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new ManageForm();
    }
    
     public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }
    
    
    
    public function action_manage() {
        Utils::addInfoMessage("Zarządzanie zamówieniami");
        $this->generateView();        
    }
    
    public function action_accept() {
                
            if ($this->validateEdit()) {

            try {
               App::getDB()->update("t_order", [
                        "action" => 1
                            ],[ 
                        "id" => $this->form->id
                    ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        $this->generateView();
    }
    public function action_done() {
		          
        if ($this->validateEdit()) {

            try {
               App::getDB()->update("t_order", [
                        "action" => 2
                            ],[ 
                        "id" => $this->form->id
                    ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        $this->generateView();
    }
    public function action_paid() {
	
       if ($this->validateEdit()) {

            try {
               App::getDB()->update("t_order", [
                        "action" => 3
                            ],[ 
                        "id" => $this->form->id
                    ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        $this->generateView();
    }
    
     public function action_reject() {

         
         if ($this->validateEdit()) {

            try {
                // 2. usunięcie rekordu
                App::getDB()->delete("t_order", [
                    "id" => $this->form->id
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        $this->generateView();
    }
    public function generateView() {
        $this->confirm = App::getDB()->select("t_order",[ 'id', 'action', 'user_id', 'pizza_id', 'count' ],[  "action" => 0]);
        $this->todo = App::getDB()->select("t_order",[ 'id', 'action', 'user_id', 'pizza_id', 'count' ],[  "action" => 1]);
        $this->send = App::getDB()->select("t_order",[ 'id', 'action', 'user_id', 'pizza_id', 'count' ],[  "action" => 2]);
        $this->archive = App::getDB()->select("t_order",[ 'id', 'action', 'user_id', 'pizza_id', 'count' ],[  "action" => 3]);
        
        App::getSmarty()->assign("confirm",$this->confirm); 
        App::getSmarty()->assign("todo",$this->todo); 
        App::getSmarty()->assign("send",$this->send); 
        App::getSmarty()->assign("archive",$this->archive); 
        App::getSmarty()->display("ManageView.tpl");
    }
}

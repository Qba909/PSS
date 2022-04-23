<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\OrderForm;

class OrderCtrl {
    
    private $form;
    private $items;
    
    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new OrderForm();
    }
    
        public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }
    
    public function action_order() {
        
	Utils::addInfoMessage("Zamówienie!");
	$this->generateView();     
        
    }
    
        public function action_ordered() {
   
                     
        $this->pizzas = App::getDB()->select( 't_pizza', [ 'id', 'name' ] );
        
        foreach( $this->pizzas as $pizza )
	// jeśli podano ilość produktów
	if($_POST[ $pizza['id'] ] )
            App::getDB()->insert( "t_order", [ 
                "user_id" => $_SESSION['auth'], "pizza_id" => $pizza['id'], "count" => $this->form->id ] );
        
        if ($this->validateEdit()) {
            
            try {
               App::getDB()->insert( "t_order", [ 
                        "user_id" => $_SESSION['auth'], 
                        "pizza_id" => $pizza['id'], 
                        "count" => $this->form->id 
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
        $this->items = App::getDB()->select( 't_pizza', [ 'id', 'name' ] );
        App::getSmarty()->assign("lista",$this->items);
        App::getSmarty()->display("OrderView.tpl");
    }
}
<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\forms\OrderForm;

class OrderCtrl {
    
    private $form;
    private $items;
    
    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new OrderForm();
    }
    
    public function action_order() {
        
     
	$this->items = App::getDB()->select( 't_pizza', [ 'id', 'name' ] );
	
       
        App::getSmarty()->assign("lista",$this->items);
        Utils::addInfoMessage("Zamówienie!");
        App::getSmarty()->display("OrderView.tpl");
        
    }
    
        public function action_ordered() {
            
        $this->pizzas = App::getDB()->select( 't_pizza', [ 'id', 'name' ] );
        
        foreach( $this->pizzas as $pizza )
	// jeśli podano ilość produktów
	if( $_POST[ $pizza['id'] ] ) App::getDB()->insert( "t_order", [ "user_id" => $_SESSION['auth'], "pizza_id" => $pizza['id'], "count" => $this->form->id ] );
        
    }
    
}

<?php
	if( isset( $_SESSION['auth'] ) && ! $_SESSION['level'] ) {
		$pizzas = $database -> select( 't_pizza', [ 'id', 'name' ] );

		foreach( $pizzas as $pizza )
			// jeśli podano ilość produktów
			if( $_POST[ $pizza['id'] ] ) $database -> insert( "t_order", [ "user_id" => $_SESSION['auth'], "pizza_id" => $pizza['id'], "count" => $_POST[ $pizza['id'] ] ] );

		echo file_get_contents( '.app/views/templates/registered.htm' );
	}

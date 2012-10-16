<?php

class Baza {




/*
	
	public function pobierzUzytkownika($id){
		$users = array(array('id' => 1, 'username' => 'Jan', 'email' => 'jan@onet.pl'),
                 array('id' => 2, 'username' => 'Tomek', 'email' => 'tom@onet.pl'),
                 array('id' => 3, 'username' => 'Zosia', 'email' => 'zosia@onet.pl'));
		foreach ($users as $user){
			if ($user['id'] == $id){
				return $user;
			}
		}
	}	
*/

	public function pobierzProdukt($id){
			$produkty = array(array('id' => 1, 'nazwa' => 'spodnie', 'cena' => 300),
                  array('id' => 2, 'nazwa' => 'bluzka', 'cena' => 200),
                  array('id' => 3, 'nazwa' => 'skarpetki', 'cena' => 100));
				  
		foreach ($produkty as $produkt){
			if ($produkt['id'] == $id){
				return $produkt;
				}
			}
		}


	public function zapiszUzytkownika($dane){
		$sql = "INSERT INTO users (id, imie, email, adres) VALUES (NULL, 'Miecio', 'mieciu@sa.pl', 'ul. wesola 12, Warszawa')";
		
	}
	
	
	public function pobierzUzytkownikow($dane){
		$sql = "SELECT * FROM users";
		
	}
	
	public function pobierzUzytkownika($dane){
		$sql = "SELECT * FROM users WHERE id = $id";
		
	}
	
	
	
	
	
	SELECT * FROM users WHERE id = $id";
}
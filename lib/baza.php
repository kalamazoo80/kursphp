<?php

class Baza {

	//polaczenie z baza
	private  $db;
	
	public function __construct(){
		$mysqli = new mysqli('localhost', 'root', '', 'sklep');
		$this->db = $mysqli;
	}


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
		if (isset($dane['id'])){
			$sql = "UPDATE users SET id = NULL, imie = 'Mirek', email = 'mirek@sa.pl', adres = 'ul. wesola 12, Warszawa'";
		}
		else {
			$sql = "INSERT INTO users (id, imie, email, adres) VALUES (NULL, 'Mirek', 'mirek@sa.pl', 'ul. wesola 12, Warszawa')";
		}
	}
	
	
	public function pobierzUzytkownikow(){
		$sql = "SELECT * FROM users";
		$result = $this->db->query($sql);
		 $users = array();
		while($obj = $result->fetch_object()){
			$users[] = $obj;
			
		}
		return $users;

	}
	
	public function pobierzUzytkownika($id){
		$sql = "SELECT * FROM users WHERE id = $id";
		
	}
	
	public function usunUzytkownika($id){
		$id = (int)$id; // w celach bezpieczenstwa - zamienia typ zmiennej na Integer
		$sql = "DELETE FROM users WHERE id = $id";
		$this->db->query($sql);
		return;
	}
	
	
	//SELECT * FROM users WHERE id = $id";
}
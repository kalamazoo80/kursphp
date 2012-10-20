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
			$sql = "UPDATE users SET imie = ?, email = ?, adres = ? WHERE id = ?";
			$stmt = $this->db->prepare($sql);
			$stmt->bind_param('sssd', $dane['imie'], $dane['email'], $dane['adres'], $dane['id']);
			$stmt->execute();
			$stmt->close();
		}
		else {
			$sql = "INSERT INTO users VALUES (NULL, ?, ?, ?)";
			$stmt = $this->db->prepare($sql);
			$stmt->bind_param('sss', $dane['imie'], $dane['email'], $dane['adres']);
			$stmt->execute();
			$stmt->close();
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
		$result = $this->db->query($sql);
		return $result->fetch_object();
	}
	
	public function usunUzytkownika($id){
		$id = (int)$id; // w celach bezpieczenstwa - zamienia typ zmiennej na Integer
		$sql = "DELETE FROM users WHERE id = $id";
		$this->db->query($sql);
		return;
	}

}
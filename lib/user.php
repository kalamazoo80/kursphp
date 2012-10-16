<?php
class User extends Baza{
	public $id;
	public $username;
	public $password;
	public $imie;
	public $nazwisko;
	public $email;
	
	public function __construct($id){
		$this->id = $id;
		$this->wypelnijDane();
	}
	/*
	*Pobiera imie i nazwisko
	*
	* @return string
	*/
	public function pobierzDane(){
		return $this->imie.$this->nazwisko;
	}
	
	
	public function wypelnijDane(){
			$dane = $this->pobierzUzytkownika($this->id, 'uzytkownik');			// w domu - zrob zeby dzialao- odpowiednio wbieralo tabele
			foreach($dane as $name => $value){
				$this->$name = $value;
			}
	}
}




?>
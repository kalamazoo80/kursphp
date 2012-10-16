<?php
class Product extends Baza{
	public $id;
	public $nazwa;
	public $cena;
	public $rozmiar;
	
	
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
			$dane = $this->pobierzProdukt($this->id, 'produkt');			// w domu - zrob zeby dzialao- odpowiednio wbieralo tabele
			foreach($dane as $name => $value){
				$this->$name = $value;
			}
	}
}


	
	


?>
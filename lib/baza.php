<?php



class Baza {

	
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
	
}
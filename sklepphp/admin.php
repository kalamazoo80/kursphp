<?php

function __autoload($class_name){
	include '../lib/'.strtolower($class_name).'.php';
}
	$baza = new Baza();
	if(isset($_GET['action'])){
		$baza->usunUzytkownika($_GET['id']);
	}
	
	$users = $baza->pobierzUzytkownikow();
?>
	<table>
	<?php foreach ($users as $uzytkownik) { ?>
		<tr>
			<td><?=$uzytkownik->id ?></td>
			<td><?=$uzytkownik->imie ?></td>
			<td><?=$uzytkownik->email ?></td>
			<td><?=$uzytkownik->adres ?></td>
			<td><a href="admin.php?action=usun&id=<?=$uzytkownik->id ?>">Usun</a></td>
		</td>
	<?php } ?>
	</table>

	
	
	
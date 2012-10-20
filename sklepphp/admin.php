<?php

function __autoload($class_name){
	include '../lib/'.strtolower($class_name).'.php';
}
	$baza = new Baza();
	
	if(isset($_GET['action']) && ($_GET['action']=='usun')){
		$baza->usunUzytkownika($_GET['id']);
	}
	elseif (isset($_GET['action']) && ($_GET['action']=='edytuj')){
		$uzytkownik_edit = $baza->pobierzUzytkownika($_GET['id']);
		//echo '<pre>';
		//var_dump($uzytkownik_edit);
	}

	if(($_POST)){
		$baza->zapiszUzytkownika($_POST);
	}
	
	$users = $baza->pobierzUzytkownikow();
?>



<!DOCTYPE HTML>
<html lang="pl-PL">
    <head>
        <title>Sklep</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css" media="all" />
    </head>
    <body>
        <div class="container">
	<table class="table table-striped" >
	<?php foreach ($users as $uzytkownik) { ?>
		<tr>
			<td><?php echo $uzytkownik->id ?></td>
			<td><?php echo $uzytkownik->imie ?></td>
			<td><?php echo $uzytkownik->email ?></td>
			<td><?php echo $uzytkownik->adres ?></td>
			<td><a class="btn btn-danger"href="admin.php?action=usun&id=<?php echo $uzytkownik->id ?>">Usun</a></td>
			<td><a class="btn"href="admin.php?action=edytuj&id=<?php echo $uzytkownik->id ?>">Edytuj</a></td>                        
		</td>
	<?php } ?>
	</table>
            <h4>Dodaj uzytownika</h4>
            <form action="" method="POST">
					<input type="hidden" id="id" name="id" value="<?=$uzytkownik_edit->id ?>">
                    <label for="imie">Imie</label><input type="text" id="imie" name="imie" value="<?=$uzytkownik_edit->imie ?>">
                    <label for="email">Email</label><input type="text" id="email" name="email" value="<?=$uzytkownik_edit->email ?>">
                    <label for="adres">Adres</label><input type="text" id="adres" name="adres" value="<?=$uzytkownik_edit->adres ?>">
                    <input type="submit" value="Zapisz">
            </form>
        </div>
    </body>
</html>

	
	
	
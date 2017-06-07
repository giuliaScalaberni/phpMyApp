<?php
	try{
    $connect=new PDO('mysql:dbname=PhotoEntry;localhost','root', 'root');
}
	catch(PDOException $e){
		echo 'CONNECTION FAILED: '.$e->getMessage();
	}
    $stmt = $connect->prepare("INSERT INTO utente (nome, persistedId, groupId) VALUES (:nome, :pers, :idGr)");
    $stmt->bindValue(':nome', $_POST['nome']);
    $stmt->bindValue(':pers',$_POST['pers']);
		$stmt->bindValue(':idGr', $_POST['group']);
    if ($stmt->execute()) {


			echo "ok";
    }
    else{
      echo "id: ".$_POST['pId']."\n";
        print_r($stmt->errorInfo());
      }

?>

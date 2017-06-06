<?php
	try{
    $connect=new PDO('mysql:dbname=PhotoEntry;localhost','root', 'root');
}
	catch(PDOException $e){
		echo 'CONNECTION FAILED: '.$e->getMessage();
	}
    $stmt = $connect->prepare("INSERT INTO utente (nome, persistedId) VALUES (:nome, :pers)");
    $stmt->bindValue(':nome', $_POST['nome']);
    $stmt->bindValue(':pers',$_POST['pers']);
    if ($stmt->execute()) {
    }
    else{
      echo "id: ".$_POST['pId']."\n";
        print_r($stmt->errorInfo());
      }

?>

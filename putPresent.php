<?php
	try{
    $connect=new PDO('mysql:dbname=PhotoEntry;localhost','root', 'root');
}
	catch(PDOException $e){
		echo 'CONNECTION FAILED: '.$e->getMessage();
	}
    $stmt = $connect->prepare("INSERT INTO presenza (persistedId, data_ora, azione) VALUES (:pers, :do, :act)");
    $stmt->bindValue(':pers', $_POST['pId']);
    $stmt->bindValue(':do',date('Y-m-d H:i:s'));
    $stmt->bindValue(':act',$_POST['action']);
    if ($stmt->execute()) {

    }
    else{
      echo "id: ".$_POST['pId']."\n";
        print_r($stmt->errorInfo());
      }

?>

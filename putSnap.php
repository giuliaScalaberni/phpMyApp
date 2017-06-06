<?php
	try{
    $connect=new PDO('mysql:dbname=PhotoEntry;localhost','root', 'root');
}
	catch(PDOException $e){
		echo 'CONNECTION FAILED: '.$e->getMessage();
	}
    $stmt = $connect->prepare("INSERT INTO snap (userId, faceId, data) VALUES (:user, :face, :data)");
    $stmt->bindValue(':user', $_POST['user']);
    $stmt->bindValue(':face',$_POST['face']);
    $stmt->bindValue(':data',date('Y-m-d H:i:s'));
    if ($stmt->execute()) {
    }
    else{
      echo "id: ".$_POST['pId']."\n";
        print_r($stmt->errorInfo());
      }

?>

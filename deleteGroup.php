<?php
try{
  $connect=new PDO('mysql:dbname=PhotoEntry;localhost','root', 'root');

}
catch(PDOException $e){
  echo 'CONNECTION FAILED: '.$e->getMessage();
}
$id=$_POST['personId'];
  $stmt = $connect->prepare("DELETE FROM snap WHERE userId='".$id."'");
  if ($stmt->execute()) {
    $stmt2 = $connect->prepare("UPDATE utente SET SpeedEntry=0 WHERE persistedId='".$id."'");
      if ($stmt2->execute())
        echo 'Well done!';
        else

          print_r($stmt2->errorInfo());

  }
  else {

    print_r($stmt->errorInfo());
  }
 ?>

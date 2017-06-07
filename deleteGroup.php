<?php
try{
  $connect=new PDO('mysql:dbname=PhotoEntry;localhost','root', 'root');

}
catch(PDOException $e){
  echo 'CONNECTION FAILED: '.$e->getMessage();
}

  $stmt = $connect->prepare("DELETE FROM snap WHERE userId IN (SELECT persistedId FROM utente WHERE groupId='".$_POST['groupId']."')");
  if ($stmt->execute()) {
    $stmt2 = $connect->prepare("UPDATE utente SET SpeedEntry=0 WHERE groupId='".$_POST['groupId']."'");
      if ($stmt2->execute())
        echo 'Well done!';
        else

          print_r($stmt2->errorInfo());

  }
  else {

    print_r($stmt->errorInfo());
  }
 ?>

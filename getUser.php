<?php
try{
  $connect=new PDO('mysql:dbname=PhotoEntry;localhost','root', 'root');

}
catch(PDOException $e){
  echo 'CONNECTION FAILED: '.$e->getMessage();
}
  $stmt = $connect->prepare("SELECT email FROM utente WHERE persistedId='".$_POST['personId']."'");
  if ($stmt->execute()) {
  //  header('Content-Type: application/json');
      echo json_encode($stmt->fetchAll());


  }
  else {

    print_r($stmt->errorInfo());
  }
 ?>

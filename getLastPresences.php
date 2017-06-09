<?php
try{
  $connect=new PDO('mysql:dbname=PhotoEntry;localhost','root', 'root');

}
catch(PDOException $e){
  echo 'CONNECTION FAILED: '.$e->getMessage();
}
  $stmt = $connect->prepare("SELECT azione, data_ora FROM presenza INNER JOIN utente ON utente.persistedId=presenza.persistedId  WHERE presenza.persistedId='".$_POST['personId']."' AND DATE(presenza.data_ora)= CURRENT_DATE ORDER BY data_ora DESC");
  if ($stmt->execute()) {
  //  header('Content-Type: application/json');
      echo json_encode($stmt->fetchAll());


  }
  else {

    print_r($stmt->errorInfo());
  }
 ?>

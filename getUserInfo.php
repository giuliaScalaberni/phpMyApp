<?php
  try{
      $connect=new PDO('mysql:dbname=PhotoEntry;localhost','root', 'root');
  }
  catch (PDOException $e)
  {
    echo $e.getMessage();
  }
  $stmt = $connect->prepare("SELECT * FROM utente WHERE email='".$_POST['email']."' AND SpeedEntry=1");
  if ($stmt->execute()) {
  //  header('Content-Type: application/json');
      echo json_encode($stmt->fetchAll());


  }
  else {

    print_r($stmt->errorInfo());
  }

 ?>

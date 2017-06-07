<?php
try{
  $connect=new PDO('mysql:dbname=PhotoEntry;localhost','root', 'root');

}
catch(PDOException $e){
  echo 'CONNECTION FAILED: '.$e->getMessage();
}
  $stmt = $connect->prepare("DELETE FROM snap WHERE faceId='".$_POST['faceId']."'");
  if ($stmt->execute())

        echo 'Well done!';
        else

          print_r($stmt2->errorInfo());


 ?>

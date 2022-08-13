<?php
try{
$conn = new PDO("mysql:host=localhost;dbname=form", 'root', 'root');
  $query = "INSERT INTO info VALUES (NULL , :name , :email, :tel )";
  $msg = $conn->prepare($query);
  $msg->execute(['name' => $_POST['name'], 'email' => $_POST['email'], 'tel' => $_POST['tel']]);
   header("Location: index.php");
}
catch (PDOException $e)
{
   echo "error" .$e->getMEssage();
}
?>


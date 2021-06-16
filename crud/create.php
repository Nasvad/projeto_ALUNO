<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname   = "projeto_aluno";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO aluno (nomeAluno, nota1, nota2)
  VALUES ('Maria', '8.4', '6.6')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Aluno cadastrado com sucesso!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
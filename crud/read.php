<?php



//LOCAL
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname   = "projeto_aluno";

//HEROKU
$servername = "xlf3ljx3beaucz9x.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "qhk1cyx98g8k22id";
$password = "zgffr5qudwurqol1";
$dbname   = "d5ppxxl81au16tva";
  

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM users");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt->fetchAll() as $k=>$v) {
    echo '<tr>';
    echo '<td>'.$v['id'].'</td>';
    echo '<td>'.$v['nomeAluno'].'</td>';
    echo '<td>'.$v['nota1'].'</td>';
    echo '<td>'.$v['nota2'].'</td>';
    echo 
    '<td> 


      <a class="btn btn-outline-danger" href="crud/delete.php?id='. $v['id']. '" >   <i class="far fa-trash-alt"></i>    </a> 




      <a class="btn btn-outline-primary" href="#" >   <i class="far fa-edit"></i>        </a>   
    </td>';
    echo '</tr>';
  }
} 
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
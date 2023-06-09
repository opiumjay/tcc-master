<?php 


require_once 'conectaBanco.php';

if (!empty($_POST)) {
if ($_POST['tipo'] == null){    header("Location: criar_classificacao.php");} else{
  try {

    $tipo = $_POST['tipo'];
    $valuer = 1;


    $sql = "SELECT idtipo FROM tipo";
    $stmt = $pdo->query($sql);
    $result = $stmt->fetchAll();

    foreach ($result as $row) {
      $valuer = $valuer + 1;
            }

           
            $sql = "INSERT INTO tipo (idtipo,tipo) VALUES (:valuer,:tipo)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(':tipo'=>$tipo,':valuer'=>$valuer));

    header("Location: criar_classificacao.php");

    
} catch (PDOException $e) {    echo 'deu ruim';
    echo $e->getMessage();
    echo $e->getCode();
}}
}
else {

  header("Location: index.html?msgErro=Erro de acesso.");
}
?>
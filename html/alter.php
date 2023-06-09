<?php 
                    require_once 'conectaBanco.php';
                    
                if (isset($_POST['cor'])) {
                $cor = $_POST['cor'];
                $idcor = $_POST['idcor'];

                $sql = "UPDATE cor SET hex = :cor, idcor = :idcor WHERE idcor=:idcor;";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(':cor'=>$cor,':idcor'=>$idcor));

                header("Location: cores_cadastradas.php");

                }
                if (isset($_POST['categoria'])) {
			    $categoria = $_POST['categoria'];
			    $idcategoria = $_POST['idcategoria'];

                $sql = "UPDATE categoria SET categoria = :categoria, idcategoria = :idcategoria  WHERE idcategoria=:idcategoria;";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(':categoria'=>$categoria,':idcategoria'=>$idcategoria));

                header("Location: categorias_cadastradas.php");

                }

                if (isset($_POST['formato'])) {
			    $formato = $_POST['formato'];
                $idformato = $_POST['idformato'];

                $sql = "UPDATE formato SET formato = :formato, idformato = :idformato  WHERE idformato=:idformato;";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(':formato'=>$formato,':idformato'=>$idformato));

                header("Location: formatos_cadastrados.php");

                }

                if (isset($_POST['tipo'])) {
                    $tipo = $_POST['tipo'];
                    $idtipo = $_POST['idtipo'];
    
                    $sql = "UPDATE tipo SET tipo = :tipo, idtipo = :idtipo  WHERE idtipo=:idtipo;";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(array(':tipo'=>$tipo,':idtipo'=>$idtipo));
    
                    header("Location: tipos_cadastrados.php");
    
                    }

                    
                    
                    ?>
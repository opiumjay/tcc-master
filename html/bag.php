<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!--fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

    <!--propriedades css-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/btnPopUp.css">
    <link rel="stylesheet" href="../css/popUpContent.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/acervo.css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">

    <style>
        .button {
            color: var(--bs-white);
            background-color: #303030;
        }

        .card-select {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
            margin-bottom: 10px;
            font-size: 15px;
        }
    </style>

</head>

<body style="background-color: #1C1C1C; font-family: 'Quicksand', sans-serif; position: relative;">
    <!--links js off e online-->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>

    <!--popper js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
        integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i"
        crossorigin="anonymous"></script>

    <!--funções que abre e fecha o pop up-->
    <script>
        function showPopup() {
            var popup = document.getElementById("popup");
            popup.style.display = "flex";
        }
    </script>

    <script>
        function hidePopup() {
            var popup = document.getElementById("popup");
            popup.style.display = "none";
        }
    </script>

    <!--! navbar -->
    <nav class="navbar navbar-dark" style="background-color: #000000;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="../img/navbar/back.png" alt="Bootstrap" width="25" height="25">
            </a>
            <a class="navbar-brand" style="margin-left: 1rem; font-size: 20px; color: #F7F7F7;">Meu Acervo</a>
            <a class="navbar-brand" data-bs-toggle="modal" data-bs-target="#filtroacervo">
                <img src="../img/navbar/filtro.png" alt="Bootstrap" width="30" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--menu-->
            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header" style="background-color: #000000;">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" style="background-color: #303030;">
                    <div class="d-grid" style="place-items: center;">
                        <div class="userPic">
                            <img style="width: 30%;" src="../img/menu_dark/perfil.png">
                            <h1 style="margin-top: 5%; color: #e7e7e7;">Username</h1>
                        </div>
                        <div class="menu">
                            <ul>
                                <li>
                                    <a href="index.html">
                                        <img class="btnAcervo" src="../img/menu_dark/home.png"
                                            alt="Ícone da opção acervo">Home
                                    </a>
                                </li>
                                <li>
                                    <a href="testeopt.html">
                                        <img class="btnRandom" src="../img/menu_dark/shuffle-arrows.png"
                                            alt="Ícone da opção acervo">Random
                                    </a>
                                </li>
                                <li>
                                    <a href="testeopt.html">
                                        <img class="btnBackup" src="../img/menu_dark/copia-de-seguranca.png"
                                            alt="Ícone da opção acervo">Backup
                                    </a>
                                </li>
                                <li>
                                    <a href="testeopt.html">
                                        <img class="btnConfig" src="../img/menu_dark/config.png"
                                            alt="Ícone da opção acervo">Configurações
                                    </a>
                                </li>
                                <li>
                                    <a href="testeopt.html">
                                        <img class="btnInfo" src="../img/menu_dark/informacoes.png"
                                            alt="Ícone da opção acervo">Informações do Aplicativo
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!--div principal-->
    <div style="margin-top: 5%; padding: 2%;">

        <!-- Modal -->
        <div class="modal fade" id="filtroacervo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-dark text-bg-dark border border-dark">
                    <div class="modal-header bg-dark text-bg-dark border border-dark" style="margin-bottom: -4%;">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Filtro</h1>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <!--divisor-->
                    <hr class="border border-secondary border-1 opacity-25">

                    <form action="filtroA.php" method="post" enctype="multipart/form-data">

                        <!-- div corpo do filtro -->
                        <div class="modal-body d-block justify-content-center align-content-center p-2">



                        
                            <!-- div select de tipo -->
                            <div class="d-flex">
                                <select id="tipo" name="tipo"
                                    class="form-select card-select focus-ring focus-ring-danger text-decoration-none rounded-2 border-0"
                                    aria-label="Default select example">
                                    <option selected="nullTipo" value="null">Selecione o tipo</option>
                                    <?php

require_once 'conectaBanco.php';

$sql = "SELECT * FROM tipo order by idtipo";
$stmt = $pdo->query($sql)->fetchAll();
foreach ($stmt as $row) { ?>
                                    <option value="<?php echo $row['tipo']; ?>"><?php echo $row['tipo']; ?></option><?php } ?>
                                </select>
                            </div>



                            <!-- div select de categoria -->
                            <div class="d-flex justify-content-center">
                                <select id="categoria" name="categoria"
                                    class="form-select card-select focus-ring focus-ring-danger text-decoration-none rounded-2 border-0"
                                    aria-label="Default select example">
                                    <option selected="nullCategoria" value="null">Selecione a categoria</option>
                                    <?php  $sql = "SELECT * FROM tipo order by idtipo";
                                $stmt = $pdo->query($sql)->fetchAll();
              
                                foreach ($stmt as $row) { 
 ?>    
                                    <optgroup label="<?php echo $row['tipo']; ?>">
                                    <?php $idtipo = $row['idtipo'];
                                    $sql = "SELECT * FROM categoria where idtipo = $idtipo";
                                    $stmt = $pdo->query($sql)->fetchAll();
                                foreach ($stmt as $row) { 
                                   ?> <option value="<?php echo $row['categoria']; ?>"><?php echo $row['categoria']; ?></option><?php }
 ?> 

                                    </optgroup>
<?php }?>
                                 
                                    <br>
                                </select>
                            </div>

                            <!-- div select de formato -->
                            <div class="d-flex">
                                <select id="formato" name="formato"
                                    class="form-select card-select focus-ring focus-ring-danger text-decoration-none rounded-2 border-0"
                                    aria-label="Default select example">
                                    <option selected="nullFormato" value="null">Selecione o formato</option>
                                    <?php  $sql = "SELECT * FROM formato order by idformato";
                                $stmt = $pdo->query($sql)->fetchAll();
              
                                foreach ($stmt as $row) { ?>
                                    <option value="<?php echo $row['formato']; ?>"><?php echo $row['formato']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <!-- div select de cor -->
                            <div class="d-flex">
                                <select id="cor" name="cor"
                                    class="form-select card-select focus-ring focus-ring-danger text-decoration-none rounded-2 border-0"
                                    aria-label="Default select example">
                                    <option selected="nullCor" value="null">Selecione a cor</option>
                                    <?php  $sql = "SELECT * FROM cor order by idcor";
                                $stmt = $pdo->query($sql)->fetchAll();
              
                                foreach ($stmt as $row) { ?>
                                    <option value="<?php echo $row['hex']; ?>"style="background-color:<?php echo $row['hex']; ?> ;"></option>
                                    <?php } ?>
                                </select>
                            </div>

                        </div>

                        <!--divisor-->
                        <hr class="border border-secondary border-1 opacity-25">

                        <div class="d-flex justify-content-end" style="padding: 5%; margin-top: -4%;">
                            <button style="margin-right: 4%;" type="button" class="btn btn-outline-danger"
                                data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-light">Aplicar Filtros</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- div que porta todo o grid-->
        <div class="grid-container">



		<?php 

require_once 'conectaBanco.php';
            try {


                
                $sql = "SELECT idprincipal FROM principal where tipo = 4";
                $stmt = $pdo->query($sql)->fetchAll();

                foreach ($stmt as $row) {
					$passerby = $row['idprincipal'];
					$sql = "SELECT * FROM imagem where idprincipal=$passerby";
					$stmt = $pdo->query($sql)->fetchAll();
					?>
					<?php
					foreach ($stmt as $row) {
				?><img src=" <?php echo $row['imagem'] ?>"> <?php }}
                    
			   /* if ($categoria=='null') {

	            $sql = "SELECT idformato FROM formato where formato= :formato";
	            $stmt = $pdo->prepare($sql);
	            $stmt->execute(array(':formato'=>$formato));
	            $result = $stmt->fetchAll();
	            $twotrue = $result[0]['idformato'];


			    $sql = "SELECT idprincipal FROM principal where formato=$twotrue";
			    $stmt = $pdo->query($sql);
			    $result = $stmt->fetchAll();

                foreach ($result as $row) {
					$passerby = $row['idprincipal'];
					$sql = "SELECT * FROM imagem where idprincipal=$passerby";
					$stmt = $pdo->query($sql)->fetchAll();
					?>
					<?php
					foreach ($stmt as $row) {
						?><img src=" <?php echo $row['imagem'] ?>"> <?php }

                }



			    }else{if ($formato=='null'){

			    $sql = "SELECT idcategoria FROM categoria where categoria = :categoria";
	            $stmt = $pdo->prepare($sql);
	            $stmt->execute(array(':categoria'=>$categoria));
	            $result = $stmt->fetchAll();
	            $onetrue = $result[0]['idcategoria'];
	            

			    $sql = "SELECT idprincipal FROM principal where categoria=$onetrue";
			    $stmt = $pdo->query($sql);
			    $result = $stmt->fetchAll();

                foreach ($result as $row) {
					$passerby = $row['idprincipal'];
					$sql = "SELECT * FROM imagem where idprincipal=$passerby";
					$stmt = $pdo->query($sql)->fetchAll();
					?>
					<?php
					foreach ($stmt as $row) {
						?><img src=" <?php echo $row['imagem'] ?>"> <?php }

                }




			    }else{

			    $sql = "SELECT idcategoria FROM categoria where categoria = :categoria";
	            $stmt = $pdo->prepare($sql);
	            $stmt->execute(array(':categoria'=>$categoria));
	            $result = $stmt->fetchAll();
	            $onetrue = $result[0]['idcategoria'];
	            

	            $sql = "SELECT idformato FROM formato where formato= :formato";
	            $stmt = $pdo->prepare($sql);
	            $stmt->execute(array(':formato'=>$formato));
	            $result = $stmt->fetchAll();
	            $twotrue = $result[0]['idformato'];

			    $sql = "SELECT idprincipal FROM principal where formato=$twotrue and categoria=$onetrue";
			    $stmt = $pdo->query($sql);
			    $result = $stmt->fetchAll();

                foreach ($result as $row) {
					$passerby = $row['idprincipal'];
					$sql = "SELECT * FROM imagem where idprincipal=$passerby";
					$stmt = $pdo->query($sql)->fetchAll();
					?>
					<?php
					foreach ($stmt as $row) {
						?><img src=" <?php echo $row['imagem'] ?>"> <?php }

                }







			    }}*/} catch (PDOException $e) {

            } 

?>
        </div>

        <!--! botão add peça -->
        <div class="circle" onclick="showPopup()">
            <div class="cross">
            </div>
        </div>

         <!--! pop up add peça -->
         <div id="popup" class="popup" style="margin-top: 85%;">
            <div class="popup-content">
                <form action="cadastroP.php" method="post" enctype="multipart/form-data">

                    <select id="categoria" name="categoria">
                    <?php  $sql = "SELECT * FROM tipo order by idtipo";
                                $stmt = $pdo->query($sql)->fetchAll();
              
                                foreach ($stmt as $row) { 
 ?>    
                                    <optgroup label="<?php echo $row['tipo']; ?>">
                                    <?php $idtipo = $row['idtipo'];
                                    $sql = "SELECT * FROM categoria where idtipo = $idtipo";
                                    $stmt = $pdo->query($sql)->fetchAll();
                                foreach ($stmt as $row) { 
                                   ?> <option value="<?php echo $row['categoria']; ?>"><?php echo $row['categoria']; ?></option><?php }
 ?> 

                                    </optgroup>
<?php }?>
                    </select>


                    <select id="formato" name="formato">
                    <?php  $sql = "SELECT * FROM formato order by idformato";
                                $stmt = $pdo->query($sql)->fetchAll();
              
                                foreach ($stmt as $row) { ?>
                                    <option value="<?php echo $row['formato']; ?>"><?php echo $row['formato']; ?></option>
                                    <?php } ?>
                    </select>
                    <br>
                    <select id="tipo" name="tipo">
                        <option selected="nullTipo">Tipo</option>
                        <option value="tipo1">Tipo1</option>
                        <option value="tipo1">Tipo1</option>
                        <option value="tipo1">Tipo1</option>
                    </select>
                    <br>
                    <div>
                        <center><label style="color: #ffffff; font-size: 15px; margin-bottom: 5%; text-align: center;">
                                Selecione a cor primária da peça:</label>


                            <input type="color" class="form-control form-control-color" id="cor" name="cor"
                                value="#563d7c">
                        </center>
                    </div>

                    <div class="mb-3" style="margin-top: 10%;">
                        <input class="form-control form-control-sm input_file_popUp" name="fileToUpload"
                            id="fileToUpload" type="file">
                    </div>

                    <div style="display: flex; justify-content: flex-start; margin-top: 5%;">
                        <button type="button" onclick="hidePopup()">Voltar</button>
                        <button type="submit">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>
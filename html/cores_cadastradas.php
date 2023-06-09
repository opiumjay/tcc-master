<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">

    <!--fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

    <!--propriedades css-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/btnPopUp.css">
    <link rel="stylesheet" href="../css/popUpContent.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">

    <style>
        h3 {
            color: var(--text);
            font-size: 20px;
            font-family: 'Quicksand', sans-serif;
        }
    </style>

</head>

<body style="background-color: #1C1C1C; font-family: 'Quicksand', sans-serif; position: relative;">
    <!--links js off e online-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

    <!--popper js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
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

    <!--mdando a cor do texto da input text-->
    <script>
        function mudarCorTexto() {
            var input = document.getElementById('meuInput');
            input.style.color = 'blue';
        }
    </script>

    <!--! navbar -->
    <nav class="navbar navbar-dark" style="background-color: #000000;">
        <div class="container-fluid">
            <a class="" href="criar_classificacao.html">
                <img src="../img/navbar/back.png" alt="Bootstrap" width="25" height="25">
            </a>
            <a class="navbar-brand" style="margin-left: 1rem; font-size: 20px;">Cores Cadastradas</a>
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
                                    <a href="acervo.php">
                                        <img class="btnAcervo" src="../img/menu_dark/layout.png"
                                            alt="Ícone da opção acervo">Acervo
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
                                    <a href="infoapp.html">
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

    <!--div main-->
    <div class="d-block table-responsive" style="margin: 5%;">
        <table class="table table-responsive align-middle" style="color: #e7e7e7;">
            <tbody>
                <tr>

                <?php 
                    
                    require_once 'conectaBanco.php';
                    
					$sql = "SELECT * FROM cor order by idcor";
					$stmt = $pdo->query($sql)->fetchAll();
					?>
					<?php
					foreach ($stmt as $row) {?>
                    

               


    <form action="alterar_cor.php" method="post" enctype="multipart/form-data">

                    <th scope="row"><?php echo $row['idcor'] ?></th>
                    <td class="text-break text-center">
                        <input type="color" class="form-control form-control-color bg-dark border border-dark"
                            id="exampleColorInput" value="<?php echo $row['hex'] ?>" style="margin-top: -3%;" disabled name="core">
                        <input type="color" value="<?php echo $row['hex'] ?>" style="margin-top: -3%;"  name="cor" hidden>
                        <input type="text" value="<?php echo $row['idcor'] ?>" style="margin-top: -3%;"  name="idcor" hidden>
                    </td>
                    <td>
                        <p style="margin-top: 1rem;"><?php echo $row['hex'] ?></p>
                    </td>
                    <td>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-outline-warning"
                                style="--bs-btn-padding-y: .30rem; --bs-btn-padding-x: .50rem; --bs-btn-font-size: .90rem; margin-right: 4%;">
                                Alterar
                            </button>
                        </form>

                        <form action="delete.php" method="post" enctype="multipart/form-data">
                        <input type="color" value="<?php echo $row['hex'] ?>" style="margin-top: -3%;"  name="cor" hidden>
                        <input type="text" value="<?php echo $row['idcor'] ?>" style="margin-top: -3%;"  name="idcor" hidden>

                            <button type="submit" class="btn btn-outline-danger"
                                style="--bs-btn-padding-y: .30rem; --bs-btn-padding-x: .50rem; --bs-btn-font-size: .90rem;">
                                Excluir
                            </button>
                        </form>
                        </div>
                    </td>
                </tr>
                   <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>
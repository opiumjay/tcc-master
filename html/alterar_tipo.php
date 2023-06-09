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

        h5 {
            margin-top: 2%;
            margin-bottom: -4%;
            font-size: 18px;
        }

        .card {
            margin-bottom: 5%;
            background-color: #000000;
            color: #e7e7e7;
        }

        .form-text {
            color: #e7e7e7;
            margin-bottom: 5%;
            margin-top: 3%;
            opacity: 75%;
        }

        .card-body {
            margin-top: -5%;
        }

        .input-text::placeholder {
            color: #e7e7e7;
            opacity: 50%;
        }

        .input-text {
            color: #e7e7e7;
            opacity: 80%;
        }

        .button {
            color: var(--bs-white);
            background-color: #303030;
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
            <a href="formatos_cadastrados.php">
                <img src="../img/navbar/back.png" alt="Bootstrap" width="25" height="25">
            </a>
            <a class="navbar-brand" style="margin-right: 0; font-size: 20px;">Alterar Tipo</a>
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
    <form action="alter.php" method="post" enctype="multipart/form-data">
    <?php
                    
                    require_once 'conectaBanco.php';
                    $idformato = $_POST['idformato'];
					$sql = "SELECT * FROM formato where idformato= $idformato";
					$stmt = $pdo->query($sql)->fetchAll();
					?>
    <!--div main-->
    <div class="d-block" style="margin: 5%;">
        <div class="card text-center">
            <div class="card-header">
                <h5 style="margin-top: 2%; margin-bottom: -4%;"><?php echo $stmt[0]['formato'] ?></h5>
            </div>

            <!--divisor-->
            <hr class="border border-secondary border-1 opacity-25">

            <div class="card-body">
                <input type="text" id="input-nome-categoria-nova"
                    class="form-control text-bg-dark p-3 input-text focus-ring focus-ring-secondary text-decoration-none rounded-2"
                    style="background-color: #303030; border-color: #303030;" name="formato" placeholder="<?php echo $stmt[0]['formato'] ?>">
                    <input type="text" value="<?php echo $stmt[0]['idformato'] ?>" style="margin-top: -3%;"  name="idformato" hidden>
                <div id="passwordHelpBlock" class="form-text">
                    <p style="font-size: 13px;">O nome do formato novo deve continuar simples.</p>
                </div>
                <div class="d-flex justify-content-center p-2">
                    <a href="categorias_cadastradas.php" class="btn button"
                        style="--bs-btn-padding-y: .50rem; --bs-btn-padding-x: 1rem; --bs-btn-font-size: 1rem;">
                        Cancelar
                    </a>
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        style="--bs-btn-padding-y: .50rem; --bs-btn-padding-x: 1rem; --bs-btn-font-size: 1rem; margin-left: 4%;">
                        Alterar
                    </button>
                </div>
            </div>
        </div>
        <!-- modal de confirmação -->
        <div class="modal fade" id="exampleModal" tabindex="-1" style="margin-top: 50%; padding: 10%;"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Alterar Cadastro?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer d-flex justify-content-center p-2">
                        <button type="button" class="btn button" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-warning">Salvar Alterações</button>
                    </div>
                </div>
            </div>
        </div>
        </form>

    </div>

</body>

</html>
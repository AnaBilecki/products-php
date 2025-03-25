<?php
    include_once("config/process.php");
    include_once("config/url.php");

    if (isset($_SESSION["msg"])) {
        $message = $_SESSION["msg"];
        $_SESSION["msg"] = "";
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toast = document.querySelector(".toast-container");

            if (toast) {
                toast.classList.add("show");

                setTimeout(() => {
                    toast.classList.remove("show");
                }, 3000);
            }
        });
    </script>
    
    <header>
        <div id="header-title">
            <img src="img/box.png" alt="Caixa"/>
            <h3>CONTROLE DE ESTOQUE</h3>
        </div>
        <a id="create-link" href="<?= $BASE_URL ?>/create.php">Cadastrar produto</a>
    </header>


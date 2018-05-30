<?php
function redirect()
{
    header('Location: dashboard');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Material Design Lite -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!--Link al file CSS -->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-blue.min.css" />
    <link rel="stylesheet" type="text/css" href="styleClass.css">

    <!--Link al file JS-->
    <script src="/../../js/classi.js"></script>
    <script src="../../js/funzioni.js"></script>


    <title><?php echo $nomesito ?></title>

</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row header-style">
            <!-- Assegnazione titolo dinamica -->
            <span class="mdl-layout-title"><?php echo $nomesito ?></span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="dashboard">
                    <button id="bt1" class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">dashboard</i>
                    </button>
                    <div class="mdl-tooltip" data-mdl-for="bt1">
                        Dashboard
                    </div>
                </a>
<!--                <a class="mdl-navigation__link" onclick="logOut()">
                    <button id="bt2" class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">exit_to_app</i>
                    </button>
                    <div class="mdl-tooltip" data-mdl-for="bt2">
                        Logout
                    </div>
                </a>
-->            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <div class="nav-md">
            <span class="mdl-layout-title" style="text-align: center; margin-top: 20px">Apertamente</span>
        </div>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="listaEsercenti"><i class="material-icons md-ip">list</i> Lista
                Esercenti</a>
            <a class="mdl-navigation__link" href="listaQuestionari"><i class="material-icons md-ip">list</i>
                Lista Questionari</a>
            <a class="mdl-navigation__link" href="aggiungiEsercente"><i class="material-icons md-ip">person</i>
                Aggiungi Esercente</a>
            <div class="mdl-layout-spacer"></div>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <div class="page-content">
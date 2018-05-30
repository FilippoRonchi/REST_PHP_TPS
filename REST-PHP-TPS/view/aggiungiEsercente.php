<!DOCTYPE html>
<?php
function visualizzaAggiungiEsercente() {
$nomesito = "Aggiungi esercente";
include("parcials/header.php");
?>

<!--inizio aggiungiEsercente-->

<style>

    .topcard {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .demo-card-wide.mdl-card {
        width: 650px;
        margin: 10% auto;
    }

    .demo-card-wide > .mdl-card__title {
        color: #fff;
        background-color: rgb(63, 81, 181);
    }

    .mdl-textfield {
        position: relative;
        font-size: 16px;
        display: inline-block;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding: 20px 0;
    }

    .mdl-card__supporting-text {
        color: rgba(0, 0, 0, .54);
        font-size: 1rem;
        line-height: 18px;
        overflow: hidden;
        padding: 16px;
        width: auto;
    }

    .spc {
        padding: 0 6px 0 0;
    }

    .ftm {
        padding: 0;
        margin: 0;
    }

    .mdl-button.mdl-button--colored {
        color: white;
        margin: auto;
    }

    .mdl-button {
        color: white;
        font-family: "Roboto", "Helvetica", "Arial", sans-serif;
        font-size: 18px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0;
        cursor: pointer;
        text-align: center;
        line-height: 36px;
    }

    .gr {
        color: grey;
        font-size: 28px;
    }

    .pr {
        display: block;
    }

    .mdl-button--icon .material-icons {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-14px, -14px);
        transform: translate(-14px, -14px);
        line-height: 28px;
        width: 28px;
    }

    .mdl-button--fab.mdl-button--colored:hover {
        background-color: rgba(63, 81, 181, .8);
    }

    .mdl-button--fab.mdl-button--colored {
        background: rgb(63, 81, 181);
        color: rgb(255, 255, 255);
    }
</style>

<script type="text/javascript" src="/js/aggEsScript.js"></script>

<div class="demo-card-wide mdl-card mdl-shadow--2dp">

    <div id="topcard" class="mdl-card__title" style="height: 200px;">
        <h2 class="mdl-card__title-text">Aggiungi un nuovo esercente</h2>
    </div>
    <div class="mdl-card__supporting-text">

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="nome">
            <label class="mdl-textfield__label" for="nome">Nome azienda</label>
        </div>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="email" id="email">
            <label class="mdl-textfield__label" for="email">Email</label>
        </div>

        <input type="file" id="file" onchange="uploadImg()" accept=".jpg, .jpeg, .png" style="display: none;">
        <label for="file" id="uploadfile"
               class="pr mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
            <i class="material-icons">file_upload</i>
        </label>
        <!--<label for="file" id="uploadfile" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect pr">
            <i class="material-icons">file_upload</i>
        </label>-->

        <div class="mdl-tooltip" for="uploadfile">
            Seleziona un'immagine da assegnare
        </div>
    </div>
    <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Punti vendita</h2>
    </div>
    <div class="mdl-card__supporting-text">
        <ul id="unli" class="demo-list-control mdl-list ftm">
            <li class="mdl-list__item ftm">
                <span class="mdl-list__item-primary-content spc">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="puntovendita0">
                        <label class="mdl-textfield__label" for="puntovendita0">Nuovo punto vendita...</label>
                    </div>
                </span>
                <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect"
                   onclick="cancellaOpzione(this)">
                    <i class="material-icons gr">delete</i>
                </a>
            </li>
        </ul>
        <button id="addopt" class="pr mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored"
                onclick="aggiungiOpzione(this)">
            <i class="material-icons">add</i>
        </button>
        <div class="mdl-tooltip" for="addopt">
            Aggiungi punto vendita
        </div>
    </div>
    <div class="mdl-card__title">
        <button id="demo-show-toast" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="margin: auto;"
                onclick="aggiungiEsercente()">
            aggiungi esercente
        </button>
    </div>
</div>
<div id="demo-snackbar-example" class="mdl-js-snackbar mdl-snackbar">
    <div class="mdl-snackbar__text"></div>
    <button class="mdl-snackbar__action" type="button"></button>
</div>
<!--fine aggiungiEsercente-->
<?php
include("parcials/footer.php");

} ?>


<?php
function visualizzaDashboard($r, $r2){
?>
    <?php

    $nomesito = "Dashboard";

    include("parcials/header.php");
    ?>

    <!--Inizio dashboardApertamente-->

    <style>

        .demo-card-wide > .mdl-card__title {
            color: #fff;
            background-color: rgb(63, 81, 181);
        }

        .demo-card-wide.mdl-card {
            width: 512px;
            margin: auto;
        }

        .dashboard {
            display: flex;
            margin: 10% auto;
        }

        .demo-list-two {
            width: auto;
            margin: 0;
            padding: 0;
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

        .mdl-list__item-avatar, .mdl-list__item-avatar.material-icons {
            height: 40px;
            width: 40px;
            box-sizing: border-box;
            border-radius: 0;
            background-color: transparent;
            font-size: 40px;
            color: grey;
        }

        .mdl-card__supporting-text {
            color: rgba(0, 0, 0, .54);
            font-size: 1rem;
            line-height: 18px;
            overflow: hidden;
            padding: 16px 0;
            width: auto;
        }

        .mdl-list__item {
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-size: 16px;
            font-weight: 400;
            letter-spacing: .04em;
            line-height: 1;
            min-height: 48px;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-wrap: nowrap;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            padding: 16px 32px;
            cursor: default;
            color: rgba(0, 0, 0, .87);
            overflow: hidden;
        }

        li.questlist:hover {
            background-color: rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .emptylist{
            margin: 16px;
            font-size: large;
        }

    </style>

    <div class="dashboard">

        <!--Card per grafici sommativi-->
<!--        <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="margin-right: 5%;">
            <div class="mdl-card__title" style="height: 150px;">
                <h2 class="mdl-card__title-text">Grafici sommativi</h2>
            </div>
            <div class="mdl-card__supporting-text" style="padding: 12px;">

                <canvas id="myChart" width="800" height="800"></canvas>
                <script>
                    var ctx = document.getElementById("myChart").getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ["Lunedì", "Martedì", "Mercoledì", "Giovedì", "Venerdì", "Sabato", "Domenica"],
                            datasets: [{
                                label: 'questionari per giorno',
                                data: [9, 7, 11, 3, 5, 2, 3],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(190, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255,99,132,1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)',
                                    'rgba(190, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                </script>

            </div>

        </div>-->

        <!--Card per questionari (ordinati per numero questionario)-->
        <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="margin-left: 5%;">
            <div class="mdl-card__title" style="height: 150px;">
                <h3 class="mdl-card__title-text">Esercente<br>(Questionario Esercente)</h3>
            </div>
            <div class="mdl-card__supporting-text">

                <ul class="demo-list-two mdl-list">

                    <?php


                    if ($r == null) {
                        echo '<div class="emptylist">Lista vuota!</div>';
                    } else {
                        foreach ($r as $esercente) {
                            echo '<li class="mdl-list__item mdl-list__item--two-line questlist"
                    <!--onclick="location.href = \'grafici.php?id=' . $esercente['id_questionario'] . '\'
                    >"-->
                        <span class="mdl-list__item-primary-content">
                            <i class="material-icons mdl-list__item-avatar">assignment</i>
                            <span>' . $esercente['admin'] . '</span>
                            <span class="mdl-list__item-sub-title">' . $esercente['id_questionario'] . '</span>
                        </span>
                        <span class="mdl-list__item-secondary-content">
                            <div class="mdl-list__item-secondary-action"><i class="material-icons gr">keyboard_arrow_right</i></div>
                        </span>
                </li>';
                        }

                    }

                    ?>

                </ul>

            </div>

            <div class="mdl-card__title">
                <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="listaQuestionari"
                   style="margin: auto;">
                    maggiori informazioni sui questionari
                </a>
            </div>

        </div>

        <!--Card per questionari (ordinati per numero questionario)-->


        <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="margin-right: 5%; margin-top: initial ">
            <div class="mdl-card__title" style="height: 150px;">
                <h3 class="mdl-card__title-text">Lista Esercenti</h3>
            </div>
            <div class="mdl-card__supporting-text">

                <ul class="demo-list-two mdl-list">

                    <?php


                    if ($r2 == null) {
                        echo '<div class="emptylist">Lista vuota!</div>';
                    } else {
                        foreach ($r2 as $esercente) {
                            echo '<li class="mdl-list__item mdl-list__item--two-line questlist"
                        <span class="mdl-list__item-primary-content">
                            <i class="material-icons mdl-list__item-avatar">assignment</i>
                            <span>' . $esercente['nome'] . '</span>
                        </span>
                        <span class="mdl-list__item-secondary-content">
                            <div class="mdl-list__item-secondary-action"><i class="material-icons gr">keyboard_arrow_right</i></div>
                        </span>
                </li>';
                        }

                    }

                    ?>

                </ul>

            </div>

            <div class="mdl-card__title">
                <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="listaEsercenti"
                   style="margin: auto;">
                    maggiori informazioni sugli esercenti
                </a>
            </div>

        </div>

    </div>

    <!--Fine dashboardApertamente-->

    <?php
    include("parcials/footer.php");
    ?>

<?php  }?>




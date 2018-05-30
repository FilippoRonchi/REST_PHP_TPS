<?php
function visualizzaQuestionari($r){?>
    <?php $nomesito = "Lista Questionari"; require __DIR__ . '/parcials/header.php'; ?>
    <style>
        table {
            width:80%;
            margin-left: auto;
            margin-right: auto;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: center;
        }
        table tr:nth-child(even) {
            background-color: #eee;
        }
        table tr:nth-child(odd) {
            background-color: #aba;
        }
        table th {
            background-color: rgb(63, 81, 181);
            color: white;
        }
    </style>
    <body>
    <h1 style="text-align: center">QUESTIONARI</h1>

    <table>
        <tr><th>ID_QUESTIONARIO</th><th>ID_AMMINISTRATORE</th><th>PUNTI</th><th>TEMPO_MAX</th><th>TEMPO_MIN</th><th>METODO_INVIO</th></tr>
        <?php while($row = mysqli_fetch_array($r,MYSQLI_ASSOC)) {
            echo "<tr><td>" . $row['id_questionario'] . "</td><td>" . $row['id_amministratore'] . "</td><td>" . $row['punti'] .
                "</td><td>" . $row['tempo_max'] . "</td><td>" . $row['tempo_min'] . "</td><td>" . $row['metodo_invio'] ."</td></tr>";
        }?>
    </table>
    </body>
    </html>
<?php  }?>
<?php
//modification
require __DIR__ . '/LocataireController.php';

if(!isset($_SESSION)){
    header("Location: views/login.php");
    die();
}
login();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <td>ID</td>
        <td>Nom</td>
        <td>Age</td>
        <td>Date d'entrée</td>
        <td>Date de sortie</td>
        <td>Adresse</td>
        <td>Reference précedente</td>
    </tr>
    <?php
    $result = readData();

    while( $obj = sqlsrv_fetch_object( $result )) {
        echo '<tr>';
        echo '<td>'.$obj->id.'</td>';
        echo '<td>'.$obj->nom.'</td>';
        echo '<td>'.$obj->age.'</td>';
        echo '<td>'.$obj->date_e->format('d-m-y').'</td>';
        echo '<td>'.$obj->date_s.'</td>';
        echo '<td></td>';
        echo '<td>'.$obj->reference_prec.'</td>';
          echo '</tr>';
    }

    ?>
</table>

</body>
</html>

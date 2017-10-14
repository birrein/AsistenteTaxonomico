<?php
include("connect.php");

$sql = "SELECT * FROM input_data WHERE 1";

if (isset($_GET['nivelOrganizacion']) && !empty($_GET['nivelOrganizacion'])) {
    $sql .= " AND nivel_organizacion = '".$_GET['nivelOrganizacion']."'";
}

$res = mysqli_query($db, $sql);

while ($r = mysqli_fetch_assoc($res)) {
    echo "<tr>
        <td>".$r["genero"]."</td>
        <td>".$r["familia"]."</td>
        <td>".$r["clase"]."</td>
        <td>".utf8_encode($r["tamanos_referenciales"])."</td>
        <td>".$r["nivel_organizacion"]."</td>
        <td>".utf8_encode($r["formas"])."</td>
        <td>".utf8_encode($r["forma_celula_caracter1"])."</td>
        <td>".utf8_encode($r["forma_celula_caracter2"])."</td>
        <td>".utf8_encode($r["forma_celula_caracter3"])."</td>
        <td>".utf8_encode($r["pared_celular_ornamentaciones"])."</td>
        <td>".utf8_encode($r["n_cloroplastos_forma"])."</td>
        <td>".utf8_encode($r["pirenoides"])."</td>
    </tr>";
}

 var_dump($_GET);
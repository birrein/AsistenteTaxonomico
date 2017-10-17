<?php
include("connect.php");

$sql = "SELECT * FROM input_data WHERE 1";

if (isset($_GET['nivelOrganizacion']) && !empty($_GET['nivelOrganizacion'])) {
    $sql .= " AND nivel_organizacion = '".$_GET['nivelOrganizacion']."'";
}
if (isset($_GET['formaCelula']) && !empty($_GET['formaCelula'])) {
    foreach ($_GET['formaCelula'] as $v) {
        $sql .= " AND forma_celula_caracter1 LIKE '%".utf8_decode($v)."%' ";
    }
}
if (isset($_GET['forma']) && !empty($_GET['forma'])) {
    foreach ($_GET['forma'] as $v) {
        $sql .= " AND formas LIKE '%".utf8_decode($v)."%' ";
    }
}
if (isset($_GET['paredCelularOrnamentaciones']) && !empty($_GET['paredCelularOrnamentaciones'])) {
    foreach ($_GET['paredCelularOrnamentaciones'] as $v) {
        $sql .= " AND pared_celular_ornamentaciones LIKE '%".utf8_decode($v)."%' ";
    }
}
echo $sql;
$res = mysqli_query($db, $sql);

while ($r = mysqli_fetch_assoc($res)) {
    echo '<tr>
        <td><a href="'.utf8_encode($r["foto"]).'" target="_blank"><img src="'.utf8_encode($r["foto"]).'" style="width:100px;"></a></td>
        <td>'.$r["genero"].'</td>
        <td>'.$r["familia"].'</td>
        <td>'.$r["clase"].'</td>
        <td>'.utf8_encode($r["tamanos_referenciales"]).'</td>
        <td>'.$r["nivel_organizacion"].'</td>
        <td>'.utf8_encode($r["formas"]).'</td>
        <td>'.utf8_encode($r["forma_celula_caracter1"]).'</td>
        <td>'.utf8_encode($r["forma_celula_caracter2"]).'</td>
        <td>'.utf8_encode($r["forma_celula_caracter3"]).'</td>
        <td>'.utf8_encode($r["pared_celular_ornamentaciones"]).'</td>
        <td>'.utf8_encode($r["n_cloroplastos_forma"]).'</td>
        <td>'.utf8_encode($r["pirenoides"]).'</td>
    </tr>';
}

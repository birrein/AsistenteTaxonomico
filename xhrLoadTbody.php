<?php
include("connect.php");

$sql = "SELECT * FROM input_data2 WHERE 1";

if (isset($_GET['clase']) && !empty($_GET['clase'])) {
    $sql .= " AND clase = '".$_GET['clase']."'";
}
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
$sql .= " ORDER BY genero ASC";
$res = mysqli_query($db, $sql);

while ($r = mysqli_fetch_assoc($res)) {
?>
    <div class="col-md-4 list-details">
        <div>
            <a href="javascript:void(0);" class="showAlgaeInfo" data-genero="<?=$r['genero']?>"><img src="images/fotos/<?=$r['genero']?>/thumbnail.jpg" alt="" class="img-responsive img-rounded"></a>
        </div>
        <div>
            <h4><a href="javascript:void(0);" class="showAlgaeInfo" data-genero="<?=$r['genero']?>"><?=$r['genero']?></a></h4>
        </div>
    </div>
<?php
}

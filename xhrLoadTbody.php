<?php
include("connect.php");

$sql = "SELECT * FROM input_data2 WHERE 1";

if (isset($_GET['clase']) && !empty($_GET['clase'])) {
    $sql .= " AND clase = '".$_GET['clase']."'";
}
if (isset($_GET['nivelOrganizacion']) && !empty($_GET['nivelOrganizacion'])) {
    $sql .= " AND nivel_organizacion = '".$_GET['nivelOrganizacion']."'";
}
if (isset($_GET['formaOrganizacion']) && !empty($_GET['formaOrganizacion'])) {
    $sql .= " AND (";
    foreach ($_GET['formaOrganizacion'] as $v) {
        $sql .= " forma_organizacion1 LIKE '%".utf8_decode($v)."%' OR forma_organizacion2 LIKE '%".utf8_decode($v)."%' OR";
    }
    $sql = rtrim($sql, 'OR');
    $sql .= ")";
}
if (isset($_GET['formaCelula']) && !empty($_GET['formaCelula'])) {
    $sql .= " AND (forma_celula_caracter1 LIKE '%".utf8_decode($_GET['formaCelula'])."%'
        OR forma_celula_caracter2 LIKE '%".utf8_decode($_GET['formaCelula'])."%'
        OR forma_celula_caracter3 LIKE '%".utf8_decode($_GET['formaCelula'])."%'
    )";
}
if (isset($_GET['paredCelular']) && !empty($_GET['paredCelular'])) {
    $sql .= " AND pared_celular = '".utf8_decode($_GET['paredCelular'])."'";
}
if (isset($_GET['paredCelularOrnamentaciones']) && !empty($_GET['paredCelularOrnamentaciones'])) {
    $sql .= " AND pared_celular_ornamentaciones = '".utf8_decode($_GET['paredCelularOrnamentaciones'])."'";
}
if (isset($_GET['cloroplastosN']) && !empty($_GET['cloroplastosN'])) {
    $sql .= " AND cloroplastos_n = '".utf8_decode($_GET['cloroplastosN'])."'";
}
if (isset($_GET['cloroplastosForma']) && !empty($_GET['cloroplastosForma'])) {
    $sql .= " AND cloroplastos_forma = '".utf8_decode($_GET['cloroplastosForma'])."'";
}
if (isset($_GET['pirenoides']) && !empty($_GET['pirenoides'])) {
    $sql .= " AND pirenoides = '".utf8_decode($_GET['pirenoides'])."'";
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

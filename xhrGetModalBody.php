<?php
include('class.algae.php');
$genero = $_GET['genero'];

$a         = Algae::getInfoByGenero($genero);
$fotos     = Algae::getFotos($genero);
$diagramas = Algae::getDiagramas($genero);
?>
<div>
    <strong>Genero:</strong> <?=$a['genero']?><br>
    <strong>Clase:</strong> <?=$a['clase']?><br>
    <strong>Nivel de organización:</strong> <?=$a['nivel_organizacion']?><br>
    <strong>Forma de la organización:</strong> <?=utf8_encode($a['forma_organizacion'])?><br>
    <strong>Forma de la célula:</strong> <?=utf8_encode($a['forma_celula'])?><br>
    <strong>Pared celular:</strong> <?=utf8_encode($a['pared_celular'])?><br>
    <strong>Ornamentaciones de la pared celular:</strong> <?=utf8_encode($a['pared_celular_ornamentaciones'])?><br>
    <strong>Número de cloroplastos:</strong> <?=utf8_encode($a['cloroplastos_n'])?><br>
    <strong>Forma de cloroplastos:</strong> <?=utf8_encode($a['cloroplastos_forma'])?><br>
    <strong>Pirenoides:</strong> <?=utf8_encode($a['pirenoides'])?><br>
</div>

<!-- diagramas -->
<div class="panel panel-default" style="margin-top:30px;">
    <div class="panel-heading">
        <h3 class="panel-title">Diagramas:</h3>
    </div>
    <div class="panel-body">
<?php
        echo '<div class="row">';
        foreach ($diagramas as $d) {
            echo '<div class="col-sm-3 diagramas" style="margin-bottom:15px;"><a href="javascript:void(0);" class="foto" data-imgsrc="'.$d.'"><img src="'.$d.'" class="img-responsive img-thumbnail"></a></div>';
        }
        echo '</div>';
        if (!empty($a['citas'])) {
            echo '<div><em>('.$a['citas'].'.)</em></div>';
        }
?>
    </div>
</div>

<!-- fotos -->
<div class="panel panel-default" style="margin-top:30px;">
    <div class="panel-heading">
        <h3 class="panel-title">Im&aacute;genes:</h3>
    </div>
    <div class="panel-body">
<?php
        echo '<div class="row">';
        foreach ($fotos as $f) {
            if (strpos($f, "thumbnail")) {
                continue;
            }
            echo '<div class="col-sm-3" style="margin-bottom:15px;"><a href="javascript:void(0);" class="foto" data-imgsrc="'.$f.'"><img src="'.$f.'" class="img-responsive img-thumbnail"></a></div>';
        }
        echo '</div>';
?>
    </div>
</div>
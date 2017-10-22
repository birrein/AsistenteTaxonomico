<?php
include("connect.php");

class Algae
{
    public static function getClases()
    {
        global $db;
        $sql = "SELECT distinct clase FROM input_data2 ORDER BY clase";
        $res = mysqli_query($db, $sql);
        
        $clases = array();
        while ($r = mysqli_fetch_assoc($res)) {
            $clases[] = $r['clase'];
        }
        return $clases;
    }

    public static function getInfoByGenero($genero)
    {
        global $db;
        $sql = "SELECT * FROM input_data2 WHERE genero = '$genero'";
        $res = mysqli_query($db, $sql);

        $r = mysqli_fetch_assoc($res);
        $r['forma_organizacion'] = $r['forma_organizacion1'];
        if (!empty($r['forma_organizacion2'])) {
            $r['forma_organizacion'] .= '. '.$r['forma_organizacion2'].'.';
        }

        $r['forma_celula'] = $r['forma_celula_caracter1'];
        if (!empty($r['forma_celula_caracter2'])) {
            $r['forma_celula'] .= '. '.$r['forma_celula_caracter2'].'.';
        }
        if (!empty($r['forma_celula_caracter3'])) {
            $r['forma_celula'] .= ' '.$r['forma_celula_caracter3'].'.';
        }

        return $r;
    }

    public static function getFotos($genero)
    {
        $path = "images/fotos/$genero/*";
        $fileNames = glob($path);

        return $fileNames;
    }

    public static function getDiagramas($genero)
    {
        $path = "images/diagramas/$genero/*";
        $fileNames = glob($path);

        return $fileNames;
    }
}

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

    public static function getParedCelularOpts()
    {
        global $db;
        $sql = "SELECT distinct pared_celular FROM input_data2 ORDER BY pared_celular";
        $res = mysqli_query($db, $sql);

        $paredes = array();
        while ($r = mysqli_fetch_assoc($res)) {
            $paredes[] = $r['pared_celular'];
        }
        return $paredes;
    }

    public static function getParedCelularOrnamentaciones()
    {
        global $db;
        $sql = "SELECT distinct pared_celular_ornamentaciones FROM input_data2 WHERE pared_celular_ornamentaciones <> '' ORDER BY pared_celular_ornamentaciones";
        $res = mysqli_query($db, $sql);

        $ornamentaciones = array();
        while ($r = mysqli_fetch_assoc($res)) {
            $ornamentaciones[] = $r['pared_celular_ornamentaciones'];
        }
        return $ornamentaciones;
    }

    public static function getNCloroplastosOpts()
    {
        global $db;
        $sql = "SELECT distinct cloroplastos_n FROM input_data2 ORDER BY cloroplastos_n";
        $res = mysqli_query($db, $sql);

        $numeros = array();
        while ($r = mysqli_fetch_assoc($res)) {
            $numeros[] = $r['cloroplastos_n'];
        }
        return $numeros;
    }

    public static function getFormasCloroplastos()
    {
        global $db;
        $sql = "SELECT distinct cloroplastos_forma FROM input_data2 WHERE cloroplastos_forma <> '' ORDER BY cloroplastos_forma";
        $res = mysqli_query($db, $sql);

        $formas = array();
        while ($r = mysqli_fetch_assoc($res)) {
            $formas[] = $r['cloroplastos_forma'];
        }
        return $formas;
    }

    public static function getPirenoides()
    {
        global $db;
        $sql = "SELECT distinct pirenoides FROM input_data2 ORDER BY pirenoides";
        $res = mysqli_query($db, $sql);

        $pirenoides = array();
        while ($r = mysqli_fetch_assoc($res)) {
            $pirenoides[] = $r['pirenoides'];
        }
        return $pirenoides;
    }
}

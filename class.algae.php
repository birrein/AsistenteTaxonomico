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
}

<?php
    function dbconnect()
    {
        static $bdd = null;
        if ($bdd === null){
           //$bdd = mysqli_connect('localhost', 'ETU003661','ZIm99b5T', 'db_s2_ETU003661');
            $bdd = mysqli_connect('localhost', 'root','', 'to_do_list');
        }
        return $bdd;
    }
?>
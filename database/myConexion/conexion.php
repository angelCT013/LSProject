<?php

    function BDconexion(){
        $connect = new PDO('mysql:host=localhost;dbname=localshop;charset=utf8','root','');
        $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(!$conect){
            $conect = 'DBerrorConect';
            return $conect;
        }
        return $conect;
    }




?>

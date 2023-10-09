<?php

    try
    {

    $connection = new PDO("mysql:host=localhost;dbname=vaccine_management_system","root","");    

    }
    catch(PDOException $error)
    {
        echo $error->getMessage();
    }


?>
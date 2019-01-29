<?php
try{
    $dbh = new PDO('mysql:host=mysql;dbname=lnmp', 'root', '123123');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->exec('set names utf8');
    echo "Connection ok!";
}catch (PDOException $e){
    echo $e->getMessage();
}finally{
    $dbh = null;
    echo "close db";
}
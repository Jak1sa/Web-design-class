<?php
function OpenCon(){
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="jaki_sa1016";
    $dbname="assignprac";
    $conn=new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("connect failed: %s\n". $conn -> error);
    return $conn;
}
function CloseCon($conn){
    $conn -> close();
}
?>
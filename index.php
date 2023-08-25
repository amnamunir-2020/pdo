<?php

$dbname="mysql:host=localhost;dbname=admin_db";
$dbusername="root";
$dbpassword="";

//object pdo 
$conn=new pdo($dbname,$dbusername,$dbpassword);                  //php data object

//print_r($conn);

$sql=$conn->query("select * from users");

while($row=$sql->fetch()){


    echo "<pre>"; 
    print_r($row);

}









?>
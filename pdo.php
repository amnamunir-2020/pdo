<?php


//PDO
$dbname="mysql:host=localhost;dbname=admin_db";
$dbusername="root";
$dbpassword="";

$conn=new PDO($dbname,$dbusername,$dbpassword);

$sql=$conn->query("select * from users");

$result=$sql->fetchAll(PDO::FETCH_NUM);                                          //$result=$sql->fetchAll(PDO::FETCH_ASSOC); //$result=$sql->fetchAll(PDO::FETCH_NUM);


if(count($result)>0){                                                                  //ZERO SAI ZADA RECORDS HAI TOU RETURN IF BRACKET
	
	
	foreach($result as $row){     //foreach loop
		echo "$row[1] <br>";              //column 1  fname
	}
}

else{
	echo "no data show";
}


//echo "<pre>";    
	//print_r($result);  //fetch all data 


//while($row=$sql->fetch(PDO::FETCH_OBJ)){
	
	
	//echo  "{$row['id']} - {$row['username']} - {$row['email']} - {$row['password']} <br>" ;    //all colum   fetch assoc
	
	
	//echo  "{$row[0]} - {$row[1]} - {$row[2]} - {$row[3]} - {$row[4]} - {$row[5]} - {$row[6]} - {$row[7]} <br>" ;    //all column   fetch num in index wise
	
	
	//echo  "{$row->id} - {$row->username} - {$row->email} - {$row->password} <br>" ;    //all column  object->fieldname
	
	//echo "<pre>";    
	//print_r($row);     //index array   & obj  return stdclass obj standard class object


//}




//if associative array     PDO::fetch_assoc
//if  index array          PDO::fetch_num
//if Object array          PDO::fetch_obj
//one time all fetch data  PDO::fetch_all

//fetch load server or fetch all so thats best 


?>
<?php

//prepare method secure


$db_name="mysql:host=localhost;dbname=admin_db";
$db_username="root";
$db_password="";

$conn=new PDO($db_name,$db_username,$db_password);
$gendert="female";
$idplace=70;


$sql=$conn->prepare("select * from users where gender= :gender and id> :id ");                                                       //("insert into  users (username,email,password) values(:username, :email, :password)  "); 
//$sql->bindvalue(':gender',$gendert,PDO::PARAM_STR);                                                    //three paramerts if bind 
//$sql->bindvalue(':id',$idplace,PDO::PARAM_INT);                                                        // placeholder name

//$sql->execute();  

$sql->execute(array(':gender'=>$gendert, ':id'=>$idplace ));                                     //2lines in 1 lines in exeute bind pass $sql->execute(array(':gender'=>$gendert, ':idplace'=>$idplace ));   

//$sql=$conn->prepare("select * from users where gender=? and id>? ");              //in prepare method sql query values  placeholder ? and jo placeholder hota hai uskai lia bind parameters obj 
//$sql->bindparam(1,$gendert,PDO::PARAM_STR);                                                    //  3RD PARAMETRS
//$sql->bindparam(2,$idplace,PDO::PARAM_INT);                                                  //bindparam() same as bindvalue()

//$sql->bindvalue(1,$gendert,PDO::PARAM_STR);                                                    //  3RD PARAMETRS
//$sql->bindvalue(2,$idplace,PDO::PARAM_INT);

//$sql->execute();          //execute method

$result=$sql->fetchAll(PDO::FETCH_ASSOC);


if(count($result)){
	
	foreach($result as $valuevar){
	echo   "{$valuevar['id']} -  {$valuevar['username']}  -  {$valuevar['gender']} <br>";
	}
	
}

else{
	echo "Data nOt Show!";
	
}





//prepare method secure b/c sql injection hacker failed

//bind in ececute time varaiable pass  $sql->execute(array($gendert,$idplace));  
//bind another method no need to ?placeholder just write placeholder name :name ok in query   











?>
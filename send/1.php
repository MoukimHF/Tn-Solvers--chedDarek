<?php

$name = $_POST['name'] ; 
$cin = $_POST['cin'] ; 
$tel = $_POST['tel'];
$comment =$_POST['comment'];

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="blog";
$port="3306";


$dbname="blog";
$conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
$query=" INSERT INTO survey(nom,cin,tel,comment)
values (?,?,?,?)";
                     
$stmt= mysqli_prepare($conn, $query);

mysqli_stmt_bind_param($stmt,"siis",$name,$cin,$tel,$comment);
mysqli_stmt_execute($stmt);
  
  if ( !$conn ) {
        die("Connection failed : " . mysql_error());
    }


else{
    echo "connected successfully";
}






echo '<script language="Javascript"> 

document.location.replace("../success.html");

</script>' 
?>
<?php
 $firstname=$_post['Firstname'];
 $lastname=$_post['Lastname'];
 $regno=$_post['Registernumber'];
 $pass=$_post['Password'];
 $ConfromPass=$_post['Confrom Password'];
/*dbconnection*/
 $conn=new mysqli('localhost','root','test');
 if($conn->connection_error){
    die('Connection Failed :'.$conn->connection_error)
 }else{
    $stmt=$conn->prepare("insert into registraion(Firstname,Lastname,Registernumber,Password,ConfromPassword)vales(?,?,?,?,?)");
    $stmt->blind_param("ssiss",$Firstname,$Lastname,$Registernumber,$Password,$ConfromPassword);
    $stmt->execute();
    echo"registraion successfull...";
    $stmt->close();
    $conn->close()
 }

?>
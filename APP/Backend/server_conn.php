<?php
session_start();
include_once "conn.php";
$user = $_POST['user'];
$password = $_POST['pass'];

$sql = "call login('".$user."','".$password."')";

$rec = mysql_query($sql);
if($rec != 1)
{
    while($row=mysql_fetch_object($rec))
    {
        if($row->ADM_EMAIL == $user)
        {
           $_SESSION['session_user']=$user;
           $_SESSION['session_id']=$row->ADM_ID;
           $_SESSION['session_nombre']=$row->ADM_NOMBRE;
           $_SESSION['session_apellido']=$row->ADM_APELLIDO;
           $_SESSION['session_cargo']=$row->ADM_ROL;
        }
        $count++;
    }
    if ($count>=1)
    {
      echo 1;
    }
    else if ($count == 0) 
    { 
        echo 0; 
    } 
} 
mysql_close($con);
?>
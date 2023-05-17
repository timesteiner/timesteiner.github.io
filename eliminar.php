<?php
$id=$_GET['id'];
include("conexion.php");

$sql="delete from nft_anfitrion where id='".$id."'";
$resultado=mysqli_query($conexion,$sql);

if($resultado){
    echo "<script language='JavaScript'>
    alert('El anfitrion a sido eliminado correctamente');
    location.assign('index.php');
    </script>";
}else{
    echo "<script language='JavaScript'>
    alert('El anfitrion No a sido eliminado correctamente');
    location.assign('index.php');
    </script>";
}

?>
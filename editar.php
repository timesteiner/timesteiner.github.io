<?php
include("conexion.php");
?>
<html lang="esp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> Editar lista de anfitriones</title>
</head>
<body>
<header>
            <img width="100%" height="200px" src="header.png" alt="uaeh">
        </header>
    <?php
    if(isset($_POST['enviar'])){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $paterno=$_POST['paterno'];
        $materno=$_POST['materno'];
        $grado=$_POST['grado'];
        $cargo=$_POST['cargo'];
        $dependencia=$_POST['dependencia'];
        $telefono=$_POST['telefono'];
        $email=$_POST['email'];
        $extension=$_POST['extension'];

        $sql="update nft_anfitrion set nombre='".$nombre."',
        paterno='".$paterno."',
        materno='".$materno."',
        grado='".$grado."',
        cargo='".$cargo."',
        dependencia='".$dependencia."',
        telefono='".$telefono."',
        email='".$email."',
        extension='".$extension."' where id='".$id."'";
        $resultado=mysqli_query($conexion,$sql);

        if($resultado){
            echo "<script language='JavaScript'>
            alert('Los datos se actualizaron correctamente');
            location.assign('index.php');
            </script>";

        }else{
            echo "<script language='JavaScript'>
            alert('Los datos No se actualizaron correctamente');
            location.assign('index.php');
            </script>";

        }
        mysqli_close($conexion);




    }else{
        $id=$_GET['id'];
        $sql="select * from nft_anfitrion where id='".$id."'";
        $resultado=mysqli_query($conexion,$sql);
        $fila=mysqli_fetch_assoc($resultado);
        $nombre=$fila["nombre"];
        $paterno=$fila["paterno"];
        $materno=$fila["materno"];
        $grado=$fila["grado"];
        $cargo=$fila["cargo"];
        $dependencia=$fila["dependencia"];
        $telefono=$fila["telefono"];
        $email=$fila["email"];
        $extension=$fila["extension"];

        mysqli_close($conexion);




    ?>
<main>
    <h1 id="titulo">Editar informacion de anfitrion</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="nombre">
                <span>Nombre</span>
                <input type="text" name="nombre" value="<?php echo $nombre; ?>">
            </label>
            <br>
            <br>
            <label for="paterno">
                <span>Apellido paterno</span>
                <input type="text" name="paterno" value="<?php echo $paterno; ?>">
            </label>
            <br>
            <br>
            <label for="materno">
                <span>Apellido materno</span>
                <input type="text" name="materno" value="<?php echo $materno; ?>">
            </label>
            <br>
            <br>
            <label for="grado">
                <span>Grado academico</span>
                <input type="text" name="grado" value="<?php echo $grado; ?>">
            </label>
            <br>
            <br>
            <label for="cargo">
                <span>Cargo desempeñado</span>
                <input type="text" name="cargo" value="<?php echo $cargo; ?>">
            </label>
            <br>
            <br>
            <label for="dependencia">
                <span>Dependencia a la que pertenece</span>
                <input type="text" name="dependencia" value="<?php echo $dependencia; ?>">
            </label>
            <br>
            <br>
            <label for="telefono">
                <span>Numero telefonico</span>
                <input type="number" name="telefono" value="<?php echo $telefono; ?>">
            </label>
            <br>
            <br>
            <label for="email">
                <span>Correo electronico</span>
                <input type="email" name="email" value="<?php echo $email; ?>">
            </label>
            <br>
            <br>
            <label for="extension">
                <span>Extension de area</span>
                <input type="number" name="extension" value="<?php echo $extension; ?>">
            </label>
            <br>
            <br>
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <input type="submit" name="enviar" value="ACTUALIZAR">
            <a href="index.php">Regresar</a>

           </form> 
    </main>
           <?php
    }
           ?>

</body>
</html>

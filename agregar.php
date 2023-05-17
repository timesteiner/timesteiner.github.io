<!DOCTYPE html>
<html lang="esp">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title> Agregar anfitriones</title>
    </head>
    <body>
    <header>
            <img width="100%" height="200px" src="header.png" alt="uaeh">
        </header>
        <?php
        if(isset($_POST['enviar'])){
            $nombre=$_POST['nombre'];
            $paterno=$_POST['paterno'];
            $materno=$_POST['materno'];
            $grado=$_POST['grado'];
            $cargo=$_POST['cargo'];
            $dependencia=$_POST['dependencia'];
            $telefono=$_POST['telefono'];
            $email=$_POST['email'];
            $extension=$_POST['extension'];

            include("conexion.php");
            $sql="insert into nft_anfitrion(nombre,paterno,materno,grado,cargo,dependencia,telefono,email,extension)
            values('".$nombre."','".$paterno."','".$materno."','".$grado."','".$cargo."','".$dependencia."','".$telefono."','".$email."','".$extension."')";

            $resultado=mysqli_query($conexion,$sql);
            if($resultado){
                echo " <script language='JavaScript'>
                        alert('Los datos fueron ingresados correctamente');
                        location.assign('index.php');
                        </script>";
            }else{
                echo " <script language='JavaScript'>
                        alert('Error: Los datos NO fueron ingresados correctamente');
                        location.assign('index.php');
                        </script>";
            }
            mysqli_close($conexion);

        }else{}
        ?>




        <h1>Agregar anfitrion</h1>
        <main>
           <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="nombre">
                <span>Nombre</span>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
            </label>
            <br>
            <br>
            <label for="paterno">
                <span>Apellido paterno</span>
                <input type="text" name="paterno" id="paterno" placeholder="apellido paterno" required>
            </label>
            <br>
            <br>
            <label for="materno">
                <span>Apellido materno</span>
                <input type="text" name="materno" id="materno" placeholder="apellido materno" required>
            </label>
            <br>
            <br>
            <label for="grado">
                <span>Grado academico</span>
                <input type="text" name="grado" id="grado" placeholder="Grado" required>
            </label>
            <br>
            <br>
            <label for="cargo">
                <span>Cargo desempeñado</span>
                <input type="text" name="cargo" id="cargo" placeholder="Cargo" required>
            </label>
            <br>
            <br>
            <label for="dependencia">
                <span>Dependencia a la que pertenece</span>
                <input type="text" name="dependencia" id="dependencia" placeholder="Dependencia" required>
            </label>
            <br>
            <br>
            <label for="telefono">
                <span>Numero telefonico</span>
                <input type="number" name="telefono" id="telefono" placeholder="000 000 0000 " required>
            </label>
            <br>
            <br>
            <label for="email">
                <span>Correo electronico</span>
                <input type="email" name="email" id="email" placeholder="correo@example.com" required>
            </label>
            <br>
            <br>
            <label for="extension">
                <span>Extension de area</span>
                <input type="number" name="extension" id="extension" placeholder="000" required>
            </label>
            <br>
            <br>
            <input type="submit" name="enviar" value="Agregar">
           </form> 
        </main>
    </body>
</html>
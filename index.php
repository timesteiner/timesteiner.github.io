<!DOCTYPE html>
<html lang="esp">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript">
            function confirmar(){
                return confirm('Esta seguro de eliminar este anfitrion?');
            }
        </script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title> Lista de anfitriones</title>
    </head>
    <body>
        <header>
            <img width="100%" height="200px" src="header.png" alt="uaeh">
        </header>

    <?php
        include("conexion.php");
        $sql="select * from nft_anfitrion";
        $resultado=mysqli_query($conexion,$sql);
    
    ?>

    <h1> Lista de anfitriones</h1>
    <a id="agregar" href="agregar.php">Nuevo anfitrion</a><br><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Grado</th>
                <th>Nombre</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>Cargo</th>
                <th>Dependencia</th>
                <th>Telefono</th>
                <th>email</th>
                <th>Extension</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                 while($filas=mysqli_fetch_assoc($resultado)){
            
            ?>
            <tr>
                <td> <?php echo $filas['id'] ?> </td>
                <td> <?php echo $filas['grado'] ?> </td>
                <td> <?php echo $filas['nombre'] ?> </td>
                <td> <?php echo $filas['paterno'] ?> </td>
                <td> <?php echo $filas['materno'] ?> </td>
                <td> <?php echo $filas['cargo'] ?> </td>
                <td> <?php echo $filas['dependencia'] ?> </td>
                <td> <?php echo $filas['telefono'] ?> </td>
                <td> <?php echo $filas['email'] ?> </td>
                <td> <?php echo $filas['extension'] ?> </td>
                <td>
                    <?php echo "<a href='editar.php?id=".$filas['id']."'>Editar</a>"; ?>
                    -
                    <?php echo "<a href='eliminar.php?id=".$filas['id']."'
                    onclick='return confirmar()'>Eliminar</a>"; ?>
                </td>
            </tr>
            <?php
                 }
            
            ?>

        </tbody>
    </table>
    <?php
         mysqli_close($conexion); 
    ?>

       
    </body>
</html>
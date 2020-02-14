
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar datos</title>
</head>
<body>

    <form action="proyecto.php" method="POST">
        <input type="text" name="titulo" id="titulo" placeholder="Ingrese el título" required>
        <input type="text" name="imagen" id="imagen" placeholder="Ingrese la imagen" required>
        <input type="text" name="descripcion" id="descripcion" placeholder="Ingrese la descripción" required>
        <input type="text" name="enlace" id="enlace" placeholder="Ingrese el enlace" required>
        <input type="submit" name="insertar" value="Insertar">
    </form>
 <br>
 <br>
 <br>
    <form action="proyecto.php" method="POST">
        <input type="text" name="titulo" id="idproyecto" placeholder="Ingrese el titulo del proyecto que desea eliminar" required>
        <input type="submit" name="borrar" value="Borrar">
    </form>



        <?php 
            $servidor = "localhost";
            $nombreusuario = "root";
            $password = "";
            $basedatos = "proyecto";
            $conexion = new mysqli($servidor, $nombreusuario, $password, $basedatos);

            if($conexion->connect_error){
                die("Lo lamentamos, la conexión falló" . $conexion->connect_error);
            }

            if(isset($_POST['insertar']) ){
                $titulo = $_POST['titulo'];
                $imagen = $_POST['imagen'];
                $descripcion = $_POST['descripcion'];
                $enlace = $_POST['enlace'];
                $insertar_titulo = "INSERT INTO proyectotabla(titulo, imagen, descripcion, enlace) VALUES('$titulo', '$imagen', '$descripcion','$enlace')";

                if($conexion->query($insertar_titulo)){
                     echo 'Datos ingresados correctamente';

                }else{
                    die("Lo lamentamos, ha ocurrrido un error: ". $conexion->error);
                }
               
            }

            if(isset($_POST['borrar'])){
                $titulo = $_POST['titulo'];
                $borrar_proyecto = "DELETE FROM proyectotabla WHERE titulo='$titulo'";
                if($conexion->query($borrar_proyecto)){
                    echo 'Datos borrados correctamente';
    
               }else{
                   die("Lo lamentamos, ha ocurrrido un error: ". $conexion->error);
               }
    

            }

           

           $conexion->close();
        ?>
   
</body>
</html>
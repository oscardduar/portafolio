<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Oscar de La Rosa</title>
</head>
<body>

    <!--Aquí va parte de mi código php-->



    <?php
         $db_host="localhost";
         $db_nombre="proyecto";
         $db_usuario="root";
         $db_contra="";
         $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
        mysqli_set_charset($conexion,"utf8");
        $consulta="SELECT * FROM proyectotabla";
         $resultados=mysqli_query($conexion, $consulta);

        #Aquí inicia todo lo relativo a las carreras
        class Base{
            public $imagen;
            public $descripcion;
            function __construct( $imagen, $descripcion){
                $this->imagen = $imagen;
                $this->descripcion = $descripcion;
            }
            function get_descripcion(){
                return $this->descripcion;
            }
            function get_imagen(){
                return $this->imagen;
            }
        }
        class Carrera extends Base{
        }
        $frontend = new Carrera( "img/frontend.png", "Carrera de Arquitecto Frontend aprobada y finalizada en Escuela de Programación Platzi");
        $backend1 = new Carrera( "img/pronto.png", "Carrera de backend PHP en proceso, actualmente estoy perfeccionando mis habilidades");
        $carreras = array($frontend, $backend1);
    ?>


    <!--Aquí termina mi código php-->



    <!-- código para el correo php-->

<?php
  if(isset($_POST['correo'])){
    $empresa = $_POST['empresa'];
    $telefono = $_POST['telefono'];
    $reclutador = $_POST['reclutador'];
    $mensaje = $_POST['mensaje'];
    $email = "oscardduar@gmail.com";
    $contenido = "Empresa: " . $empresa . " Telefono: " . $telefono . " Reclutador: " . $reclutador . " Mensaje: " . $mensaje; 
    $mail = mail($email, "Empleo", $contenido);
    if ($mail){
       echo "Su correo ha sido enviado exitosamente!. ";
    }
  }





?>

   <!--Aquí termina el código para el corre php-->

    <!--Aquí inicia el header de bootstrap-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#estudios">Carreras</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#proyectos">Proyectos </a>
                  </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#video">VideoCurriculo</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#formulario">Contáctame</a>
                  </li>
  
              </ul>

            </div>
          </nav>
    </header>
<!--Aquí termina el header con bootstrap-->




<!--Aquí inicia la parte de portada-->
    <section class="portada" id="portada">
        <div class="container-fluid ">
            <div class="row pt-3">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 foto">
                     <div class="fondoimagen">
                         <div class="imagencirculo"></div>
                     </div> 
                    
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 sobremi">
                    <h3>Sobre Mí</h3>
                    <p>Hola, primero gracias por llegar hasta aquí, mi nombre es Oscar de La Rosa,
                        y quiero decirte que si hay alguna palabra que pueda describirme, creo que 
                        es "Superación", cada día me aseguro de hacer las cosas mejor que el día anterior,
                        soy desarrollador Frontend y estoy en constante aprendizaje, me encantan los retos 
                        que me hacen dar lo mejor de mí y me hacen ver que siempre puedo superar mis límites.
                        Estaré encantado de poder emplear mis habilidades en un equipo y hacer un proyecto juntos.
                            <a href="tel:+50233381776"><button>Tel: 3338 1776</button></a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--Aquí termina la parte de portada-->
    <!--Aquí empieza el temporizador-->

    <section class="temporizador">
    <h5>En menos de  <span id="clock"></span> alguién me contratará, me encantaría que fueras tú!..</h5>
   
    <script src="temporizador.js"></script>
    </section>



    <!--Aquí termina el temporizador-->
    <!--Aqui inicia la sección de estudios-->
    <section class="estudios" id ="estudios">
        <div class="universidad">
            <h3>Estudios Universitarios</h3>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-xl-6 col-lg-6">
                       <!-- <a href="https://www.usac.edu.gt/">     </a>-->
                            <img src="img/usac2.png" >
                            <p>En los comienzos de mi carrera estudié aproximadamente 70 créditos en ingeniería en Sistemas Usac</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-xl-6 col-lg-6">
                        <!--<a href="https://www.uopeople.edu/"> </a>-->
                            <img src="img/uopeople.png" >
                            <p>Actualmente estoy estudiando mi primer curso de programación en Python en UoPeople (Universidad Acreditada por Estados Unidos)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="carrera">
            <h3>Carreras Técnicas</h3>
            <div class="container-fluid">
                <div class="row">
                    <?php

                      foreach ($carreras as $carrera){
                        echo '<div class="col-12 col-sm-12 col-md-6 col-xl-6 col-lg-6">';
                        echo '<img src="' . $carrera->get_imagen() . '">';
                        echo '<p>' . $carrera->get_descripcion() . '</p>';
                        echo '</div>';
                      }
                    ?>
                </div>
            </div>
        </div>    
    </section>

    <!--Aquí termina la sección de estudios-->

    <section class="proyectos" id="proyectos">
        <h3>Proyectos Realizados</h3>
        <div class="container-fluid">
            <div class="row">
                <?php
                while($fila=mysqli_fetch_row($resultados)){
                    echo  '<div class="col-12 col-sm-12 col-md-6 col-xl-4 col-lg-4">';
                    echo   '<img src="' . $fila[1] . '">';
                    echo    '<h3>' . $fila[0] . '</h3>';
                    echo    '<p>' . $fila[2] . '</p>';
                    echo '<a href="' . $fila[3] . '" target="_blank"><button type="button">Ver más</button></a>';
                    echo   '</div>';
                  }
                ?>
            </div>
        </div>
    </section>
   

  


    <!--sección de video-->
    <section class="video" id="video">
    <iframe width="791" height="445" src="https://www.youtube.com/embed/yN0lKwOY9bw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>
    <section class="formulario" id="formulario">
        <h3>Contáctame</h3>
        <form method="post">
            <div class="form-row mt-1">
              <div class="col-12 col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-1 mb-1">
                <input type="text" class="form-control" placeholder="Nombre de La Empresa" name="empresa" required="">
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-1 mb-1">
                <input type="text" class="form-control" placeholder="Telefono de La Empresa" name="telefono" required="">
              </div>
            </div>
            <div class="form-row">
                <div class="col-12 col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-1 mb-1">
                  <input type="text" class="form-control" placeholder="Nombre del Reclutador" name="reclutador" required="">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-xl-6 col-lg-6 mt-1 mb-1">
                  <input type="text" class="form-control" placeholder="Vacante y Mensaje" name="mensaje" required="">
                </div>
              </div>
              <button type="submit" class="btn btn-primary mb-2" name="correo">Enviar</button>
          </form>
          
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-3"><a href="https://github.com/oscardduar" target="_blank"><i class="fa fa-github icono" ></i></a></div>
                <div class="col-3"><a href="https://www.facebook.com/Oscarduar-100554284845139/?modal=admin_todo_tour" target="_blank"><i class="fa fa-facebook icono "></i></a></div>
                <div class="col-3"><a href="https://wa.me/50251798650" target="_blank"><i class="fa fa-whatsapp icono"></i></a></div>
                <div class="col-3"><a href="https://www.youtube.com/channel/UC-DROhBqW1-5Uy6dHP3F8qA?view_as=subscriber" target="_blank"><i class="fa fa-youtube icono" ></i></a></div>
                
            </div>
        </div>
    </footer>

<!--boton de mesenger-->
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "100554284845139", // Facebook page ID
            call_to_action: "Hola, dejame un mensaje.", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->



<!--termina botón de mesenger--->


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <!--Aquí empieza la parte de Boostrap-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--Aquí terminan los enlaces para Bootstrap-->
</body>
</html>




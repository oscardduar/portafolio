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
      
        class Proyecto {
            public $titulo;
            public $imagen;
            public $descripcion;
            public $enlace;

            function __construct($titulo, $imagen, $descripcion, $enlace){
                $this->titulo = $titulo;
                $this->imagen = $imagen;
                $this->descripcion = $descripcion;
                $this->enlace = $enlace;
            }

            function get_Titulo(){
                return $this->titulo;
            }

        }

        $tutorias = new Proyecto("Empresa de Tutorias", "img/sthar.jpg", "Página para una empresa de tutorías a domicilio creada con HTML5, CSS3, BOOTSTRAP Y PHP", "nada");
        $paginas = new Proyecto("Empresa de Páginas Web", "img/sthar.jpg", "Página creada para ofrecer servicios de páginas web creada con HTML5, CSS3, BOOTSTRAP, JAVASCRIPT Y PHP" , "");
      
        echo '<h1>' . $tutorias->get_Titulo() . '</h1>';
        $proyectos = array($tutorias, $paginas);
    ?>


    <!--Aquí termina mi código php-->

    <!--Aquí inicia el header de bootstrap-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"><img src="img/image1.jpeg" width="15%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Carreras</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Proyectos </a>
                  </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">VideoCurriculo</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Contáctame</a>
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

                    </p>

                </div>


            </div>

        </div>



    </section>


    <!--Aquí termina la parte de portada-->
    

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
                           
                            <p>Actualmente estoy estudiando mi primer curso de programación en Python un UoPeople (Universidad Acreditada por Estados Unidos)</p>
                       
  
                    </div>
                </div>
            </div>
        </div>

        <div class="carrera">
            <h3>Carreras Técnicas</h3>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-xl-6 col-lg-6">
                        <img src="img/frontend.png">
                        
                        <p>Carrera de Arquitecto Frontend aprobada y finalizada en Escuela de Programación Platzi</p>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 col-xl-6 col-lg-6">
                        <img src="img/frontend.png">
                       
                        <p>Carrera de Arquitecto Frontend aprobada y finalizada en Escuela de Programación Platzi</p>
                    </div>
                </div>
            </div>

        </div>    
    </section>

    <!--Aquí termina la sección de estudios-->

    <section class="proyectos" id="proyectos">
        <h3>Proyectos Realizados</h3>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-xl-4 col-lg-4">
                    <img src="img/sthar.jpg">
                    <h3>Empresa de Tutorías</h3>
                    <p>Página para una empresa de tutorías a domicilio creada con HTML5, CSS3, BOOTSTRAP Y PHP</p>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-xl-4 col-lg-4">
                    <img src="img/sthar.jpg">
                    <h3>Empresa de Páginas Web</h3>
                    <p>Página creada para ofrecer servicios de páginas web creada con HTML5, CSS3, BOOTSTRAP, JAVASCRIPT Y PHP</p>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-xl-4 col-lg-4">
                    <img src="img/sthar.jpg">
                    <h3>Empresa de Páginas Web</h3>
                    <p>Página creada para ofrecer servicios de páginas web creada con HTML5, CSS3, BOOTSTRAP, JAVASCRIPT Y PHP</p>
                </div>
            </div>
        </div>
    </section>

    <section class="proyectos" >
        <h3>Proyectos Realizados</h3>
        <div class="container-fluid">
            <div class="row">
                <?php
                echo  '<div class="col-12 col-sm-12 col-md-6 col-xl-4 col-lg-4">';
                echo   '<img src="img/sthar.jpg">';
                echo    '<h3>Empresa de Tutorías</h3>';
                echo    '<p>Página para una empresa de tutorías a domicilio creada con HTML5, CSS3, BOOTSTRAP Y PHP</p>';
                echo   '</div>';
                echo   '<div class="col-12 col-sm-12 col-md-6 col-xl-4 col-lg-4">';
                echo    '<img src="img/sthar.jpg">';
                echo    '<h3>Empresa de Páginas Web</h3>';
                echo    '<p>Página creada para ofrecer servicios de páginas web creada con HTML5, CSS3, BOOTSTRAP, JAVASCRIPT Y PHP</p>';
                echo    '</div>';
                echo     '<div class="col-12 col-sm-12 col-md-6 col-xl-4 col-lg-4">';
                echo    '<img src="img/sthar.jpg">';
                echo    '<h3>Empresa de Páginas Web</h3>';
                echo    '<p>Página creada para ofrecer servicios de páginas web creada con HTML5, CSS3, BOOTSTRAP, JAVASCRIPT Y PHP</p>';
                echo    '</div>';
                $colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
  echo "$value <br>";
}
                ?>
            </div>
        </div>
    </section>



    <!--sección de video-->
    <section class="video">
        <iframe width="791" height="445" src="https://www.youtube.com/embed/f2In_bCOqXw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>
    <section class="formulario">
        <h3>Contáctame</h3>
        <form>
            <div class="form-row mt-1">
              <div class="col">
                <input type="text" class="form-control" placeholder="Nombre de La Empresa">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Telefono de La Empresa">
              </div>
            </div>
            <div class="form-row mt-1 mb-1">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Correo de La Empresa">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Puesto y Mensaje">
                </div>
              </div>
          </form>
          <button type="button" class="btn btn-warning">Enviar</button>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-3"><i class="fa fa-github icono" ></i></div>
                <div class="col-3"><i class="fa fa-facebook icono "></i></div>
                <div class="col-3"><i class="fa fa-whatsapp icono"></i></div>
                <div class="col-3"><i class="fa fa-youtube icono" ></i></div>
                
            </div>
        </div>
    </footer>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <!--Aquí empieza la parte de Boostrap-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--Aquí terminan los enlaces para Bootstrap-->
</body>
</html>




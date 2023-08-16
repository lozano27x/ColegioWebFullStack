<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Estilos CSS -->
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <link rel="stylesheet" type="text/css" href="./css/menu.css">
</head>
<body>

    <nav>
        <ul class="menu">
            <li class="logo"> 
                <a href="#"> 
                    <img src="./img/logo.png"> 
                </a>  
            </li>
            <li> 
                <a href="modulos/estudiantes/estudiantes.php">    
                    Estudiantes  
                </a>  
            </li>
            <li> 
                <a href="modulos/materias/materias.php">    
                    Materias 
                </a>  
            </li>
        </ul>
    </nav>

    <div class="container">
        <header> 
            <h1> 
                Colegio la Divina Enseñanza
            </h1>
        </header>
     
        <section class="section-flex">
            <article class="character">
                <header> <h2> Diego Suarez</h2>  </header>
                <img src="./img/Diego Suarez.jpeg">
                <div class="info-character">
                    <p> <b> Docente: </b> Matematicas </p>
                    <p> <b> Director Grupo: </b> Undecimo </p>
                    <p> <b> Docente del mes </b> </p>
                </div>
            </article>

            <article class="character">
                <header> <h2> Ivan Dario Cordoba Muñoz </h2>  </header>
                <img src="./img/Ivan.jpg">
                <div class="info-character">
                    <p> <b> Materia: </b> Matematicas </p>
                    <p> <b> Creditos: </b> 10 </p>
                    <p> <b> Alumno del mes </b> </p>
                </div>
            </article>

            <article class="character">
                <header> <h2> Gerardo Lozano Jaramillo </h2>  </header>
                <img src="./img/Lozano.jpg">
                <div class="info-character">
                    <p> <b> Materia: </b> sociales </p>
                    <p> <b> Creditos: </b> 10 </p>
                    <p> <b> Alumno del mes </b> </p>
                </div>
            </article>
                       
        </section>

    </div>
    

    <footer>
        <p> Creado por Ivan Cordoba y Gerardo Lozano  </p>
    </footer>

    <script src="./js/javascript.js"></script>

</body>
</html>
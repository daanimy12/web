<?php
if (isset($_REQUEST['nombre']) && isset(
                $_REQUEST['email'])) {
    //$header = es el valor del titulo del mensaje
    //$para = el correo al que llegara el mensaje deve ser hotmail
    //$mensaje = es la estructura de el resto del mensaje que se enviara
    $header = 'From: ' . $_REQUEST['nombre'] . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";
    $para = " lamontanabotanas@hotmail.com";
    $asunto = 'Mensaje de Contacto de la pagina web';
    $mensaje = "Este mensaje fue enviado por " . $_REQUEST['nombre']." \r\n";
    $mensaje .= "Su e-mail es: " . $_REQUEST['email'] . " \r\n";
    $mensaje .= "Mensaje extra " . $_REQUEST['mensaje'] . " \r\n";
    $mensaje .= "Enviado el " . date('d/m/Y', time());
    if (mail($para, $asunto, utf8_decode($mensaje))) {
       
    } else {
        echo "No salio";
    }
}
?>
<html lang="en">
    <head>
        <title>Pistaches con ajo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Compiled and minified CSS -->
        <!-- update the version number as needed -->
        <script defer src="/__/firebase/5.7.0/firebase-app.js"></script>
        <!-- include only the Firebase features as you need -->
        <script defer src="/__/firebase/5.7.0/firebase-storage.js"></script>
        <!-- initialize the SDK after all desired features are loaded -->
        <script defer src="/__/firebase/init.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="././Css/Css.css">

    </head>
    <body>
        <header>
            <div class="textos">
                <h1 class="titulo">La montaña</h1>
                <h3 class="subtitulo">Pistaches con ajo</h3>
                <a  id="inicio" href="#" class="boton">Empezemos</a>
            </div>
            <div class="sesgoabajo"></div>
        </header>
        <main>
            <section class="acerca-de"  id="primero">
                <div class="contenedor">
                    <h2 class="sobre-nosotros">Sobre nosotros</h2>
                    <h3 class="slogan">La montaña</h3>
                    <p class="parrafo">Somos una microempresa familiar, dedicados a la producción de nuestros productos teniendo la mejor la calidad y el mejor sabor al paladar de nuestros clientes con ingredientes 100 % naturales y la sazón que nos respalda. </p>

                    <a id="galeria" href="#" class="boton">Productos</a>
                </div>
            </section>
            <section class="galeria"  id="segundo">
                <div class="sesgoarriba"></div>
                <div class="imagenes none">
                    <img src="././img/background.jpeg" alt="">
                </div>
                <div class="imagenes">
                    <img src="././img/image.jpeg" alt="">
                </div>
                <div class="imagenes">
                    <img src="././img/image2.jpeg" alt="">
                    <div class="encima">
                        <h2>100% natural</h2>
                        <div></div>
                    </div>
                </div>
                <div class="imagenes">
                    <img src="././img/image3.jpeg" alt="">

                </div>
                <div class="imagenes none">
                    <img src="././img/image4.jpeg" alt="">
                </div>
                <div class="sesgoabajo"></div>
            </section>
            <section class="miembros"  id="tercero">
                <div class="contenedor">
                    <h2 class="sobre-nosotros">Nuestros productos</h2>
                    <div class="cards">
                        <div class="card">
                            <img src="././img/pistache.jpeg" alt="">
                            <h4>$280</h4>
                            <h3>Pistache con ajo enchilado</h3><p>
                                Pistache con ajo enchilado la montaña 900 gramos 
                            </p>
                        </div> 
                        <div class="card">
                            <img src="././img/image7.jpeg" alt="">
                            <h4>$180</h4>
                            <h3>Pepita enchilada</h3><p>
                                Pepita enchilada la montaña 1kg
                            </p>
                        </div> 
                        <div class="card">
                            <img src="././img/image8.jpeg" alt="">
                            <h4>$70</h4>
                            <h3>Cacahuate con ajo</h3><p>
                                Cacahuate con ajo la montaña 1kg 
                            </p>
                        </div>   
                    </div>
                </div>
            </section>
            <section class="fondo">
                <div class="sesgoarriba"></div>
                <div class="contenedor">
                    <h2 class="titulo-patrocinadores">Galeria</h2>
                    <div class="clientes">
                        <div class="cliente">
                            <img src="././img/image5.jpeg" alt="">
                        </div>
                        <div class="cliente">
                            <img src="././img/image3.jpeg" alt="">
                        </div>
                        <div class="cliente">
                            <img src="././img/image.jpeg" alt="">
                        </div>
                        <div class="cliente">
                            <img src="././img/image6.jpeg" alt="">
                        </div>
                        <div class="cliente">
                            <img src="././img/image4.jpeg" alt="">
                        </div>
                        <div class="cliente">
                            <img src="././img/image8.jpeg" alt="">
                        </div>
                    </div>
                    <a id="contacto" href="#" class="boton" >Contact</a>
                </div>
                <div class="sesgoabajo-unico"></div>
            </section>
        </main>
        <footer>
            <div class="contenedor">
                <h2 class="titulo-footer">Contactanos</h2>
                <div class="subtitulo-footer">
                    _________________________
                </div>
                <div class="footer">
                    <form action="" method="get">
                        <input type="text" name="nombre" id="2" placeholder="Nombre">
                        <input type="email" name="email" id="2" placeholder="Email">
                        <textarea name="mensaje" id="2" cols="30" rows="10" placeholder="Ingrese su mensaje..."></textarea>
                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </footer>

        <div class="roww">
            <div>
                <h2 class="subtitulo-footer">Dirección</h2> 
                <p class="subtitulo-footer">Calle montaña #1706 
                    Fracc. Jardines del valle
                    Col. Nicolas bravo
                    C. P. 75790 Teh. Puebla.</p>
                <p class="subtitulo-footer"> <img src="././img/phone.png" alt=""> 2381012567 </p>
                <p class="subtitulo-footer"> <img src="././img/gmail.png" alt=""> lamontanabotanas@hotmail.com </p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.7295697308064!2d-97.39021208563226!3d18.450583776127694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDI3JzAyLjEiTiA5N8KwMjMnMTYuOSJX!5e0!3m2!1ses!2smx!4v1548175335515" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>     
        <script src="./js/jquery.js"></script>
        <script src="./js/scroll.js"></script>
        <!-- Compiled and minified JavaScript -->
    </body>
</html>

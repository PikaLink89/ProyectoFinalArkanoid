<?php
session_start();
if (isset($_GET["lang"]))
	{
	$lang = $_GET["lang"];
	if(!empty($lang))
		{
		$_SESSION["lang"] = $lang;
		}
	}


if (isset($_SESSION["lang"]))
	{
	$lang = $_SESSION["lang"];
	require "lang/".$lang.".php";
	}
else
	{
	 require "lang/es.php";
	}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
    <title><?php echo $lang["titulo"] ?></title>
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="css/estilos.css">
	
    <script src="http://code.jquery.com/jquery-latest.js"></script>
	
	 <script src="TemplateData/UnityProgress.js"></script>
    <script src="Build/UnityLoader.js"></script>
    <script>
      var unityInstance = UnityLoader.instantiate("unityContainer", "Build/WebGL2.json", {onProgress: UnityProgress});
    </script>

</head>

<body>
    <header>
        <nav>
            <a href="#"><?php echo $lang["inicio"] ?></a>
            <a href="#descargapc"><?php echo $lang["consigueloPC"] ?></a>
            <a href="#descargaandroid"><?php echo $lang["dispositivosmoviles"] ?></a>
            <a href="#juegaahora"><?php echo $lang["juegaahora"] ?></a>
            <a href="#contacta"><?php echo $lang["acercade"] ?></a>			
        </nav>


        <section class="textoCabecera">
            <h1><?php echo $lang["juegaArkanoid"] ?></h1>
            <h2><?php echo $lang["venceMaxima"] ?></h2>
        </section>

        <span class="flechaArriba"><?php echo $lang["subir"] ?></span>
        <div class="triangulos"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#2A2924" fill-opacity="1" d="M0,160L360,128L720,0L1080,64L1440,0L1440,320L1080,320L720,320L360,320L0,320Z"></path>
</svg></div>


    </header>

    <main>
        <section class="contenedor distintasPlataformas">

            <h2 class="titulo"><?php echo $lang["distintasPlataformas"] ?></h2>
            <div class="contenedorDistintasPlataformas">

                <img src="img/equipos.svg" alt="" class="imagen3Plataformas">
                <div class="TextosDistintasPataformas">
                    <ul>
                    <li><h3><?php echo $lang["En tu ordenador"] ?></h3></li>
                    <p><?php echo $lang["Disponible para jugar desde tu PC, para instalar y jugar."] ?></p>
                    <li><h3><?php echo $lang["Desde móvil o tablet"] ?></h3></li>
                    <p><?php echo $lang["Si dispones de un móvil o tablet con Android, podrás jugar instalando nuestra APK"] ?></p>
                    <li><h3><?php echo $lang["Desde el navegador"] ?></h3></li>
                    <p><?php echo $lang["Si quieres probar ya nuestro juego, puedes hacerlo sin necesidad de descargar nada"] ?></p>
                    </ul>
                </div>
            </div>
        </section>

        <section id="seccioapturas">
            <div class="contenedor">
                <h2 class="titulo"><?php echo $lang["Distintos niveles"] ?></h2>
                <div class="galeriaCapturas">
                    
                    <div class="capturaIndividual">
                        <img src="img/captura1.jpg" alt="">
                        
                    </div>
                    <div class="capturaIndividual">
                        <img src="img/captura2.jpg" alt="">
                       
                    </div>
                    <div class="capturaIndividual">
                        <img src="img/captura3.jpg" alt="">
                        
                    </div>
                    
            </div>
        </section>

        <section class="clientes contenedor">
            <h2 class="titulo"><?php echo $lang["Opinión del jugón"] ?></h2>
            <div id="CajasDetarjetas">
                <div class="ExteriorTarjeta">
                    <img src="img/persona1.png" alt="">
                    <div class="textoTarjeta">
                        <h4><?php echo $lang["Carlos"] ?></h4>
                        <p><?php echo $lang["Es un juego muy divertido y adictivo, te mantendrá durante horas enganchado"] ?></p>
                    </div>
                </div>
                <div class="ExteriorTarjeta">
                    <img src="img/persona2.png" alt="">
                    <div class="textoTarjeta">
                        <h4><?php echo $lang["Raúl"] ?></h4>
                        <p><?php echo $lang["Es increiblemente bueno, sin duda, el mejor Arkanoid que he jugado"] ?></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="contenedor lasPlataformas">
            <h2 class="titulo" id="descargapc"><?php echo $lang["Descargar para PC"] ?></h2>
            <div class="plataforma">
                <img src="img/pc.svg" alt="" class="imagen-plataforma">
                <div class="textolistaPlataforma">
                        <ul>
                            <li><?php echo $lang["Sistema Operativo: Windows 7, 8 o 10 (en su versión de 64-bit)"] ?></li>
                            <br>
                            <li><?php echo $lang["Procesador: Intel Core i5 @ 2.8 GHz o equivalente en AMD."] ?></li>
                            <br>
                            <li><?php echo $lang["Memoria: 8 GB de memoria RAM."] ?></li>
                            <br>
                            <li><?php echo $lang["Tarjeta gráfica: Nvidia GeForce GTX 660 (2GB de VRAM)"] ?></li>
                            <br>
                            <li><?php echo $lang["20GB de espacio disponible."] ?></li>
                            <br>
                            <li><?php echo $lang["DirectX: Versión 11."] ?></li>
                        </ul>
                </div>
            </div>
            <div class="plataformaDescarga">
                <h1><?php echo $lang["Descargar"] ?></h1>
                <img src="img/descargar.svg" alt="" class="imagen-descargar">
            </div>
        </section>

              <br>
            <br>
            <br>

        <section class="contenedor lasPlataformas">
            <h2 class="titulo" id="descargaandroid"><?php echo $lang["Descargar para Android"] ?></h2>
            <div class="plataforma">
                <img src="img/phonetablet.svg" alt="" class="imagen-plataforma">
                <div class="textolistaPlataforma">
                        <ul>
                            <li><?php echo $lang["Android 5.0 Lollipop en adelante"] ?></li>
                            <br>
                            <li><?php echo $lang["GPU Adreno 530, Mali-G71 MP20, Mali-G72 MP12 o superior"] ?></li>
                            <br>
                            <li><?php echo $lang["Memoria: 3 GB de memoria RAM."] ?></li>                                              
                        </ul>
                </div>
            </div>
            <div class="plataformaDescarga">
                <h1><?php echo $lang["Descargar"] ?></h1>
                <img src="img/descargar.svg" alt="" class="imagen-descargar">
            </div>
        </section>

        <section class="contenedor principal-jugarweb">
          <h2 class="titulo" id="juegaahora"><?php echo $lang["Juega ahora"] ?></h2>
            <div class="contenedor-juego">
            <div class="webgl-content">
      <div id="unityContainer" style="width: 960px; height: 640px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
        <div class="title">Arkanoid</div>
      </div>
    </div>
				
			</div>
        </section>

    </main>
    <
    <footer>
        <div id="footer">
            <div class="socialMedia" id="contacta">

                <div class="iconoFooter">
                    <a href="#"><img src="img/twitter.svg" alt=""></a>
                </div>
                <div class="iconoFooter">
                <a href="#"> <img src="img/instagram.svg" alt=""></a>
                </div>
                <div class="iconoFooter">
                <a href="#">  <img src="img/facebook.svg" alt=""></a>
                </div>
            </div>
                <div class="cajaContacto">
                    <h4> <?php echo $lang["Contacta con nosotros"] ?></h4>
                <br>

                    <form class="formularioContacto" action="index.html" method="post">
                     <input type="text" class="contactoCaja" placeholder="<?php echo $lang["Nombre"] ?>">
                
                    <input type="email" class="contactoCaja" placeholder="<?php echo $lang["email"] ?>">

                    <textarea type="email" class="contactoCaja" placeholder="<?php echo $lang["Tu mensaje..."] ?>"></textarea>

                    <input type="submit" class="botonCaja" value="<?php echo $lang["Enviar"] ?>">
                    </form>
            </div>

        </div>
        


		<div class="nombreFooter">
            <h2>Cristian S.</h2>
        </div>
		<div class="idiomas">	
			<a href="index.php?lang=es"><img src="img/spain.png"></img></a>
			<a href="index.php?lang=en"><img src="img/uk.png"></img></a>
		</div>
    </footer>


<!--    <script>
var imagen = 0;
cambiar();

function cambiar() {
  var i;
  var x = document.getElementsByClassName("capturaIndividual");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  imagen++;
  if (imagen > x.length) {imagen = 1}
  x[imagen-1].style.display = "block";
  setTimeout(cambiar, 3000); // Tiempo que ejecuta la función
}
</script>

-->

<script>
 var x = document.getElementsByClassName("capturaIndividual");   
</script>

<script>
    $(document).ready(function(){
 
    $('.flechaArriba').click(function(){
        $('body, html').animate({
            scrollTop: '0px'
        }, 300);
    });
 
    $(window).scroll(function(){
        if( $(this).scrollTop() > 0 ){
            $('.flechaArriba').slideDown(300);
        } else {
            $('.flechaArriba').slideUp(300);
        }
    });
 
});
</script>
</body>

</html>
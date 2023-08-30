<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/welcome.css')
    @vite('resources/js/wel.js')
    <title>GYMGANIZED</title>
    <link rel="shortcut icon" href="Img-gg/logo-gg.png">
</head>
<body>

    <!-- SECCION INICIO -->
    <section id="inicio" class="inicio">
        <div class="contenido-seccion">
            <div class="info">
                <h2>GYM<span class="txtRojo">GANIZED</span></h2>
                <p>¡Tener éxito es más fácil de lo que piensas!</p>
                <a href="#nosotros" class="btn-mas">
                    <i class="fa-solid fa-circle-chevron-down"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- SECCION NOSOTROS -->
    
    <section id="nosotros" class="nosotros">
        <div class="fila">
            <div class="col">
                <img src="{{ asset('img-gg/nosotros.png') }}" alt="">
            </div>
            <div class="col">
                <div class="contenedor-titulo">
                    <div class="numero">
                        01
                    </div>
                    <div class="info">
                        <span class="frase">LA MEJOR EXPERIENCIA</span>
                        <h2>CON NOSOTROS</h2>
                    </div>
                </div>
                <p>Bienvenido a nuestra aplicación web de gimnasio: un espacio digital diseñado exclusivamente para ti y tus objetivos de fitness.</p>
            </div>
        </div>
        <hr>
        <div class="fila-nosotros">
            <div class="col1">
                <span class="frase">
                    <span class="txtRojo">ENTRENA</span> DIFERENTE
                </span>
                <h2>ENTRENA <span class="txtRojo">GRATIS</span>HOY!</h2>
            </div>
            <div class="col2">
                <a href="{{ route('register') }}"><button>EMPEZAR</button></a>
            </div>
        </div>
    </section>

    <!-- SECCION SERVICIOS -->
    <section class="servicios" id="servicios">
        <div class="contenido-seccion">
            <div class="fila">
                <div class="col">
                    <div class="contenedor-titulo">
                        <div class="numero">
                            02
                        </div>
                        <div class="info">
                            <span class="frase">LA MEJOR EXPERIENCIA</span>
                            <h2>SERVICIOS</h2>
                        </div>
                    </div>
                    <p>En nuestra aplicación web de gimnasio los “Servicios” que ofrecemos van más allá de lo convencional. Estamos comprometidos a brindarle un enfoque holístico para su bienestar físico y mental. Desde la comodidad de su hogar hasta el gimnasio, lo respaldamos con una amplia gama de opciones diseñadas para satisfacer sus necesidades y objetivos personales.</p>
                </div>
                <div class="col">
                    <img src="{{ asset('img-gg/servicios.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="info-servicios">
            <table>
                <tr>
                    <td>
                        <i class="fa-solid fa-person-walking"></i>
                        <h3><span class="txtRojo">Clases</span> Fitness</h3>
                        <p>Le ofrecemos una emocionante variedad de clases de fitness diseñadas para mantener su cuerpo en movimiento, su mente enfocada y su motivación al máximo.</p>
                    </td>
                    <td>
                        <i class="fa-solid fa-dumbbell"></i>
                        <h3><span class="txtRojo">Classes</span>Crossfit</h3>
                        <p>Si está buscando un enfoque integral del fitness que combine fuerza, resistencia y funcionalidad, ha venido al lugar correcto.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="fa-solid fa-clock"></i>
                        <h3><span class="txtRojo">Clases</span> de Enduro</h3>
                        <p>Si eres un motociclista apasionado que busca mejorar tus habilidades, resistencia y confianza en una variedad de terrenos, has venido al lugar correcto.</p>
                    </td>
                    <td>
                        <i class="fa-solid fa-heart-circle-bolt"></i>
                        <h3><span class="txtRojo">Clases</span> cardio</h3>
                        <p>Si buscas mejorar tu resistencia cardiovascular, quemar calorías de manera efectiva y aumentar tu energía, nuestras clases de cardio son la opción perfecta para ti. </p>
 
                </tr>
            </table>
        </div>
    </section>

    <!-- SECCION COMODIDADES -->


    <!-- SECCION GALERIA -->
    <section class="galeria" id="galeria">
        <div class="contenido-seccion">
            <div class="contenedor-titulo">
                <div class="numero">
                    03
                </div>
                <div class="info">
                    <span class="frase">LA MEJOR EXPERIENCIA</span>
                    <h2>GALERÍA</h2>
                </div>
            </div>
            <div class="fila">
                <div class="col">
                    <img src="{{ asset('img-gg/f1.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img src="{{ asset('img-gg/f2.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img src="{{ asset('img-gg/f3.jpg') }}" alt="">
                </div>
            </div>
            <div class="fila">
                <div class="col">
                    <img src="{{ asset('img-gg/f4.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img src="{{ asset('img-gg/f5.jpg') }}" alt="">
                </div>
                <div class="col">
                    <img src="{{ asset('img-gg/f6.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="info">
            <p>2023 - <span class="txtRojo">GymGanized</span> All rights reserved</p>
            <div class="redes">
                <a href="https://www.facebook.com/profile.php?id=61550581810755">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/GymGanized2023">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="https://instagram.com/gymganized?igshid=MmU2YjMzNjRlOQ==">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://youtube.com/@GymGanized?si=swIsebg_bje4h27x">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
        </div>
    </footer>
    <script src="app.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>GYMGANIZED</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="Img-gg/logo-gg.png">

  <!-- 
    - custom css link
  -->
  @vite('resources/css/home.css')
  @vite('resources/js/home.js')

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-circle-one.png">
  <link rel="preload" as="image" href="./assets/images/hero-circle-two.png">
  <link rel="preload" as="image" href="./assets/images/heart-rate.svg">
  <link rel="preload" as="image" href="./assets/images/calories.svg">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>

        <span class="span">GymGanized</span>
      </a>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-sharp" aria-hidden="true"></ion-icon>
        </button>

        <ul class="navbar-list">

          <li>
            <a href="{{ route('home') }}" class="navbar-link active" data-nav-link>PAGINA DE INICIO</a>
          </li>
          
          <li>
            <a href="{{ route('nosotros') }}" class="navbar-link" data-nav-link>ACERCA DE NOSOTROS</a>
          </li>

          <li>
            <a href="{{ route('download') }}" class="navbar-link" data-nav-link>DESCARGAR APP</a>
          </li>

        </ul>

      </nav>

      <a href="{{ route('guia') }}" class="btn btn-secondary">NUESTROS BLOG</a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </button>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section
        style="background-image: url('./assets/images/hero-bg.png')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">
              <strong class="strong">Lo mejor</strong>GymGanized
            </p>

            <h1 class="h1 hero-title">¡Trabaja duro, vive mejor!</h1>

            <p class="section-text">
              Organiza tu rutina, construye tu cuerpo. ¡GymGanized, tu camino hacia el éxito fitness!
            </p>

            <a href="{{ route('download') }}" class="btn btn-primary">Descarga ahora</a>

          </div>

          <div class="hero-banner">

            <img src="{{ asset('img-gg/hero-banner.png') }}" width="660" height="753" alt="hero banner" class="w-100">

            <img src="{{ asset('img-gg/hero-circle-one.png') }}" width="666" height="666" aria-hidden="true" alt=""
              class="circle circle-1">
            <img src="{{ asset('img-gg/hero-circle-two.png') }}" width="666" height="666" aria-hidden="true" alt=""
              class="circle circle-2">

            <img src="{{ asset('img-gg/heart-rate.svg') }}" width="255" height="270" alt="heart rate"
              class="abs-img abs-img-1">
            <img src="{{ asset('img-gg/calories.svg') }}" width="348" height="224" alt="calories" class="abs-img abs-img-2">

          </div>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <div class="about-banner has-after">
            <img src="{{ asset('img-gg/about-banner.png') }}" width="660" height="648" loading="lazy" alt="about banner"
              class="w-100">

            <img src="{{ asset('img-gg/about-circle-one.png') }}" width="660" height="534" loading="lazy" aria-hidden="true"
              alt="" class="circle circle-1">
            <img src="{{ asset('img-gg/about-circle-two.png') }}" width="660" height="534" loading="lazy" aria-hidden="true"
              alt="" class="circle circle-2">

            <img src="{{ asset('img-gg/fitness.png') }}" width="650" height="154" loading="lazy" alt="fitness"
              class="abs-img w-100">
          </div>

          <div class="about-content">

            <p class="section-subtitle">Más acerca de nosotros</p>

            <h2 class="h2 section-title">¡Bienvenido a gymGanized!</h2>

            <p class="section-text">
              ¡Bienvenido a nuestra página web sobre el bienestar y la vida fitness! Aquí encontrarás todo lo que necesitas para alcanzar tus objetivos de salud y acondicionamiento físico.
            </p>

            <p class="section-text">
              Desde rutinas de ejercicio personalizadas hasta consejos de nutrición, estamos comprometidos a ayudar a mantener un estilo de vida equilibrado. Únete a nuestra comunidad y descubre cómo GymGanized puede cambiar tu vida. ¡Empiece ahora mismo!
            </p>

            <div class="wrapper">

              <div class="about-coach">

                <figure class="coach-avatar">
                  <img src="{{ asset('img-gg/about-coach.jpg') }}" width="65" height="65" loading="lazy" alt="Trainer">
                </figure>

                <div>
                  <h3 class="h3 coach-name">Kevin Aguilera</h3>

                  <p class="coach-title">Programador</p>
                </div>

              </div>

              <a href="{{ route('nosotros') }}" class="btn btn-primary">Acerca de nosotros</a>

            </div>

          </div>

        </div>
      </section>





      <!-- 
        - #VIDEO
      -->

      <section class="section video" aria-label="video">
        <div class="container">

          <div class="video-card has-before has-bg-image"
            style="background-image: url('{{ asset('img-gg/f2.avif') }}')">

            <h2 class="h2 card-title">Explora nuestro canal de youtube</h2>

            <button class="play-btn" aria-label="play video">
              <ion-icon name="play-sharp" aria-hidden="true"></ion-icon>
            </button>

            <a href="https://youtube.com/@GymGanized?si=swIsebg_bje4h27x" class="btn-link has-before">Ve ahora</a>

          </div>

        </div>
      </section>





      <!-- 
        - #CLASS
      -->

      <section class="section class bg-dark has-bg-image" id="class" aria-label="class"
        style="background-image: url('./assets/images/classes-bg.png')">
        <div class="container">

          <p class="section-subtitle">Nuestras rutinas</p>

          <h2 class="h2 section-title text-center">¡Entrena desde nuestra app!</h2>

          <ul class="class-list has-scrollbar">

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="{{ asset('img-gg/r1.avif') }}" width="416" height="240" loading="lazy" alt="Weight Lifting"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="{{ asset('img-gg/class-icon-1.png') }}" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="{{ route('download') }}" class="card-title">Levantamiento de pesas</a>
                    </h3>
                  </div>

                  <p class="card-text">
                    Desafía tus límites y alcanza tu máximo potencial con la ruda rutina de levantamiento de pesas.
                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                      <p class="progress-label">Clase completa</p>

                      <span class="progress-value">45%</span>
                    </div>

                    <div class="progress-bg">
                      <div class="progress-bar" style="width: 45%"></div>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="{{ asset('img-gg/r2.avif') }}" width="416" height="240" loading="lazy" alt="Cardio & Strenght"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="{{ asset('img-gg/class-icon-2.png') }}" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="{{ route('download') }}" class="card-title">Cardio y Fuerza</a>
                    </h3>
                  </div>

                  <p class="card-text">
                    Combina el poder del cardio y la fuerza para alcanzar una condición física total en nuestra rutina dinámica.
                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                      <p class="progress-label">Clase completa</p>

                      <span class="progress-value">80%</span>
                    </div>

                    <div class="progress-bg">
                      <div class="progress-bar" style="width: 80%"></div>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="{{ asset('img-gg/r3.avif') }}" width="416" height="240" loading="lazy" alt="Power Yoga"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="{{ asset('img-gg/class-icon-3.png') }}" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="{{ route('download') }}" class="card-title">Meditación y Yoga</a>
                    </h3>
                  </div>

                  <p class="card-text">
                    Encuentra la armonía interior y construye tu cuerpo con nuestra rutina de meditación y yoga.
                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                      <p class="progress-label">Clase completa</p>

                      <span class="progress-value">10%</span>
                    </div>

                    <div class="progress-bg">
                      <div class="progress-bar" style="width: 10%"></div>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="{{ asset('img-gg/r4.avif') }}" width="416" height="240" loading="lazy" alt="The Fitness Pack"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="{{ asset('img-gg/class-icon-4.png') }}" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="{{ route('download') }}" class="card-title">Calentamiento y vida saludable.</a>
                    </h3>
                  </div>

                  <p class="card-text">
                    Prepárate para brillar con una rutina de calentamiento energizante y adopta un estilo de vida saludable.
                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                      <p class="progress-label">Clase completa</p>

                      <span class="progress-value">98%</span>
                    </div>

                    <div class="progress-bg">
                      <div class="progress-bar" style="width: 98%"></div>
                    </div>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <p class="section-subtitle">Despierta tu curiosidad</p>

          <h2 class="h2 section-title text-center">aprende más en nuestros blogs</h2>

          <ul class="blog-list has-scrollbar">

            <li class="scrollbar-item">
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 440; --height: 270;">
                  <img src="https://img.freepik.com/foto-gratis/mujer-bebiendo-agua-despues-ejercicio_23-2149240213.jpg?size=626&ext=jpg&ga=GA1.2.1947279272.1693252669&semt=sph" width="440" height="270" loading="lazy"
                    alt="Going to the gym for the first time" class="img-cover">

                  <time class="card-meta" datetime="2023-08-21">21 agosto 2023</time>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="{{ route('guia') }}" class="card-title">Mantén tu Cuerpo Hidratado y Vital</a>
                  </h3>

                  <p class="card-text">
                    La hidratación es esencial para mantener nuestro cuerpo funcionando correctamente. No solo es importante para la salud física, sino también para el bienestar general...
                  </p>

                  <a href="{{ route('guia') }}" class="btn-link has-before">Leer más</a>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 440; --height: 270;">
                  <img src="{{ asset('img-gg/bg2.avif') }}" width="440" height="270" loading="lazy"
                    alt="Parturient accumsan cacus pulvinar magna" class="img-cover">

                  <time class="card-meta" datetime="2023-1-17">17 enero 2023</time>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="{{ route('guia') }}" class="card-title">DESCUBRIENDO LA IMPORTANCIA DE LAS RUTINAS DE EJERCICIO</a>
                  </h3>

                  <p class="card-text">
                    En medio del ajetreo y el bullicio de la vida moderna, a menudo encontramos nuestras agendas repletas de compromisos...
                  </p>

                  <a href="{{ route('guia') }}" class="btn-link has-before">Lee mas</a>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 440; --height: 270;">
                  <img src="https://img.freepik.com/fotos-premium/pierna-femenina-pisando-balanzas-cinta-metrica_53476-3874.jpg?size=626&ext=jpg&ga=GA1.1.1947279272.1693252669&semt=sph" width="440" height="270" loading="lazy"
                    alt="Risus purus namien parturient accumsan cacus" class="img-cover">

                  <time class="card-meta" datetime="2022-07-07">7 julio 2022</time>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="{{ route('guia') }}" class="card-title">COMPRENDIENDO EL VÍNCULO ENTRE EDAD Y PESO CORPORAL</a>
                  </h3>

                  <p class="card-text">
                    ¡Bienvenidos a un análisis enriquecedor! En este recorrido, exploraremos la estrecha relación entre la edad y el peso corporal...
                  </p>

                  <a href="{{ route('guia') }}" class="btn-link has-before">Lee mas</a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="section footer-top bg-dark has-bg-image" style="background-image: url('./assets/images/footer-bg.png')">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>

            <span class="span">GymGanized</span>
          </a>

          <p class="footer-brand-text">
            ¡Bienvenido a nuestra página web sobre el bienestar y la vida fitness! Aquí encontrarás todo lo que necesitas para alcanzar tus objetivos de salud y acondicionamiento físico.
          </p>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title has-before">Enlaces</p>
          </li>

          <li>
            <a href="{{ route('home') }}" class="footer-link">PAGINA DE INICIO</a>
          </li>

          <li>
            <a href="{{ route('nosotros') }}" class="footer-link">ACERCA DE NOSOTROS</a>
          </li>

          <li>
            <a href="{{ route('download') }}" class="footer-link">DESCARGAR APP</a>
          </li>

          <li>
            <a href="{{ route('guia') }}" class="footer-link">NUESTROS BLOG</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title has-before">Comunícate con nosotros</p>
          </li>

          <li class="footer-list-item">
            

          <li class="footer-list-item">
            <div class="icon">
              <ion-icon name="mail" aria-hidden="true"></ion-icon>
            </div>

            <div>
              <a href="Gymganized1@gmail.com" class="footer-link">Gymganized1@gmail.com</a>
            </div>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title has-before">Contacta con nosotros</p>
          </li>


          <li>
            <ul class="social-list">

              <li>
                <a href="https://www.facebook.com/profile.php?id=61550581810755" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="https://instagram.com/gymganized?igshid=MmU2YjMzNjRlOQ==" class="social-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

              <li>
                <a href="https://twitter.com/GymGanized2023" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 GymGanized. Todos los derechos reservados por <a href="#" class="copyright-link">GymGanized.</a>
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link has-before">
              Política de privacidad</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link has-before">Términos y condiciones</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up-sharp" aria-hidden="true"></ion-icon>
  </a>


 <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>


</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    @vite('resources/css/pets.css')
    <title>GYMGANIZED</title>
    <link rel="shortcut icon" href="Img-gg/logo-gg.png">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-800 font-family-karla">

  <nav class="bg-gray-900 shadow-lg">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex justify-between items-center py-6">
            <div>
                <!-- Website Logo -->
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="Img-gg/logo-gg.png" alt="Logo" class="h-14 w-25 mr-2">

                </a>
            </div>
            <!-- Primary Navbar items -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-white font-semibold hover:text-green-500 transition duration-300" >PAGINA DE INICIO</a>
                <a href="{{ route('nosotros') }}" class="text-white hover:text-green-500 font-semibold">ACERCA DE NOSOTROS</a>
                <a href="{{ route('download') }}" class="text-white hover:text-green-500 font-semibold">DESCARGAR APP</a>
                <a href="{{ route('guia') }}" class="font-semibold text-white hover:border-green-400 transition duration-300">NUESTROS BLOG</a>
                
            </div>
            <!-- Secondary Navbar items -->
            <div class="hidden md:flex items-center space-x-4">
                
                <div class="drawer drawer-end">
  <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
  <div class="drawer-content flex">
    <!-- Page content here -->
    <div class="avatar">
  <div class="w-12 rounded-full">
    <img src="{{ asset('images/' .Auth::user()->url) }}" />
  </div>
</div>
    <label for="my-drawer-4" class="drawer-button btn btn-primary bg-lime-500 text-white">{{ auth()->user()->username }}</label>
  </div> 
  <div class="drawer-side">
    <label for="my-drawer-4" class="drawer-overlay"></label>
    <ul class="menu p-4 w-90 min-h-full bg-gray-800 shadow-lg text-base-content">
      <!-- Sidebar content here 
      <div class="avatar">
        <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2 dis">
          <img src="{{ asset('images/' .Auth::user()->url) }}" />
          <h2 class="text-xl">
            <span class="text-2xl">{{ auth()->user()->username }}</span>
          </h2>
        </div>
      </div>-->
      <div class="flex bg-gray-800 shadow-lg items-center space-x-10 p-2">
      <div class="avatar bg-gray-800 shadow-lg">
        <div class="w-24 rounded-full bg-gray-800 shadow-lg ring ring-lime-500 ring-offset-base-100 ring-offset-2 dis">
          <img src="{{ asset('images/' .Auth::user()->url) }}" />
        </div>
      </div>
      <div>
      <h2 class="text-4xl">
            <span class="text-4xl text-lime-500">{{ auth()->user()->username }}</span>
          </h2>
      </div>
  </div>
  <div class="mt-10">
  <div class="">
  <div class="collapse bg-lime-600">
  <input type="checkbox" /> 
  <div class="collapse-title text-center text-xl font-medium text-white bg-lime-500">
Correo  
  </div>
  <div class="collapse-content"> 
  <div class="text-xl text-white mt-2">{{ auth()->user()->email }}</div>
  </div>
</div>
</div>
<div>
  <div class="mt-4">
  <div class="collapse bg-lime-600">
  <input type="checkbox" /> 
  <div class="collapse-title text-xl text-center font-medium text-white bg-lime-500">
Nombre  
  </div>
  <div class="collapse-content"> 
  <div class="text-xl text-white mt-2">{{ auth()->user()->name }}</div>
  </div>
</div>
</div>

  <div class="stats stats-vertical shadow bg-gray-800 mb-14 mt-14 mx-8">
  <div class="stat">
    <div class="stat-title text-white text-2xl">BMI</div>
    <div class="stat-value text-white text-3xl">18.5</div>
    <div class="stat-desc text-white text-xl">❤ Peso corporal</div>
  </div>
  <div class="border-b-indigo-500"></div>
  <div class="stat">
    <div class="stat-title text-white text-2xl">Hidratacion</div>
    <div class="stat-value text-white text-3xl">0.0</div>
    <div class="stat-desc text-white text-xl">💧 Litros</div>
  </div>
  <div class="border-b-indigo-500"></div>
  <div class="stat">
    <div class="stat-title text-white text-2xl">Calorias</div>
    <div class="stat-value text-white text-3xl">0.0</div>
    <div class="stat-desc text-white text-xl">🍖 kCal</div>
  </div>

</div>
</div>
<div>
<a href="{{ route('config_user') }}" class="collapse bg-blue-600 collapse-title text-xl text-center font-medium text-white ">
        Configuración
      </a>
</div>
<div class="mt-5">
<form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="collapse bg-red-600 collapse-title text-xl text-center font-medium text-white" type="submit" >Cerrar sesión</button>
                </form>
</div>
    </ul>
  </div>
</div>
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class="w-8 h-8 text-white hover:text-green-500" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- mobile menu -->
    <div class="hidden mobile-menu">
        <ul>
            <li><a href="{{ route('home') }}" class="block text-center py-4 px-8 font-medium text-lg text-white hover:bg-green-500 transition duration-300">PAGINA DE INICIO</a></li>
            <li><a href="{{ route('nosotros') }}" class="block text-center py-4 px-8 font-medium text-lg text-white hover:bg-green-500 transition duration-300">ACERCA DE NOSOTROS</a></li>
            <li><a href="{{ route('download') }}" class="block text-center py-4 px-8 font-medium text-lg text-white hover:bg-green-500 transition duration-300">DESCARGAR APP</a></li>
            <li><a href="{{ route('guia') }}" class="block text-center py-4 px-8 font-medium text-lg text-white hover:bg-green-500 transition duration-300">NUESTROS BLOG</a></li>

            <!-- Open the modal using ID.showModal() method -->
            <li>
              <li>
                <a class="block text-center py-4 px-8 font-medium text-lg text-white hover:bg-green-500 transition duration-300" onclick="my_modal_1.showModal()">{{ auth()->user()->username }}</a>
            <dialog id="my_modal_1" class="modal">
              <form method="dialog" class="modal-box">
                <div class="flex  shadow-lg items-center space-x-10 p-2">
                  <div class="avatar  shadow-lg">
                    <div class="w-24 rounded-full  shadow-lg ring ring-lime-500 ring-offset-base-100 ring-offset-2 dis">
                      <img src="{{ asset('images/' .Auth::user()->url) }}" />
                    </div>
                  </div>
                  <div>
                  <h2 class="text-4xl">
                        <span class="text-4xl text-lime-500">{{ auth()->user()->username }}</span>
                      </h2>
                  </div>
              </div>
              <div class="mt-10">
              <div class="">
              <div class="collapse bg-lime-600">
              <input type="checkbox" /> 
              <div class="collapse-title text-center text-xl font-medium text-white bg-lime-500">
            Correo  
              </div>
              <div class="collapse-content"> 
              <div class="text-xl text-white mt-2">{{ auth()->user()->email }}</div>
              </div>
            </div>
            </div>
            <div>
              <div class="mt-4">
              <div class="collapse bg-lime-600">
              <input type="checkbox" /> 
              <div class="collapse-title text-xl text-center font-medium text-white bg-lime-500">
            Nombre  
              </div>
              <div class="collapse-content"> 
              <div class="text-xl text-white mt-2">{{ auth()->user()->name }}</div>
              </div>
            </div>
            </div>
            
              <div class="stats stats-vertical shadow bg-gray-800 mb-12 mt-12 mx-16">
              <div class="stat">
                <div class="stat-title text-white text-2xl">BMI</div>
                <div class="stat-value text-white text-3xl">18.5</div>
                <div class="stat-desc text-white text-xl">❤ Peso corporal</div>
              </div>
              <div class="border-b-indigo-500"></div>
              <div class="stat">
                <div class="stat-title text-white text-2xl">Hidratacion</div>
                <div class="stat-value text-white text-3xl">0.0</div>
                <div class="stat-desc text-white text-xl">💧 Litros</div>
              </div>
              <div class="border-b-indigo-500"></div>
              <div class="stat">
                <div class="stat-title text-white text-2xl">Calorias</div>
                <div class="stat-value text-white text-3xl">0.0</div>
                <div class="stat-desc text-white text-xl">🍖 kCal</div>
              </div>
            
            </div>
            </div>
            <div>
            <a href="{{ route('config_user') }}" class="collapse bg-blue-600 collapse-title text-xl text-center font-medium text-white ">
                    Configuración
                  </a>
            </div>
            <div class="mt-5">
            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="collapse bg-red-600 collapse-title text-xl text-center font-medium text-white" type="submit" >Cerrar sesión</button>
                            </form>
            </div>
            <div class="modal-action">
              <button class="btn">Cerrar</button>
            </div>
                </ul>
              </form>
            </dialog>
              </li>
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                    <button class="block w-full py-4 px-8 font-medium text-lg text-white bg-lime-500 rounded hover:bg-green-400 transition duration-300" type="submit">CERRAR SESION</button>
                </form>
            </li>
        </ul>
    </div>
</nav>

<script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>
</nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center pt-12 pb-2">
            <p class="font-bold text-5xl" style="color: #B0EE3C">PESO SEGÚN LA EDAD</p>
            <p class="text-lg text-white">
              Comprendiendo el vínculo entre edad y peso corporal
            </p>
        </div>
    </header>

    <!-- Topic Nav 
    <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a
                href="#"
                class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open"
            >
                Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>
        <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Technology</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Automotive</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Finance</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Politics</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Culture</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Sports</a>
            </div>
        </div>
    </nav>-->


    <div class="container  mx-auto flex flex-wrap py-6">

      <!-- Post Section -->
      <section class="w-full md:w-2/3 flex flex-col items-center px-3">

          <article class="flex flex-col shadow my-4">
              <!-- Article Image -->
              <a href="#" class="hover:opacity-75">
                  <img class="w-full h-full" src="https://img.freepik.com/foto-gratis/mujer-deportiva-encuentra-pared-gris-satisfecha-resultados-entrenamiento-fisico-dieta-sosteniendo-bascula-usa-parte-superior-polainas-sostiene-manzana_343596-6825.jpg?w=1380&t=st=1693273431~exp=1693274031~hmac=2206e4edcdcbe7945aa5b7814d4fefe0337533de499e9a10d0816a743df704b7">
              </a>
              <div class="bg-gray-900 flex flex-col justify-start p-6">
                 <!-- <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">Importancia de los habitos</a>
                 <p href="#" class="text-sm pb-8">
                      Por <a href="#" class="font-semibold hover:text-gray-800">Gymanized</a>, Published on April 25th, 2020
                  </p>-->
                  <h1 class="text-2xl font-bold pb-3" style="color: #B0EE3C"><b>INTRODUCCÍON</b></h1>
                  <p class="pb-3 text-justify text-white">¡Bienvenidos a un análisis enriquecedor! En este recorrido, exploraremos la estrecha relación entre la edad y el peso corporal. A lo largo de las distintas etapas de la vida, el peso puede experimentar variaciones notables debido a diversos factores. Desde la infancia hasta la adultez mayor, investigaremos cómo el crecimiento, el desarrollo y el envejecimiento influyen en nuestra relación con el peso. Además, resaltaremos la importancia de mantener una perspectiva integral que abarque la nutrición, la actividad física y el bienestar emocional. ¡Acompáñanos mientras desentrañamos los hilos de esta conexión intrigante!</p>
                  <br>
                  <h1 class="text-2xl font-bold pb-3" style="color: #B0EE3C"><b>LA RELACIÓN ENTRE EDAD Y PESO: INFANCIA Y ADOLESCENCIA</b></h1>
                  <p class="pb-3 text-justify text-white">En los primeros años de vida, el peso juega un papel crucial en el crecimiento y el desarrollo. Los bebés y los niños pequeños experimentan rápidos incrementos de peso a medida que sus cuerpos se desarrollan y fortalecen. Durante la adolescencia, es común experimentar cambios en el peso debido a los cambios hormonales y al desarrollo físico.</p><br>

                  <p class="pb-3 text-justify text-white">Es importante recordar que los niños y adolescentes aún están en crecimiento, por lo que el foco principal debe estar en una alimentación equilibrada y en el fomento de la actividad física en lugar de obsesionarse con los números en la báscula.</p><br>

                  <h1 class="text-2xl font-bold pb-3" style="color: #B0EE3C"><b>ADULTEZ TEMPRANA Y MEDIA</b></h1>
                  <p class="pb-3 text-justify text-white">En la adultez temprana y media, el metabolismo tiende a desacelerar gradualmente y el mantenimiento de un peso saludable puede requerir un enfoque más consciente. A medida que envejecemos, es posible que perdamos masa muscular y ganemos grasa, lo que puede influir en nuestro peso y composición corporal. Sin embargo, no se trata solo de la cantidad de peso, sino de la calidad de la masa corporal.</p>
                  <p class="pb-3 text-justify text-white">Practicar hábitos de estilo de vida saludables, como una dieta equilibrada y la actividad física regular, es esencial para mantener un peso óptimo y una salud general en esta etapa.</p><br>

                  <h1 class="text-2xl font-bold pb-3" style="color: #B0EE3C"><b>ADULTEZ MAYOR</b></h1>
                  <p class="pb-3 text-justify text-white">En la adultez mayor, la densidad ósea y la masa muscular pueden disminuir, lo que afecta el peso corporal. Es fundamental centrarse en la prevención de la osteoporosis y el mantenimiento de la fuerza física mediante el ejercicio adecuado y una alimentación rica en nutrientes.</p><br>

                  <!--<h1 class="text-2xl font-bold pb-3">Conclusion</h1>-->
                  <h1 class="text-2xl font-bold pb-3 " style="color: #B0EE3C"><b>MANTENIENDO UN ENFOQUE EQUILIBRADO</b></h1><br>

                  <p class="pb-3 text-justify text-white">Más allá de la edad, es crucial recordar que la salud no se define únicamente por el peso. El peso es solo una medida y no siempre refleja la salud interna y el bienestar general. La autoestima y la salud mental también juegan un papel importante en nuestra percepción del peso.</p><br>
                  <p class="pb-3 text-justify text-white">En lugar de obsesionarse con un número específico en la báscula, es recomendable adoptar un enfoque holístico para la salud. Esto incluye:</p><br>

                    <li class="text-justify text-white"><b style="color: #B0EE3C">Manteniendo un Enfoque Equilibrado:</b> Más allá de la edad, es crucial recordar que la salud no se define únicamente por el peso. El peso es solo una medida y no siempre refleja la salud interna y el bienestar general. Reconociendo esta interconexión, es esencial adoptar un enfoque integral para el bienestar. Aquí hay algunas pautas que pueden contribuir a una vida saludable y equilibrada en todas las etapas.</li><br>

                    <li class="text-justify text-white"><b style="color: #B0EE3C" >Alimentación Nutritiva: </b>La elección de alimentos es una de las bases fundamentales para la salud. Opta por una alimentación variada y rica en nutrientes. Incluye una amplia gama de frutas, verduras, proteínas magras, granos integrales y grasas saludables en tu dieta. Evita las restricciones alimentarias extremas, ya que pueden afectar negativamente tu bienestar. Además, escucha atentamente las señales de hambre y saciedad de tu cuerpo. Esto te ayudará a establecer una relación saludable con la comida y a satisfacer tus necesidades nutricionales de manera adecuada.</li><br>

                    <li class="text-justify text-white"><b style="color: #B0EE3C" >Actividad Física Regular: </b>Mantenerse activo es esencial para el funcionamiento óptimo del cuerpo en todas las edades. Encuentra actividades físicas que disfrutes y que se adapten a tu estilo de vida. Ya sea caminar, nadar, correr, practicar yoga o cualquier otra actividad, asegúrate de mover tu cuerpo de manera regular. La actividad física no solo ayuda a mantener un peso saludable, sino que también contribuye a la salud cardiovascular, muscular y ósea. Establece metas realistas y busca oportunidades para incorporar la actividad física en tu rutina diaria.</li><br>

                    <li class="text-justify text-white"><b style="color: #B0EE3C" >Sueño de Calidad: </b>El sueño es un componente vital para la salud en todas las etapas de la vida. Establecer una rutina de sueño regular y crear un ambiente propicio para el descanso puede mejorar significativamente tu bienestar general. Prioriza la calidad del sueño al apuntar a una cantidad adecuada de horas de descanso. Evita las distracciones tecnológicas antes de acostarte y crea un espacio tranquilo y cómodo para dormir. El sueño de calidad no solo afecta tu energía y estado de ánimo, sino que también influye en la capacidad de tu cuerpo para mantener un peso saludable.</li><br>

                    <li class="text-justify text-white"><b style="color: #B0EE3C" >Bienestar Mental: </b>La salud mental es un aspecto crucial de tu bienestar integral. El estrés y la ansiedad pueden tener un impacto directo en tu relación con el peso. Practicar técnicas de manejo del estrés, como la meditación, el yoga o la terapia, puede ayudarte a mantener un equilibrio mental y emocional. Cultivar una actitud positiva y desarrollar habilidades para afrontar los desafíos de la vida puede influir positivamente en tu salud en general. Recuerda que cuidar tu mente es tan importante como cuidar tu cuerpo..</li><br>

                    <h1 class="text-2xl font-bold pb-3" style="color: #B0EE3C"><b>CONCLUSIÓN:</b></h1>
                    <p class="pb-3 text-justify text-white">En resumen, la relación entre la edad y el peso es compleja y multifacética. Sin embargo, mantener un enfoque equilibrado hacia la salud puede tener un impacto positivo en todas las etapas de la vida. Al priorizar una alimentación nutritiva, la actividad física regular, el sueño de calidad y el bienestar mental, puedes crear una base sólida para una vida plena y saludable. Recuerda que tu bienestar es una suma de muchas partes, y cuidar todas ellas te permitirá disfrutar de una vida activa y enriquecedora en cualquier etapa.</p><br>

              </div>
          </article>

          <div class="w-full flex pt-2 pb-4">
              <a href="{{ route('vacunacion') }}" class="w-1/2 bg-gray-900 rounded-l-lg shadow hover:shadow-md text-left p-6">
                  <p class="text-lg  font-bold flex items-center" style="color: #B0EE3C"><i class="fas fa-arrow-left pr-1"></i>PAGINA ANTERIOR</p>
                  <p class="pt-2 text-white">HIDRATACIÓN SALUDABLE</p>
              </a>
              <a href="{{ route('cuidados') }}" class="w-1/2 bg-gray-900 shadow rounded-r-lg hover:shadow-md text-right p-6">
                  <p class="text-lg  font-bold flex items-center justify-end" style="color: #B0EE3C">SIGUIENTE PAGINA<i class="fas fa-arrow-right pl-1"></i></p>
                  <p class="pt-2 text-white">ALCANZA TU POTENCIAL</p>
              </a>
          </div>

          <!--<div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
              <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
                  <img src="https://source.unsplash.com/collection/1346951/150x150?sig=1" class="rounded-full shadow h-32 w-32">
              </div>
              <div class="flex-1 flex flex-col justify-center md:justify-start">
                  <p class="font-semibold text-2xl">David</p>
                  <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel neque non libero suscipit suscipit eu eu urna.</p>
                  <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-blue-800 pt-4">
                      <a class="" href="#">
                          <i class="fab fa-facebook"></i>
                      </a>
                      <a class="pl-4" href="#">
                          <i class="fab fa-instagram"></i>
                      </a>
                      <a class="pl-4" href="#">
                          <i class="fab fa-twitter"></i>
                      </a>
                      <a class="pl-4" href="#">
                          <i class="fab fa-linkedin"></i>
                      </a>
                  </div>
              </div>
          </div>-->

      </section>

      <!-- Sidebar Section -->
      <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

      <div class="w-full bg-gray-900 shadow flex rounded-lg flex-col my-4 p-6">
              <p class="text-xl font-semibold pb-5 text-center" style="color: #B0EE3C">DESCARGA NUESTRA APP</p>
              <p class="pb-2 text-justify text-white">Descarga GYMGANIZED y desencadena tu potencial fitness. Organiza tus metas, entrena con propósito y alcanza la mejor versión de ti mismo. Tu camino hacia el éxito comienza con un solo clic. ¡Únete hoy!</p>
              <a href="{{ route('home') }}" style="background: #B0EE3C"  class="w-full text-white hover:opacity-75 font-bold text-sm uppercase rounded flex items-center justify-center px-2 py-3 mt-4">
                  DESCARGA GYMGANIZED
              </a>
          </div>

          <div class="w-full bg-gray-900 text-center rounded-lg shadow flex flex-col my-4 p-6">
              <p class="text-2xl font-semibold pb-5" style="color: #B0EE3C">Instagram</p>
              <div class="grid grid-cols-3 gap-3">
                  <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/vista-angulo-hombre-musculoso-irreconocible-preparandose-levantar-barra-club-salud_637285-2497.jpg?w=1060&t=st=1693252945~exp=1693253545~hmac=6ef8ef88eed623f0be08623ea147fedacc41273619caa6cbf1f292ce8464fc08">
                  <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/fotos-premium/cierrese-encima-vista-lateral-pesas-gimnasia-negras-fila-gimnasio_232070-1622.jpg?w=360">
                  <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/atractiva-mujer-delgada-morena-vestida-ropa-deportiva-sostiene-barbel_613910-364.jpg?size=626&ext=jpg&ga=GA1.1.1947279272.1693252669&semt=sph">
                  <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/fotos-premium/interior-gimnasio-moderno-equipos_23-2147949746.jpg?size=626&ext=jpg&ga=GA1.2.1947279272.1693252669&semt=sph">
                  <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/hombre-fuerte-entrenando-gimnasio_1303-23478.jpg?size=626&ext=jpg&ga=GA1.2.1947279272.1693252669&semt=sph">
                  <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/fotos-premium/gimnasio-entrenamiento-pesado-multiples-equipos-trabajando-al-azar-gimnasio-gran-musculo-fuerte_789096-7064.jpg?size=626&ext=jpg&ga=GA1.2.1947279272.1693252669&semt=sph">
                  <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/gente-haciendo-ciclismo-indoor_23-2149270268.jpg?size=626&ext=jpg&ga=GA1.2.1947279272.1693252669&semt=sph">
                  <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/atletico-hombre-mujer-pesas-entrenando-practicando-gimnasio_155003-13045.jpg?size=626&ext=jpg&ga=GA1.2.1947279272.1693252669&semt=sph">
                  <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/fotos-premium/filas-pesas-gimnasio-mano_937082-575.jpg?size=626&ext=jpg&ga=GA1.1.1947279272.1693252669&semt=sph">
              </div>
              <a href="https://instagram.com/gymganized?igshid=MmU2YjMzNjRlOQ==" style="background: #B0EE3C" class="w-full text-white hover:opacity-75 font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-6">
                  <i class="fab fa-instagram mr-2"></i> @GymGanized
              </a>
          </div>

          <div class="w-full bg-gray-900 text-center rounded-lg shadow flex flex-col my-4 p-6">
            <p class="text-2xl font-semibold pb-5" style="color: #B0EE3C">Facebook</p>
            <div class="grid grid-cols-3 gap-3">
                <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/chica-atletica-hace-ejercicios-equipo-deportivo-gimnasio_654080-1043.jpg?size=626&ext=jpg&ga=GA1.1.1947279272.1693252669&semt=sph">
                <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/mujer-porcion-hombre-gimnasio_23-2149627073.jpg?size=626&ext=jpg&ga=GA1.2.1947279272.1693252669&semt=sph">
                <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/fotos-premium/fit-mujer-entrenamiento-triceps-levantando-pesas-gimnasio_136403-881.jpg?size=626&ext=jpg&ga=GA1.2.1947279272.1693252669&semt=sph">
                <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/deportista-irreconocible-practicando-campana-caldera-entrenamiento-cruzado-gimnasio_637285-457.jpg?size=626&ext=jpg&ga=GA1.2.1947279272.1693252669&semt=sph">
                <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/hombre-musculoso-haciendo-flexiones-pesas_7502-4776.jpg?size=626&ext=jpg&ga=GA1.2.1947279272.1693252669&semt=sph">
                <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/mancuernas-fitness_335224-876.jpg?size=626&ext=jpg&ga=GA1.2.1947279272.1693252669&semt=sph">
                <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/joven-sano-atleta-haciendo-ejercicio-cuerdas-gimnasio-modelo-masculino-soltero-practicando-duro-entrenando-parte-superior-cuerpo-concepto-estilo-vida-saludable-deporte-fitness-culturismo-bienestar_155003-27879.jpg?size=626&ext=jpg&ga=GA1.1.1947279272.1693252669&semt=sph">
                <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/atletico-hombre-mujer-pesas-entrenando-practicando-gimnasio_155003-13043.jpg?size=626&ext=jpg&ga=GA1.1.1947279272.1693252669&semt=sph">
                <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/levantador-potencia-profesional-vendaje-pierna-sosteniendo-martillo-deportivo-calentando-antes-entrenamiento-recuperacion-lesiones-deporte-compromiso-motivacion_613910-21610.jpg?size=626&ext=jpg&ga=GA1.1.1947279272.1693252669&semt=sph">
            </div>
            <a href="https://www.facebook.com/profile.php?id=61550581810755" style="background: #B0EE3C" class="w-full text-white hover:opacity-75 font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-6">
                <i class="fab fa-instagram mr-2"></i> @GymGanized
            </a>
        </div>

        <div class="w-full bg-gray-900 text-center rounded-lg shadow flex flex-col my-4 p-6">
          <p class="text-2xl font-semibold pb-5" style="color: #B0EE3C">Twitter</p>
          <div class="grid grid-cols-3 gap-3">
            <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/fotos-premium/gimnasio-pesas-cartel-rojo-que-dice-ig_466938-252.jpg?size=626&ext=jpg&ga=GA1.2.1947279272.1693252669&semt=sph">
            <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/fitness-gimnasio_144627-31081.jpg?size=626&ext=jpg&ga=GA1.2.1947279272.1693252669&semt=sph">
            <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/fotos-premium/mujer-mediana-edad-prodigio-fitness-que-ejemplifica-dedicacion-disciplina_223582-3220.jpg?size=626&ext=jpg&ga=GA1.2.1947279272.1693252669&semt=sph">
            <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/equipo-entrenamiento_53876-16560.jpg?size=626&ext=jpg&ga=GA1.2.1947279272.1693252669&semt=sph">
            <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/retrato-joven-deportista-haciendo-sentadillas-peso-aislado-sobre-fondo-verde-neon_155003-45633.jpg?t=st=1693257528~exp=1693258128~hmac=f0c05778384cc1ea966f916a410538b91fd34b5289bcf32c13c878e4f6100132">
            <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/mujer-haciendo-sentadillas-maquina-smith_7502-9063.jpg?size=626&ext=jpg&ga=GA1.1.1947279272.1693252669&semt=sph">
            <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/hombre-moviendo-rueda-neumatico-gigante-gimnasio_651396-296.jpg?size=626&ext=jpg&ga=GA1.1.1947279272.1693252669&semt=sph">
            <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/hombre-musculoso-haciendo-flexiones-lado_7502-4775.jpg?size=626&ext=jpg&ga=GA1.1.1947279272.1693252669&semt=sph">
            <img class="hover:opacity-75 h-28 w-32" src="https://img.freepik.com/foto-gratis/joven-entrenando-gimnasio-culturismo_23-2149552273.jpg?size=626&ext=jpg&ga=GA1.2.1947279272.1693252669&semt=sph">
          </div>
          <a href="https://twitter.com/GymGanized2023" style="background: #B0EE3C" class="w-full text-white hover:opacity-75 font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-6">
              <i class="fab fa-instagram mr-2"></i> GymGanized2023
          </a>
      </div>

      </aside>

  </div>
<!--
    <footer class="w-full border-t bg-white pb-12">
        <div
            class="relative w-full flex items-center invisible md:visible md:pb-12"
            x-data="getCarouselData()"
        >
            <button
                class="absolute bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 ml-12"
                x-on:click="decrement()">
                &#8592;
            </button>
            <template x-for="image in images.slice(currentIndex, currentIndex + 6)" :key="images.indexOf(image)">
                <img class="w-1/6 hover:opacity-75" :src="image">
            </template>
            <button
                class="absolute right-0 bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 mr-12"
                x-on:click="increment()">
                &#8594;
            </button>
        </div>
        <div class="w-full container mx-auto flex flex-col items-center">
            <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
                <a href="#" class="uppercase px-3">About Us</a>
                <a href="#" class="uppercase px-3">Privacy Policy</a>
                <a href="#" class="uppercase px-3">Terms & Conditions</a>
                <a href="#" class="uppercase px-3">Contact Us</a>
            </div>
            <div class="uppercase pb-6">&copy; myblog.com</div>
        </div>
    </footer>

    <script>
        function getCarouselData() {
            return {
                currentIndex: 0,
                images: [
                    'https://source.unsplash.com/collection/1346951/800x800?sig=1',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=2',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=3',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=4',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=5',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=6',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=7',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=8',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=9',
                ],
                increment() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
                },
                decrement() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
                },
            }
        }
    </script> -->
    <footer class="bg-gray-900 lg:grid lg:grid-cols-5">
      <div class="relative block h-32 lg:col-span-2 lg:h-full">
        <img
          src="https://images.unsplash.com/photo-1642370324100-324b21fab3a9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1548&q=80"
          alt=""
          class="absolute inset-0 h-full w-full object-cover"
        />
      </div>
    
      <div class="px-4 py-16 sm:px-6 lg:col-span-3 lg:px-8">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">
          <div>
            <p>
              <span class="text-2xl uppercase tracking-wide" style="color: #B0EE3C;">
                GymGanized
              </span>
    
              <a
                href="{{ route('download') }}"
                class="block text-2xl font-medium text-white hover:opacity-75 sm:text-3xl"
              >
               DESCARGA LA APP
              </a>
            </p>
    
            <ul class="mt-8 space-y-1 text-sm text-white">
              <li>Somos lo mejor para ti</li>
              <li>Confia en nosotros</li>
            </ul>
    
            <ul class="mt-8 flex gap-6">
              <li>
                <a
                  href="https://www.facebook.com/profile.php?id=61550581810755"
                  rel="noreferrer"
                  target="_blank"
                  class=" transition hover:opacity-75"  style="color: #B0EE3C;"
                >
                  <span class="sr-only">Facebook</span>
    
                  <svg
                    class="h-6 w-6"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </li>
    
              <li>
                <a
                  href="https://instagram.com/gymganized?igshid=MmU2YjMzNjRlOQ=="
                  rel="noreferrer"
                  target="_blank"
                  class=" transition hover:opacity-75" style="color: #B0EE3C;"
                >
                  <span class="sr-only">Instagram</span>
    
                  <svg
                    class="h-6 w-6"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </li>
    
              <li>
                <a
                  href="https://twitter.com/GymGanized2023"
                  rel="noreferrer"
                  target="_blank"
                  class=" transition hover:opacity-75" style="color: #B0EE3C;"
                >
                  <span class="sr-only">Twitter</span>
    
                  <svg
                    class="h-6 w-6"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                  >
                    <path
                      d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                    />
                  </svg>
                </a>
              </li>
    
              
    
              
            </ul>
          </div>
    
          <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div>
              <p class="font-medium" style="color: #B0EE3C">PAGINAS</p>
    
              <ul class="mt-6 space-y-4 text-sm">
                <li>
                  <a href="{{ route('home') }}" class="text-white transition hover:opacity-75">
                    PAGINA DE INICIO
                  </a>
                </li>
    
                <li>
                  <a href="{{ route('nosotros') }}" class="text-white transition hover:opacity-75">
                    ACERCA DE NOSOTROS
                  </a>
                </li>
    
                <li>
                  <a href="{{ route('download') }}" class="text-white transition hover:opacity-75">
                    DESCARGAR APP
                  </a>
                </li>
                
                <li>
                  <a href="{{ route('guia') }}" class="text-white transition hover:opacity-75">
                    NUESTROS BLOG
                  </a>
                </li>
    
                
    
              </ul>
            </div>
    
            <div>
              <p class="font-medium" style="color: #B0EE3C">CONFIGURACION</p>
    
              <ul class="mt-6 space-y-4 text-sm">

                <li>
                  <a href="{{ route('posts.index') }}" class="text-white transition hover:opacity-75">
                    USUARIO
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </div>
    
        <div class="mt-12 border-t border-gray-100 pt-12">
          <div class="sm:flex sm:items-center sm:justify-between">
            <ul class="flex flex-wrap gap-4 text-xs">
              <li>
                <a href="#" class="text-white transition hover:opacity-75">
                  Terminos y condiciones
                </a>
              </li>
    
              <li>
                <a href="#" class="text-white transition hover:opacity-75">
                  Politicas de privacidad
                </a>
              </li>
            </ul>
    
            <p class="mt-8 text-xs text-white sm:mt-0">
              &copy; 2023. <b style="color: #B0EE3C">GYMGANIZED</b>. Reservados todos los derechos.
            </p>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>
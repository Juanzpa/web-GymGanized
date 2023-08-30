<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    @vite('resources/css/pets.css')
    <title>GYMGANIZED</title>
    <link rel="shortcut icon" href="Img-gg/logo-gg.png">

    <!-- NUEVO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

 <!-- Nav -->

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
</head>

<body class="bg-gray-800">
  
    <section class="py-10 bg-white sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="grid items-center grid-cols-1 lg:grid-cols-2 gap-x-12 xl:gap-x-24 gap-y-12">
            <div class="relative lg:mb-12">
              <img class="absolute -right-0 -bottom-8 xl:-bottom-12 xl:-right-4" src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/dots-pattern.svg" alt="" />
              <div class="pl-12 pr-6">
                <img class="relative rounded-full" src="{{ asset('img-gg/joven.jpg') }}" alt="" />
              </div>
            </div>
            <div class="2xl:pl-16">
              <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-6xl lg:leading-tight">¿Quienes <span style="color: #B0EE3C;" class="font-bold">somos</span> nosotros?</h2>
              <p class="text-xl  text-black mt-9">¡Bienvenido a <span style="color: #B0EE3C;" class="font-bold">GymGanized!</span><p />
              <p class="text-lg  text-black mt-3">
                En GymGanized, no solo estamos comprometidos con la forma física, sino también con tu bienestar integral. Somos un equipo apasionado de profesionales del fitness y la salud que está aquí para inspirarte y acompañarte en tu viaje hacia una vida más activa y saludable.
              </p> 
            </div>
          </div>
        </div>
      </section>
    
      <section class="bg-gray-800 ">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class=" text-white sm:text-lg ">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center"style="color: #B0EE3C;">Mision</h2>
                <p class="mb-4">Nuestra mision es proporcionar a nuestros miembros un ambiente motivador y seguro para alcanzar sus objetivos de fitness y bienestar nos esforzamos por brindar un excelente servicio al cliente y ofrecer programas de entretenimiento de calidad para ayudar a nuestros miembros a lograr sus metas de acondicionamiento fisico</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="{{ asset('img-gg/hombre.jpg') }}" alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ asset('img-gg/imagen2.jpg') }}" alt="office content 2">
            </div>
        </div>
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class=" text-white sm:text-lg ">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center"style="color: #B0EE3C;">Vision</h2>
                <p class="mb-4 ">Nuestra vision es ser la mejor opcion fitness en la comunidad, reconocida por nuestro compromiso con la excelencia en el servicio al cliente, programas de entrenamiento innovadores y atencion personalizada a cada miembro. Buscamos ser lideres en el mercado del fitness y ser reconocidos por nuestro impacto positivo en la salud y el bienestar de nuestros miembros</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="{{ asset('img-gg/imagen4.jpg') }}" alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ asset('img-gg/joven.jpg') }}" alt="office content 2">
            </div>
        </div>
    </section>
    
      <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
          <div class="max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tight text-black sm:text-5xl">Integrantes de <span style="color: #B0EE3C;">¡GymGanized!</span> </h2>
            <p class="mt-6 text-lg leading-8 text-black">Nuestro equipo está compuesto por estudiantes apasionados y comprometidos que comparten una visión común. Cada miembro aporta su experiencia y habilidades únicas, creando un ambiente de colaboración y creatividad que impulsa nuestro éxito.</p>
          </div>
          <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            <li>
              <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div>
                  <h3 class="text-xl font-semibold leading-7 tracking-tight  text-black">Rogers Daniel Deleon Escobar </h3>
                  <p class="text-lg font-semibold leading-6" style="color: #B0EE3C;">Developer / FrontEnd</p>
                </div>
              </div>
            </li>
    
            <li>
              <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div>
                  <h3 class="text-xl font-semibold leading-7 tracking-tight text-black">Kevin Josue Aguilera Moreno</h3>
                  <p class="text-lg font-semibold leading-6" style="color: #B0EE3C;">Developer / BackEnd</p>
                </div>
              </div>
            </li>
    
            <li>
              <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div>
                  <h3 class="text-xl font-semibold leading-7 tracking-tight text-black">Alan Isai Delgado Elias</h3>
                  <p class="text-lg font-semibold leading-6" style="color: #B0EE3C;">Developer / FrontEnd</p>
                </div>
              </div>
            </li>
    
            <li>
              <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div>
                  <h3 class="text-xl font-semibold leading-7 tracking-tight text-black">Juan Pablo Escobar Guzman</h3>
                  <p class="text-lg font-semibold leading-6" style="color: #B0EE3C;">Developer / BackEnd</p>
                </div>
              </div>
            </li>
    
            <li>
              <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div>
                  <h3 class="text-xl font-semibold leading-7 tracking-tight text-black">Axel Gerardo Barahona Lopez</h3>
                  <p class="text-lg font-semibold leading-6" style="color: #B0EE3C;">Developer / BackEnd</p>
                </div>
              </div>
            </li>
    
            <!-- More people... -->
    
    
          </ul>
        </div>
      </div>

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

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
	<script>
		//Init tooltips
		tippy('.avatar')
	</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/pets.css')
    <title>ClickPet</title>
    <link rel="shortcut icon" href="img/perro.png">
</head>

<!-- Podemos modificar para que el correo tenga un diseño bonito -->

<body class="bg-white">
    <!-- component -->
<div class="h-screen flex items-center justify-center">

    <card class="relative h-[30rem] sm:h-96 w-[35rem] rounded-lg">
    
    <!-- Background Image -->
    <img src="https://img.freepik.com/vector-gratis/fondo-colorido-modelo-huellas-pata-perro-o-gato_1017-30662.jpg?w=996&t=st=1683639719~exp=1683640319~hmac=d0ecd0b9aecb5c7d1fe29cc8ceaa2ac20e61530dcb5f6c8a7b54cbec6365cba9" class="object-cover w-full h-full rounded-lg" />
    
    <!-- Content -->
    <div class="absolute w-full h-full bottom-0 bg-gradient-to-r from-fuchsia-700/30 to-violet-700 rounded-lg flex flex-col items-center justify-center text-center">
    
          <!-- Company Logo -->
          
  
          <!-- Quotes -->
          <p class="text-lg px-14 text-gray-300 mt-10"><strong>Nombre:</strong> {{ $nombre }}</p>
          <p class="text-lg px-14 text-gray-300 mt-10"><strong>Correo electrónico:</strong> {{ $correo }}</p>
          <p class="text-lg px-14 text-gray-300 mt-10"><strong>Teléfono:</strong> {{ $telefono }}</p>
          <p class="text-lg px-14 text-gray-300 mt-10"><strong>Mensaje:</strong></p>
          <p class="text-lg px-14 text-gray-300 mt-10">{{ $mensaje }}</p>

      </div>

    </card>
  
  </div>
</body>
</html>
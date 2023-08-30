<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <<title>ClickPet</title>
    <link rel="shortcut icon" href="img/perro.png">
    @vite('resources/css/app.css')
</head>
<body class="bg-no-repeat bg-cover bg-center " style="background-image: url('{{ asset('img/fond2.jpg') }}');">
    <header class="p-7 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">
                Clickpet
            </h1>

            @auth
            <nav class="flex gap-4 items-center">
                <a class="font-black uppercase text-gray-600 text-sm " href="#">Bienvenido: {{ auth()->user()->username }}</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('addpet') }}" class="font-black uppercase text-gray-600 text-sm">| Dar en adopcion |</a>
                    <button class="font-black uppercase text-gray-600 text-sm" type="submit">Cerrar session</button>
                </form>
            </nav>
            @endauth

            @guest
                <nav class="flex gap-4 items-center">
                    <a class="font-black uppercase text-gray-600 text-sm" href="{{ route('register') }}">Crear cuanteta</a>
                    <a href="{{ route('login') }}" class="font-black uppercase text-gray-600 text-sm">Iniciar session</a>
                </nav>
            @endguest

            
        </div>
    </header>

    <main class="container mx-auto p-10">
        <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')

    </main>

    

</body>
</html>
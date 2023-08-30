<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>GYMGANIZED</title>
    <link rel="shortcut icon" href="Img-gg/logo-gg.png">
</head>
<body class="bg-gray-900">
    <section class="relative flex flex-wrap lg:h-screen lg:items-center">
        <div class="w-full px-4 py-12 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-24">
        <div class="mx-auto max-w-lg text-center">
            <h1 class="text-2xl font-bold sm:text-4xl text-lime-500">Iniciar sesion GymGanized</h1>
    
            <p class="mt-4 text-white sm:text-xl">
                "¡GymGanized: ¡Forja tu mejor versión! Un paso, una meta, un cambio. Transforma tu cuerpo, eleva tu vida."
            </p>
        </div>
    
        <form method="POST" action="{{ route('login') }}" novalidate class="mx-auto mb-0 mt-8 max-w-md space-y-4">
            @csrf

            @if ('mensaje')
                    <p class="bg-lime-400 text-white rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
                @endif


            <!-- Form 1-->
            <div>
            <label for="email" class="sr-only">Correo electronico</label>
    
            <div class="relative">
                <input
                id="email" name="email" type="email" placeholder="Your email"
                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm text-lime-500"
                />
    
                <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 text-gray-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                    />
                </svg>
                </span>
            </div>
            
            </div>

            @error('email')
                    <p class="bg-red-500 text-white rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror

    
            <!-- Form 2-->
            <div>
            <label for="password" class="sr-only">Contraseña</label>
    
            <div class="relative">
                <input
                id="password" name="password" type="password" placeholder="Password"
                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm text-lime-500"
                />
    
                <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 text-gray-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                    />
                </svg>
                </span>
            </div>
    
            </div>

            @error('password')
            <p class="bg-red-500 text-white rounded-lg text-sm p-2 text-center">{{ $message }}</p>
        @enderror

    
            <div class="flex items-center justify-between">
            <p class="text-white text-xl">
                ¿Sin cuenta?
                <a class="underline text-lime-500" href="{{ route('register') }}"><b>Registrarse</b></a>
            </p>
    
            <input type="submit" value="Iniciar sesion" class="mt-3 bg-lime-500 hover:bg-white hover:text-lime-500 transition-color cursor-pointer uppercase font-bold  p-3 text-white rounded-lg">
            </div>
        </form>
        </div>
    
        <div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2">
        <img
            alt="Welcome"
            src="{{ asset('Img-gg/lg-1.avif') }}"
            class="absolute inset-0 h-full w-full object-cover"
        />
        </div>
    </section>
</body>
</html>
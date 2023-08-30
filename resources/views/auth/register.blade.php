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
<body class="m-0 p-0 bg-gray-900">
    <section class="relative flex flex-wrap lg:h-screen lg:items-center">
        <div class="w-full px-4  sm:px-6  lg:w-1/2 lg:px-8 ">
        <div class="mx-auto max-w-lg text-center">
            <h1 class="text-2xl font-bold sm:text-4xl text-lime-500">Iniciar sesión GymGanized</h1>
    
            <p class="mt-4 text-white text-xl">
                "¡GymGanized, tu camino hacia el cambio! Cada paso cuenta, cada esfuerzo suma. ¡Transforma tu cuerpo, eleva tu alma!"
            </p>
        </div>
    
        <form action="{{ route('register') }}" method="POST" novalidate class="mx-auto mb-0 mt-8 max-w-md space-y-4">
            @csrf
    
    
            <!-- Form 1-->
            <div>
            <label for="name" class="sr-only">Nombre</label>
    
            <div class="relative">
                <input
                id="name" name="name" type="text" placeholder="Full name"
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
                    d="M17 26a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                    />
                </svg>
                </span>
            </div>
            
            </div>

            @error('name')
                    <p class="bg-lime-500 text-white rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
    
            <!-- Form 2-->
            <div>
                <label for="username" class="sr-only">Usuario</label>
        
                <div class="relative">
                    <input
                    id="username" name="username" type="text" placeholder="Write an Username"
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
                        d="M17 26a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                        />
                    </svg>
                    </span>
                </div>
                
                </div>

            @error('username')
                    <p class="bg-lime-500 text-white rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                
            <!-- Form 3 -->
            <div>
                <label for="email" class="sr-only">Correo Electronico</label>
        
                <div class="relative">
                    <input
                    id="email" name="email" type="email" placeholder="Enter your email"
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
                        d="M16 14a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                        />
                    </svg>
                    </span>
                </div>
                
                </div>

            @error('email')
                    <p class="bg-lime-500 text-white rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
    
            <!-- Form 4-->
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
            <p class="bg-lime-500 text-white rounded-lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
    
            <!-- Form 4-->
            <div>
                <label for="password" class="sr-only">Repetir contraseña</label>
        
                <div class="relative">
                    <input
                    id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm password"
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

            <div class="flex items-center justify-between">
            <p class="text-white text-xl">
                Ya tienes una cuenta?
                <a class="underline text-lime-500" href="{{ route('login') }}"><b>Iniciar sesion</b></a>
            </p>
    
            <input type="submit" value="Registrar" class="mt-3 bg-lime-500 hover:bg-white hover:text-lime-500 transition-color cursor-pointer uppercase font-bold  p-3 text-white rounded-lg">
            </div>
        </form>
        </div>
    
        <div class="relative w-full h-full sm:h-96 lg:h-full lg:w-2/4">
        <img
            alt="Welcome"
            src="{{ asset('Img-gg/rg-2.avif') }}"
            class="absolute inset-0 h-full w-full object-cover"
        />
        </div>
    </section>
</body>
</html>
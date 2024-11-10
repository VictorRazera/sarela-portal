<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">

        <!-- Container principal com imagem de fundo -->
        <div class="relative md:bg-cover md:bg-center h-full md:h-[80vh]" style="background-image: url('{{ asset('images/Portaria_4.jpg') }}');">
            
            <div class="block md:hidden w-full h-60">
                <img src="{{ asset('images/Portaria_4.jpg') }}" alt="Imagem de Fundo" class="w-full h-full object-cover">
            </div>

            <!-- Container flex para o conteúdo que vai sobrepor a imagem -->
            <div class="relative md:absolute top-0 left-0 w-full h-full flex flex-col justify-center items-end pr-0 md:pr-10">

                <!-- Div para o conteúdo que será o slot -->
                <div class="w-full h-full flex flex-col justify-center items-center md:max-w-md px-6 py-10 md:py-4 bg-[#d8f8fc] shadow-md overflow-hidden">

                    <a href="/" class="pb-6">
                        <img src="{{ asset('images/sarela-logo.png') }}" class="w-25 h-20">
                    </a>

                    {{ $slot }}
                </div>
            </div>
        </div>
 
        <div class="w-full flex flex-col md:flex-row justify-center items-center p-10 bg-white shadow-md">
            <div class="flex flex-col items-center px-10 md:px-5 w-full md:w-3/5 mb-6 md:mb-0">
                <div class="text-[#23402e] font-bold md:text-2xl text-base mb-2">Endereço:</div>
                <h5 class="text-[#23402e] md:text-lg text-base">Praia da - Rua Sabiá, 1.628 Recanto da Lagoinha</h5>
                <h5 class="text-[#23402e] md:text-lg text-base">Lagoinha, Ubatuba - SP, 11680-000</h5>
                <div class="text-[#23402e] font-bold md:text-2xl text-base mt-4 mb-2">Telefone:</div>
                <a href="tel:+551238432424" class="text-[#23402e] md:text-lg text-base underline">
                    (12) 3843-2424
                </a>
            </div>
            <div class="w-full h-64 ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14633.996126811744!2d-45.1903877!3d-23.5145473!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cd5bcef396f50b%3A0x1c60c828a095a6f6!2sSARELA%20-%20Associa%C3%A7%C3%A3o%20Amigos%20do%20Recanto%20da%20Lagoinha%20-Ubatuba%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1731112117973!5m2!1spt-BR!2sbr" frameborder="0" class="w-full h-full"></iframe>
            </div>
        </div>

        <div class="w-full h-20 flex justify-center">
            <p class="text-[#23402e] text-base md:text-xs mt-10">@todos os direitos reservados</p>
        </div>

    </body>
</html>

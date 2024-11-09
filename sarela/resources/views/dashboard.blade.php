<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bem-Vindo!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-5">

            <!-- Botões adicionais do Dashboard -->
            <!-- <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <a href="{{ route('financial-reports') }}" 
                    class="px-6 py-3 bg-blue-500 text-white text-lg font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-200 transform hover:scale-105 text-center">
                    Relatórios Financeiros
                </a>

                <a href="{{ route('members') }}" 
                    class="px-6 py-3 bg-green-500 text-white text-lg font-semibold rounded-lg shadow-md hover:bg-green-600 transition duration-200 transform hover:scale-105 text-center">
                    Equipe
                </a>
            </div> -->

            <!-- Aba de Últimas Notícias -->
            <div class="mt-2 bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-3xl font-semibold text-gray-700 mb-6 text-center py-2">Últimas Notícias</h3>

                <!-- Exibindo as notícias -->
                    @foreach($news as $item)
                        <div class="border-b border-gray-300 py-4">
                            <h4 class="text-xl font-semibold text-gray-800">{{ $item->title }}</h4>
                            <p class="text-sm text-gray-600 mb-2">
                                Publicado em {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y H:i') }}
                            </p>

                            <p class="text-gray-600 mt-2">{!! nl2br(e($item->text)) !!}</p>
                            <p class="text-gray-500 text-sm mt-2">
                        </div>
                    @endforeach

            </div>

        </div>
    </div>
</x-app-layout>

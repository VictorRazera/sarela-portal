<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Relatórios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> <!-- Alterado para max-w-md -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h3 class="text-3xl font-semibold text-gray-700 dark:text-gray-300 mb-6 text-center py-2">Relatórios</h3>

                    <hr class="border-gray-300 dark:border-gray-700 pb-3" />

                    <!-- Lista de relatórios com botão estilizado -->
                    <div class="space-y-4">
                        @foreach(range(1, 3) as $reportNumber)
                            <div class="flex justify-between items-center py-4">
                                <span class="font-semibold text-gray-700 dark:text-gray-300">Relatório {{ $reportNumber }}</span>
                                
                                <!-- Botão estilizado com animação de scale -->
                                <a href="#" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transform hover:scale-105 transition duration-200">
                                    Ir para página
                                </a>
                            </div>

                            <!-- Linha divisória, exceto após o último item -->
                            @if($reportNumber < 3)
                                <hr class="border-gray-300 dark:border-gray-700" />
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

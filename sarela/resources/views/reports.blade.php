<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Título usando o nome da página -->
                    <h3 class="text-3xl font-semibold text-gray-700 mb-6 text-center py-2">
                        {{ $page->name }}
                    </h3>

                    <hr class="border-gray-300 pb-3" />

                    <!-- Lista de relatórios com botão estilizado -->
                    <div class="space-y-4">
                        @foreach($reports as $report)
                            <div class="flex justify-between items-center py-4">
                                <span class="font-semibold text-gray-700">
                                    {{ $report->title }}
                                </span>
                                
                                <!-- Botão estilizado com animação de scale -->
                                <a href="{{ $report->url }}" target="_blank" 
                                    class="px-4 py-2 bg-[#2e533d] text-white font-semibold rounded-lg shadow-md hover:bg-[#23402e]transform hover:scale-105 transition duration-200">
                                    Ir para página
                                </a>
                            </div>

                            <!-- Linha divisória, exceto após o último item -->
                            @if(!$loop->last)
                                <hr class="border-gray-300" />
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

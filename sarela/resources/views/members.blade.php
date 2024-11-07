<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Seção Equipe -->
                    <h3 class="text-4xl font-semibold text-gray-700 dark:text-gray-300 mb-6 text-center pb-10">Equipe</h3>
                    
                    <!-- Lista de membros da equipe -->
                    <ul class="space-y-4">
                        @foreach($members as $member)
                            <li class="text-center">
                                <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $member->name }}</h4>
                                <p class="text-gray-600 dark:text-gray-400">{{ $member->role }}</p>
                            </li>

                            <hr class="border-gray-300 dark:border-gray-700" />
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

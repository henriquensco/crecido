<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("List Propertie's Owners") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <a href="/owner/create" class="p-2 dark:bg-gray-200 rounded">New Properties's Owner</a>
            
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                @foreach ($owners['data'] as $owner)
                    <div class="flex gap-2 mb-4 dark:text-gray-200 text-gray-800">
                        <span class="mr-2">Full Name: {{ $owner['full_name'] }}</span>
                        <span class="mr-2">Occupation: {{ $owner['occupation'] }}</span>
                        <span>CPF: {{ $owner['cpf'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

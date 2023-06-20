<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("List Propertie's Owners") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <a href="/owner/create" class="p-2 dark:bg-gray-200 rounded">New Properties's Owner</a>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg w-full">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Occupation</th>
                            <th>CPF</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($owners['data'] as $owner)
                            <tr class="text-center">
                                <td class="mr-2">{{ $owner['full_name'] }}</td>
                                <td class="mr-2">{{ $owner['occupation'] }}</td>
                                <td>{{ $owner['cpf'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
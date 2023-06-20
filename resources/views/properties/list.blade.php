<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('List of Properties') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <a href="/properties/create" class="p-2 dark:bg-gray-200 rounded">New Property</a>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg w-full">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Street</th>
                            <th>Number</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Owner</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($properties['data'] as $property)
                            <tr>
                                <td class="">
                                    @if ($property->image)
                                        <img src="/images/{{ $property->image }}" alt="" width="100">
                                    @else
                                        <img src="/images/no-image.png" alt="" width="100">
                                    @endif
                                </td>
                                <td class="">{{ $property->title }}</td>
                                <td class="">{{ $property->street }}</td>
                                <td class="">{{ $property->number }}</td>
                                <td class="">{{ $property->city }}</td>
                                <td class="">{{ $property->state }}</td>
                                <td class="">{{ $property->owner->full_name }}</td>
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

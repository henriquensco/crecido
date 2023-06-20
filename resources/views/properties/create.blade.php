<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('New Property') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">

                @if (session('success'))
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400">
                        {{ __(session('success')) }}
                    </p>
                @endif

                <form method="POST" class="w-full" action="{{ route('properties.create') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="mb-4">
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                            :value="old('title')" autofocus autocomplete="title" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="image" :value="__('Image')" />
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image"
                            :value="old('image')" />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <h4 class="dark:text-gray-200 font-semibold mb-4">Address:</h4>

                    <div class="flex gap-4">
                        <div class="mb-4 w-full">
                            <x-input-label for="street" :value="__('Street')" />
                            <x-text-input id="street" class="block mt-1 w-full" type="text" name="street"
                                :value="old('street')" autofocus autocomplete="street" />
                            <x-input-error :messages="$errors->get('street')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="number" :value="__('Number')" />
                            <x-text-input id="number" class="block mt-1 w-full" type="text" name="number"
                                :value="old('number')" autofocus autocomplete="number" />
                            <x-input-error :messages="$errors->get('number')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="reference" :value="__('Reference')" />
                            <x-text-input id="reference" class="block mt-1 w-full" type="text" name="reference"
                                :value="old('reference')" autofocus autocomplete="reference" />
                            <x-input-error :messages="$errors->get('reference')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="mb-4">
                            <x-input-label for="city" :value="__('City')" />
                            <x-text-input id="city" class="block mt-1 w-full" type="text" name="city"
                                :value="old('city')" autofocus autocomplete="city" />
                            <x-input-error :messages="$errors->get('city')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="state" :value="__('State')" />
                            <x-text-input id="state" class="block mt-1 w-full" type="text" name="state"
                                :value="old('state')" autofocus autocomplete="state" />
                            <x-input-error :messages="$errors->get('state')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="zip_code" :value="__('Zip Code')" />
                            <x-text-input id="zip_code" class="block mt-1 w-full" type="text" name="zip_code"
                                :value="old('zip_code')" autofocus autocomplete="zip_code" />
                            <x-input-error :messages="$errors->get('zip_code')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex gap-4 mb-4">
                        <select name="owner" id="owner">
                            @foreach ($owners['data'] as $owner)
                                <option value="{{ $owner->id }}">{{ $owner->full_name }}</option>
                            @endforeach
                            <x-input-error :messages="$errors->get('owner')" class="mt-2" />
                        </select>
                        <a href="/owner/create" class="p-2 dark:bg-gray-200 rounded">New Properties's Owner</a>
                    </div>

                    <div>
                        <x-primary-button>
                            {{ __('Create') }}
                        </x-primary-button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>

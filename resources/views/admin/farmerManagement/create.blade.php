<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Farmer') }}
        </h2>
    </x-slot>

    <div class="col-lg-8">
        <div class="card pt-4 mt-3">
            <div class="card-body">
                <form method="POST" action="{{ route('farmer.store') }}">
                    @csrf
            
                    <!-- Farmer Name -->
                    <div>
                        <x-input-label for="Farmer Name" :value="__('Farmer Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Farmer Email -->
                    <div>
                        <x-input-label for="Farmer Email" :value="__('Farmer Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Farm Size -->
                    <div>
                        <x-input-label for="Farm Size" :value="__('Farm Size')" />
                        <x-text-input id="FarmSize" class="block mt-1 w-full" type="text" name="FarmSize" :value="old('FarmSize')" required autofocus autocomplete="FarmSize" />
                        <x-input-error :messages="$errors->get('FarmSize')" class="mt-2" />
                    </div>

                    <!-- Location -->
                    <div>
                        <x-input-label for="Location" :value="__('Location')" />
                        <x-text-input id="Location" class="block mt-1 w-full" type="text" name="Location" :value="old('Location')" required autofocus autocomplete="Location" />
                        <x-input-error :messages="$errors->get('Location')" class="mt-2" />
                    </div>
            
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-4">
                            {{ __('Add Farmer') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
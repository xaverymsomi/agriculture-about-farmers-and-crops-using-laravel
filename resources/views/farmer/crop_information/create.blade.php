<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Crop') }}
        </h2>
    </x-slot>

    <div class="col-lg-8">
        <div class="card pt-4 mt-3">
            <div class="card-body">
                <form method="POST" action="{{ route('crop.store') }}">
                    @csrf
            
                    <!-- Crop Name -->
                    <div>
                        <x-input-label for="Crop Name" :value="__('Crop Name')" />
                        <x-text-input id="CropName" class="block mt-1 w-full" type="text" name="CropName" :value="old('CropName')" required autofocus autocomplete="CropName" />
                        <x-input-error :messages="$errors->get('CropName')" class="mt-2" />
                    </div>

                    <!-- Optimal Conditions -->
                    <div>
                        <x-input-label for="Optimal Conditions" :value="__('Optimal Conditions')" />
                        <x-text-input id="OptimalConditions" class="block mt-1 w-full" type="text" name="OptimalConditions" :value="old('OptimalConditions')" required autofocus autocomplete="OptimalConditions" />
                        <x-input-error :messages="$errors->get('OptimalConditions')" class="mt-2" />
                    </div>

                    <!-- PlantingSeason -->
                    <div>
                        <x-input-label for="Planting Season" :value="__('Planting Season')" />
                        <x-text-input id="PlantingSeason" class="block mt-1 w-full" type="text" name="PlantingSeason" :value="old('name')" required autofocus autocomplete="PlantingSeason" />
                        <x-input-error :messages="$errors->get('PlantingSeason')" class="mt-2" />
                    </div>
            
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-4">
                            {{ __('Add Crop') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
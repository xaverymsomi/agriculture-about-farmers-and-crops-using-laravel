<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Farmers Information') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="-m-2 overflow-x-auto sm:-m-6 lg:-mx-8">
            <div class="flex flex-col py-2 align-middle min-w-full sm:px-6 lg:-mx-8">
                <div class="mb-4">
                    <a href="{{ route('farmer.create') }}" class="rounded-md px-4 py-2 btn-secondary text-green-100 float-right">
                        New Farmer
                    </a>
                </div>
                <div class="shadow overflow-hidden border-b table-responsive border-gray-200 sm:rounded-lg">
                    <table class="table table-striped table-bordered">
                        <thead class="big-gray-50">
                            <tr class="border-b-2">
                                <th class="px-2 py-3">S/N</th>
                                <th class="px-2 py-3">Name</th>
                                <th class="px-2 py-3">Email</th>
                                <th class="px-2 py-3">Farm Size</th>
                                <th class="px-2 py-3">Location</th>
                                <th class="px-2 py-3">Status</th>
                                <th class="px-2 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($farmers as $items)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $items->name }}</td>
                                <td>{{ $items->email }}</td>
                                <td>{{ $items->FarmSize }}</td>
                                <td>{{ $items->Location }}</td>
                                <td>{{ $items->status }}</td>
                                <td>
                                    
                                        <a type="button" class="btn text-warning btn-sm btn-circle shadow-sm" href="{{ route('farmer.edit', $items->id) }}">
                                            <b><i class="fas fa-pencil-alt fa-lg"></i></b>
                                        </a>
                                        <a type="button" class="btn text-info btn-sm btn-circle shadow-sm" href="{{ route('farmer.show', $items->id) }}">
                                            <b><i class="fas fa-eye fa-lg"></i></b>
                                        </a>

                                        <a x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-farmer-deletion')" type="button" class="btn text-danger btn-sm btn-sm btn-circle shadow-sm" href="{{ route('farmer.destroy', $items->id) }}">
                                            <b><i class="fas fa-trash fa-lg"></i></b>
                                        </a>

                                        <x-modal name="confirm-farmer-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                            <form method="post" action="{{ route('farmer.destroy', $items->id) }}" class="p-6">
                                                @csrf
                                                @method('delete')
                                    
                                                <h2 class="text-lg font-medium text-gray-900">
                                                    {{ __('Are you sure you want to delete this crop?') }}
                                                </h2>
                                    
                                                <p class="mt-1 text-sm text-gray-600">
                                                    {{ __('Once your crop is deleted, all of its resources and data will be permanently deleted.') }}
                                                </p>
                                    
                                                <div class="mt-6 flex justify-end">
                                                    <x-secondary-button x-on:click="$dispatch('close')">
                                                        {{ __('Cancel') }}
                                                    </x-secondary-button>
                                    
                                                    <x-danger-button class="ms-3">
                                                        {{ __('Delete') }}
                                                    </x-danger-button>
                                                </div>
                                            </form>
                                        </x-modal>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
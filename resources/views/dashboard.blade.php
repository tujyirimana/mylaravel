<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    
                    <!-- Link to the Products Page -->
                    <div class="mt-4">
                        <a href="{{ route('products.index') }}" class="text-blue-600 hover:text-blue-900">Go to Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <nav class="bg-white shadow-sm sm:rounded-lg mb-4">
         
            </nav>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Display All Products -->
                    <div class="mt-4">
                        <h3 class="text-lg font-semibold mb-2">All Products</h3>
                        @if ($products->count() > 0)
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                                @foreach ($products as $product)
                                    <div class="bg-gray-100 p-4 rounded-lg shadow-sm relative">
                                        <h4 class="text-lg font-semibold">{{ $product->name }}</h4>
                                        <p class="text-gray-600">{{ $product->description }}</p>
                                        <p class="mt-2 text-gray-800 font-semibold">${{ $product->price }}</p>
                                        
                                        <!-- Edit Button -->
                                        <a href="{{ route('product.edit', $product->id) }}" class="absolute top-0 right-0 bg-blue-500 text-white px-2 py-1 rounded-lg hover:bg-blue-600">
                                            Edit
                                        </a>

                                   
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p>No products found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

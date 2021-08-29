<x-app-layout>
    <div class="container py-8">
        <ul>
            @forelse ($products as $product)
                <x-product-list :product="$product" />

            @empty

                <li class="bg-white rounded-lg shadow-2xl">
                    <div class="p-4">
                        <p class="text-lg text-gray-700 font-semibold">Ningún producto encontrado con la búsqueda: <span class="font-bold">{{$name}}</span>, intentalo nuevamente.</p>
                    </div>
                </li>

            @endforelse
        </ul>
        <div class="mt-4">
            {{$products->links()}}
        </div>
    </div>
</x-app-layout>
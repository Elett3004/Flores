<x-layout title="Gestión de Pedidos">

    <body class="bg-linear-to-br from-rose-50 via-pink-50 to-purple-50">
        <div class="min-h-screen">
            <!-- Header -->
            <div class="bg-linear-to-r from-rose-400 via-pink-400 to-purple-400 shadow-xl">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                    <h1 class="text-4xl font-bold text-white drop-shadow-lg">🌸 Gestión de Pedidos 🌸</h1>
                    <p class="text-white mt-2 drop-shadow">Administra tus pedidos con elegancia floral</p>
                </div>
            </div>

            <!-- Main Content -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

                <!-- Success Message -->
                @if (session('success'))
                    <div
                        class="mb-6 p-4 bg-linear-to-r from-rose-100 to-pink-100 border-l-4 border-rose-400 text-rose-700 rounded-lg shadow-md">
                        <p class="font-semibold">✓ {{ session('success') }}</p>
                    </div>
                @endif

                <!-- Create Button -->
                <div class="mb-8">
                    <a href="{{ route('productos.create') }}"
                        class="inline-flex items-center px-6 py-3 bg-linear-to-r from-rose-400 to-pink-400 hover:from-rose-500 hover:to-pink-500 active:from-rose-600 active:to-pink-600 text-white font-semibold rounded-full shadow-lg transition-all duration-200 ease-in-out hover:shadow-xl focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-400"
                        aria-label="Crear nuevo pedido">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                            </path>
                        </svg>
                        Crear Nuevo Pedido
                    </a>
                </div>

                <!-- Products Table -->
                @if ($productos->count() > 0)
                    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden border border-rose-100">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-linear-to-r from-rose-200 via-pink-200 to-purple-200 text-gray-800">
                                    <th class="px-6 py-4 text-left font-semibold text-rose-900">ID</th>
                                    <th class="px-6 py-4 text-left font-semibold text-rose-900">Nombre</th>
                                    <th class="px-6 py-4 text-left font-semibold text-rose-900">Precio</th>
                                    <th class="px-6 py-4 text-center font-semibold text-rose-900">Descripción</th>
                                    <th class="px-6 py-4 text-center font-semibold text-rose-900">Fecha de Entrega</th>
                                    <th class="px-6 py-4 text-center font-semibold text-rose-900">Estado</th>
                                    <th class="px-6 py-4 text-center font-semibold text-rose-900">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-rose-100">
                                @foreach ($productos as $producto)
                                    <tr class="hover:bg-rose-50 transition">
                                        <td class="px-6 py-4 text-gray-800 font-medium">{{ $producto->id }}</td>
                                        <td class="px-6 py-4 text-gray-700">{{ $producto->nombre }}</td>
                                        <td class="px-6 py-4 text-gray-800 font-semibold">
                                            ${{ number_format($producto->precio) }}</td>
                                        <td class="px-6 py-4 text-gray-700">
                                            {{ $producto->descripcion }}
                                        </td>
                                        <td class="px-6 py-4 text-gray-700 text-center">
                                            @if ($producto->fecha_entrega)
                                                {{ \Carbon\Carbon::parse($producto->fecha_entrega)->format('d/m/Y') }}
                                            @else
                                                <span class="text-gray-400">-</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            @if ($producto->estado === 'activo')
                                                <span
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                                    <span class="w-2 h-2 bg-amber-600 rounded-full mr-2"></span>
                                                    Activo
                                                </span>
                                            @elseif ($producto->estado === 'terminado')
                                                <span
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                                    <span class="w-2 h-2 bg-purple-600 rounded-full mr-2"></span>
                                                    Terminado
                                                </span>
                                            @else
                                                <span
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-rose-100 text-rose-800">
                                                    <span class="w-2 h-2 bg-rose-600 rounded-full mr-2"></span>
                                                    Cancelado
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 text-center space-x-2">
                                            <a href="{{ route('productos.edit', $producto->id) }}"
                                                class="inline-flex items-center px-3 py-2 bg-linear-to-r from-amber-400 to-yellow-400 hover:from-amber-500 hover:to-yellow-500 active:from-amber-600 active:to-yellow-600 text-white text-sm font-semibold rounded-lg transition-all duration-150 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-400"
                                                aria-label="Editar producto {{ $producto->id }}">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                    </path>
                                                </svg>
                                                Editar
                                            </a>

                                            <form action="{{ route('productos.destroy', $producto->id) }}"
                                                method="POST" class="inline"
                                                onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-flex items-center px-3 py-2 bg-linear-to-r from-rose-400 to-pink-400 hover:from-rose-500 hover:to-pink-500 active:from-rose-600 active:to-pink-600 text-white text-sm font-semibold rounded-lg transition-all duration-150 cursor-pointer focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-400"
                                                    aria-label="Eliminar producto {{ $producto->id }}">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg>
                                                    Eliminar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-rose-100">
                        <div class="text-6xl mb-4">🌹</div>
                        <p class="text-gray-600 text-lg">No hay pedidos aún. ¡Crea uno para llenar de flores tu
                            catálogo!
                        </p>
                    </div>
                @endif

                <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    <div class="text-rose-700">
                        {{ $productos->links() }}
                    </div>
                </div>
            </div>
        </div>

    </body>

</x-layout>

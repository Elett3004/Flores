<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#f43f5e">
    <title>Crear Pedido</title>
    @vite('resources/css/app.css')
</head>

<body
    class="bg-linear-to-br from-rose-50 via-pink-50 to-purple-50 min-h-screen flex items-center justify-center py-12 px-4">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-8 border border-rose-100">

        <!-- Header -->
        <div class="mb-8 text-center">
            <div class="text-4xl mb-3">🌸</div>
            <h1
                class="text-3xl font-bold bg-linear-to-r from-rose-600 to-pink-600 bg-clip-text text-transparent mb-2">
                Crear Pedido</h1>
            <p class="text-rose-600 font-medium">Agrega un nuevo pedido a tu colección</p>
        </div>

        <!-- Form -->
        <form action="{{ route('productos.store') }}" method="post">
            @csrf

            <!-- Nombre -->
            <div class="mb-5">
                <label for="nombre" class="block text-sm font-semibold text-rose-900 mb-2">Nombre del Pedido</label>
                <input type="text" id="nombre" name="nombre" required autocomplete="off"
                    class="w-full px-4 py-2 border-2 border-rose-200 rounded-lg focus-visible:ring-2 focus-visible:ring-rose-400 focus-visible:border-rose-400 focus-visible:outline-none transition-colors duration-150 bg-rose-50"
                    placeholder="Ej: Laptop Dell XPS 13…" aria-describedby="nombre-help">
            </div>

            <!-- Descripción -->
            <div class="mb-5">
                <label for="descripcion" class="block text-sm font-semibold text-rose-900 mb-2">Descripción</label>
                <textarea id="descripcion" name="descripcion" required rows="4" spellcheck="false"
                    class="w-full px-4 py-2 border-2 border-rose-200 rounded-lg focus-visible:ring-2 focus-visible:ring-rose-400 focus-visible:border-rose-400 focus-visible:outline-none transition-colors duration-150 resize-none bg-rose-50"
                    placeholder="Describe tu producto aquí…" aria-describedby="descripcion-help"></textarea>
            </div>

            <!-- Precio -->
            <div class="mb-5">
                <label for="precio" class="block text-sm font-semibold text-rose-900 mb-2">Precio ($)</label>
                <input type="number" id="precio" name="precio" step="0.01" required inputmode="decimal"
                    class="w-full px-4 py-2 border-2 border-rose-200 rounded-lg focus-visible:ring-2 focus-visible:ring-rose-400 focus-visible:border-rose-400 focus-visible:outline-none transition-colors duration-150 bg-rose-50"
                    placeholder="0.00" aria-describedby="precio-help">
            </div>

            <!-- Stock -->
            <div class="mb-6">
                <label for="stock" class="block text-sm font-semibold text-rose-900 mb-2">Stock</label>
                <input type="number" id="stock" name="stock" required inputmode="numeric"
                    class="w-full px-4 py-2 border-2 border-rose-200 rounded-lg focus-visible:ring-2 focus-visible:ring-rose-400 focus-visible:border-rose-400 focus-visible:outline-none transition-colors duration-150 bg-rose-50"
                    placeholder="0" aria-describedby="stock-help">
            </div>

            <!-- Fecha de Entrega -->
            <div class="mb-6">
                <label for="fecha_entrega" class="block text-sm font-semibold text-rose-900 mb-2">Fecha de
                    Entrega</label>
                <input type="date" id="fecha_entrega" name="fecha_entrega" required
                    class="w-full px-4 py-2 border-2 border-rose-200 rounded-lg focus-visible:ring-2 focus-visible:ring-rose-400 focus-visible:border-rose-400 focus-visible:outline-none transition-colors duration-150 bg-rose-50"
                    aria-describedby="fecha_entrega-help">
            </div>

            <!-- Estado -->
            <div class="mb-6">
                <label for="estado" class="block text-sm font-semibold text-rose-900 mb-2">Estado</label>
                <select id="estado" name="estado"
                    class="w-full px-4 py-2 border-2 border-rose-200 rounded-lg focus-visible:ring-2 focus-visible:ring-rose-400 focus-visible:border-rose-400 focus-visible:outline-none transition-colors duration-150 bg-rose-50"
                    aria-describedby="estado-help">
                    <option value="activo">Activo</option>
                    <option value="terminado">Terminado</option>
                    <option value="cancelado">Cancelado</option>
                </select>
            </div>

            <!-- Buttons -->
            <div class="flex gap-3">
                <button type="submit"
                    class="flex-1 px-6 py-2 bg-linear-to-r from-rose-400 to-pink-400 hover:from-rose-500 hover:to-pink-500 active:from-rose-600 active:to-pink-600 text-white font-semibold rounded-lg transition-all duration-150 shadow-md hover:shadow-lg focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-400"
                    aria-label="Guardar pedido">
                    <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                    Guardar
                </button>
                <a href="{{ route('productos.index') }}"
                    class="flex-1 px-6 py-2 bg-rose-100 hover:bg-rose-200 active:bg-rose-300 text-rose-700 font-semibold rounded-lg transition-colors duration-150 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-400"
                    aria-label="Cancelar creación de pedido">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</body>

</html>

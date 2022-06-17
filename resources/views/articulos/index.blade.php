<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articulos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-plantilla>
                        <table class="table-auto">
                            <thead>
                                <th class="px-6 py-2 text-gray-500">
                                    Número de autores
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Número de monografias
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($articulos as $articulo)
                                    <tr>
                                        <td class="px-6 py-2">{{ $articulo->autores_count }}</td>
                                        <td class="px-6 py-2">{{ $articulo->monografias_count }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </x-plantilla>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

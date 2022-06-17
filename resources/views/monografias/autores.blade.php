<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Monografias') }}
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
                                    Monografia
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Autores
                                </th>
                            </thead>
                            <tbody>
                                <tr>
                                <td class="px-6 py-2">{{ $monografia->titulo }}</td>
                                @foreach ($articulos as $articulo)
                                    @foreach ($articulo->autores as $autor)
                                        <td class="px-6 py-2">{{ $autor->nombre }}</td>
                                    @endforeach
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </x-plantilla>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mostrar articulos de la monografia') }}
        </h2>
    </x-slot>

<x-plantilla>
    <td>Monografía: {{$monografia->titulo}}</td>
    <table class="table-auto">
        <thead>
            <th class="px-6 py-2 text-gray-500">
                Titulo
            </th>
            <th class="px-6 py-2 text-gray-500">
                Año
            </th>
        </thead>
        <tbody>
                @foreach ($monografia->articulos as $articulo )
                    <tr>
                        <td class="px-6 py-2">{{ $articulo->titulo }}</td>
                        <td class="px-6 py-2">{{ $articulo->anyo }}</td>
                    </tr>

                @endforeach
        </tbody>
    </table>
    <td class="px-6 py-2">Número de páginas: {{$monografia->articulos_sum_num_paginas}}</td>

</x-plantilla>

</x-app-layout>

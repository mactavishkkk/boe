<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pessoas') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between mb-4">
                <a href="{{ route('people.create') }}" class="text-indigo-600 hover:text-indigo-900 font-bold py-2 px-4 rounded">
                    Nova Pessoa
                </a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nome
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Data de Nascimento
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($peoples as $peoples)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $peoples->id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $peoples->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $peoples->email }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $peoples->date_birth }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="{{ route('people.edit', $peoples->id) }}" class="text-indigo-600 hover:text-indigo-900">
                                        Editar
                                    </a>
                                    <a href="{{ route('people.show', $peoples->id) }}" class="text-indigo-600 hover:text-indigo-900 ml-4">
                                        Detalhes
                                    </a>
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
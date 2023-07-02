<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between mb-4">
                <a href="{{ route('people.index') }}" class="text-indigo-600 hover:text-indigo-900 font-bold py-2 px-4 rounded">
                    Voltar
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
                                    Estado Civil
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nome
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Gênero
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Telefone
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Data de Nascimento
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $people->address_id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $people->maritalStatus->status }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $people->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $people->gender }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $people->email }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $people->phone }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $people->date_birth }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Estado
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Município
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Rua
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nûmero
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Cep
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Bairro
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $people->address_id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $people->address->state }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $people->address->county }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $people->address->street }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $people->address->number }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $people->address->cep }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $people->address->district }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
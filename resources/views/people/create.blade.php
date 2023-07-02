<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Pessoa') }}
        </h2>
    </x-slot>

    
    <livewire:create-people />

</x-app-layout>
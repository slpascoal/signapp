<x-app-layout>
    <x-slot name="header">
        <h3>TEST</h3>
    </x-slot>
    <ol>
        <li>Nome: {{auth()->user()->name}}</li>
    </ol>
</x-app-layout>

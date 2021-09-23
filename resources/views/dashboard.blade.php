<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    <h2>Dashboard Content</h2>
    <form method="GET" action="{{ route('test') }}">
        <button>Test</button>
    </form>


</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <nav>
            <ul>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </ul>
            <ul>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    <a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'active' : ''}}">{{ __('Contactanos') }}</a>
                </h2>
            </ul>
            
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>


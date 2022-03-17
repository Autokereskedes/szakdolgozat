
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        @if(Auth::user()->admin===1)
        {{ __('Admin felület') }}
        @endif
        @if(Auth::user()->admin===0)
        {{ __('Profil felület') }}
        @endif
        </h2>
        <link rel="stylesheet" type="text/css" href="{{ url('css/dashboard.css') }}">
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                
                    
                
            @if(Auth::user()->admin===1)
            <ul>
                <li><a id="nav_hover" href="{{url('/AdminUser')}}">Felhasználók</a></li>
                <li><a id="nav_hover" href="{{url('/AdminModell')}}">Modellek</a></li>
                <li><a id="nav_hover" href="{{url('/dashboard')}}">Vissza</a></li>
            </ul>
            @endif
            @if(Auth::user()->admin===0)

            <h1>Yo</h1>

            @endif
        </div>
            </div>
        </div>
    </div>
</x-app-layout>
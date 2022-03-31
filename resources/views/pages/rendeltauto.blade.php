<x-app-layout>
    <x-slot name="header">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="{{ url('js/ajax.js') }}"></script>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        @if(Auth::user()->admin===1)
        {{ __('Admin felület - Rendelt autók') }}
        <script src="{{ url('js/rendeltAdmin.js') }}"></script>
        <script src="{{ url('js/rendeltSelect.js') }}"></script>
        @endif
        @if(Auth::user()->admin===0)
        {{ __('Rendelt autók') }}
        <script src="{{ url('js/rendelt.js') }}"></script>
        <script src="{{ url('js/rendeltSelect.js') }}"></script>
        @endif
        </h2>
        <link rel="stylesheet" type="text/css" href="{{ url('css/dashboard.css') }}">
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if(Auth::user()->admin===1)
            <table class="rendeltAutok">
                <tr><th>Modell</th><th>Felhasználó</th><th>Ár</th><th>Státusz</th></tr>
                <tr class="rendeltAuto"><td class="rmodell"><td class="ruser"></td><td class="rar"></td><td class="rstatus"></td></tr>
            </table>        
            @endif
            @if(Auth::user()->admin===0)
            <table class="rendeltAutok">
                <input type="hidden" id="user" name="user" value="{{ Auth::user()->id }}">
                <tr><th>Modell</th><th>Ár</th><th>Státusz</th></tr>
                <tr class="rendeltAuto"><td class="rmodell"></td><td class="rar"></td><td class="rstatus"></td></tr>
            </table>   
            @endif
            <br>
            <ul>
                <li><a id="nav_hover" href="{{url('/dashboard')}}">Vissza</a></li>
                <li><a id="nav_hover" href="{{url('/model')}}">Vissza a konfigurátorhoz</a></li>
            </ul>
        </div>
            </div>
        </div>
    </div>
</x-app-layout>
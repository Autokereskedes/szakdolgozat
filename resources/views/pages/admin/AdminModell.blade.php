
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        @if(Auth::user()->admin===1)
        {{ __('Admin felület - Modellek') }}
        @endif
        @if(Auth::user()->admin===0)
        {{ __('Tiltott zóna') }}
        @endif
        </h2>
        <link rel="stylesheet" type="text/css" href="{{ url('css/dashboard.css') }}">
        <ul>
            <li><a id="nav_hover" href="{{url('/dashboard')}}">Vissza</a></li>
        </ul>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
                    
                
            @if(Auth::user()->admin===1)
            <div class="AdminUser">
            
                    
                        <div class="flex" style="align-items: center;">
                            <p>
                                <table>
                                    <tr><th>Modell</th><th>Kivitel</th><th>Motor</th><th>Alapár</th></tr>
                                    @foreach ($userItems as $userItem)
                                    <tr><th>{{ $userItem->modell}}</th><td>{{ $userItem->kivId}}</td><td>{{ $userItem->motor}}</td><td>{{ $userItem->alapár}}</td></tr>
                                    @endforeach
                                </table>
                            </p>   
                        </div>
            </div>
            @endif
            @if(Auth::user()->admin===0)

            @endif
        </div>
            </div>
        </div>
    </div>
    </x-app-layout>
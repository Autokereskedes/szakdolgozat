
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        @if(Auth::user()->admin===1)
        {{ __('Admin felület - Felhasználók') }}
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
                                    <tr><th>ID</th><th>Felhasználónév</th><th>E-mail</th><th>Jogkör</th><th>Jogkör módosítása</th></tr>
                                    @foreach ($userItems as $userItem)
                                    <tr><th>{{ $userItem->id}}</th><td>{{ $userItem->name}}</td><td>{{ $userItem->email}}</td><td>{{ $userItem->admin}}</td>
                                    <td><form method="post" action="{{ route('setAdmin', $userItem->id) }}" accept-charset="UTF-8">
                                        {{ csrf_field() }}
                                        <button type="submit" style="width:100%;">Módosítás</button>
                                        </form></td></tr>
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
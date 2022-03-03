
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Profil felület') }}
        </h2>
        <link rel="stylesheet" type="text/css" href="{{ url('css/dashboard.css') }}">
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                
                    
                
            @if(Auth::user()->admin===1)
            <div class="AdminUser">
                    <h1> Felhasználók </h1>
                    
                        <div class="flex" style="align-items: center;">
                            <p>
                                <table>
                                    <tr><th>ID</th><th>Felhasználónév</th><th>E-mail</th><th>Jogkör</th></tr>
                                    @foreach ($userItems as $userItem)
                                    <tr><th>{{ $userItem->id}}</th><td>{{ $userItem->name}}</td><td>{{ $userItem->email}}</td><td>{{ $userItem->admin}}</td></tr>
                                    @endforeach
                                </table>
                            </p>   
                        </div>
            </div> 
            @endif
            @if(Auth::user()->admin===0)

            <h1>Yo</h1>

            @endif
        </div>
            </div>
        </div>
    </div>
</x-app-layout>
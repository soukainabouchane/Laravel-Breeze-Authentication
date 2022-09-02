<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 You're logged in as Technicien
                  <br><br>
                @auth

                <div class="card" style="width: 2000rem;">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"> <a style="color:#77B925" href="{{ url('/techprofil') }}">Profile</a></li>
                    </ul>
                </div>
               
                @endauth

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

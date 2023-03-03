<x-app-layout>   
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Analytics -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg">
                <div class="w-full">
                    @include('dashboard.partials.analytics')
                </div>
            </div>
           
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg">
                <div class="w-full">
                    @include('dashboard.partials.sitesettings')
                </div>
            </div>

             <!-- Clear Database -->
             <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg">
                <div class="max-w-xl">
                    @include('dashboard.partials.datasettings')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

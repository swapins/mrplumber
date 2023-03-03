<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Frequently asked questions') }}
        </h2>
    </x-slot>
    <div>
        
        <div class="w-full px-4 py-2 bg-gray-200 lg:w-full">
            <div class="container mx-auto mt-12">
                <div>
                    <div class="w-full">
                        <livewire:faq/>
                    </div>
                </div>
                <div class="flex flex-col mt-8">
                    <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                        <div
                            class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow-lg sm:rounded-lg">
                            <livewire:faq-table/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
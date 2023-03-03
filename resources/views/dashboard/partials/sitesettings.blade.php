<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Site Details') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your data is devoid of typoos as it is served publically.') }}
        </p>
    </header>

    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 mt-2">
        
        <div class="shadow rounded p-4 border bg-white flex-none basis-1/2">
            <livewire:siteinfo/>   
        </div>
        <div class="shadow rounded p-4 border bg-white flex-none basis-1/2">
            <livewire:sitesocial/>
        </div>
    </div>
    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 mt-4">
        <div class="shadow rounded p-4 border bg-white flex-none w-full">
            <livewire:siteother/>
        </div>
    </div>

    
</section>

<div>
    <div>
        @if (session()->has('message'))
        <div class="bg-teal-100 text-center py-4 lg:px-4">
            <div class="p-2 bg-teal-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                <span class="flex rounded-full bg-green-500 uppercase px-2 py-1 text-xs font-bold mr-3">Success</span>
                <span class="font-semibold mr-2 text-left flex-auto">The information was successfully updated and published on yourpage</span>
                <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
            </div>
        </div>
        @endif
    </div>
    <div class="mt-1">
        <x-input-label for="address" :value="__('Address')" />
        <x-text-input id="address"  type="text" class="mt-2 block w-full" wire:model="cmsText.addressText" autocomplete="address" />
        @error('cmsText.addressText') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
    </div>

    <div class="mt-3">
        <x-input-label for="Phone No" :value="__('Phone no')" />
        <x-text-input id="phone"  type="text" class="mt-2 block w-full" wire:model="cmsText.phoneNo" autocomplete="phone No" />
        @error('cmsText.phoneNo') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
    </div>

    <div class="mt-1">
        <x-input-label for="email" :value="__('Site Email')" />
        <x-text-input id="email"  type="email" wire:model="cmsText.email" class="mt-2 block w-full" autocomplete="email" />
        @error('cmsText.email') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
    </div>

    <div class="flex items-center gap-4 mt-3">
        <x-primary-button wire:click="save">{{ __('Save') }}</x-primary-button>
    </div>
</div>

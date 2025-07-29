<nav class="w-full px-4 lg:px-8 bg-background-secondary/80 border-b border-neutral/60 md:h-16 flex items-center justify-between fixed top-0 z-40 backdrop-blur-lg">

    <div x-data="{ slideOverOpen: false }" x-init="$watch('slideOverOpen', value => { document.body.style.overflow = value ? 'hidden' : 'auto' })" class="w-full">
        
        <div class="flex items-center justify-between w-full h-16">
            <div class="flex items-center gap-x-8">
                <a href="{{ route('home') }}" class="flex items-center h-10" wire:navigate>
                    <x-logo class="h-10 mr-2 rtl:ml-2" />
                    <span class="text-xl font-bold leading-none">{{ config('app.name') }}</span>
                </a>
                <div class="hidden md:flex items-center gap-x-2">
                    @foreach (\App\Classes\Navigation::getLinks() as $nav)
                        @if (isset($nav['children']) && count($nav['children']) > 0)
                            <div class="relative">
                                <x-dropdown>
                                    <x-slot:trigger>
                                        <button class="flex items-center p-3 text-sm font-semibold hover:text-base/80">
                                            {{ $nav['name'] }}
                                        </button>
                                    </x-slot:trigger>
                                    <x-slot:content>
                                        @foreach ($nav['children'] as $child)
                                            <x-navigation.link :href="route($child['route'], $child['params'] ?? null)" :spa="isset($child['spa']) ? $nav['spa'] : true">
                                                {{ $child['name'] }}
                                            </x-navigation.link>
                                        @endforeach
                                    </x-slot:content>
                                </x-dropdown>
                            </div>
                        @else
                            <x-navigation.link :href="route($nav['route'], $nav['params'] ?? null)" :spa="isset($nav['spa']) ? $nav['spa'] : true" class="flex items-center p-3">
                                {{ $nav['name'] }}
                            </x-navigation.link>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="flex items-center gap-x-2">
                <div class="items-center hidden md:flex">
                    <x-dropdown>
                        <x-slot:trigger>
                            <button class="flex items-center p-2 rounded-md hover:bg-neutral">
                                <span class="text-sm font-semibold">{{ strtoupper(app()->getLocale()) }} | {{ session('currency', config('settings.default_currency')) }}</span>
                            </button>
                        </x-slot:trigger>
                        <x-slot:content>
                            <strong class="block p-2 text-xs font-semibold uppercase text-base/50">Language</strong>
                            <livewire:components.language-switch />
                            <livewire:components.currency-switch />
                        </x-slot:content>
                    </x-dropdown>
                    <x-theme-toggle />
                </div>

                <livewire:components.cart />

                @if(auth()->check())
                    <div class="hidden lg:flex">
                        <x-dropdown>
                            <x-slot:trigger>
                                <button>
                                    <img src="{{ auth()->user()->avatar }}" class="size-8 rounded-full border border-neutral bg-background" alt="avatar" />
                                </button>
                            </x-slot:trigger>
                            <x-slot:content>
                                <div class="flex flex-col p-2">
                                    <span class="text-sm text-base break-words">{{ auth()->user()->name }}</span>
                                    <span class="text-sm text-base break-words">{{ auth()->user()->email }}</span>
                                </div>
                                @foreach (\App\Classes\Navigation::getAccountDropdownLinks() as $nav)
                                    <x-navigation.link :href="route($nav['route'], $nav['params'] ?? null)" :spa="isset($nav['spa']) ? $nav['spa'] : true">
                                        {{ $nav['name'] }}
                                    </x-navigation.link>
                                @endforeach
                                <livewire:auth.logout />
                            </x-slot:content>
                        </x-dropdown>
                    </div>
                @else
                    <div class="hidden lg:flex flex-row gap-3">
                        <a href="{{ route('login') }}" wire:navigate><x-button.secondary>{{ __('navigation.login') }}</x-button.secondary></a>
                        @if(!config('settings.registration_disabled', false))
                            <a href="{{ route('register') }}" wire:navigate><x-button.primary>{{ __('navigation.register') }}</x-button.primary></a>
                        @endif
                    </div>
                @endif
                
                <button @click="slideOverOpen = !slideOverOpen" class="relative w-10 h-10 flex lg:hidden items-center justify-center rounded-lg hover:bg-neutral transition" aria-label="Toggle Menu">
                    <x-ri-menu-fill x-show="!slideOverOpen" class="size-5 transition-transform duration-300" />
                    <x-ri-close-fill x-show="slideOverOpen" x-cloak class="size-5 transition-transform duration-300" />
                </button>
            </div>
        </div>

        <template x-teleport="body">
            <div x-show="slideOverOpen" @keydown.window.escape="slideOverOpen = false" class="relative z-[9999]" x-cloak>
                
                <div 
                    x-show="slideOverOpen"
                    x-transition:enter="transition-opacity ease-in-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity ease-in-out duration-300"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click="slideOverOpen = false"
                    class="fixed inset-0 bg-black/60 backdrop-blur-sm"
                ></div>

                <div class="fixed inset-0 flex">
                    <div
                        x-show="slideOverOpen"
                        x-transition:enter="transition ease-in-out duration-300 transform"
                        x-transition:enter-start="-translate-x-full"
                        x-transition:enter-end="translate-x-0"
                        x-transition:leave="transition ease-in-out duration-300 transform"
                        x-transition:leave-start="translate-x-0"
                        x-transition:leave-end="-translate-x-full"
                        class="relative flex flex-col w-2/3 h-full border-r border-neutral/60 bg-background-secondary/80 backdrop-blur-lg rounded-r-2xl"
                    >
                        <div class="flex items-center justify-between p-4 border-b border-neutral/60">
                             <a href="{{ route('home') }}" class="flex items-center h-10" wire:navigate>
                                <x-logo class="h-10 mr-2 rtl:ml-2" />
                                <span class="text-xl font-bold leading-none">{{ config('app.name') }}</span>
                            </a>
                            <button @click="slideOverOpen = false" class="p-2 rounded-md hover:bg-neutral">
                                <span class="sr-only">Close menu</span>
                                <x-ri-close-fill class="size-6" />
                            </button>
                        </div>
                        
                        <div class="flex-1 overflow-y-auto">
                            <div class="flex flex-col justify-between h-full p-4">
                                <div class="flex-1">
                                    <x-navigation.sidebar-links />
                                </div>
                                <div class="mt-5">
                                     </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>
</nav>
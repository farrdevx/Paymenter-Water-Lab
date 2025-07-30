<!-- 1. WADAH BARU: Untuk memposisikan navbar di tengah dan memberi jarak dari atas -->
<div class="absolute top-4 w-full flex justify-center px-4 ">

    <!-- 2. NAVBAR UTAMA: Kelasnya diubah untuk gaya floating pill, tanpa mengubah isinya. -->
    <nav 
        x-data="{ slideOverOpen: false }"
        x-init="$watch('slideOverOpen', value => { document.documentElement.style.overflow = value ? 'hidden' : '' })"
        class="w-full  mt-4 max-w-7xl h-16 px-4 sm:px-6 flex items-center justify-between bg-slate-900/60 border border-white/10 rounded-full shadow-xl backdrop-blur-lg"
    >
        <!-- Konten di dalam nav (TIDAK DIUBAH SAMA SEKALI) -->
        <div class="w-full h-full flex items-center justify-between">

            <div class="flex flex-row items-center">
                <a href="{{ route('home') }}" class="flex flex-row items-center h-10" wire:navigate>
                    <x-logo class="h-10 mr-2 rtl:ml-2" />
                    <span class="text-xl font-bold leading-none flex items-center">{{ config('app.name') }}</span>
                </a>
                <div class="md:flex hidden flex-row ml-7">
                    @foreach (\App\Classes\Navigation::getLinks() as $nav)
                    @if (isset($nav['children']) && count($nav['children']) > 0)
                    <div class="relative">
                        <x-dropdown>
                            <x-slot:trigger>
                                <div class="flex flex-col">
                                    <span style="z-index: 1000" class="flex flex-row items-center p-3 text-sm font-semibold whitespace-nowrap text-base hover:text-base/80">
                                        {{ $nav['name'] }}
                                    </span>
                                </div>
                            </x-slot:trigger>
                            <x-slot:content>
                                @foreach ($nav['children'] as $child)
                                <x-navigation.link
                                    :href="route($child['route'], $child['params'] ?? null)"
                                    :spa="isset($child['spa']) ? $nav['spa'] : true">
                                    {{ $child['name'] }}
                                </x-navigation.link>
                                @endforeach
                            </x-slot:content>
                        </x-dropdown>
                    </div>
                    @else
                    <x-navigation.link
                        :href="route($nav['route'], $nav['params'] ?? null)"
                        :spa="isset($nav['spa']) ? $nav['spa'] : true"
                        class="flex items-center p-3 z-[40]">
                        {{ $nav['name'] }}
                    </x-navigation.link>
                    @endif
                    @endforeach
                </div>
            </div>

            <div class="flex flex-row items-center">
                <div class="items-center hidden md:flex mr-3 z-[40]">
                    <x-dropdown>
                        <x-slot:trigger>
                            <div class="flex flex-col z-[80]">
                                <span class="text-sm text-base font-semibold text-nowrap">{{ strtoupper(app()->getLocale()) }} <span class="text-base/50 font-semibold">|</span> {{ session('currency', config('settings.default_currency')) }}</span>
                            </div>
                        </x-slot:trigger>
                        <x-slot:content>
                            <strong class="block p-2 text-xs font-semibold uppercase text-base/50"> Language </strong>
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
                            <img src="{{ auth()->user()->avatar }}" class="size-8 rounded-full border border-neutral bg-background" alt="avatar" />
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
                    <a href="{{ route('login') }}" wire:navigate>
                        <x-button.secondary>
                            {{ __('navigation.login') }}
                        </x-button.secondary>
                    </a>
                    @if(!config('settings.registration_disabled', false))
                    <a href="{{ route('register') }}" wire:navigate>
                        <x-button.primary>
                            {{ __('navigation.register') }}
                        </x-button.primary>
                    </a>
                    @endif
                </div>
                @endif

                <button
                    @click="slideOverOpen = !slideOverOpen"
                    class="relative w-10 h-10 flex lg:hidden items-center justify-center rounded-lg hover:bg-neutral transition"
                    aria-label="Toggle Menu">
                    <span x-show="!slideOverOpen"><x-ri-menu-fill class="size-5" /></span>
                </button>
            </div>
        </div>

        <template x-teleport="body">
            <div x-show="slideOverOpen" @keydown.window.escape="slideOverOpen = false" class="relative z-[50]" x-cloak>
                <div x-show="slideOverOpen" x-transition.opacity @click="slideOverOpen = false" class="fixed inset-0 bg-black/60 backdrop-blur-sm"></div>
                <div class="fixed inset-0 flex">
                    <div x-show="slideOverOpen" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="relative flex flex-col w-1/2 max-w-sm h-full border-r border-neutral/60 bg-background-secondary/80 backdrop-blur-lg rounded-r-2xl">
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
                        <div class="flex-1 overflow-y-auto p-4">
                            <x-navigation.sidebar-links />
                            <div class="mt-auto pt-4">
                                @if(auth()->check())
                                    <!-- Mobile User Panel -->
                                @else
                                    <div class="flex flex-col gap-3">
                                        @if(!config('settings.registration_disabled', false))
                                        <a href="{{ route('register') }}" wire:navigate><x-button.primary>Register</x-button.primary></a>
                                        @endif
                                        <a href="{{ route('login') }}" wire:navigate><x-button.secondary>Login</x-button.secondary></a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </nav>
</div>
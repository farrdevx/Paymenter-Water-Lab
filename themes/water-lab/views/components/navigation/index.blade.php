<style>
    .navigate-waterlab{
        width: 80%;                      /* Lebar 70% dari viewport */
    margin: 20px auto 0 auto;        /* Margin atas 20px, dan auto untuk tengah horizontal */
    border-radius: 15px;             /* Sudut yang melengkung */
    
    /* --- EFEK KACA (GLASSMORPHISM) --- */
    background: rgba(255, 255, 255, 0.1); /* Warna latar belakang transparan */
    backdrop-filter: blur(20px);     /* Efek blur pada konten di belakangnya */
    -webkit-backdrop-filter: blur(10px); /* Untuk support browser Safari */
    border: 1px solid rgba(255, 255, 255, 0.2); /* Border tipis untuk menonjolkan tepi */
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    }
</style>

<nav class="flex flex-col px-4 border-b navigate-waterlab lg:px-8 border-neutral md:h-16 md:flex-row">
    <div x-data="{ 
        slideOverOpen: false 
    }"
        x-init="$watch('slideOverOpen', value => { document.documentElement.style.overflow = value ? 'hidden' : '' })"
        class="relative z-50 w-full h-auto">

        <div class="flex flex-row items-center justify-between w-full h-16">

            <div class="flex flex-row items-center">
                <a href="{{ route('home') }}" class="flex flex-row items-center h-10" wire:navigate>
                    <x-logo class="h-10 mr-2 rtl:ml-2" />
                    <span class="flex items-center text-xl font-bold leading-none">{{ config('app.name') }}</span>
                </a>
                <div class="flex-row hidden md:flex ml-7">
                    @foreach (\App\Classes\Navigation::getLinks() as $nav)
                    @if (isset($nav['children']) && count($nav['children']) > 0)
                    <div class="relative">
                        <x-dropdown>
                            <x-slot:trigger>
                                <div class="flex flex-col">
                                    <span class="flex flex-row items-center p-3 text-sm text-base font-semibold whitespace-nowrap hover:text-base/80">
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
                        class="flex items-center p-3">
                        {{ $nav['name'] }}
                    </x-navigation.link>
                    @endif
                    {{-- @if($nav['separator'])
                    <div class="w-full h-px bg-neutral"></div>
                    @endif --}}
                    @endforeach

                </div>
            </div>

            <div class="flex flex-row items-center">
                <div class="items-center hidden mr-3 md:flex">
                    <x-dropdown>
                        <x-slot:trigger>
                            <div class="flex flex-col">
                                <span class="text-sm text-base font-semibold text-nowrap">{{ strtoupper(app()->getLocale()) }} <span class="font-semibold text-base/50">|</span> {{ session('currency', config('settings.default_currency')) }}</span>
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
                            <img src="{{ auth()->user()->avatar }}" class="border rounded-full size-8 border-neutral bg-background" alt="avatar" />
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
                <div class="flex-row hidden gap-3 lg:flex">
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
                    class="relative flex items-center justify-center w-10 h-10 transition rounded-lg lg:hidden hover:bg-neutral"
                    aria-label="Toggle Menu">

                    <span
                        x-show="!slideOverOpen"
                        x-transition:enter="transition duration-300"
                        x-transition:enter-start="opacity-0 -rotate-90 scale-75"
                        x-transition:enter-end="opacity-100 rotate-0 scale-100"
                        x-transition:leave="transition duration-150"
                        x-transition:leave-start="opacity-100 rotate-0 scale-100"
                        x-transition:leave-end="opacity-0 rotate-90 scale-75"
                        class="absolute inset-0 flex items-center justify-center"
                        aria-hidden="true">
                        <x-ri-menu-fill class="size-5" />
                    </span>

                </button>
            </div>
        </div>
        <template x-teleport="body">
            <div
                x-show="slideOverOpen"
                @keydown.window.escape="slideOverOpen=false"
                x-cloak
                class="fixed left-0 right-0 w-full z-[99]"
                style="height: 100vh; opacity: 0.95.5;"
                aria-modal="true"
                tabindex="-1">
                <div
                    x-show="slideOverOpen"
                    @click.away="slideOverOpen = false"
                    x-transition.opacity.duration.300ms
                    class="absolute inset-0 flex flex-col overflow-y-auto border-t shadow-lg bg-background-secondary border-neutral">

                    <div style="margin-left: 87%; margin-top: 20px">

                        <button
                        @click="slideOverOpen = !slideOverOpen"
                        class="relative flex items-center justify-center w-10 h-10 transition rounded-lg lg:hidden hover:bg-neutral"
                        aria-label="Toggle Menu">
    
    
                        <span
                            x-show="slideOverOpen"
                            x-transition:enter="transition duration-300"
                            x-transition:enter-start="opacity-0 rotate-90 scale-75"
                            x-transition:enter-end="opacity-100 rotate-0 scale-100"
                            x-transition:leave="transition duration-150"
                            x-transition:leave-start="opacity-100 rotate-0 scale-100"
                            x-transition:leave-end="opacity-0 -rotate-90 scale-75"
                            class="absolute inset-0 flex items-center justify-center"
                            aria-hidden="true">
                            <x-ri-close-fill class="size-8" />
                        </span>
    
                    </button>
                    </div>

                    <div class="flex flex-col h-full p-4">
                        <div class="flex-1 min-h-0 overflow-y-auto">
                            <x-navigation.sidebar-links />
                        </div>
                        <div class="mt-5">
                            @if(auth()->check())

                            <div
                                x-data="{ userPanelOpen: false }"
                                @keydown.escape.window="userPanelOpen = false"
                                x-cloak
                                class="relative">

                                <button @click="userPanelOpen = true" aria-label="Open user menu" class="flex items-center justify-start gap-4">
                                    <img src="{{ auth()->user()->avatar }}" class="border rounded-full size-10 border-neutral bg-background" alt="avatar" />
                                    <div class="flex flex-col items-start gap-0.5">
                                        <span class="font-bold text-md">{{ auth()->user()->name }}</span>
                                        <span class="text-sm text-base/70">{{ auth()->user()->email }}</span>
                                    </div>
                                </button>

                                <div
                                    x-show="userPanelOpen"
                                    x-transition:enter="transition-opacity ease-out duration-300"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-60"
                                    x-transition:leave="transition-opacity ease-in duration-200"
                                    x-transition:leave-start="opacity-60"
                                    x-transition:leave-end="opacity-0"
                                    @click="userPanelOpen=false"
                                    class="fixed inset-0 z-40 bg-primary/5 backdrop-blur-xs"
                                    style="pointer-events: auto"></div>

                                <div
                                    x-show="userPanelOpen"
                                    x-transition:enter="transition transform ease-out duration-300"
                                    x-transition:enter-start="translate-y-full opacity-0"
                                    x-transition:enter-end="translate-y-0 opacity-100"
                                    x-transition:leave="transition transform ease-in duration-200"
                                    x-transition:leave-start="translate-y-0 opacity-100"
                                    x-transition:leave-end="translate-y-full opacity-0"
                                    class="fixed bottom-0 left-0 right-0 z-50 w-full mx-auto"
                                    style="pointer-events: auto"
                                    @click.away="userPanelOpen = false"
                                    tabindex="-1"
                                    aria-modal="true">
                                    <div class="p-6 border shadow-lg bg-background-secondary rounded-t-2xl border-neutral">
                                        <div class="flex items-center justify-start gap-4">
                                            <img src="{{ auth()->user()->avatar }}" class="border rounded-full size-12 border-neutral bg-background" alt="avatar" />
                                            <div class="flex flex-col gap-0.5">
                                                <span class="text-lg font-bold">{{ auth()->user()->name }}</span>
                                                <span class="text-sm text-base/70">{{ auth()->user()->email }}</span>
                                            </div>
                                        </div>
                                        <div class="w-full h-px my-6 bg-neutral"></div>
                                        <div class="flex flex-col w-full gap-2 mt-4">
                                            @foreach (\App\Classes\Navigation::getAccountDropdownLinks() as $nav)
                                            <x-navigation.link :href="route($nav['route'], $nav['params'] ?? null)" :spa="isset($nav['spa']) ? $nav['spa'] : true">
                                                {{ $nav['name'] }}
                                            </x-navigation.link>
                                            @endforeach
                                            <livewire:auth.logout />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @else
                            <div class="flex flex-col gap-3 mb-3">
                                @if(!config('settings.registration_disabled', false))
                                <a href="{{ route('register') }}" wire:navigate>
                                    <x-button.primary>
                                        {{ __('navigation.register') }}
                                    </x-button.primary>
                                </a>
                                @endif
                                <a href="{{ route('login') }}" wire:navigate>
                                    <x-button.secondary>
                                        {{ __('navigation.login') }}
                                    </x-button.secondary>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>
</nav>

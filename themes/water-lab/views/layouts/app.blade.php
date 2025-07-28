

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if(in_array(app()->getLocale(), config('app.rtl_locales'))) dir="rtl" @endif>
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{ config('app.name', 'Paymenter') }}
        @isset($title)
            - {{ $title }}
        @endisset
    </title>
    @vite(['themes/' . config('settings.theme') . '/js/app.js', 'themes/' . config('settings.theme') . '/css/app.css'], config('settings.theme'))
    @include('layouts.colors')

    @if (config('settings.logo'))
        <link rel="icon" href="{{ Storage::url(config('settings.logo')) }}" type="image/png">
    @endif
    @isset($title)
    <meta content="{{ isset($title) ? config('app.name', 'Paymenter') . ' - ' . $title : config('app.name', 'Paymenter') }}" property="og:title">
    <meta content="{{ isset($title) ? config('app.name', 'Paymenter') . ' - ' . $title : config('app.name', 'Paymenter') }}" name="title">
    @endisset
    @isset($description)
    <meta content="{{ $description }}" property="og:description">
    <meta content="{{ $description }}" name="description">
    @endisset
    @isset($image)
    <meta content="{{ $image }}" property="og:image">
    <meta content="{{ $image }}" name="image">
    @endisset
   
    <meta name="theme-color" content="{{ theme('primary') }}">

    {!! hook('head') !!}
</head>

<body class="flex flex-col w-full min-h-screen text-base antialiased background-waterlab" x-cloak x-data="{darkMode: $persist(window.matchMedia('(prefers-color-scheme: dark)').matches)}" :class="{'dark': darkMode}">
    <style>
        .background-waterlab{
            background-image: url('https://i.pinimg.com/1200x/37/5b/6f/375b6f41145eae0282ac17b4fc727844.jpg');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    
    {!! hook('body') !!}
    <x-navigation />
    <div class="flex flex-grow w-full">
        @if (isset($sidebar) && $sidebar)
            <x-navigation.sidebar title="$title" />
        @endif
        <div class="{{ (isset($sidebar) && $sidebar) ? 'md:ml-64 rtl:ml-0 rtl:md:mr-64' : '' }} flex flex-col flex-grow overflow-auto">
            <main class="container px-4 mx-auto mt-24 sm:px-6 md:px-8 lg:px-10">
                {{ $slot }}
            </main>
            <x-notification />
            <div class="py-8">
                <x-navigation.footer />
            </div>
        </div>
        <x-impersonating />
    </div>
    {!! hook('footer') !!}

    
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6887baa47ed5b21929b44af3/1j19325ak';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>

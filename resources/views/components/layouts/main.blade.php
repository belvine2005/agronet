<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
        @fluxAppearance
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800 antialiased">
        
        <flux:sidebar sticky collapsible class="bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
            <flux:sidebar.header>
                <flux:sidebar.brand
                    href="#"
                    logo="{{ asset('images/agrologo.svg') }}"
                    logo:dark="{{ asset('images/agrologo.svg') }}"
                    name="AgroNet"
                />
                <flux:sidebar.collapse class="in-data-flux-sidebar-on-desktop:not-in-data-flux-sidebar-collapsed-desktop:-mr-2" />
            </flux:sidebar.header>
            <flux:sidebar.nav>
                <flux:sidebar.item icon="home" href="#" current>Accueil</flux:sidebar.item>

                <flux:sidebar.item icon="building-storefront" href="{{ route('prices-market.index') }}">Marché</flux:sidebar.item>

                <flux:sidebar.item icon="shopping-cart" href="#{{-- route('commandes.index') --}}" badge="12">Commandes</flux:sidebar.item>

                <flux:sidebar.item icon="clock" href="#{{-- route('commandes.history') --}}">Historique</flux:sidebar.item>
                <flux:sidebar.group expandable icon="swatch" heading="Produits" class="grid">
                    <flux:sidebar.item href="#">Tous les produits</flux:sidebar.item>
                    <flux:sidebar.item href="#">Céréales</flux:sidebar.item>
                    <flux:sidebar.item href="#">Légumes</flux:sidebar.item>
                    <flux:sidebar.item href="#">Fruits</flux:sidebar.item>
                    <flux:sidebar.item href="#">Tubercules</flux:sidebar.item>
                    <flux:sidebar.item href="#">Intrants</flux:sidebar.item>
                </flux:sidebar.group>
            </flux:sidebar.nav>
            <flux:sidebar.spacer />
            <flux:sidebar.nav>
                <flux:sidebar.item icon="cog-6-tooth" href="#{{-- route('users.seetings') --}}">Préférences</flux:sidebar.item>
                
                <flux:sidebar.item icon="question-mark-circle" href="#{{-- route('faq.index') --}}">FAQ</flux:sidebar.item>
            </flux:sidebar.nav>
            <flux:dropdown position="top" align="start" class="max-lg:hidden">
                @auth
                    <flux:sidebar.profile icon="user" name="{{ Auth::user()->firstName }}" description="{{ Auth::user()->roleLabel }}" />
                    <flux:menu>
                        <flux:menu.radio.group>
                            <flux:heading>{{ Auth::user()->name }}</flux:heading>
                            <flux:text class="mt-2 text-lime-600 dark:text-lime-500">{{ Auth::user()->roleLabel }}</flux:text>
                        </flux:menu.radio.group>
                        <flux:menu.separator />
                        <form action="{{ route('auth.logout') }}" method="post" class="w-full">
                            @csrf
                            @method('delete')
                            <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">Déconnexion</flux:menu.item>
                        </form>
                    </flux:menu>
                @endauth
            </flux:dropdown>
        </flux:sidebar>
        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
            <flux:spacer />
            @auth
            <flux:dropdown position="top" align="start">
                <flux:profile icon="user" name="{{ Auth::user()->firstName }}" description="{{ Auth::user()->roleLabel }}" />
                <flux:menu>
                    <flux:menu.radio.group>
                        <flux:heading>{{ Auth::user()->name }}</flux:heading>
                        <flux:text class="mt-2 text-lime-600 dark:text-lime-500">{{ Auth::user()->roleLabel }}</flux:text>
                    </flux:menu.radio.group>
                    <flux:menu.separator />
                    <form action="{{ route('auth.logout') }}" method="post">
                        @csrf
                        @method('delete')
                        <flux:menu.item icon="arrow-right-start-on-rectangle">Déconnexion</flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
            @endauth
        </flux:header>
        <flux:main>
            {{ $slot }}
        </flux:main>
        @fluxScripts


        @livewireScripts
    </body>
</html>

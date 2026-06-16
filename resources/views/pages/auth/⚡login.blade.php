<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="flex min-h-screen">
    <div class="flex-1 flex justify-center items-center p-6">
        <div class="w-80 max-w-80 space-y-6">
            <div class="flex justify-center">
                <a href="/" class="group flex items-center gap-3">
                    <img src="{{ asset('images/agrologo.svg') }}" alt="AgroNet" class="h-8" />
                    <span class="text-xl font-semibold text-zinc-800 dark:text-white">AgroNet</span>
                </a>
            </div>

            <flux:heading class="text-center" size="xl">Bon retour</flux:heading>

            @if (session('success'))
                <flux:text class="text-center text-green-600">{{ session('success') }}</flux:text>
            @endif

            <form method="POST" action="{{ route('auth.doLogin') }}">
                @csrf
                <div class="flex flex-col gap-6">
                    <flux:input
                        label="Email"
                        type="email"
                        name="email"
                        placeholder="email@example.com"
                        value="{{ old('email') }}"
                    />
                    <flux:error name="email" />

                    <flux:field>
                        <div class="mb-3 flex justify-between">
                            <flux:label>Mot de passe</flux:label>

                            <flux:link href="#" variant="subtle" class="text-sm">Mot de passe oublié ?</flux:link>
                        </div>

                        <flux:input type="password" name="password" placeholder="Votre mot de passe" />
                        <flux:error name="password" />
                    </flux:field>

                    <flux:checkbox name="remember" label="Se souvenir de moi pendant 30 jours" />

                    <flux:button variant="primary" class="w-full" type="submit">Se connecter</flux:button>
                </div>
            </form>

            <flux:subheading class="text-center">
                Première visite ? <flux:link href="{{ route('auth.register') }}">Créez un compte gratuitement</flux:link>
            </flux:subheading>
        </div>
    </div>

    <div class="flex-1 p-4 max-lg:hidden">
        <div class="text-white relative rounded-lg h-full w-full bg-gradient-to-br from-lime-600 via-emerald-700 to-zinc-900 flex flex-col items-start justify-end p-16">
            <div class="flex gap-2 mb-4">
                <flux:icon.star variant="solid" />
                <flux:icon.star variant="solid" />
                <flux:icon.star variant="solid" />
                <flux:icon.star variant="solid" />
                <flux:icon.star variant="solid" />
            </div>

            <div class="mb-6 italic font-base text-3xl xl:text-4xl">
                AgroNet me permet de suivre les prix du marché et de gérer mes commandes plus simplement que jamais.
            </div>

            <div class="flex gap-4">
                <flux:avatar name="Awa Diallo" size="xl" />

                <div class="flex flex-col justify-center font-medium">
                    <div class="text-lg">Awa Diallo</div>
                    <div class="text-zinc-300">Productrice agricole</div>
                </div>
            </div>
        </div>
    </div>
</div>

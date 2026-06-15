<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<flux:card class="space-y-6">
    @if (session('success'))
        <flux:text class="text-green-600">{{ session('success') }}</flux:text>
    @endif

    <form method="POST" action="{{ route('auth.doLogin') }}">
        @csrf
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Create your account</flux:heading>
                <flux:text class="mt-2">Welcome!</flux:text>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <flux:input label="First name" placeholder="River" />

                <flux:input label="Last name" placeholder="Porzio" />
            </div>
            
            <div class="grid grid-cols-2 gap-3">
                <flux:input label="Email" type="email" name="email" placeholder="Your email address" value="{{ old('email') }}" />
                <flux:input label="Phone" type="tel" name="phone" placeholder="Your phone number" value="{{ old('phone') }}" />
                <flux:error name="email" />
                <flux:error name="phone" />
                <flux:field>
                    <flux:input label="Password" type="password" placeholder="Enter your password" class="max-w-sm" />
                    <flux:input label="Confirm Password" type="password" placeholder="Confirm your password" class="max-w-sm" />
                </flux:field>

                <flux:radio.group label="Role">
                <flux:radio
                    name="role"
                    value="acheteur" 
                    label="Acheteur"
                    description="Vous souhaitez acheter des produits agricoles."
                    checked
                />
                <flux:radio
                    name="role"
                    value="produteur" 
                    label="Producteur"
                    description="Vous souhaitez vendre des produits agricoles."
                />
                <flux:radio
                    name="role"
                    value="fournisseur" 
                    label="Fournisseur"
                    description="Vous souhaitez fournir des intrants agricoles."
                />
            </flux:radio.group>
            </div>
            <div class="space-y-2">
                <flux:button variant="primary" class="w-full" type="submit">Create account</flux:button>
                <flux:button variant="ghost" class="w-full" href="{{ route('auth.login') }}">Already have an account? Log in</flux:button>
            </div>
        </div>
    </form>
</flux:card>

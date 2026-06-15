@section('title', 'Connexion – AgroNet')

@section('content')
    @if (session('success'))
        <p class="mb-4 text-sm text-green-600">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('auth.doLogin') }}">
        @csrf
        <flux:fieldset>
          <flux:legend>Shipping adress</flux:legend>

            <div>
                <flux:heading size="lg">Log in to your account</flux:heading>
                <flux:text class="mt-2">Welcome back!</flux:text>
            </div>


              <flux:field>

                <flux:label>Email</flux:label>

                <flux:input wire:model="email" type="email" name="email" placeholder="Your email address" value="{{ old('email') }}" />

                <flux:error name="email" />

              </flux:field>
              

              
              <flux:field>

                  <flux:label>Password</flux:label>

                  {{-- <flux:link href="#" variant="subtle" class="text-sm">Forgot password?</flux:link> --}}

                
                <flux:input type="password" name="password" placeholder="Your password"/>

                <flux:error name="password" />

              </flux:field>

            
                    

              <div>

                <flux:button variant="primary" class="w-full" type="submit">Log in</flux:button>

                <flux:button variant="ghost" class="w-full" href="{{ route('auth.register') }}">Sign up for a new account</flux:button>

              </div>
            
        </flux:fieldset>
      </form>
@endsection

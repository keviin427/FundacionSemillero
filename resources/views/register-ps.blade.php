<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />
        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Nombre') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
            </div>

            <div>
                <x-label for="surname" value="{{ __('Apellido') }}" />
                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')"
                    required autofocus autocomplete="surname" />
            </div>



            <div class="mt-4">
                <x-label for="fecha_nacimiento" value="{{ __('Fecha de Nacimiento') }}" />
                <x-input id="fecha_nacimiento" class="block mt-1 w-full" type="date" name="fecha_nacimiento" />
            </div>

            <div class="mt-4" style="display: none;">
                <x-label for="role" :value="__('Rol')" />
                <select id="role" name="role" class="block mt-1 w-full" required>
                    <option value="ps">Psicologo</option>
                </select>
            </div>


            <div class="mt-4">
                <x-label for="direccion_domicilio" value="{{ __('Dirección de Domicilio') }}" />
                <x-input id="direccion_domicilio" class="block mt-1 w-full" type="text" name="direccion_domicilio" />
            </div>


            <div>
                <x-label for="phone" value="{{ __('Número de Télefono') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')"
                    required autofocus autocomplete="phone" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Correo Electrónico') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirma tu Contraseña') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('loginTemplate') }}">
                    {{ __('Ya estás registrado?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('REGISTRATE') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

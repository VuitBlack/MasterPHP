<x-app-layout>
    <!-- Encabezado de la página -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Configuración del Usuario') }}
        </h2>
    </x-slot>

    <!-- Contenido principal -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center">

            <!-- Tarjeta con tamaño uniforme (sm:max-w-md) y centrada como en registro -->
            <div class="w-full sm:max-w-md px-8 py-6 bg-[#9B5975] text-white shadow-2xl overflow-hidden sm:rounded-2xl border border-white/20">
                <header>
                    <h2 class="text-lg font-medium text-white">
                        {{ __('Ajustes de la Cuenta') }}
                    </h2>
                    <p class="mt-1 text-sm text-pink-100">
                        {{ __('Personaliza la configuración de tu cuenta y preferencias.') }}
                    </p>
                </header>

                <!-- Formulario -->
                <form method="POST" action="#" class="mt-6 space-y-4">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                            :value="Auth::user()->name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Surname -->
                    <div>
                        <x-input-label for="surname" :value="__('Surname')" />
                        <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname"
                            :value="Auth::user()->surname" />
                        <x-input-error :messages="$errors->get('surname')" class="mt-2" />
                    </div>

                    <!-- Nick -->
                    <div>
                        <x-input-label for="nick" :value="__('Nick')" />
                        <x-text-input id="nick" class="block mt-1 w-full" type="text" name="nick"
                            :value="Auth::user()->nick" />
                        <x-input-error :messages="$errors->get('nick')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="Auth::user()->email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                            required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end pt-2">
                        <x-primary-button>
                            {{ __('Guardar Cambios') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
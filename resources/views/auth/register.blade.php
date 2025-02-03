<x-guest-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Mobile Number -->
        <div class="mb-3">
            <x-input-label for="mobile" :value="__('Mobile')" />
            <div class="input-group">
                <span class="input-group-text">+91</span>
                <x-text-input id="mobile" class="form control" type="text" name="mobile" :value="old('mobile')" required autocomplete="mobile" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')"/>
            </div>
            <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
        </div>

        <!-- Register As -->
        <div class="mb-3">
            <x-input-label :value="__('Register As')" />
            <div>
                <input id="client" type="radio" name="role" value="client" {{ old('role') == 'client' ? 'checked' : '' }} />
                <label for="client">Client</label>
                <input id="service_provider" type="radio" name="role" value="service_provider" {{ old('role') == 'service_provider' ? 'checked' : '' }} />
                <label for="service_provider">Service Provider</label>
            </div>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-3">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="d-flex justify-content-end mt-4">
            <a class="text-decoration-none text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

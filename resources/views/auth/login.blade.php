

<x-guest-layout>
  
            
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    



    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" />{{ __('messages.pass') }}

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('messages.remember_pass') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <select style="margin-right: 5rem;width: 5.1rem;height: 2.5rem;" class="loginButton bright changeLang">
			  	<option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Russia</option>
			  	<option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
            </select>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('messages.forgot_pass') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('messages.log_in') }}
            </x-primary-button>


        </div>
    </form>
	<script src="{{asset('/js/jquery-2.1.4.min.js') }}"></script>
    <script type="text/javascript">
    		var url = "{{ route('changeLang') }}";
    		$(".changeLang").change(function(){
				//change($(this).val())
        		window.location.href = url + "?lang="+ $(this).val();
    		});
	</script>
</x-guest-layout>

@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-24">
	<div class="mx-auto flex flex-wrap max-width-form text-gray-800">
		<!-- 	Header	 -->
		<div class="flex-100">
			<h1 class="font-bold text-3xl flex-100 mb-8">{{ __('Login') }}</h1>
		</div>
		<!-- 	Social Sign Up Buttons	 -->
		<div class="flex justify-between flex-100">
			<button class="bg-blue-google text-white relative px-20 py-4 rounded">
				<div class="button-icon">
					<i class="fab fa-google"></i>
				</div>
				<div>
					login With Google									
				</div>
			</button>
			<button class="py-4 px-4 rounded bg-gray-300">
				<i class="fab fa-twitter text-gray-600"></i>
			</button>
			<button class="py-4 px-4 rounded bg-gray-300">
				<i class="fab fa-facebook text-gray-600"></i>
			</button>
		</div>
		<!-- 'or' divider		 -->
		<div class="flex items-center flex-100 mt-8">
			<hr class="border-t-2 flex-auto">
			<span class="px-4 text-gray-600 font-light">
				Or 				
			</span>
			<hr class="border-t-2 flex-auto">
		</div>
		<!-- 	form	 -->
		<div class="flex flex-100 mt-8">
			<form class="flex-100" method="POST" action="{{ route('login') }}">
                @csrf
				<!-- 		inputs		 -->
				<div class="flex flex-100">
					<div class="flex-grow ml-2">
						<label class="block mb-1 font-bold" for="">{{ __('E-Mail Address') }}</label>
						<input class="bg-gray-200 w-full rounded-lg py-3 px-3 shadow-inner @error('email') border-red-400 @enderror" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="text-red-400 block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
				</div>
				<div class="flex flex-100 mt-4">
					<div class="flex-grow mr-2">
						<label class="block mb-1 font-bold" for="">{{ __('Password') }}</label>
						<input class="bg-gray-200 w-full rounded-lg py-3 px-3 shadow-inner  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="text-red-400 block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
				</div>
				<div class="flex flex-100 mt-4 items-start">
					<div class="leading-tight text-gray-600 font-light">
					<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
					</div>
				</div>
				<div class="flex flex-100 mt-4">
					<button class="bg-pink-dribbble flex-50 text-white relative py-4 rounded" type="submit">
                        <div>
                            {{ __('Login') }}					
                        </div>
                    </button>
                    @if (Route::has('password.request'))
                        <a class="text-blue-400 flex items-center px-4" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-24">
	<div class="mx-auto flex flex-wrap max-width-form text-gray-800">
		<!-- 	Header	 -->
		<div class="flex-100">
			<h1 class="font-bold text-3xl flex-100 mb-8">{{ __('Register') }}</h1>
		</div>
		<!-- 	Social Sign Up Buttons	 -->
		<div class="flex justify-between flex-100">
			<button class="bg-blue-google text-white relative px-20 py-4 rounded">
				<div class="button-icon">
					<i class="fab fa-google"></i>
				</div>
				<div>
					Sign up With Google									
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
			<form class="flex-100" method="POST" action="{{ route('register') }}">
                @csrf
				<!-- 		inputs		 -->
				<div class="flex flex-100">
					<div class="flex-grow mr-2">
						<label class="block mb-1 font-bold" for="">{{ __('Name') }}</label>
						<input class="bg-gray-200 w-full rounded-lg py-3 px-3 shadow-inner @error('name') is-invalid @enderror"   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus type="text">
					            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
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
						<input class="bg-gray-200 w-full rounded-lg py-3 px-3 shadow-inner  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" type="password">
                                @error('password')
                                    <span class="text-red-400 block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
				</div>
				<div class="flex flex-100 mt-4">
					<div class="flex-grow mr-2">
						<label class="block mb-1 font-bold" for="">{{ __('Confirm Password') }}</label>
						<input placeholder="6+ characters"  name="password_confirmation" required autocomplete="new-password" class="bg-gray-200 w-full rounded-lg py-3 px-3 shadow-inner" type="password">
					</div>
				</div>
				<div class="flex flex-100 mt-4 items-start">
					<input class="h-6 w-6 mr-2 checkbox" type="checkbox">
					<div class="leading-tight text-gray-600 font-light">
						Creating an account means you're okay with our
						<a class="text-blue-400" href="#">Terms of Service</a>,
						<a class="text-blue-400" href="#">Privacy Policy</a>, and our default
						<a class="text-blue-400" href="#">Notification Settings</a>.
					</div>
				</div>
				<div class="flex flex-100 mt-4">
					<button class="bg-pink-dribbble flex-50 text-white relative py-4 rounded" type="submit">
                        <div>
                            {{ __('Register') }}					
                        </div>
                    </button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection

@extends('layouts.app')

@section('content')
<div class="mx-auto h-full flex justify-center items-center bg-gray-300">
    <div class="w-96 bg-blue-900 rounded-lg shadow-xl p-6">
        <div class="col-md-8">
            <svg class="text-white w-20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
              
            <h1 class="text-white text-3xl pt-8">Welcome Back</h1>
            <h2 class="text-blue-300">Enter your credientials below</h2>

            <form method="POST" action="{{ route('login') }}" class="pt-8">
                @csrf

                <div class="relative">
                    <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">E-mail</label>

                    <div>
                        <input id="email" type="email" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="your@email.com">

                        @error('email')
                            <span class="text-red-600 text-sm pt-1" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="relative pt-3">
                    <label for="password" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="password" autocomplete="current-password" placeholder="Password">

                        @error('password')
                            <span class="text-red-600 text-sm pt-1" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="pt-3">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="text-white" for="remember">{{ __('Remember Me') }}</label>
                </div>

                <div class="pt-8">
                    <button type="submit" class="w-full bg-gray-400 py-2 px-3 text-left uppercase rounded text-blue-800 font-bold">
                        Login
                    </button>
                </div>

                <div class="flex justify-between pt-8 text-white text-sm font-bold">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot You Password?
                    </a>
                    <a class="btn btn-link" href="{{ route('register') }}">
                        Register
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

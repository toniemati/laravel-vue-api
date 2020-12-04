@extends('layouts.app')

@section('content')
<div class="mx-auto h-full flex justify-center items-center bg-gray-300">
    <div class="w-96 bg-blue-900 rounded-lg shadow-xl p-6">
        <div class="col-md-8">
            <svg class="text-white w-20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
              </svg>

            <h1 class="text-white text-3xl pt-8">Welcome in registration</h1>
            <h2 class="text-blue-300">Enter your credientials below</h2>

            <form method="POST" action="{{ route('register') }}" class="pt-8">
                @csrf

                <div class="relative">
                    <label for="name" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">Name</label>

                    <div>
                        <input id="name" type="text" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Name">

                        @error('name')
                            <span class="text-red-600 text-sm pt-1" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="relative pt-3">
                    <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">Email</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="E-Mail">

                        @error('email')
                            <span class="text-red-600 text-sm pt-1" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="relative pt-3">
                    <label for="password" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="password" autocomplete="new-password" placeholder="Password">

                        @error('password')
                            <span class="text-red-600 text-sm pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="relative pt-3">
                    <label for="password-confirm" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">Confirm Password</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password">
                    </div>
                </div>

                <div class="pt-8">
                    <button type="submit" class="w-full bg-gray-400 py-2 px-3 text-left uppercase rounded text-blue-800 font-bold">
                        Register
                    </button>
                </div>

                <div class="flex justify-between pt-8 text-white text-sm font-bold">
                    <a class="btn btn-link" href="{{ route('login') }}">
                        Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
 
@section('title', 'Login')

@section('content')
    <x-modal>
        <form method="POST" action="{{ route('login.post') }}">
            <h1 class="mb-1 font-medium">Login</h1>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="example@gmail.com" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="*****" required>
            </div>
            <div>
                <button type="submit">Sign In</button>
            </div>
            <div>
                <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">Forgot Password ? <a href="#">Click Here</a></p>
            </div>
        </form>
    </x-modal>
@endsection
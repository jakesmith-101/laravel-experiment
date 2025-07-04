@extends('layouts.app')
 
@section('title', 'Register')
 
@section('content')
    <x-modal>
        <form method="POST" action="{{ route('register.post') }}">
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
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" name="confirmPassword" placeholder="*****" required>
            </div>
            <div>
                <button type="submit">Register</button>
            </div>
        </form>
    </x-modal>
@endsection
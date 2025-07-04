@extends('layouts.app')
 
@section('title', 'Welcome')

@section('content')
    <x-modal>
        <h1 class="mb-1 font-medium">Hello world!</h1>
        <ul class="flex gap-3 text-sm leading-normal">
            <li>
                <a href="https://laravel.com/docs/12.x/documentation" target="_blank" class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">
                    Learn
                </a>
            </li>
        </ul>
    </x-modal>
@endsection
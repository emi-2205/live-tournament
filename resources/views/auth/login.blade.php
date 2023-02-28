@extends('layouts.welcome')

@section('body')
    <div class="flex" style="justify-content: center;">

        <form method="POST" action="{{ route('authentication') }}">
            @csrf
            <div>
                <label class="text-xl font-semibold text-gray-900 dark:text-white" for="username">Username:</label>
                <input type="text" name="username" id="username">
            </div>
            <br>
            <div>
                <label class="text-xl font-semibold text-gray-900 dark:text-white" for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>
            <br>
            <div style="display: flex; justify-content: center">
                <button class="text-xl font-semibold text-gray-900 dark:text-white" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection

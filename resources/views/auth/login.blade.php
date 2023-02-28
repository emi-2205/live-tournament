@extends('layouts.welcome')

@section('body')
    <div class="flex" style="justify-content: center;">

        <form method="POST" action="{{ route('authentication') }}">
            @csrf
            <div>
                <label for="username" style="color:white">Username:</label>
                <input type="text" name="username" id="username">
            </div>
            <br>
            <div>
                <label for="password" style="color:white">Password:</label>
                <input type="password" name="password" id="password">
            </div>
            <br>
            <div>
                <button type="submit" style="color:white">Submit</button>
            </div>
        </form>
    </div>
@endsection

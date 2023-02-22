@extends('layouts.welcome')


@section('live')
    @foreach ($partite as $partita)
        @if ($partita->live == 1)
            <div class="flex" style="justify-content: center;">
                <a href="https://laravel.com/docs" class="content-container scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div class="grid-container-outer gap-6 lg:gap-8" style="justify-content: space-around; width: 100%;">

                        <div class="teams">
                            <h2 class=" text-xl font-semibold text-gray-900 dark:text-white">{{ $partita->red_team_ID }}</h2>
                            <br>
                            <h2 class=" text-xl font-semibold text-gray-900 dark:text-white">{{ $partita->blue_team_ID }}</h2>
                        </div>
                        <div class="goals">
                            <h2 class=" text-xl font-semibold text-gray-900 dark:text-white">{{ $partita->red_goals }}</h2>
                            <br>
                            <h2 class=" text-xl font-semibold text-gray-900 dark:text-white">{{ $partita->blue_goals }}</h2>
                        </div>
                        <div class="live flex" style="align-items: center;">
                            @if ($partita->live == 1)
                                <h2 class=" text-xl font-semibold text-gray-900 dark:text-white" style="color: rgb(31, 198, 31)">Live</h2>
                            @endif
                        </div>
                        <div class="arrow flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </div>
                    </div>
                </a>

            </div>
            <br>
            <br>
            <div class="flex" style="justify-content: center;">
                <a href="https://laravel.com/docs" class="content-container scale-100 p-6 bg-white dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex" style="padding:1px; width:90%; background-color: #9da3ae">
                    <div class="" style="justify-content: space-around; width: 100%;">
                    </div>
                </a>

            </div>
            <br>
        @endif
    @endforeach
@endsection



@section('body')
    <div class="flex" style="justify-content: center;">
        <h1 class=" text-xl font-semibold text-gray-600 dark:text-gray-400">Day {{ $day }}</h1>
    </div>
    <br>
    @foreach ($partite as $partita)
        @if ($partita->live == 0)
            <div class="flex" style="justify-content: center;">
                <a href="https://laravel.com/docs" class="content-container scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div class="grid-container-outer gap-6 lg:gap-8" style="justify-content: space-around; width: 100%;">

                        <div class="teams">
                            <h2 class=" text-xl font-semibold text-gray-900 dark:text-white">{{ $partita->red_team_ID }}</h2>
                            <br>
                            <h2 class=" text-xl font-semibold text-gray-900 dark:text-white">{{ $partita->blue_team_ID }}</h2>
                        </div>
                        <div class="goals">
                            <h2 class=" text-xl font-semibold text-gray-900 dark:text-white">{{ $partita->red_goals }}</h2>
                            <br>
                            <h2 class=" text-xl font-semibold text-gray-900 dark:text-white">{{ $partita->blue_goals }}</h2>
                        </div>
                        <div class="live flex" style="align-items: center;">
                            @if ($partita->live == 1)
                                <h2 class=" text-xl font-semibold text-gray-900 dark:text-white" style="color: rgb(31, 198, 31)">Live</h2>
                            @endif
                        </div>
                        <div class="arrow flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </div>
                    </div>
                </a>

            </div>
            <br>
        @endif
    @endforeach
@endsection

@extends('layouts.welcome')
<script>
    var isLive = {{ $partita->live }};
    var id = {{ $partita->id }};
    var url1 = '{{ route('getPartita', ['id' => ':id']) }}'
    url1 = url1.replace(':id', id);
    /* JavaScript function to get updated integer value from the server using AJAX */
    function updateIntegerValue() {
        setInterval(function() {

                /* Send an AJAX request to the server to get the updated integer value */
                $.ajax({
                    url: url1,
                    method: "GET",
                    dataType: "json",
                    error: function(data) {
                        alert('Problemi nel recupero dei dati. Provare più tardi.')
                    },
                    success: function(data) {
                        var partita = (data['partita']); // should print "1" to the console
                        isLive = partita['live'];
                        if (partita['red_goals'] != $('#red_goals').text()) {
                            $('#red_goals').text(partita['red_goals']);
                        }
                        if (partita['blue_goals'] != $('#blue_goals').text()) {
                            $('#blue_goals').text(partita['blue_goals']);
                        }
                    }
                });
            }

            , 1000); /* Check every 1 seconds*/
    }
    if (isLive == 1) {
        updateIntegerValue();
    }
</script>

@section('body')
    <div class="flex" style="justify-content: center;">
        <div class="grid-container-match-detail gap-6 lg:gap-8 scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="justify-content: space-around; width: 70%;">
            <div class="red-team" style="margin: 2; padding: 2">
                <img src="{{ asset('img/red-team-logo.png') }}" style="max-width: 7em" alt="">
            </div>
            <div class="red-team-ID" style="margin: 2; padding: 2">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $partita->red_team_ID }} </h2>
            </div>
            <div class="goals-zone font-semibold text-gray-900 dark:text-white" style="margin: 2; padding: 2">
                <h2 id="red_goals" class="text-xl font-semibold text-gray-900 dark:text-white" style="display: inline; font-size: xxx-large">{{ $partita->red_goals }} </h2>
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white" style="display: inline; font-size: xxx-large">&nbsp - &nbsp</h2>
                <h2 id="blue_goals" class="text-xl font-semibold text-gray-900 dark:text-white" style="display: inline; font-size: xxx-large"> {{ $partita->blue_goals }}</h2>
            </div>
            <div class="blue-team" style="margin: 2; padding: 2">
                <img src="{{ asset('img/blue-team-logo.png') }}" style="max-width: 7em" alt="">
            </div>
            <div class="blue-team-ID" style="margin: 2; padding: 2">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $partita->blue_team_ID }} </h2>
            </div>
            @auth
                <br>
                <br>
                <br>
                <div class="red-buttons font-semibold text-gray-900 dark:text-white" style="margin-top: 4; margin: 2; padding: 2">
                    <a id="red_plus" class="text-xl font-semibold text-gray-900 dark:text-white" href={{ route('incrementGoals', ['id' => $partita->id, 'team' => 'red']) }} style="color: white">
                        <h2 id="red_goals" class="text-xl font-semibold text-gray-900 dark:text-white" style="display: inline; font-size: xxx-large">+</h2>
                    </a>
                    <a id="red_minus" class="text-xl font-semibold text-gray-900 dark:text-white" href={{ route('decrementGoals', ['id' => $partita->id, 'team' => 'red']) }} style="color: white">
                        <h2 id="red_goals" class="text-xl font-semibold text-gray-900 dark:text-white" style="display: inline; font-size: xxx-large">-</h2>
                    </a>
                </div>
                <div class="blue-buttons" style="margin: 2; margin-top: 4; padding: 2">
                    <a id="blue_plus" class="text-xl font-semibold text-gray-900 dark:text-white" href={{ route('incrementGoals', ['id' => $partita->id, 'team' => 'blue']) }} style="color: white;">
                        <h2 id="red_goals" class="text-xl font-semibold text-gray-900 dark:text-white" style="display: inline; font-size: xxx-large">+</h2>
                    </a>
                    <a id="blue_minus" class="text-xl font-semibold text-gray-900 dark:text-white" href={{ route('decrementGoals', ['id' => $partita->id, 'team' => 'blue']) }} style="color: white">
                        <h2 id="red_goals" class="text-xl font-semibold text-gray-900 dark:text-white" style="display: inline; font-size: xxx-large">-</h2>
                    </a>
                </div>
                <div class="restart-button" style="margin-top: 4; margin: 2; padding: 2">
                    <a id="restart" class="text-xl font-semibold text-gray-900 dark:text-white" href={{ route('restartPartita', ['id' => $partita->id]) }} style="color: white;">
                        <h2 id="red_goals" class="text-xl font-semibold text-gray-900 dark:text-white" style="display: inline; font-size: x-large">RESTART</h2>
                    </a>
                </div>
                <div class="live-button" style="margin-top: 4; margin: 2; padding: 2">
                    <a id="live" class="text-xl font-semibold text-gray-900 dark:text-white" href={{ route('startPartita', ['id' => $partita->id]) }} style="color: white">
                        <h2 id="red_goals" class="text-xl font-semibold text-gray-900 dark:text-white" style="display: inline; font-size: x-large">LIVE</h2>
                    </a>
                </div>
                <div class="finish-button" style="margin-top: 4; margin: 2; padding: 2">
                    <a id="finished" class="text-xl font-semibold text-gray-900 dark:text-white" href={{ route('closePartita', ['id' => $partita->id]) }} style="color: white">
                        <h2 id="red_goals" class="text-xl font-semibold text-gray-900 dark:text-white" style="display: inline; font-size: x-large">FINISH</h2>
                    </a>
                </div>
            @endauth
        </div>
    </div>
@endsection

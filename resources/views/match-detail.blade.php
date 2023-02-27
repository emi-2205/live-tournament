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
        <a id="red_plus" class="text-xl font-semibold text-gray-900 dark:text-white" href={{ route('incrementGoals', ['id' => $partita->id, 'team' => 'red']) }} style="color: white">+</a>
        <a id="red_minus" class="text-xl font-semibold text-gray-900 dark:text-white" href={{ route('decrementGoals', ['id' => $partita->id, 'team' => 'red']) }} style="color: white">-</a>
        <br>
        <h2 id="red_goals" class=" text-xl font-semibold text-gray-900 dark:text-white">{{ $partita->red_goals }}</h2>
        <h2 id="blue_goals" class=" text-xl font-semibold text-gray-900 dark:text-white">{{ $partita->blue_goals }}</h2>
        <a id="blue_plus" class="text-xl font-semibold text-gray-900 dark:text-white" href={{ route('incrementGoals', ['id' => $partita->id, 'team' => 'blue']) }} style="color: white">+</a>
        <a id="blue_minus" class="text-xl font-semibold text-gray-900 dark:text-white" href={{ route('decrementGoals', ['id' => $partita->id, 'team' => 'blue']) }} style="color: white">-</a>
        <a id="live" class="text-xl font-semibold text-gray-900 dark:text-white" href={{ route('startPartita', ['id' => $partita->id]) }} style="color: white">LIVE</a>
        <a id="finished" class="text-xl font-semibold text-gray-900 dark:text-white" href={{ route('closePartita', ['id' => $partita->id]) }} style="color: white">FINISH</a>
        <a id="restart" class="text-xl font-semibold text-gray-900 dark:text-white" href={{ route('restartPartita', ['id' => $partita->id]) }} style="color: white">RESTART</a>
    </div>
@endsection

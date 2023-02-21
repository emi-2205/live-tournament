<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PartitaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('partita')->insert([
            [
                'partita_ID' => '1',
                'red_team_ID' => 'Team1',
                'blue_team_ID' => 'Team2',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-06',
            ],
            [
                'partita_ID' => '2',
                'red_team_ID' => 'Team3',
                'blue_team_ID' => 'Team4',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-06',
            ],
            [
                'partita_ID' => '3',
                'red_team_ID' => 'Team5',
                'blue_team_ID' => 'Team6',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-06',
            ],
            [
                'partita_ID' => '4',
                'red_team_ID' => 'Team7',
                'blue_team_ID' => 'Team8',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-06',
            ],
            [
                'partita_ID' => '5',
                'red_team_ID' => 'Team9',
                'blue_team_ID' => 'Team10',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-06',
            ],
            // --------------- DAY2
            [
                'partita_ID' => '6',
                'red_team_ID' => 'Team9',
                'blue_team_ID' => 'Team2',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-07',
            ],
            [
                'partita_ID' => '7',
                'red_team_ID' => 'Team1',
                'blue_team_ID' => 'Team4',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-07',
            ],
            [
                'partita_ID' => '8',
                'red_team_ID' => 'Team3',
                'blue_team_ID' => 'Team6',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-07',
            ],
            [
                'partita_ID' => '9',
                'red_team_ID' => 'Team5',
                'blue_team_ID' => 'Team8',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-07',
            ],
            [
                'partita_ID' => '10',
                'red_team_ID' => 'Team7',
                'blue_team_ID' => 'Team10',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-07',
            ],
            // --------------- DAY3
            [
                'partita_ID' => '11',
                'red_team_ID' => 'Team2',
                'blue_team_ID' => 'Team3',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-08',
            ],
            [
                'partita_ID' => '12',
                'red_team_ID' => 'Team4',
                'blue_team_ID' => 'Team5',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-08',
            ],
            [
                'partita_ID' => '13',
                'red_team_ID' => 'Team6',
                'blue_team_ID' => 'Team7',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-08',
            ],
            [
                'partita_ID' => '14',
                'red_team_ID' => 'Team8',
                'blue_team_ID' => 'Team9',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-08',
            ],
            [
                'partita_ID' => '15',
                'red_team_ID' => 'Team10',
                'blue_team_ID' => 'Team1',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-08',
            ],
            // --------------- DAY3
            [
                'partita_ID' => '16',
                'red_team_ID' => 'Team?',
                'blue_team_ID' => 'Team?',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-09',
            ],
            [
                'partita_ID' => '17',
                'red_team_ID' => 'Team?',
                'blue_team_ID' => 'Team?',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-09',
            ],
            [
                'partita_ID' => '18',
                'red_team_ID' => 'Team?',
                'blue_team_ID' => 'Team?',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-09',
            ],
        ]);
    }
}

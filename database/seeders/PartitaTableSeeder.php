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
                'id' => '1',
                'red_team_ID' => 'Team1',
                'blue_team_ID' => 'Team2',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-06',
            ],
            [
                'id' => '2',
                'red_team_ID' => 'Team3',
                'blue_team_ID' => 'Team4',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-06',
            ],
            [
                'id' => '3',
                'red_team_ID' => 'Team5',
                'blue_team_ID' => 'Team6',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-06',
            ],
            [
                'id' => '4',
                'red_team_ID' => 'Team7',
                'blue_team_ID' => 'Team8',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-06',
            ],
            [
                'id' => '5',
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
                'id' => '6',
                'red_team_ID' => 'Team9',
                'blue_team_ID' => 'Team2',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-07',
            ],
            [
                'id' => '7',
                'red_team_ID' => 'Team1',
                'blue_team_ID' => 'Team4',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-07',
            ],
            [
                'id' => '8',
                'red_team_ID' => 'Team3',
                'blue_team_ID' => 'Team6',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-07',
            ],
            [
                'id' => '9',
                'red_team_ID' => 'Team5',
                'blue_team_ID' => 'Team8',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-07',
            ],
            [
                'id' => '10',
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
                'id' => '11',
                'red_team_ID' => 'Team2',
                'blue_team_ID' => 'Team3',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-08',
            ],
            [
                'id' => '12',
                'red_team_ID' => 'Team4',
                'blue_team_ID' => 'Team5',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-08',
            ],
            [
                'id' => '13',
                'red_team_ID' => 'Team6',
                'blue_team_ID' => 'Team7',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-08',
            ],
            [
                'id' => '14',
                'red_team_ID' => 'Team8',
                'blue_team_ID' => 'Team9',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-08',
            ],
            [
                'id' => '15',
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
                'id' => '16',
                'red_team_ID' => 'Team?',
                'blue_team_ID' => 'Team?',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-09',
            ],
            [
                'id' => '17',
                'red_team_ID' => 'Team?',
                'blue_team_ID' => 'Team?',
                'red_goals' => null,
                'blue_goals' => null,
                'live' => 0,
                'finished' => 0,
                'date' => '2022-03-09',
            ],
            [
                'id' => '18',
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

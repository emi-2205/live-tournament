<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partita;

class PublicController extends Controller
{
    protected $_partitaModel;

    public function __construct()
    {
        $this->_partitaModel = new Partita;
    }

    public function sanitize($partite)
    {
        // risponde alla rota GET che presenta la home del sistema
        //tira su i 5 alloggi, pubblicati= true, da mettere nel carosello in home
        foreach ($partite as $partita) {
            if (is_null($partita->red_goals))
                $partita->red_goals = "-";
            if (is_null($partita->blue_goals))
                $partita->blue_goals = "-";
        }

        return $partite;
    }

    public function showHome()
    {
        $day = 1;
        // risponde alla rota GET che presenta la home del sistema
        //tira su i 5 alloggi, pubblicati= true, da mettere nel carosello in home
        if ($day == 1) {
            $partite = $this->_partitaModel->where('date', ['2022-03-06'])->get();
        } elseif ($day == 2) {
            $partite = $this->_partitaModel->where('date', ['2022-03-07'])->get();
        } elseif ($day == 3) {
            $partite = $this->_partitaModel->where('date', ['2022-03-08'])->get();
        } else {
            $partite = $this->_partitaModel->where('date', ['2022-03-09'])->get();
        }
        $partite = $partite->all();
        if ($partite != null)
            $partite = $this->sanitize($partite);

        return view('home')
            ->with([
                'partite' => $partite,
                'day' => $day
            ]);
    }
    public function showByDay($day)
    {
        // risponde alla rota GET che presenta la home del sistema
        //tira su i 5 alloggi, pubblicati= true, da mettere nel carosello in home
        if ($day == 1) {
            $partite = $this->_partitaModel->where('date', ['2022-03-06'])->get();
        } elseif ($day == 2) {
            $partite = $this->_partitaModel->where('date', ['2022-03-07'])->get();
        } elseif ($day == 3) {
            $partite = $this->_partitaModel->where('date', ['2022-03-08'])->get();
        } else {
            $partite = $this->_partitaModel->where('date', ['2022-03-09'])->get();
        }
        $partite = $partite->all();
        if ($partite != null)
            $partite = $this->sanitize($partite);

        return view('home')
            ->with([
                'partite' => $partite,
                'day' => $day
            ]);
    }

    public function getPartitaById($id)
    {
        $partita = Partita::findOrFail($id);
        return $partita;
    }

    public function getPartita($id)
    {
        $partita = $this->getPartitaById($id);
        return ['partita' => $partita];
    }

    public function showPartita($id)
    {
        $partita = $this->getPartita($id);

        return view('match-detail')
            ->with($partita);
    }

    public function insert()
    {
        // risponde alla rota GET che presenta la home del sistema
        //tira su i 5 alloggi, pubblicati= true, da mettere nel carosello in home
        $partita = new Partita;

        $partita->partita_ID = 1;
        $partita->red_team_ID = "Team1";
        $partita->red_team_ID = "Team2";
        $partita->red_goals = null;
        $partita->blue_goals = null;
        $partita->live = 0;
        $partita->finished = 0;
        $partita->date = "";
        // return view('home')
        //     ->with('partite', $partite);
    }

    public function increment($teamBin, $token)
    {
        $matchToken='eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9';

        if($token==$matchToken){
            $team= null;
            if($teamBin=="0"){
                $team= 'red';
            }
            elseif($teamBin=="1"){
                $team= 'blue';
            }
            else{
                return "team error!";
            }
            
            $partita = $this->_partitaModel->where('live', '1')->first();
            if(!is_null($partita)){
                if ($team == 'red' && $partita->red_goals < 9 && !(is_null($partita->red_goals))) {
                    if($partita->red_goals==7 && $partita->blue_goals==8){
                        $partita->blue_goals = ($partita->blue_goals) - 1;
                    }
                    else{
                        $partita->red_goals = ($partita->red_goals) + 1;
                    }
                } elseif ($team == 'blue' && $partita->blue_goals < 9 && !(is_null($partita->blue_goals))) {
                    if($partita->red_goals==8 && $partita->blue_goals==7){
                        $partita->red_goals = ($partita->red_goals) - 1;
                    }
                    else{
                        $partita->blue_goals = ($partita->blue_goals) + 1;
                    }
                }
    
                $partita->save();
                return "ok increment";
            }
            else{
                return "partita not found!";
            }
        }
        else{
            return 'access denied!';
        }
        
        
    }

    public function decrement($teamBin, $token)
    {

        $matchToken='eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9';

        if($token==$matchToken){
            $team= null;
            if($teamBin=="0"){
                $team= 'red';
            }
            elseif($teamBin=="1"){
                $team= 'blue';
            }
            else{
                return "team error!";
            }
            
            $partita = $this->_partitaModel->where('live', '1')->first();
            if(!is_null($partita)){
                if ($team == 'red' && $partita->red_goals > 0 && !(is_null($partita->red_goals))) {
                    $partita->red_goals = ($partita->red_goals) - 1;
                } elseif ($team == 'blue' && $partita->blue_goals > 0 && !(is_null($partita->blue_goals))) {
                    $partita->blue_goals = ($partita->blue_goals) - 1;
                }
                $partita->save();
    
                return "ok decrement";
            }
            else{
                return "partita not found!";
            }
        }
        else{
            return 'access denied!';
        }
    }
        
}

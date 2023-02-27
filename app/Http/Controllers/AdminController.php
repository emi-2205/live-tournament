<?php
//  0 -> blue
//  1 -> red
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partita;
use App\Http\Controllers\PublicController;

class AdminController extends Controller
{

    protected $_partitaModel;

    protected $_publicController;

    public function __construct()
    {
        $this->_partitaModel = new Partita;

        $this->_publicController = new PublicController;
    }

    public function incrementGoals($id, $team)
    {
        $partita = $this->_publicController->getPartitaById($id);
        if ($team == 'red' && $partita->red_goals < 9 && !(is_null($partita->red_goals))) {
            $partita->red_goals = ($partita->red_goals) + 1;
        } elseif ($team == 'blue' && $partita->blue_goals < 9 && !(is_null($partita->blue_goals))) {
            $partita->blue_goals = ($partita->blue_goals) + 1;
        }
        $partita->save();
        $partita = $this->_publicController->getPartita($id);

        return view('match-detail')
            ->with($partita);
    }

    public function decrementGoals($id, $team)
    {
        $partita = $this->_publicController->getPartitaById($id);
        if ($team == 'red' && $partita->red_goals > 0 && !(is_null($partita->red_goals))) {
            $partita->red_goals = ($partita->red_goals) - 1;
        } elseif ($team == 'blue' && $partita->blue_goals > 0 && !(is_null($partita->blue_goals))) {
            $partita->blue_goals = ($partita->blue_goals) - 1;
        }
        $partita->save();
        $partita = $this->_publicController->getPartita($id);

        return view('match-detail')
            ->with($partita);
    }

    public function startPartita($id)
    {
        $partita = $this->_publicController->getPartitaById($id);
        $partita->live=1;
        $partita->finished=0;
        if($partita->red_goals=='-' || is_null($partita->red_goals)){
            $partita->red_goals='0';
        }
        if($partita->blue_goals=='-' || is_null($partita->blue_goals)){
            $partita->blue_goals='0';
        }
        $partita->save();
        $partita = $this->_publicController->getPartita($id);

        return view('match-detail')
            ->with($partita);
    }

    public function closePartita($id)
    {
        $partita = $this->_publicController->getPartitaById($id);
        $partita->live=0;
        $partita->finished=1;
        $partita->save();
        $partita = $this->_publicController->getPartita($id);

        return view('match-detail')
            ->with($partita);
    }

    public function restartPartita($id)
    {
        $partita = $this->_publicController->getPartitaById($id);
        $partita->live=0;
        $partita->finished=0;
        $partita->red_goals=null;
        $partita->blue_goals=null;
        $partita->save();
        $partita = $this->_publicController->getPartita($id);

        return view('match-detail')
            ->with($partita);
    }
}

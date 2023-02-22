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
        $day=1;
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

    public function showDay1()
    {
        // risponde alla rota GET che presenta la home del sistema
        //tira su i 5 alloggi, pubblicati= true, da mettere nel carosello in home
        $partite = $this->_partitaModel->where('date', ['2022-03-06'])->get();
        $partite = $partite->all();
        if ($partite != null)
            $partite = $this->sanitize($partite);

        return view('home')
            ->with([
                'partite' => $partite,
                'day' => '1'
            ]);
    }

    public function showDay2()
    {
        // risponde alla rota GET che presenta la home del sistema
        //tira su i 5 alloggi, pubblicati= true, da mettere nel carosello in home
        $partite = $this->_partitaModel->where('date', ['2022-03-07'])->get();
        $partite = $partite->all();
        if ($partite != null)
            $partite = $this->sanitize($partite);

        return view('home')
            ->with('partite', $partite);
    }

    public function showDay3()
    {
        // risponde alla rota GET che presenta la home del sistema
        //tira su i 5 alloggi, pubblicati= true, da mettere nel carosello in home
        $partite = $this->_partitaModel->where('date', ['2022-03-08'])->get();
        $partite = $partite->all();
        if ($partite != null)
            $partite = $this->sanitize($partite);

        return view('home')
            ->with('partite', $partite);
    }

    public function showDay4()
    {
        // risponde alla rota GET che presenta la home del sistema
        //tira su i 5 alloggi, pubblicati= true, da mettere nel carosello in home
        $partite = $this->_partitaModel->where('date', ['2022-03-09'])->get();
        $partite = $partite->all();
        if ($partite != null)
            $partite = $this->sanitize($partite);

        return view('home')
            ->with('partite', $partite);
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
}

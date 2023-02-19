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
            if ($partita->live)
                $partita->live = "Live";
        }

        return $partite;
    }

    public function showHome()
    {
        // risponde alla rota GET che presenta la home del sistema
        //tira su i 5 alloggi, pubblicati= true, da mettere nel carosello in home
        $partite = $this->_partitaModel->all();
        if ($partite != null)
            $partite = $this->sanitize($partite);

        return view('home')
            ->with('partite', $partite);
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
            ->with('partite', $partite);
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
}

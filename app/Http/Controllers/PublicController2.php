<?php

namespace App\Http\Controllers;

use App\Models\Partita;

// Controller per le funzionalità pubbliche del sito, in comune a tutti i livelli

class PublicController extends Controller {

    protected $_partitaModel;

    public function __construct() {
        $this->_partitaModel = new Partita;
    }
        
    public function showHome() {
        // risponde alla rota GET che presenta la home del sistema
        //tira su i 5 alloggi, pubblicati= true, da mettere nel carosello in home
        $partite = $this->_partitaModel->getCatalogoAlloggi(5, true);

        return view('home')
                        ->with('partite', $partite);
    }

}
<?php

namespace App\Controllers;

use App\Models\ModelMatkul;

class Home extends BaseController
{
    protected $modelmatkul;
    public function __construct() 
    {
        $this->modelmatkul = new ModelMatkul();
    }

    public function index()
    {
        $matkul = $this->modelmatkul->findAll();

        $data = [
            "tittle" => 'Matkul',
            "matkul" => $matkul
        ];

        return view('user/index', $data);
    }

}

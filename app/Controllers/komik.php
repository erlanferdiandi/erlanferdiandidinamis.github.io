<?php

namespace App\Controllers;
use App\Models\KomikModel;

class komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this-> komikModel = new KomikModel();
    }
    public function index()
    {
        // $komik = $this->komikModel->findAll();

        $data = [
            'title' => 'Daftar Komik | Erlan Ferdiandi',
            'komik' => $this->komikModel->getKomik()
        ];

        // $komikModel = new KomikModel();
        // dd($komik);


        return view('komik/Index', $data);
    }

    public function detail($slug)
    {
        $komik = $this->komikModel->getKomik($slug);
        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->komikModel->getKomik($slug)
        ];
        return view('komik/detail', $data);
    }


    public function create()
    {

        $data = [
            'title' => 'Daftar Komik | Erlan Ferdiandi',
        ];

        return view('komik/create', $data);
    }


}
<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {

    }
    //Vista Nosotros "Quienes somos"
    public function nosotros()
    {
        $data['title'] = 'Quienes somos';
        $this->views->getView('principal', "nosotros", $data);
    }
    //Vista Tienda
    public function tienda()
    {
        $data['title'] = 'tienda';
        $this->views->getView('principal', "tienda", $data);
    }
    //Vista detail
    public function detail()
    {
        $data['title'] = '----------';
        $this->views->getView('principal', "detail", $data);
    }
    //Vista detail
    public function adoptame()
    {
        $data['title'] = 'adoptame';
        $this->views->getView('principal', "adoptame", $data);
    }
    //Vista detail
    public function cuidame()
    {
        $data['title'] = 'cuidado y bienestar';
        $this->views->getView('principal', "cuidame", $data);
    }
}
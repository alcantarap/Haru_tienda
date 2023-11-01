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
    public function tienda($page)
    {
        $pagina = (empty($page)) ? 1 : $page ;
        $porPagina = 3;
        $desde = ($pagina - 1) * $porPagina;
        $data['title'] = 'tienda';
        $data['productos'] = $this->model->getProductos($desde, $porPagina);
        $data['pagina'] = $pagina;
        $total = $this->model->getTotalProductos();
        $data['total'] = ceil($total['total'] / $porPagina);
        $this->views->getView('principal', "tienda", $data);
    }
    //Vista detalle
    public function detail($id_producto)
    {
        $data['producto'] = $this->model->getProducto($id_producto);
        $data['title'] = $data['producto']['nombre'];
        $this->views->getView('principal', "detail", $data);
    }
    //Vista adoptame
    public function adoptame()
    {
        $data['title'] = 'adoptame';
        $this->views->getView('principal', "adoptame", $data);
    }
    //Vista cuidame
    public function cuidame()
    {
        $data['title'] = 'cuidado y bienestar';
        $this->views->getView('principal', "cuidame", $data);
    }
    //Vista preguntas
    public function preguntas()
    {
        $data['title'] = 'preguntas frecuentes';
        $this->views->getView('principal', "preguntas", $data);
    }
    //Vista publicaciones de adopción
    public function publicaciones_adop()
    {
        $data['title'] = 'adopción';
        $this->views->getView('principal', "publicaciones_adop", $data);
    }
}
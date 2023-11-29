<?php
class Principal extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    //Vista Nosotros "Quienes somos"
    public function nosotros()
    {
        $data['perfil'] = 'no';
        $data['title'] = 'Quienes somos';
        $this->views->getView('principal', "nosotros", $data);
    }
    //Vista Tienda
    public function tienda($page)
    {
        $data['perfil'] = 'no';
        $pagina = (empty($page)) ? 1 : $page;
        $porPagina = 9;
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
        $data['perfil'] = 'no';
        $data['producto'] = $this->model->getProducto($id_producto);
        $id_categoria = $data['producto']['id_categoria'];
        $data['relacionados'] = $this->model->getAleatorios($id_categoria , $data['producto']['id']);
        $data['title'] = $data['producto']['nombre'];
        $this->views->getView('principal', "detail", $data);
    }
    //Vista categoria
    public function categorias($datos)
    {
        $data['perfil'] = 'no';
        $id_categoria =1;
        $page = 1;
        $array = explode(',' ,$datos);
        if (isset($array[0])) {
            if(!empty($array[0])) {
                $id_categoria = $array[0];
            }
        }
        if (isset($array[1])) {
            if(!empty($array[1])) {
                $page = $array[1];
            }
        }
        $pagina = (empty($page)) ? 1 : $page;
        $porPagina = 15;
        $desde = ($pagina - 1) * $porPagina;

        $data['pagina'] = $pagina;
        $total = $this->model->getTotalProductosCat($id_categoria);
        $data['total'] = ceil($total['total'] / $porPagina);

        $data['productos'] = $this->model->getProductosCat($id_categoria, $desde, $porPagina);
        $data['title'] = 'Categorias';
        $data['id_categoria'] = $id_categoria;
        $this->views->getView('principal', "categorias", $data);
    }

    //Vista lista deseos
    public function deseo()
    {
        $data['perfil'] = 'no';
        $data['title'] = 'Lista de deseo';
        $this->views->getView('principal', "deseo", $data);
    }
    //obetener productos lista PRODUCTOS
    public function ListaProductos()
    {
        $datos = file_get_contents('php://input');
        $json = json_decode($datos, true);
        $array['productos'] = array();
        $total = 0.00;
        if (!empty($json)) {
            foreach ($json as $producto) {
                $result = $this->model->getProducto($producto['idProducto']);
                $data['id'] = $result['id'];
                $data['nombre'] = $result['nombre'];
                $data['precio'] = $result['precio'];
                $data['cantidad'] = $producto['cantidad'];
                $data['imagen'] = $result['imagen'];
                $subTotal = ($result['precio'] * $producto['cantidad']);
                $data['subTotal'] = number_format($subTotal, 2);
                array_push($array['productos'], $data);
                $total += $subTotal;
            }
        }
        $array['total'] = number_format($total , 2);
        $array['totalPaypal'] = number_format($total, 2, '.', '');
        $array['moneda'] = MONEDA;
        echo json_encode($array, JSON_UNESCAPED_UNICODE);
        die();
    }

    //Busqueda
    public function busqueda($valor)
    {
        $data = $this->model->getBusqueda($valor);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
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

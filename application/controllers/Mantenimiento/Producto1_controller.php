<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto1_controller extends CI_Controller {

    private $permisos;
    public function __construct(){
        parent:: __construct();
        $this->permisos =$this->backend_lib->control();
        $this->load->model("producto1_model");
        $this->load->model("color_model");
        $this->load->model("talla_model");
        $this->load->model("subcategoria_model");
        $this->load->model("categoria_model"); 
        $this->load->model("marca_model"); 
        
    }
    /// controlador para llamar el listado de modelo para mostrar en la vista 
	public function index()
	{
        $data = array(
            'permisos' =>$this->permisos,
			'producto' =>$this->producto1_model->getproducto(),
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Producto1/producto1_list_view',$data);
        $this->load->view('layouts/footer');
    }
    // Controlador que manda a vista nuevo 
    public function add()
	{
        $data = array(
            'color' =>$this->color_model->getcolor(),
            'talla' =>$this->talla_model->gettalla(),
            'categoria' =>$this->categoria_model->getcategoria(),
            'marca' =>$this->marca_model->getmarca(),
            

        );
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Producto1/producto1_add_view',$data);
        $this->load->view('layouts/footer');
		
    }
    //controlador para traer datos de subcategoria atravez de ajax
    public function fetchSubcategoria(){
        if($this->input->post('IdCategoria')){
            echo $this->producto1_model->fetch_subcategoria($this->input->post('IdCategoria'));
        }
    } 
   // controlador para 
    public function store(){
        $nombre = $this->input->post("nombre");
        $codigo = $this->input->post("codigo");
        $descripcion = $this->input->post("descripcion");
        $stock = $this->input->post("stock");
        $precioventa = $this->input->post("precioventa");
        $preciooferta = $this->input->post("preciooferta");
        $color = $this->input->post("color");
        $talla = $this->input->post("talla");
        $subcategoria = $this->input->post("subcategoria");
        $marca = $this->input->post("marca");
        $imge = 'Sin_imagen_disponible.jpg';
        
        $config = array(
			array(
					'field' => 'nombre',
					'label' => 'nombre del producto',
					'rules' => 'required',
					'errors' => array(
                        'required' => 'debe ingresar un %s.',
                    ),
                        
            ),
            array(
                'field' => 'codigo',
                'label' => 'codigo',
                'rules' => 'required|is_natural|is_unique[producto1.Codigo]',
                'errors' => array(
                    'required' => 'Debe ingresar un %s',
                    'is_unique' => 'El %s ya existe',
                    'is_natural'=>'Solo numeros naturales'
                ),
            ),
            array(
                'field' => 'stock',
                'label' => 'stock',
                'rules' => 'required|is_natural',
                'errors' => array(
                    'required' => 'Debe ingresa el %s del producto',
                    'is_natural' => 'No puede ingresar numeros negativos',
                ),
            ),
            array(
                'field' => 'precioventa',
                'label' => 'precio de venta',
                'rules' => 'required|is_natural',
                'errors' => array(
                    'required' => 'Debe ingresa un %s del producto',
                    'is_natural' => 'El %s no puede ser negativo ',
                ),
            ),
            
            array(
                'field' => 'preciooferta',
                'label' => 'precio de oferta',
                'rules' => 'required|is_natural',
                'errors' => array(
                    'is_natural' => 'El %s no puede ser negativo ',
                    'required' => 'Debe completar este campo ',
                ),
            ),
		);
		
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            if (empty($_FILES['imagen']['name'])) {
                $data = array(
                    'Nombre' => $nombre,
                    'Codigo' => $codigo,
                    'Descripcion' => $descripcion,
                    'Stock' => $stock,
                    'Imagen' => $imge,
                    'PrecioVenta' => $precioventa,
                    'PrecioOferta' => $preciooferta,
                    'IdMarca' => $marca,
                    'IdColor' => $color,
                    'IdTalla' => $talla,
                    'IdSubcategoria' => $subcategoria,
                    'Estado'=> "Activo"
                );
                
                if($this->producto1_model->save($data)){
                    redirect(base_url()."Mantenimiento/Producto1_controller");
                }
                else {
                    $this->session->set_flashdata("Error","No se pudo guardar la información");
                    redirect(base_url()."Mantenimiento/Producto1_controller/add"); 
                }
            }else{
                $config['upload_path'] = './uploads/imagenes/producto/';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                
                if ($this->upload->do_upload('imagen')) {
                    $images = $this->upload->data('file_name');
                }else {
                    echo $this->upload->display_errors();
                }
                    $data = array(
                        'Nombre' => $nombre,
                        'Codigo' => $codigo,
                        'Descripcion' => $descripcion,
                        'Stock' => $stock,
                        'Imagen' => $images,
                        'PrecioVenta' => $precioventa,
                        'PrecioOferta' => $preciooferta,
                        'IdMarca' => $marca,
                        'IdColor' => $color,
                        'IdTalla' => $talla,
                        'IdSubcategoria' => $subcategoria,
                        'Estado'=> "Activo"
                    );
                    if($this->producto1_model->save($data)){
                        redirect(base_url()."Mantenimiento/Producto1_controller");
                    }
                    else {
                        $this->session->set_flashdata("Error","No se pudo guardar la información");
                        redirect(base_url()."Mantenimiento/Producto1_controller/add");
                        
                    }
                }
    
        }else{
            $this->add();
        }
    }
    // Controlador que trae los datos de la lista para poder editar y me manda los resultados a la vista editar 
    public function edit($IdProducto){
		$data = array(
            
            'color' =>$this->color_model->getcolor(),
            'talla' =>$this->talla_model->gettalla(),
            'subcategoria' =>$this->subcategoria_model->getsubcategoria(),
            'marca' =>$this->marca_model->getmarca(),
			'producto'=> $this->producto1_model->new_producto($IdProducto)
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Producto1/producto1_edit_view',$data);
        $this->load->view('layouts/footer');
    }

    // Controlar que lleva los nuevos datos editados a la vista donde esta el listado 
    public function update(){
        $IdProducto =$this->input->post("IdProducto");
        $nombre = $this->input->post("nombre");
        $codigo = $this->input->post("codigo");
        $stock = $this->input->post("stock");
        $precioventa = $this->input->post("precioventa");
        $preciooferta = $this->input->post("preciooferta");
        $marca = $this->input->post("marca");
        $color = $this->input->post("color");
        $talla = $this->input->post("talla");
        $descripcion = $this->input->post("descripcion");
        $subcategoria = $this->input->post("subcategoria");
        
        $ProductoActual = $this->producto1_model->new_producto($IdProducto);

		if ($codigo == $ProductoActual->Codigo) {
			$unique='';
		}
		else{
			$unique ='|is_unique[producto1.Codigo]';
        }
        $config = array(
			array(
					'field' => 'nombre',
					'label' => 'nombre del producto',
					'rules' => 'required',
					'errors' => array(
                        'required' => 'debe ingresar un %s.',
                    ),
                        
            ),
            array(
                'field' => 'codigo',
                'label' => 'codigo',
                'rules' => 'required'.$unique,
                'errors' => array(
                    'required' => 'Debe ingresar un %s',
                    'is_unique' => 'El %s ya existe',
                ),
            ),
            array(
                'field' => 'stock',
                'label' => 'stock',
                'rules' => 'required|is_natural',
                'errors' => array(
                    'required' => 'Debe ingresa el %s del producto',
                    'is_natural' => 'No puede ingresar numeros negativos',
                ),
            ),
            array(
                'field' => 'precioventa',
                'label' => 'precio de venta',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Debe ingresa un %s del producto',
                    'is_natural' => 'El %s no puede ser negativo ',
                ),
            ),
		);
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            if (empty($_FILES['imagen']['name'])) {

                $data = array(
                        'Nombre' => $nombre,
                        'Codigo' => $codigo,
                        'Descripcion' => $descripcion,
                        'Stock' => $stock,
                        'PrecioVenta' => $precioventa,
                        'PrecioOferta' => $preciooferta,
                        'IdMarca' => $marca,
                        'IdColor' => $color,
                        'IdTalla' => $talla,
                        'IdSubcategoria' => $subcategoria,


                );
                if($this->producto1_model->update($IdProducto,$data)){
                    redirect(base_url()."Mantenimiento/Producto1_controller");
                }
                else {
                    $this->session->set_flashdata("Error","No se pudo modificar la información");
                    redirect(base_url()."Mantenimiento/Producto1_controller/edit/".$IdProducto);
                }
            }else{

                $config['upload_path'] = './uploads/imagenes/producto/';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('imagen')) {
                    $images= $this->upload->data('file_name');
                    $logoactual =$this->producto1_model->new_producto($IdProducto);
                    if ($logoactual->Imagen =='Sin_imagen_disponible.jpg') {
                    
                    }
                    else
                    {
                        unlink('./uploads/imagenes/producto/'.$logoactual->Imagen);
                    }
                    $data = array(
                        'Nombre' => $nombre,
                        'Codigo' => $codigo,
                        'Descripcion' => $descripcion,
                        'Stock' => $stock,
                        'Imagen' => $images,
                        'PrecioVenta' => $precioventa,
                        'PrecioOferta' => $preciooferta,
                        'IdMarca' => $marca,
                        'IdColor' => $color,
                        'IdTalla' => $talla,
                        'IdSubcategoria' => $subcategoria,

                    );
                    if($this->producto1_model->update($IdProducto,$data)){
                        redirect(base_url()."Mantenimiento/Producto1_controller");
                    }
                    else {
                        $this->session->set_flashdata("Error","No se pudo modificar la información");
                        redirect(base_url()."Mantenimiento/Producto1_controller/add".$IdProducto);
                    }
                }
            

            }
        }
        else{
            $this->edit($IdProducto);
        }   
   }
   //controlador para colocar inactivo al la fila seleccionado asi para que yo aparesca el la lista principal
   public function delete ($IdProducto){
        $data = array(
            'Estado' =>"Inactivo",
        );
        $this->producto1_model->update($IdProducto, $data);
        echo "Mantenimiento/Producto1_controller";
        // redirect(base_url()."Mantenimiento/Imagen_controller");
    }
}
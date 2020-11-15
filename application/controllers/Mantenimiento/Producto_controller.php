<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_controller extends CI_Controller {

    private $permisos;
    public function __construct(){
        parent:: __construct();
        $this->permisos =$this->backend_lib->control();
        $this->load->model("producto_model");
        $this->load->model("nacionalidad_model");
        $this->load->model("color_model");
        $this->load->model("marca_model");
        $this->load->model("tipo_model");
        $this->load->model("proveedor_model");
        
    }
    /// controlador para llamar el listado de modelo para mostrar en la vista 
	public function index()
	{
        $data = array(
            'permisos' =>$this->permisos,
			'producto' =>$this->producto_model->getproducto(),
		);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Producto/producto_list',$data);
        $this->load->view('layouts/footer');
    }
    // Controlador que manda a vista nuevo 
    public function add()
	{
        $data = array(
            'nacionalidad' =>$this->nacionalidad_model->getnacional(),
            'color' =>$this->color_model->getcolor(),
            'marca' =>$this->marca_model->getmarca(),
            'tipoproducto' =>$this->tipo_model->gettipo(),
            'proveedor' =>$this->proveedor_model->getproveedor(),

        );
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Producto/producto_add_view',$data);
        $this->load->view('layouts/footer');
		
    }
    // $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
        // $Imagen = $this->input->FILES("Imagen);
    // Controlador que recoge datos de las consultas de model para insert un nuevo
    public function store(){
        $nombre = $this->input->post("nombre");
        $numserie = $this->input->post("numserie");
        $codigo = $this->input->post("codigo");
        $cbarra = $this->input->post("cbarra");
        $descripcion = $this->input->post("descripcion");
        $caracteristicas = $this->input->post("caracteristicas");
        $stock = $this->input->post("stock");
        $preciocompra = $this->input->post("preciocompra");
        $precioventa = $this->input->post("precioventa");
        $preciooferta = $this->input->post("preciooferta");
        $nacionalidad = $this->input->post("nacionalidad");
        $color = $this->input->post("color");
        $marca = $this->input->post("marca");
        $tipoproducto = $this->input->post("tipoproducto");
        $proveedor = $this->input->post("proveedor");
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
                'rules' => 'required|is_unique[producto.Codigo]',
                'errors' => array(
                    'required' => 'Debe ingresar un %s',
                    'is_unique' => 'El %s ya existe',
                ),
            ),
            array(
                'field' => 'numserie',
                'label' => 'numero de serie',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Debe ingresa un  %s',
                ),
            ),
            array(
                'field' => 'caracteristicas',
                'label' => 'caracteristicas',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Debe ingresa las %s del producto',
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
                'field' => 'preciocompra',
                'label' => 'precio de compra',
                'rules' => 'is_natural',
                'errors' => array(
                    'is_natural' => 'El  %s no puede ser negativo ',
                ),
            ),
            array(
                'field' => 'preciooferta',
                'label' => 'precio de oferta',
                'rules' => 'is_natural',
                'errors' => array(
                    'is_natural' => 'El %s no puede ser negativo ',
                ),
            ),
		);
		
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            if (empty($_FILES['imagen']['name'])) {
                $data = array(
                    'Nombre' => $nombre,
                    'NroSerie' => $numserie,
                    'Codigo' => $codigo,
                    'CodigoBarra' => $cbarra,
                    'Descripcion' => $descripcion,
                    'Caracteristicas' => $caracteristicas,
                    'Stock' => $stock,
                    'Imagen' => $imge,
                    'PrecioCompra' => $preciocompra,
                    'PrecioVenta' => $precioventa,
                    'PrecioOferta' => $preciooferta,
                    'IdNacionalidad' => $nacionalidad,
                    'IdColor' => $color,
                    'IdMarca' => $marca,
                    'IdTipoProducto' => $tipoproducto,
                    'IdProveedor' => $proveedor,
                    'Estado'=> "Activo"
                );
                if($this->producto_model->save($data)){
                    redirect(base_url()."Mantenimiento/Producto_controller");
                }
                else {
                    $this->session->set_flashdata("Error","No se pudo guardar la información");
                    redirect(base_url()."Mantenimiento/Producto_controller/add");
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
                        'NroSerie' => $numserie,
                        'Codigo' => $codigo,
                        'CodigoBarra' => $cbarra,
                        'Descripcion' => $descripcion,
                        'Caracteristicas' => $caracteristicas,
                        'Stock' => $stock,
                        'Imagen' => $images,
                        'PrecioCompra' => $preciocompra,
                        'PrecioVenta' => $precioventa,
                        'PrecioOferta' => $preciooferta,
                        'IdNacionalidad' => $nacionalidad,
                        'IdColor' => $color,
                        'IdMarca' => $marca,
                        'IdTipoProducto' => $tipoproducto,
                        'IdProveedor' => $proveedor,
                        'Estado'=> "Activo"
                    );
                    if($this->producto_model->save($data)){
                        redirect(base_url()."Mantenimiento/Producto_controller");
                    }
                    else {
                        $this->session->set_flashdata("Error","No se pudo guardar la información");
                        redirect(base_url()."Mantenimiento/Producto_controller/add");
                    }
            }
        }else{
            $this->add();

        }
    
        
				
	
   }
    // Controlador que trae los datos de la lista para poder editar y me manda los resultados a la vista editar 
    public function edit($IdProducto){
		$data = array(
            'nacionalidad' =>$this->nacionalidad_model->getnacional(),
            'color' =>$this->color_model->getcolor(),
            'marca' =>$this->marca_model->getmarca(),
            'tipoproducto' =>$this->tipo_model->gettipo(),
            'proveedor' =>$this->proveedor_model->getproveedor(),
			'producto'=> $this->producto_model->new_producto($IdProducto)
		);
		$this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/Producto/producto_edit_view',$data);
        $this->load->view('layouts/footer');
    }
    // Controlar que lleva los nuevos datos editados a la vista donde esta el listado 
    public function update(){
        $IdProducto =$this->input->post("IdProducto");
        $nombre = $this->input->post("nombre");
        $numserie = $this->input->post("numserie");
        $codigo = $this->input->post("codigo");
        $cbarra = $this->input->post("cbarra");
        $descripcion = $this->input->post("descripcion");
        $caracteristicas = $this->input->post("caracteristicas");
        $stock = $this->input->post("stock");
        $preciocompra = $this->input->post("preciocompra");
        $precioventa = $this->input->post("precioventa");
        $preciooferta = $this->input->post("preciooferta");
        $nacionalidad = $this->input->post("nacionalidad");
        $color = $this->input->post("color");
        $marca = $this->input->post("marca");
        $tipoproducto = $this->input->post("tipoproducto");
        $proveedor = $this->input->post("proveedor");
        
        $ProductoActual = $this->producto_model->new_producto($IdProducto);

		if ($codigo == $ProductoActual->Codigo) {
			$unique='';
		}
		else{
			$unique ='|is_unique[producto.Codigo]';
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
                'field' => 'numserie',
                'label' => 'numero de serie',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Debe ingresa un  %s',
                ),
            ),
            array(
                'field' => 'caracteristicas',
                'label' => 'caracteristicas',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Debe ingresa las %s del producto',
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
                        'NroSerie' => $numserie,
                        'Codigo' => $codigo,
                        'CodigoBarra' => $cbarra,
                        'Descripcion' => $descripcion,
                        'Caracteristicas' => $caracteristicas,
                        'Stock' => $stock,
                        'PrecioCompra' => $preciocompra,
                        'PrecioVenta' => $precioventa,
                        'PrecioOferta' => $preciooferta,
                        'IdNacionalidad' => $nacionalidad,
                        'IdColor' => $color,
                        'IdMarca' => $marca,
                        'IdTipoProducto' => $tipoproducto,
                        'IdProveedor' => $proveedor,


                );
                if($this->producto_model->update($IdProducto,$data)){
                    redirect(base_url()."Mantenimiento/Producto_controller");
                }
                else {
                    $this->session->set_flashdata("Error","No se pudo modificar la información");
                    redirect(base_url()."Mantenimiento/Producto_controller/edit/".$IdProducto);
                }
            }else{

                $config['upload_path'] = './uploads/imagenes/producto/';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('imagen')) {
                    $images= $this->upload->data('file_name');
                    $logoactual =$this->producto_model->new_producto($IdProducto);
                    if ($logoactual->Imagen =='Sin_imagen_disponible.jpg') {
                    
                    }
                    else
                    {
                        unlink('./uploads/imagenes/producto/'.$logoactual->Imagen);
                    }
                    $data = array(
                        'Nombre' => $nombre,
                        'NroSerie' => $numserie,
                        'Codigo' => $codigo,
                        'CodigoBarra' => $cbarra,
                        'Descripcion' => $descripcion,
                        'Caracteristicas' => $caracteristicas,
                        'Stock' => $stock,
                        'Imagen' => $images,
                        'PrecioCompra' => $preciocompra,
                        'PrecioVenta' => $precioventa,
                        'PrecioOferta' => $preciooferta,
                        'IdNacionalidad' => $nacionalidad,
                        'IdColor' => $color,
                        'IdMarca' => $marca,
                        'IdTipoProducto' => $tipoproducto,
                        'IdProveedor' => $proveedor,

                    );
                    if($this->producto_model->update($IdProducto,$data)){
                        redirect(base_url()."Mantenimiento/Producto_controller");
                    }
                    else {
                        $this->session->set_flashdata("Error","No se pudo modificar la información");
                        redirect(base_url()."Mantenimiento/Producto_controller/add".$IdProducto);
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
		$this->producto_model->update($IdProducto, $data);
		echo "Mantenimiento/Producto_controller";
		// redirect(base_url()."Mantenimiento/Imagen_controller");
	}
}

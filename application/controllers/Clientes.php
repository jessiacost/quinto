<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//creamos el controlador Clientes
class Clientes extends CI_Controller {
//constructor
	public function __construct(){
		parent::__construct();
		//aqui se abren todos los modelos a ser utilizados mas adelante
		$this->load->model("Clientes_model");
    }

    //la primera funcion en cargarse es el index
    public function index()
	{
		$data = array(
			'cliente' => $this->Clientes_model->getClientes(),

		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Clientes/list',$data);
		$this->load->view('plugins_footer');
		$this->load->view('Clientes/script_clientes');
    }

    public function add()
	{
		$data = array(
			'cliente' => $this->Clientes_model->getClientes(),
		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Clientes/add',$data);
		$this->load->view('plugins_footer');


	}
	public function store(){
		//$id_marca=$this->input->post("id_marca");
		$razonsocial_cliente=$this->input->post("razonsocial_cliente");
		
		$documento_cliente=$this->input->post("documento_cliente");

		$tel_cliente=$this->input->post("tel_cliente");

		$direccion_cliente=$this->input->post("direccion_cliente");

/*======================Estableciendo prueba en form-validataion===========================*/
		
$this->form_validation->set_rules("razonsocial_cliente","Nombre del Cliente","required|is_unique[cliente.razonsocial_cliente]");
//$this->form_validation->set_rules("email","Email del Usuario","required|is_unique[usuarios.email]");
//$this->form_validation->set_rules("password","ContraseÃ±a","required");

		if ($this->form_validation->run()) {
		$data = array(
			//'id_categoria' => $id_categoria,
			'razonsocial_cliente' => $razonsocial_cliente,
			'documento_cliente' => $documento_cliente,
			'tel_cliente' => $tel_cliente,
			'direccion_cliente' => $direccion_cliente,
			'estado_cliente' => "1",

		);
		if ($this->Clientes_model->save($data)) {
			redirect(base_url()."cliente");
		}
		  
	  
	else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."cliente");
		 }
	}
		else{
			
			$this->add();

    	}
    }
	//esto es un metodo
	public function view($id_cliente){
		//$idusuario = $this->input->post("idusuario");
		$data = array(
			"cliente" => $this->Clientes_model->getCliente($id_cliente)
		);
		$this->load->view("cliente/view",$data);
	}


	public function insert(){
		$form_data = array(
    		'razonsocial_cliente' => $this->input->post('razonsocial_cliente'),
    		'documento_cliente' => $this->input->post('documento_cliente'),
    		'tel_cliente' => $this->input->post('tel_cliente'),
    		'direccion_cliente' => $this->input->post('direccion_cliente'),
    		'estado_cliente' => 1
		);
		$this->Clientes_model->insert($form_data);


	}

	public function edit($id_cliente)
	{
		$data = array('Clientes' => $this->Clientes_model->getCliente($id_cliente),
			
		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Clientes/edit',$data);
		$this->load->view('plugins_footer');


	}
	public function update(){
		$id_cliente = $this->input->post("id_cliente");
		$razonsocial_cliente=$this->input->post("razonsocial_cliente");
		$documento_cliente=$this->input->post("documento_cliente");
		$tel_cliente=$this->input->post("tel_cliente");
		$direccion_cliente=$this->input->post("direccion_cliente");
		//$estado_categoria=$this-> input->post("estado");
		//$rol=$this->input->post("rol");
		
		$data = array(
			//'id_cliente' => $id_cliente,
			'razonsocial_cliente' =>strtoupper($razonsocial_cliente),
			'documento_cliente' =>strtoupper($documento_cliente),
			'tel_cliente' =>strtoupper($tel_cliente),
			'direccion_cliente' =>strtoupper($direccion_cliente),
			'estado_cliente' => "1"
			
			
		);
		if ($this->Clientes_model->update($id_cliente,$data)) {
			$this->session->set_flashdata("success","Datos Actualizados");
			redirect(base_url()."cliente");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."cliente");
		}
	}
	public function delete($id){
		$data = array('estado_cliente' => "3",
	 );
	 $this->Clientes_model->update($id,$data);
	 echo "Clientes";
	}
}
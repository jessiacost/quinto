<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//creamos el controlador Marcas
class Marcas extends CI_Controller {
//constructor
	public function __construct(){
		parent::__construct();
		//aqui se abren todos los modelos a ser utilizados mas adelante
		$this->load->model("Marcas_model");
    }

    //la primera funcion en cargarse es el index
    public function index()
	{
		$data = array(
			'marcas' => $this->Marcas_model->getMarcas(),

		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Marcas/list',$data);
		$this->load->view('plugins_footer');
		$this->load->view('Marcas/script_marcas');
    }

    public function add()
	{
		$data = array(
			'marcas' => $this->Marcas_model->getMarcas(),
		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Marcas/add',$data);
		$this->load->view('plugins_footer');


	}
	public function store(){
		//$id_marca=$this->input->post("id_marca");
		$descripcion_marca=$this->input->post("descripcion_marca");
		

/*======================Estableciendo prueba en form-validataion===========================*/
		
$this->form_validation->set_rules("descripcion_marca","Nombre de la marca","required|is_unique[marcas.descripcion_marca]");
//$this->form_validation->set_rules("email","Email del Usuario","required|is_unique[usuarios.email]");
//$this->form_validation->set_rules("password","ContraseÃ±a","required");

		if ($this->form_validation->run()) {
		$data = array(
			//'id_categoria' => $id_categoria,
			'descripcion_marca' => $descripcion_marca,
			'estado_marca' => "1",

		);
		if ($this->Marcas_model->save($data)) {
			redirect(base_url()."Marcas");
		}
		  
	  
	else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."Marcas");
		 }
	}
		else{
			
			$this->add();

    	}
    }
	//esto es un metodo
	public function view($id_marca){
		//$idusuario = $this->input->post("idusuario");
		$data = array(
			"marcas" => $this->Marcas_model->getMarca($id_marca)
		);
		$this->load->view("Marcas/view",$data);
	}

	public function edit($id_marca)
	{
		$data = array('marcas' => $this->Marcas_model->getMarca($id_marca),
			
		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Marcas/edit',$data);
		$this->load->view('plugins_footer');


	}
	public function update(){
		$id_marca = $this->input->post("id_marca");
		$descripcion_marca=$this->input->post("descripcion_marca");
		//$estado_categoria=$this->input->post("estado");
		
		//$rol=$this->input->post("rol");
		
		$data = array(
			//'id_marca' => $id_marca,
			'descripcion_marca' =>strtoupper($descripcion_marca),
			'estado_marca' => "1"
			
			
		);
		if ($this->Marcas_model->update($id_marca,$data)) {
			$this->session->set_flashdata("success","Datos Actualizados");
			redirect(base_url()."marcas");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."marcas");
		}
	}
	public function delete($id){
		$data = array('estado_marca' => "3",
	 );
	 $this->Marcas_model->update($id,$data);
	 echo "Marcas";
	}
}
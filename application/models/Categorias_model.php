<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends CI_MOdel {

    //estas son las funciones o metodos del modelo

    //metodo getusuarios. muestra todos los usuarios de la base de datos
    public function getCategorias(){
        $this->db->from("categorias");
       // $resultados = $this ->db->get("Categorias"); 
        $this->db->where("estado_categoria","1");
        $resultados=$this->db->get();
        return $resultados->result();
    }

    public function getCategoria($id_categoria){
       
        $this->db->where("id_categoria",$id_categoria);
       $resultados = $this->db->get("categorias");
        return $resultados->row();

    }

    public function getRoles(){
        $resultados = $this->db->get("roles");
        return $resultados->result();
    }
    public function save($data){
        return $this->db->insert("categorias",$data);
    }
//funcion que recibe como parametro el user y contraseÃ±a
	public function login($username, $password){
        //consultas a la base de datos
        $this->db->where("username",$username);//se llama a la clase db, al metodo where
        $this->db->where("password",$password);
//captura de los valores con get de la tabla categorias
        $resultados = $this->db->get("categorias");
//se crea una condicion de los registros
//si es mayor a 0 entonces, devolver las filas que existen
        if ($resultados->num_rows()>0) {
            return $resultados->row();
        }
        else{
            return false;
        }
    }
    public function update($id,$data){
        $this->db->where("id_categoria",$id);
        return $this->db->update("categorias",$data);

}
}
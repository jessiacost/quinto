<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marcas_model extends CI_MOdel {

    //estas son las funciones o metodos del modelo

    //metodo getusuarios. muestra todos los usuarios de la base de datos
    public function getMarcas(){
        $this->db->from("marcas");
       // $resultados = $this ->db->get("Marcas"); 
        $this->db->where("estado_marca","1");
        $resultados=$this->db->get();
        return $resultados->result();
    }

    public function getMarca($id_marca){
       
        $this->db->where("id_marca",$id_marca);
       $resultados = $this->db->get("marcas");
        return $resultados->row();

    }

    public function getRoles(){
        $resultados = $this->db->get("roles");
        return $resultados->result();
    }
    public function save($data){
        return $this->db->insert("marcas",$data);
    }
//funcion que recibe como parametro el user y contraseÃ±a
	public function login($username, $password){
        //consultas a la base de datos
        $this->db->where("username",$username);//se llama a la clase db, al metodo where
        $this->db->where("password",$password);
//captura de los valores con get de la tabla marcas
        $resultados = $this->db->get("marcas");
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
        $this->db->where("id_marca",$id);
        return $this->db->update("marcas",$data);

}
}
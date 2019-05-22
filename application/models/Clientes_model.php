    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Clientes_model extends CI_MOdel {

        //estas son las funciones o metodos del modelo

        //metodo getusuarios. muestra todos los usuarios de la base de datos
        public function getClientes(){
            $this->db->from("cliente");
           // $resultados = $this ->db->get("Marcas"); 
            $this->db->where("estado_cliente","1");
            $resultados=$this->db->get();
            return $resultados->result();
        }

        public function getCliente($id_cliente){
           
            $this->db->where("id_cliente",$id_cliente);
           $resultados = $this->db->get("cliente");
            return $resultados->row();

        }

        public function getRoles(){
            $resultados = $this->db->get("roles");
            return $resultados->result();
        }
        public function save($data){
            return $this->db->insert("cliente",$data);
        }
    //funcion que recibe como parametro el user y contraseÃ±a
    	public function login($username, $password){
            //consultas a la base de datos
            $this->db->where("username",$username);//se llama a la clase db, al metodo where
            $this->db->where("password",$password);
    //captura de los valores con get de la tabla cliente
            $resultados = $this->db->get("clientes");
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
            $this->db->where("id_cliente",$id);
            $this->db->where("razonsocial_cliente",$razonsocial_cliente);
            $this->db->where("tel_cliente",$tel_cliente);
            $this->db->where("direccion_cliente",$direccion_cliente);
            return $this->db->update("clientes",$data);

    }

    public function insert($datos){
            $this->db->insert('cliente', $datos);

    }



    }
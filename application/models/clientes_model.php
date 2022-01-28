<?php

    class Clientes_model extends CI_Model {
        public function index()
        {
           
           return $this->db->get("clientes")->result_array();  //SELECT * FROM tb_games
        }
        
        
        public function store($cliente)
        {
            $this->db->insert("clientes", $cliente);   //Passar a tabela e o array de informaçoes
        }

        public function show($cli_id)
        {
            return $this->db->get_where("clientes", array("cli_id" => $cli_id))->row_array();   //Trazer a linha referente ao id passado na url
        }
        
        public function update($cli_id, $cliente)
        {
            $this->db->where('cli_id', $cli_id);    //id = $id passado pelo parametro
            return $this->db->update("clientes", $cliente);    // onde o $id for igual ao parametro, update $game(row) da tabela tb games
        }

        public function destroy($cli_id)
        {
            $this->db->where("cli_id", $cli_id);
            return $this->db->delete("clientes");
        }

        public function carregaGrid()
        {
            $query = $this->db->get("clientes");
            if(count($query->result()) > 0){
                return $query->result();
            }
            
        }
        
    }

?>
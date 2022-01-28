<?php

    class Anamnese_model extends CI_Model {
            
        public function store($anamnese)
        {
            $this->db->insert("anamnese", $anamnese);   //Passar a tabela e o array de informaçoes
        }

        public function show($cli_id)
        {
            if(!empty($cli_id)){
                return $this->db->get_where("anamnese", array("cli_id" => $cli_id))->row_array();   //Trazer a linha referente ao id passado na url
            }
            
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
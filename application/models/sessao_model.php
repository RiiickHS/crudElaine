<?php

    class Sessao_model extends CI_Model {
        public function index()
        {
           
           return $this->db->get("sessao")->result_array();  //SELECT * FROM tb_games
        }
        
        public function store($cliente)
        {
            $this->db->insert("sessao", $cliente);   //Passar a tabela e o array de informaçoes
        }

        public function carregaGrid()
        {
            $query = $this->db->get("sessao");
            if(count($query->result()) > 0){
                return $query->result();
            }
            
        }

        public function fatValores()
        {
            $query = $this->db->get("sessao");
            if(count($query->result()) > 0){
                return $query->result();
            }
            
        }
        /*
        public function dataRetorno(){
            $dataAtual = date('Y-m-d');
            $dataRetorno = date('Y-m-d', strtotime('+15 day'))

            $this->db->select('data_sessao');
            $this->db->from('sessao');
            $this->db->where('data_sessao >= ');
            $query = $this->db->get();

            $datasFinais = $query->result_array();
            }



        }
        */
    }

?>
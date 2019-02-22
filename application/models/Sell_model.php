<?php

class Sell_model extends CI_Model{
    public function insert_data(){
        $data = array(
            "product_name" => $this->input->post('productName'),
            "per_price" => $this->input->post('pricePerProduct'),
            "quantity" => $this->input->post('quantity'),
            "total_price" => $this->input->post('totalCost'),
            "date" => time()
        );
        $this->db->insert("sell_list", $data);
    }

    public function insert_random_data(){
        $random_name = array(
            'Milk',
            'Powder',
            'Orange',
            'Banana',
            'Drinks'
        );
        $data = array(
            "product_name" => $random_name[rand(0, 4)],
            "per_price" => 500,
            "quantity" => 3,
            "total_price" => 1500,
            "date" => time()
        );
        for($i = 0; $i < (int)$this->input->post("sell_number"); $i++){
            $data["product_name"] = $random_name[rand(0, 4)];
            $this->db->insert("sell_list", $data);
        }
    }



    public function get_data(){
        $data = $this->db->get('sell_list');
        return $data->result();
    }
}
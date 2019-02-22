<?php

class Sell extends CI_Controller{
    public function input(){
        $this->form_validation->set_rules('productName', 'Product Name', 'trim|required|min_length[1]');
        $this->form_validation->set_rules('pricePerProduct', 'price Per Product', 'trim|required|min_length[1]');
        $this->form_validation->set_rules('quantity', 'Quantity', 'trim|required|min_length[1]');
        $this->form_validation->set_rules('totalCost', 'Total Cost', 'trim|required|min_length[1]');
        if($this->form_validation->run() === false){
            $data = array(
                "errors" => validation_errors()
            );
            $this->session->set_flashdata($data);
            redirect('main/index');
        }else{
            $this->sell_model->insert_data();
            $data = array(
                "success" => "<h1>Data insert success</h1>"
            );
            $this->session->set_flashdata($data);
            redirect('Main/index');
        }
    }


    public function lists(){
        $results["table_data"] = $this->sell_model->get_data();
        $this->load->view("index_view", $results);
    }

    public function random(){
        if($this->input->method() === "post"){
            $this->form_validation->set_rules('sell_number', 'Sell number', 'trim|required|min_length[1]');
            if($this->form_validation->run() === true){
                $this->sell_model->insert_random_data();
                redirect('Sell/lists');
            }else{
                echo "Failed to genarate";
            }
        }else{
            $this->load->view('index_view');
        }
//        echo $this->input->method();
//        $this->load->view('index_view');
    }
}
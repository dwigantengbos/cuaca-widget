<?php


class Dwiganteng extends CI_Controller{
    

    
    public function index()
    {
        
    $data = []; //array
    $data['name'] = "DWI GANTENG BOS";
    $this->load->view('Dwiganteng', $data);
    }
}
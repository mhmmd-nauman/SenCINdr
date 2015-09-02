<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Teachers
 *
 * @author Nadir Malik
 */
class Teachers extends CI_Controller
{
    public function __construct()
{

    parent::__construct();
        $this->load->database();
        $this->load->model('teachers_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
}
    public function index()
    {
         $data['teachers'] = $this->teachers_model->get_teachers();
        $this->load->view('templates/header', $data);
            $this->load->view('teachers/list_teachers',$data);
            $this->load->view('templates/footer',$data);
    }
    public function 
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employes
 *
 * @author Nadir Malik
 */
class Employes extends CI_Controller
{
    public function __construct()
    {
//put your code here
      parent::__construct();
        $this->load->database();
        $this->load->model('employes_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }
    public function index()
    {
        
    $data['employes'] = $this->employes_model->get_employes();
                $data['title'] = 'employes archive';

                $this->load->view('templates/header', $data);
                $this->load->view('employes/employes_view', $data);
                $this->load->view('templates/footer');
	}
        public function view($slug)
        {
          $employes['$slug'] = $this->employes_model->get_employes($slug);  
        }
        
        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

                $data['title'] = 'Create a employes item';

                $this->form_validation->set_rules('empname', 'Employee Name', 'required');
                $this->form_validation->set_rules('fathername', 'Father Name', 'required');
                 if ($this->form_validation->run() === FALSE)
                 {
                      // echo " in if";
                        $this->load->view('templates/header', $data);
                        $this->load->view('employes/employes_view');
                        $this->load->view('templates/footer');
                 }
                else
                {
     
      //echo " in else";
                        $this->employes_model->set_employes();
                        //$this->load->view('employes/employes_view');
                        redirect('employes/view_emp', 'location');
                }
        }
        
        public function edit_emp($id)
        {
            //$this->db->get('employes');
            //$query = $this->db->where('id', $id);
            //$data['emp'] = $query->result_array();
            
            $this->db->select("*");
            $this->db->from('employes');
            $this->db->where('id', $id);
            $query = $this->db->get();
            $data['emp'] = $query->result();
        
            
            //print_r($data['emp']);
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Create a employes item';

               
                $this->load->view('templates/header', $data);
                $this->load->view('employes/employes_edit',$data);
                $this->load->view('templates/footer',$data);
                        //redirect('employes/view_emp', 'location');
                  
        }
        

        public function view_emp()
        {
            $data['employes'] = $this->employes_model->get_employes();
            
            $this->load->view('templates/header', $data);
            $this->load->view('employes/list_view',$data);
            $this->load->view('templates/footer',$data);
        }
        public function delete_emp($name)
        {
           $this->db->where('Emp_name', $name);
           $this->db->delete('employes');
           $this->view_emp(); 
        }
        public function save_emp()
        {
            
            $data = array(
                     'Emp_name' => $this->input->post('nm'),
                     //'id' => $this->input->post('id'),
                     'Emp_father_name' => $this->input->post('fm'),
                     'Emp_scale' => $this->input->post('scale'),
                    'Emp_post' => $this->input->post('post'),
                    
                        //'slug' => $slug,
                        'Emp_address' => $this->input->post('add')
                );
                $this->db->where('id',$this->input->post('id'));
                $this->db->update('employes',$data);
          
                        redirect('employes/view_emp', 'location');
        }  
        
}

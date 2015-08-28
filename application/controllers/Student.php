<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Nadir Malik
 */
class Student extends CI_Controller 
{
  public function __construct()
{
   parent::__construct();
        $this->load->database();
        $this->load->model('student_model');
        $this->load->library('form_validation');
        $this->load->helper('url');

 }
   public function index()
   {
        $data['student'] = $this->student_model->get_student();
        $this->load->view('templates/header', $data);
            $this->load->view('student/list_student',$data);
            $this->load->view('templates/footer',$data);
            /*
            $data['employes'] = $this->employes_model->get_employes();
                $data['title'] = 'employes archive';

                $this->load->view('templates/header', $data);
                $this->load->view('employes/employes_view', $data);
                $this->load->view('templates/footer');
             * 
             */
	
   } 
    public function view($slug)
        {
          $student['$slug'] = $this->student_model->get_student($slug);  
        }
   public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

                $data['title'] = 'Create a student item';

                
              $this->form_validation->set_rules('stdname', 'name', 'required');
                 $this->form_validation->set_rules('stdfather', 'Father_name', 'required');
                  $this->form_validation->set_rules('stdcnic', 'cnic', 'required');
                  $this->form_validation->set_rules('stdclass', 'class', 'required');
                    $this->form_validation->set_rules('stdsession', 'session', 'required');
             $this->form_validation->set_rules('stdaddress', 'address', 'required');
                 if ($this->form_validation->run() === false)
                 {
                    // echo " in if";
                        $this->load->view('templates/header', $data);
                       $this->load->view('student/create_student');
                        $this->load->view('templates/footer');
                 }
                else
                {
     
     //echo " in else";
                        $this->student_model->set_student();
                        //$this->load->view('student/create_student');
                       redirect ('student/view_std', 'location');
                }
         
        }
          public function edit_std($id)
        {
            //$this->db->get('employes');
            //$query = $this->db->where('id', $id);
            //$data['emp'] = $query->result_array();
            
            $this->db->select("*");
            $this->db->from('student');
            $this->db->where('id', $id);
            $query = $this->db->get();
            $data['std'] = $query->result();
        
            
            //print_r($data['emp']);
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Create a student item';

               
                $this->load->view('templates/header', $data);
                $this->load->view('student/edit_student',$data);
                $this->load->view('templates/footer',$data);
                        //redirect('employes/view_emp', 'location');
                  
        }
        public function view_std()
        {
            $data['student'] = $this->student_model->get_student();
            
            $this->load->view('templates/header', $data);
            $this->load->view('student/list_student',$data);
            $this->load->view('templates/footer',$data);
       }
 public function delete_std($id)
        {
           $this->db->where('id', $id);
           $this->db->delete('student');
           $this->view_std(); 
        }
         public function save_std()
        {
            
            $data = array(
                   // 'id' => $this->input->post('empid'),
                'name' => $this->input->post('stdname'),
                'Father_name' => $this->input->post('stdfather'),
                     //'id' => $this->input->post('id'),
                     'cnic' => $this->input->post('stdcnic'),
                     'class' => $this->input->post('stdclass'),
                    'session' => $this->input->post('stdsession'),
                    
                        //'slug' => $slug,
                        'address' => $this->input->post('stdaddress')
                );
               
                $this->db->insert('student',$data);
          
                        redirect('student/view_std', 'location');
        }  
        public function update_std()
        {
            $data = array(
                   // 'id' => $this->input->post('empid'),
                'name' => $this->input->post('stdname'),
                'Father_name' => $this->input->post('stdfather'),
                     //'id' => $this->input->post('id'),
                     'cnic' => $this->input->post('stdcnic'),
                     'class' => $this->input->post('stdclass'),
                    'session' => $this->input->post('stdsession'),
                    
                        //'slug' => $slug,
                        'address' => $this->input->post('stdaddress')
                );
             $this->db->where('id',$this->input->post('id'));
             $this->db->update('student', $data);
            redirect('student/view_std', 'location');
        }
}




        


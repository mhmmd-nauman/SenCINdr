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
        $this->load->model('student_model');
        $this->load->library('form_validation');
    }
    public function index()
	{
                
		$data['student'] = $this->student_model->get_student();
                $data['title'] = 'Student archive';

                $this->load->view('templates/header', $data);
                $this->load->view('student/student_view', $data);
                $this->load->view('templates/footer');
	}
public function view($slug)
	{
		$data['student'] = $this->student_model->get_student($slug);
	}
        
        public function create()
        {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Create a student item';

                $this->form_validation->set_rules('nm', 'nm', 'required');
                //$this->form_validation->set_rules('id', 'id', 'required');

                 //$this->form_validation->set_rules('class', 'class', 'required');
                //$this->form_validation->set_rules('session', 'session', 'required');
                //$this->form_validation->set_rules('address', 'address', 'required');
                
                
                
                if ($this->form_validation->run() === FALSE)
                {
                     echo " in if";
                        $this->load->view('templates/header', $data);
                        $this->load->view('student/student_view');
                        $this->load->view('templates/footer');

                }
                else
                {
                    echo " in else";
                        $this->student_model->set_student();
                        $this->load->view('student/student_view');
                }
        }
        public function view_student()
        {
            $data['employes'] = $this->student_model->get_student();
            
            $this->load->view('templates/header', $data);
            $this->load->view('student/list_view',$data);
            $this->load->view('templates/footer',$data);
        }
        public function delete_emp($name)
        {
           $this->db->where('std_name', $name);
           $this->db->delete('student');
           $this->view_emp(); 
        }
   
    
}

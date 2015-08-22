<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of student_model
 *
 * @author Nadir Malik
 */
class student_model extends CI_model
{
    public function __construct()
	{
		$this->load->database();
	}
        
        
             public function get_student($slug = FALSE)
        {
                if ($slug === FALSE)
                {
                        $query = $this->db->get('student');
                        return $query->result_array();
                
                }
                        
                
                
             $query = $this->db->get_where('student', 'id','class','session','address',array('slug' => $slug));
                return $query->row_array();
        }
        public function set_student()
        {
                $this->load->helper('url');
                echo "come here";
                $data = array(
                     'name' => $this->input->post('nm'),
                     //'id' => $this->input->post('id'),
                     'class' => $this->input->post('clss'),
                     'session' => $this->input->post('ssa'),
                   
                        //'slug' => $slug,
                        'address' => $this->input->post('ara')
                );

                return $this->db->insert('student', $data);
        }
}



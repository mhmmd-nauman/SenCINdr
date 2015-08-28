

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
class student_model extends CI_Model
{
    public function  __construct()
    {
        $this->load->database();
    }
      public function get_student()
        {
                
            $query = $this->db->get('student');
            return $query->result_array();
                
                
        } 
         public function set_student()
        {
                $this->load->helper('url');
                //echo "come here";
                $data = array(
                     //'id' => $this->input->post('empid'),
                     'name' => $this->input->post('stdname'),
                     'Father_name' => $this->input->post('stdfather'),
                     //'id' => $this->input->post('id'),
                     'cnic' => $this->input->post('stdcnic'),
                     'class' => $this->input->post('stdclass'),
                    'session' => $this->input->post('stdsession'),
                    
                        //'slug' => $slug,
                        'address' => $this->input->post('stdaddress')
                );

                 $this->db->insert('student', $data);
              
        }
}



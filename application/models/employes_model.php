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
class employes_model extends CI_Model
{
    public function  __construct()
    {
        $this->load->database();
    }
      public function get_employes()
        {
                
            $query = $this->db->get('employes');
            return $query->result_array();
                
                
        } 
         public function set_employes()
        {
                $this->load->helper('url');
                echo "come here";
                $data = array(
                     'id' => $this->input->post('empid'),
                     'Emp_cnic' => $this->input->post('empcnc'),
                     'Emp_name' => $this->input->post('empname'),
                     //'id' => $this->input->post('id'),
                     'Emp_father_name' => $this->input->post('empfather'),
                     'Emp_scale' => $this->input->post('empscale'),
                    'Emp_post' => $this->input->post('emppost'),
                    
                        //'slug' => $slug,
                        'Emp_address' => $this->input->post('empadd')
                );

                return $this->db->insert('employes', $data);
        }
}



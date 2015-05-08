<?php
/**
 * Description of user
 *
 * @author Talha
 */
class drills_model extends CI_Model {
    
    function drills_model()  
    {  
        // Call the Model constructor  
        parent::__construct(); 
    }
    
    public function getDrills()
    {
        $query = $this->db->get('drill');
        
        if ($query->num_rows > 0)
        {
            return $query->result_array();
        }
        else
            return -1;
    }
    

}
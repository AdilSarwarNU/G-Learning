<?php
/**
 * Description of user
 *
 * @author Haider
 */
class levels_model extends CI_Model {
    
    function levels_model()  
    {  
        // Call the Model constructor  
        parent::__construct(); 
    }
    
    public function checkLevel($person_id)
    {
        $this->db->where('person_id', $person_id);
        $query = $this->db->get('person');
        
        if ($query->num_rows == 1)
        {
            $row = $query->row();
            return $row->level_in_game;
        }
        else
            return -1;
    }
    
    public function updateLevel($person_id, $newLevel)
    {
        $studentData = array(
            'level_in_game' => $newLevel
        );

        $this->db->where('person_id', $person_id);
        $query = $this->db->update('person',$studentData);
        if($query)
            return true;
        else
            return false;
    }
}
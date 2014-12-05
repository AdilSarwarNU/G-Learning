<?php
/**
 *
 * @author XAIN MALIK
 */
class admin_model extends CI_Model {
    
    function validateEmail($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('person');
        
        if ($query->num_rows == 1)
        {
            return false;
        }
        return true;
    }
    
    function validateUsername($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('login');
        
        if ($query->num_rows == 1)
        {
            return false;
        }
        return true;
    }
    
    public function addStudent($school, $firstName, $lastName, $HomeAddress, $email, $username, $password, $Parentpassword)
    {           
        $studentData = array(
                'first_name' => $firstName,
                'last_name' => $lastName,
                'address' => $HomeAddress,
                'email' => $email
            );
            
            
            // Email Address already exists
            if(!$this->validateEmail($email)){
                return "Email Address Already Exists";
            }
            
            // Username already exists
            if(!$this->validateUsername($username)){
                return "Username Already Exists";
            }
            
            
            $query = $this->db->insert('person',$studentData);
            if($query)
            {
                // Getting School ID of Student
                $this->db->where('school_name',$school);
                $schoolQuery = $this->db->get('school');
                if($schoolQuery != null)
                {
                    $schoolRow = $schoolQuery->row();
                    $schoolID = $schoolRow->school_id;

                    // Getting Person ID of Student
                    $this->db->where('email',$email);
                    $personQuery = $this->db->get('person');
                    if($personQuery)
                    {
                        $personRow = $personQuery->row();
                        $personID = $personRow->person_id;
                        
                        // Login Related Details
                        $loginData = array(
                            'person_id' => $personID,
                            'username' => $username,
                            'password' => MD5($password),
                            'type' =>  "student",
                            'parent_password' => MD5($Parentpassword),
                            'school_id' => $schoolID
                        );
                        
                        // Adding Student details in Login Table
                        $loginAddQuery = $this->db->insert('login',$loginData);
                        if($loginAddQuery)
                            return "true";
                        // Student record not entered
                        else {
                            return "Student Record Not Entered";
                        }
                    }
                    // Student Not found
                    else
                    {
                        return "Student Record Not Found";
                    }
                }
                // School Not found
                else {
                    return $school." School Not Found";
                }
            }
            // Student record not entered
            else {
                return "Student Record Not Entered";
            }
    }
    
    
    public function editStudent()
    {}
    
    public function deleteStudent()
    {}
    
    public function searchStudent($username)
    {
        //$this->db->select('title, content, date');
        $this->db->where('username', $username);
        $this->db->where('type', "student");
        $query = $this->db->get('login');
        if($query->num_rows == 1){
            $row = $query->row();
            $result = array();
            $result['firstName'] = $row->username; 
            return "Found";
        }
        else{
            return "Not Found";
        }
    }
    
    public function addTeacher($school, $firstName, $lastName, $HomeAddress, $email, $username, $password)
    {
        $TeacherData = array(
                'first_name' => $firstName,
                'last_name' => $lastName,
                'address' => $HomeAddress,
                'email' => $email
            );
            
            
            // Email Address already exists
            if(!$this->validateEmail($email)){
                return "Email Address Already Exists";
            }
            
            // Username already exists
            if(!$this->validateUsername($username)){
                return "Username Already Exists";
            }
            
            
            $query = $this->db->insert('person',$TeacherData);
            if($query)
            {
                // Getting School ID of Teacher
                $this->db->where('school_name',$school);
                $schoolQuery = $this->db->get('school');
                if($schoolQuery != null)
                {
                    $schoolRow = $schoolQuery->row();
                    $schoolID = $schoolRow->school_id;

                    // Getting Person ID of Teacher
                    $this->db->where('email',$email);
                    $personQuery = $this->db->get('person');
                    if($personQuery)
                    {
                        $personRow = $personQuery->row();
                        $personID = $personRow->person_id;
                        
                        // Login Related Details
                        $loginData = array(
                            'person_id' => $personID,
                            'username' => $username,
                            'password' => MD5($password),
                            'type' =>  "teacher",
                            'school_id' => $schoolID
                        );
                        
                        // Adding Teacher details in Login Table
                        $loginAddQuery = $this->db->insert('login',$loginData);
                        if($loginAddQuery)
                            return "true";
                        // Teacher record not entered
                        else {
                            return "Teacher Record Not Entered";
                        }
                    }
                    // Teacher Not found
                    else
                    {
                        return "Teacher Record Not Found";
                    }
                }
                // School Not found
                else {
                    return $school." School Not Found";
                }
            }
            // Teacher record not entered
            else {
                return "Teacher Record Not Entered";
            }
    }
    
    public function editTeacher()
    {}
    
    public function deleteTeacher()
    {}
}
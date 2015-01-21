<?php  
class DataEntry extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function add_assessment()
    {
        //dummydata
        $total_marks=10;
        $drill_id =1;
        $teacher_id=33;
        $school_id=1;
        //---------
        $assess_name  = $this->security->xss_clean($this->input->post('AddAssessment_name')); //name
        $i  = $this->security->xss_clean($this->input->post('Add_hiddenfield'));
        echo $assess_name;
        $this->load->model('Teacher_Model');
        $result = $this->Teacher_Model->insert_new_assessment($assess_name,$total_marks,$drill_id,$teacher_id,$school_id);
        if ( $result==0) //insertion failed
        {
            echo assessment_failed_to_insert;
            return false;
        }else
        {
            $assess_id = $result;
            $check=1;
            for( ; $i>0 && $check==1 ; $i--)
            {
                $check = $this->add_question($assess_id,$i);
            }
            $data['page_title'] = 'G-Learning | Teacher';
            $data['scroll_to_div'] = 'workstation';
            $this->load->view('main_header_new',$data);
            $this->load->view('teacher_home');
            $this->load->view('footer');
        }
        
    }
    //helping funtion for AddAssessment
    public function add_question($assess_id,$i)
    {
        $question_staement  = $this->security->xss_clean($this->input->post('question_'.$i.''));
        $question_answer  = $this->security->xss_clean($this->input->post('CorrectOption1_'.$i.''));
        $question_option1  = $this->security->xss_clean($this->input->post('QuestionOption2_'.$i.''));
        $question_option2  = $this->security->xss_clean($this->input->post('QuestionOption3_'.$i.''));
        $question_option3  = $this->security->xss_clean($this->input->post('QuestionOption4_'.$i.''));
        
        //dummydata
        $complexity_level=1;
        //---------
        
        $result = $this->Teacher_Model->insert_new_question($assess_id,$question_staement,$question_answer,$question_option1,$question_option2,$question_option3,$complexity_level);
        if ( $result) 
        {
            return true;
        }else   //insertion failed
        {
            echo question_failed_to_insert;
            return false;
        } 
    }
    
    public function edit_assessment()
    {
        
    }
    public function delete_assessment()
    {
        $assess_name  = $this->security->xss_clean($this->input->post('DeleteAssessment_name'));
        $this->load->model('Teacher_Model');
        $result = $this->Teacher_Model->delete_assessment($assess_name);
        if ( $result==0) //insertion failed
        {
            echo assessment_failed_to_delete;
            return false;
        }else
        {
            $data['page_title'] = 'G-Learning | Teacher';
            $data['scroll_to_div'] = 'workstation';
            $this->load->view('main_header_new',$data);
            $this->load->view('teacher_home');
            $this->load->view('footer');
        }
    }
    
    function checkLevel()
    {
        $this->load->model('levels_model');
        $person_id = $this->session->userdata['person_id'];
        $result = $this->levels_model->checkLevel($person_id);
        echo $result;
    }
    
    function updateLevel()
    {
        $this->load->model('levels_model');
        $person_id = $this->session->userdata['person_id'];
        $newLevel = $this->input->post('Level');
        $result = $this->levels_model->updateLevel($person_id, $newLevel);
        if($result == true)
            echo "success";
        else
            echo "failed";
    }
    
}

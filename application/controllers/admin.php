<?php
class admin extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('asset');
        $this->load->model('admin_model');
    }
    
    public function student()
    {
        $this->session->unset_userdata('errorFlag');
        $this->session->unset_userdata('errorMessage');
        
        $data['page_title'] = 'G-Learning | Admin';
        $this->load->view('main_header_new',$data);
        $this->load->view('admin_home_view');
        $this->load->view('footer');
    }
    
    public function teacher()
    {
        $this->session->unset_userdata('errorFlag');
        $this->session->unset_userdata('errorMessage');
        
        $data['page_title'] = 'G-Learning | Admin';
        $this->load->view('main_header_new',$data);
        $this->load->view('admin_addteacher_view');
        $this->load->view('footer');
    }
    
    public function passwordRequests()
    {
        $data['page_title'] = 'G-Learning | Admin';
        $this->load->view('main_header_new',$data);
        $this->load->view('password_requests_view');
        $this->load->view('footer');
    }
    
    public function addStudent()
    {
        // Input Form Fields
        $school = $this->security->xss_clean($this->input->post('school'));
        $firstName = $this->security->xss_clean($this->input->post('firstName'));
        $lastName = $this->security->xss_clean($this->input->post('lastName'));
        $HomeAddress = $this->security->xss_clean($this->input->post('HomeAddress'));
        $email = $this->security->xss_clean($this->input->post('email'));
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $Parentpassword = $this->security->xss_clean($this->input->post('Parentpassword'));
        
        // Model Function Call
        $result = $this->admin_model->addStudent($school, $firstName, $lastName, $HomeAddress, $email, $username, $password, $Parentpassword);
        
        if($result == "true"){
            $this->session->set_userdata('errorFlag',true);
            $this->session->set_userdata('errorMessage',"Student Added Successfully");
            
            $data['page_title'] = 'G-Learning | Admin';
            $this->load->view('main_header_new',$data);
            $this->load->view('admin_home_view');
            $this->load->view('footer');
        }
        else {
            $this->session->set_userdata('errorFlag',false);
            $this->session->set_userdata('errorMessage',$result);
            
            $data['page_title'] = 'G-Learning | Admin';
            $this->load->view('main_header_new',$data);
            $this->load->view('admin_home_view');
            $this->load->view('footer');
        }
    }
    
    public function editStudent()
    {}
    
    public function deleteStudent()
    {}
    
    public function searchStudent()
    {
        if(isset($_POST['query']))
        {
            $username = $_POST['query'];
            // Model Function Call
            $result = $this->admin_model->searchStudent($username);
            if($result == "Found"){
                $this->session->set_userdata('errorFlag',true);
                $this->session->set_userdata('errorMessage',"Found");
                echo "success";
            }
            else {
                $this->session->set_userdata('errorFlag',false);
                $this->session->set_userdata('errorMessage',"Username Not Found");
                echo "failure";
            }
        }
    }
    
    public function addTeacher()
    {
        // Input Form Fields
        $school = $this->security->xss_clean($this->input->post('school'));
        $firstName = $this->security->xss_clean($this->input->post('firstName'));
        $lastName = $this->security->xss_clean($this->input->post('lastName'));
        $HomeAddress = $this->security->xss_clean($this->input->post('HomeAddress'));
        $email = $this->security->xss_clean($this->input->post('email'));
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        // Model Function Call
        $result = $this->admin_model->addTeacher($school, $firstName, $lastName, $HomeAddress, $email, $username, $password);
        
        if($result == "true"){
            $this->session->set_userdata('errorFlag',true);
            $this->session->set_userdata('errorMessage',"Teacher Added Successfully");
            
            $data['page_title'] = 'G-Learning | Admin';
            $this->load->view('main_header_new',$data);
            $this->load->view('admin_addteacher_view');
            $this->load->view('footer');
        }
        else {
            $this->session->set_userdata('errorFlag',false);
            $this->session->set_userdata('errorMessage',$result);
            
            $data['page_title'] = 'G-Learning | Admin';
            $this->load->view('main_header_new',$data);
            $this->load->view('admin_addteacher_view');
            $this->load->view('footer');
        }
    }
    
    public function editTeacher()
    {}
    
    public function deleteTeacher()
    {}
}
?>
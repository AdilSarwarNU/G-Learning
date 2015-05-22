<?php
class teacher extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('asset');
        if(strcmp($this->session->userdata('type'),'student')==0)
        {
           redirect('home/student_dashboard');
        }
        if(strcmp($this->session->userdata('type'),'parent')==0)
        {
           redirect('parents');
        }
        if(strcmp($this->session->userdata('type'),'admin')==0)
        {
            redirect('admin');
        }
        if(strcmp($this->session->userdata('type'),'teacher')==0)
        {
          
        }
        else
        {
            redirect('login');
        }
    }
    
    
    public function index()
    {
            $data['scroll_to_div'] = 'view_student';
            $data['page_title'] = 'G-Learning | Teacher';
          //  $this->load->view('main_header_new',$data);
            $this->load->view('header_only_image',$data);
            $this->load->view('teacher_home');
            $this->load->view('footer_new_design');
          //  $this->load->view('footer');
        
    }
//    function index()
//    {
//        $data['page_title'] = 'G-Learning | Teacher';
//        $data['scroll_to_div'] = 'start';
//        $this->load->view('main_header_new',$data);
//        $this->load->view('teacher_home');
//        $this->load->view('footer');
//    }
}
?>

<?php
class Parents extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('asset');
        if(strcmp($this->session->userdata('type'),'student')==0)
        {
           redirect('home/student_dashboard');
        }
        if(strcmp($this->session->userdata('type'),'teacher')==0)
        {
           redirect('teacher');
        }
        if(strcmp($this->session->userdata('type'),'admin')==0)
        {
            redirect('admin');
        }
        if(strcmp($this->session->userdata('type'),'parent')==0)
        {
           
        }
        else
        {
            redirect('login');
        }
    }
    
    public function index()
    {
        $data['page_title'] = 'G-Learning | Parents';
        $this->load->view('main_header_new',$data);
        $this->load->view('parents_view');
        $this->load->view('footer');
    }
}
?>
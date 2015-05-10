<?php  
class drills extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('asset');
        $this->load->helper(array('form'));
        if(strcmp($this->session->userdata('type'),'parent')==0)
        {
           redirect('parents');
        }
        if(strcmp($this->session->userdata('type'),'teacher')==0)
        {
           redirect('teacher');
        }
        if(strcmp($this->session->userdata('type'),'admin')==0)
        {
            redirect('admin');
        }
        if(strcmp($this->session->userdata('type'),'student')==0)
        {
          
        }
        else
        {
            redirect('login');
        }
    }
    
    public function index()
    {
        $data['page_title'] = 'G-Learning | Drills';
        $data['msg'] = '';
        $this->load->model('drills_model');
        $data['drills'] = $this->drills_model->getDrills();
        $data['drillsCount'] = $this->drills_model->getDrillsCount();
 
        $this->load->view('header_only_image',$data);
        $this->load->view('drills_view');
        $this->load->view('footer_new_design');
    }
    
    
}
?>
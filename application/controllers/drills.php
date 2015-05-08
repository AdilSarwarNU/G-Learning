<?php  
class drills extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('asset');
        $this->load->helper(array('form'));
        if(!$this->session->userdata('validated'))
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
    //    $this->load->view('main_header_new',$data);
        $this->load->view('header_only_image',$data);
        $this->load->view('drills_view');
     //   $this->load->view('footer');
        $this->load->view('footer_new_design');
    }
    
    
}
?>
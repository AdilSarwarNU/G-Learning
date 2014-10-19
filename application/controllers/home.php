<?php  
class home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('asset');
		$this->load->helper(array('form'));
    }
    
    public function index()
    {
          $this->load->view('login_view');
    }
    
	public function student_dashboard()
	{
		$data['page_title'] = 'G-Learning';
        $this->load->view('main_header',$data);
        $this->load->view('student_dashboard');
        $this->load->view('footer');
	}
	
    public function drills()
    {
        $data['page_title'] = 'G-Learning | Drills';
        $this->load->view('main_header',$data);
        $this->load->view('drills_page');
        $this->load->view('footer');
    }
}
?>
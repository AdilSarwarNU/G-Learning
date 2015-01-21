<?php
class teacher extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('asset');
    }
    
    function home()
    {
        $data['page_title'] = 'G-Learning | Teacher';
        $data['scroll_to_div'] = 'start';
        $this->load->view('main_header_new',$data);
        $this->load->view('teacher_home',$data);
        $this->load->view('footer');
    }
}
?>

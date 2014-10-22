<?php
class admin extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('asset');
    }
    
    function index()
    {
        $data['page_title'] = 'G-Learning | Admin';
        $this->load->view('main_header',$data);
        $this->load->view('admin_home_view');
        $this->load->view('footer');
    }
}
?>
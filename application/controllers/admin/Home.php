<?php
class Home extends CI_Controller
{
    function index()
    {
        $session = $this->session->userdata('logged_in');

        if ($session) {
            $data['head'] = 'modules/template_header';
            $data['content'] = 'admin/home';
            $data['footer'] = 'modules/template_footer';
            $data['page'] = "Dashboard";
            $this->load->view('modules/master_template', $data);
        } else {
            redirect(base_url().'Authenticates');
        }
    }
}

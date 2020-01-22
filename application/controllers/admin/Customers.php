<?php
class Customers extends CI_Controller
{

    function index()
    {
        $session = $this->session->userdata('logged_in');

        if ($session) {
            $data['head'] = 'modules/template_header';
            $data['content'] = 'admin/customer';
            $data['footer'] = 'modules/template_footer';
            $data['page'] = 'Customer Search';
            $data['icon'] =  '<i class="fas fa-users mr-1"></i>';
            $this->load->view('modules/master_template', $data);
        } else {
            redirect(base_url()."Authenticates");
        }
    }
}

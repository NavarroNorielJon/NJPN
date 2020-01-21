<?php
class Authenticates extends CI_Controller 
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Authenticate');
    }
    
    function index() 
    {
        $session = $this->session->userdata('logged_in');
        if($session)
        {
            redirect(base_url().'Authenticates/home');
        }
        else
        {
            $data['head'] = 'modules/template_header';
            $data['title'] = 'Tutorial | Login';
            $data['content'] = 'admin/login';
            $data['footer'] = 'modules/template_footer';
            $this->load->view('modules/master_template', $data);
        }
    }

    function home()
    {
        $data['head'] = 'modules/template_header';
        $data['content'] = 'admin/home';
        $data['footer'] = 'modules/template_footer';
        $data['page'] = "Dashboard";
        $this->load->view('modules/master_template', $data);
    }

    function login()
    {
        $session = $this->session->userdata('logged_in');
        if($session)
        {
            redirect(base_url().'Authenticates/home');
        }
        else 
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $verify_user = $this->Authenticate->get_user($email);
                
            if($verify_user)
            {
                $email = $verify_user['email'];
                $first_name = $verify_user['first_name'];
                $last_name = $verify_user['last_name'];
                $middle_name = $verify_user['middle_name'];
                $hashed_password = $verify_user['password'];
                $user = 1;
                $user_id = $verify_user['user_id'];
                $user_image = $verify_user['user_image'];
                $user_type = $verify_user['user_type'];
                $verify_credentials = $this->Authenticate->verify_credentials($password, $hashed_password, $user_type);
                
                $array = array(
                    'email' => $email,
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'middle_name' => $middle_name,
                    'password' => $verify_credentials['password'],
                    'user' => $user,
                    'user_id' => $user_id,
                    'user_image' => $user_image,
                    'user_type' => $verify_credentials['user_type']
                );
    
                if($verify_credentials['password'] === 1 && $verify_credentials['user_type'] === 1)
                {
                    $this->session->set_userdata('logged_in', $array);
                }
            }
            else
            {
                $user = 0;
                $array = array(
                    'user' => $user
                );
            }
    
            echo json_encode($array);        
        }
    }

    function logout()
    {
        $session = $this->session->userdata('logged_in');
        if($session)
        {
            $this->session->unset_userdata('logged_in');
            $this->session->sess_destroy();     
            redirect(base_url());
        }
        redirect(base_url(). 'Authenticates');
    }
}

<?php
$session = $this->session->userdata('logged_in');
//Header
$this->load->view($head);
//Navigation Bar
if($session)
{
    $this->load->view('modules/navbar', $session);
    $this->load->view('modules/sidebar',$session);
}

//Content
$this->load->view($content);
//Footer
$this->load->view($footer);
?>
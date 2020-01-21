<?php
class Authenticate extends CI_Model {
    function get_user($email)
    {
        $this->db->select();
        $this->db->from('user');
        $this->db->join('user_information', 'user.user_id = user_information.user_id', 'left');
        $this->db->where(array('email' => $email));
        $query = $this->db->get();
        $result = $query->first_row('array');
        return $result;
    }

    function verify_credentials($password, $hashed_password, $user_type)
    {
        $verify_password = password_verify($password, $hashed_password);

            if($verify_password)
            {
                $verified_password = 1;
            }
            else
            {
                $verified_password = 0;
            }

            if($user_type === "admin")
            {
                $verified_user = 1;
            }
            else
            {
                $verified_user = 0;
            }

        $data['password'] = $verified_password;
        $data['user_type'] = $verified_user;
        
        return $data;
    }
}
?>
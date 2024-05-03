<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Master_user_model extends CI_Model
{
    private $_table = "users";

    public $user_id;
    public $username;
    public $password;
    public $full_name;
    public $role;

    public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'full_name',
            'label' => 'Full Name',
            'rules' => 'required'],

            ['field' => 'plant_id',
            'label' => 'Plant',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getAllexcept()
    {
        return $this->db->get_where($this->_table, ["role" => "user"])->result();
    }

    public function getById($user_id)
    {
        return $this->db->get_where($this->_table, ["user_id" => $user_id])->row();
    }

    // public function getByParameter($parameter)
    // {
    //     return $this->db->get_where($this->_table, ["parameter" => $parameter])->row();
    // }

    public function save()
    {
        $post = $this->input->post();
        $data = array(
            'username'      => $post["username"],
            'password'      => password_hash($post["password"], PASSWORD_DEFAULT),
            'full_name'     => $post["full_name"],
            'plant_id'      => $post["plant_id"],
            'plant_name'    => $post["plant_name"],
            'created_at'    => date("Y-m-d H:i:s"),
            'is_active'     => 1
        );
    
        $this->db->insert('users', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->user_id = $post["user_id"];
        $this->username = $post["username"];
        // $isPasswordTrue = password_verify($post["password"], $post["ori_password"]);
        if($post["password"] != $post["ori_password"]){
            $this->password = password_hash($post["password"], PASSWORD_DEFAULT);
        }else{
            $this->password = $post["ori_password"];
        }
        $this->full_name = $post["full_name"];
        $this->plant_id = $post["plant_id"];
        $this->plant_name = $post["plant_name"];
        $this->role = 'user';
        
        return $this->db->update($this->_table, $this, array('user_id' => $post['user_id']));
    }

    public function delete($user_id)
    {
        return $this->db->delete($this->_table, array("user_id" => $user_id));
    }


}
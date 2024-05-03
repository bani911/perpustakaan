<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Master_members_model extends CI_Model
{
    private $_table = "members";

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'phone',
            'label' => 'Phone',
            'rules' => 'required'],

            ['field' => 'address',
            'label' => 'Address',
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

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    // CRUD
    public function save()
    {
        $post = $this->input->post();
        $data = array(
            'name'             => $post["name"],
            'email'            => $post["email"],
            'phone'            => $post["phone"],
            'address'          => $post["address"]
        );
    
        $this->db->insert('members', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->phone = $post["phone"];
        $this->address = $post["address"];

        // print_r("xxxx".$post["available"]);
        // die;
        
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }


}
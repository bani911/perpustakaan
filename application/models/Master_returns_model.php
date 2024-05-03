<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Master_returns_model extends CI_Model
{
    private $_table = "returns";

    public function rules()
    {
        return [
            ['field' => 'loan_id',
            'label' => 'loan_id',
            'rules' => 'required'],

            ['field' => 'return_date',
            'label' => 'return_date',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
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
            'loan_id'          => $post["loan_id"],
            'return_date'      => $post["return_date"]
        );
    
        $this->db->insert('returns', $data);
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